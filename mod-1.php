<?php

class Attendance_model extends CI_Model
{

	public function __construct()
	{

		parent::__construct();
		$this->logCat=$this->session->userdata('user_cate');
	    $this->logBr=$this->session->userdata('mi_brID');
	}

	/*-----------------------------Daily Attendance Start-------------------------------*/

	public function daily_attendance_query($where = false,$cShift=NULL)
	{

		$field = array('s.id', 's.employee_id', 's.name', 's.status', 's.attendance_status', 's.log_in_time', 's.log_out_time', 'sm.shift_name', 'sm.shift_start', 'sm.shift_end');
		$i = 0;
		foreach ($field as $item) {

			if (!empty($where['search']['value'])) {
				if ($i === 0) {
					$this->db->group_start();
					$this->db->like($item, $where['search']['value']);
				} else {
					$this->db->or_like($item, $where['search']['value']);
				}
				if (count($field) - 1 == $i) {
					$this->db->group_end();
				}
			}
			$i++;
		}

		$this->db->join('shift_manage as sm', 'sm.id = s.shift', 'left');
		$this->db->select('s.id,s.biometric_id,s.employee_id, s.name, s.status, s.attendance_status, s.log_in_time, s.log_out_time,s.shift, sm.shift_name,sm.shift_start, sm.shift_end')->from('staff as s');
		if(($this->logCat!='5')&&($this->logCat!='4')){$this->db->where_in('s.user_type',array('4','5'));}else{$this->db->where('s.branch_id',$this->logBr)->where('s.user_type','4');}

 if((!empty($where['shiftDet'])) && ($where['shiftDet']!="all")){$this->db->where('shift',$where['shiftDet']);}else {if($cShift){$this->db->where('shift',$cShift);}}


		if(!empty($where['employID'])){
                $this->db->where('employee_id',substr($where['employID'],3,6));
            }
            if(!empty($where['employName'])){
                $this->db->where('name',$where['employName']);
            }
        /*    if(!(empty($where['strtDt']) && empty($where['endDt'])))
            {
                $this->db->where('created_at >=',$where['strtDt']);
                $this->db->where('created_at <=',$where['endDt']);
            }*/

		if (isset($where['order']) && !empty($where['order'])) {
			$this->db->order_by($field[$where['order']['0']['column']], $where['order']['0']['dir']);
		} else {

			$this->db->order_by('id', 'desc');
		}
	}

	public function daily_attendance_list($where = false,$cShift=NULL)
	{

		$this->daily_attendance_query($where,$cShift);

		if ($where['length'] != -1) {
			$this->db->limit($where['length'], $where['start']);
		}
		return $this->db->get()->result();
	}

	public function daily_attendance_count($cShift=NULL)
	{

		$this->daily_attendance_query($where=false,$cShift);
		return $this->db->get()->num_rows();
	}

	public function daily_attendance_filter_count($where=false,$cShift=NULL)
	{

		$this->daily_attendance_query($where,$cShift=NULL);
		return $this->db->get()->num_rows();
	}

}