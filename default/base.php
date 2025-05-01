
<!-- 1 => Increament 1 student id section start form here. -->
<!-- 2 => alidation for ip using php section start form h -->
<?php
 $isTeam=$this->common->get_data('mapped_team',array('status'=>'Active','head_id'=>$this->session->userdata('mim_id')),'*');
 $getCurrentLi=$this->router->fetch_class().$this->router->fetch_method();
 $getCurrentPranet=$this->router->fetch_class();
 $getCurModeLi=$getCurrentLi.$this->uri->segment(4);
 $theusrCat=$this->session->userdata('user_cate');
 ?>

<?php 

// Increament 1 student id section start form here.
public function get_employees($where)
{
$this->db->select("s.id, s.employee_id, s.user_type, CASE WHEN CHAR_LENGTH(s.email) > 20 THEN CONCAT(SUBSTRING(s.email, 1, 20), '...') ELSE s.email END AS email, CASE WHEN CHAR_LENGTH(CONCAT(s.surname, IF(s.surname != '', ' ', ''), s.name)) > 10 THEN CONCAT(SUBSTRING(CONCAT(s.surname, IF(s.surname != '', ' ', ''), s.name), 1, 10), '...') ELSE CONCAT(s.surname, IF(s.surname != '', ' ', ''), s.name) END AS emp_name, s.contact_no, CASE WHEN CHAR_LENGTH(s.address) > 20 THEN CONCAT(SUBSTRING(s.address, 1, 20), '...') ELSE s.address END AS address,s.image,d.designation_name")->from('staff as s');
$this->db->limit($where['limit'], $where['offset']);
$query = $this->db->get();
return $query->result();
}
// Increament 1 student id section start form here.


/* validation for ip using php section start form here.  */
$this->form_validation->set_rules('machineIpAddr','Machine IP Address','trim|required|xss_clean|callback_valid_ip');
    public function valid_ip($ip) {
		if (preg_match('/^192\.168\.1\.(25[0-5]|2[0-4][0-9]|1\d\d|[1-9]?\d)$/', $ip)) {
			return true; // Valid IP
		} else {
			$this->form_validation->set_message('valid_ip', 'The field must be in the format 192.168.1.xxx.');
			return false; // Invalid IP
		}
	}
/* validation for ip using php section end form here.  */

?>