<?php 
 public function addSupplier()
    {
        $this->form_validation->set_rules('name',    'Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('fname',   'Father Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('mobile',  'Mobile Number', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email',   'Email-Id', 'trim|required|xss_clean');
        $this->form_validation->set_rules('state',   'State', 'trim|required|xss_clean');
        $this->form_validation->set_rules('district','District', 'trim|required|xss_clean');
        $this->form_validation->set_rules('address','Address', 'trim|required|xss_clean');
        if ($this->form_validation->run() == TRUE) {
        $inp = $this->input->post();
        $lastId = $this->db->select('id, sup_id')->from('supplier')->order_by('id', 'DESC')->limit(1)->get()->row();
        if (!empty($lastId)) {
        $getNspId = 'SUP' . str_pad((int)substr($lastId->sup_id, 3) + 1, 4, '0');
        } else {
        $getNspId = 'SUP1001';
        }
        $supplier_detials = array(
            'sup_id'    => $getNspId,
            'name'      => $inp['name'],
            'fname'     => $inp['fname'],
            'mobile'    => $inp['mobile'],
            'email'     => $inp['email'],
            'state'     => $inp['state'],
            'district'  => $inp['district'],
            'address'  => $inp['address'],
            'created_at'=> date('Y-m-d'),
            'status'    => '1',
        );
        $saved = $this->common->save_data('supplier', $supplier_detials);
        $data = array(
            'addClas' => 'tst_success', 'msg' => array('Thank you! You have successfully created a New Supplier.'),'actReload'=>base_url('admin/inventory/supplier'),'icon' => '<i class="ti-check-box"></i>'
        ); } else {
    	    $msg = array( 'sup_id'=>form_error('sup_id'),'name'=>form_error('name'),'fname'=>form_error('fname'),
                'mobile'=>form_error('mobile'),'email'=>form_error('email'),'state'=>form_error('state'),'district'=>form_error('district'),
            );
    	    $data = array( 'addClas' => 'tst_danger', 'msg' => $msg, 'icon' => '<i class="pe-7s-sun bx-spin"></i>' );
    	} echo json_encode($data);
    }


    public function supplierList($act = NULL)
    {
        if($act === 'viewSupplier'){
            $id = $this->input->post('id');
            $data = $this->db->select('sup_id,name,email,mobile')->from('supplier')->where('id', $id)->get()->row();
            echo json_encode($data);
        }else{
        $post_data = $this->input->post();
            $return['data'] = array();
            $i = $post_data['start'] + 1;           
            $record = $this->inventory->suppListModel($post_data);
            foreach ($record as $row) {   
				$viewUid = base_url('admin/inventory/viewCategory/' . urlencode(base64_encode(json_encode(array('action' => 'viewDetails', 'id' => $row->id)))));
				$editUid = base_url('admin/inventory/editSupplier/' . urlencode(base64_encode(json_encode(array('action' => 'editDetails', 'id' => $row->id)))));
                if($row->status=='1'){$status='<a class="badge bg-success  miLvs" href="javascript:void(0)">Working</a>';}
				else{$status='<a class="badge bg-primary  miLvs" href="javascript:void(0)">Pending</a>';}
				$action = '<div class="px-2">
				<a href="javascript:void(0);" onclick="viewSupplier(' . $row->id . ')" title="Click to View Salary Details" data-bs-target="#supplierModel" data-bs-toggle="modal" class="px-2 btn ripple miView btn-sm"> <i class="ti-eye"></i></a>&emsp;
                <a href="' . $editUid . '" style="margin-left:-13px;" title="Click to Update Salary Details" class="px-2 btn ripple btn-secondary btn-sm arvAction"  id="upD0'.$row->id.'"><i class="ti-pencil-alt"></i></a>&emsp;
				</div>';
              $return['data'][] = array('<div class="px-2"><strong>' . $i . '.</strong></div>',
              $row->sup_id,
              $row->name,
              $row->mobile,
              $row->email,
              $status,
              $action,
              $return,
              );
              $i++;
             }
            $return['recordsTotal'] = $this->inventory->suppListModel_count($whereCn);
            $return['recordsFiltered'] = $this->inventory->suppListModel_filter_count($post_data, $whereCn);
            $return['draw'] = $post_data['draw'];
            echo json_encode($return);
        }

    }



    public function editSupplier($where = NULL)
    {
        $where=json_decode(base64_decode(urldecode($where)));
        $data['supData'] = $this->db->select('id,fname,sup_id, name, email, mobile, address, state, district')->from('supplier')->where('id', $where->id)->get()->row();
        $data['getState'] = $this->common->getDataList('states_cities', 'parent_id', $data['supData']->state);
        $data['targetItem']= base_url('admin/inventory/upSuppDetails');
        $data['title']='Update Supplier Details';
        $data['breadcrums'] = 'Update Supplier Details';
        $data['layout']= "admin/inventory/editSupplier.php";
        $this->load->view('base',$data);
    }



    public function upSuppDetails()
    {
        $this->form_validation->set_rules('name',    'Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('fname',   'Father Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('mobile',  'Mobile Number', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email',   'Email-Id', 'trim|required|xss_clean');
        $this->form_validation->set_rules('state',   'State', 'trim|required|xss_clean');
        $this->form_validation->set_rules('address','Address', 'trim|required|xss_clean');
        if ($this->form_validation->run() == TRUE) {
        $inp = $this->input->post();
        $supplier_detials = array(
            'sup_id'    => $getNspId,
            'name'      => $inp['name'],
            'fname'     => $inp['fname'],
            'mobile'    => $inp['mobile'],
            'email'     => $inp['email'],
            'state'     => $inp['state'],
            'district'  => $inp['district'],
            'address'  => $inp['address'],
            'created_at'=> date('Y-m-d'),
            'status'    => '1',
        );
        $saved = $this->db->where('id',$inp->id)->update('supplier', $supplier_detials);
        $data = array(
            'addClas' => 'tst_success', 'msg' => array('Thank you! You have successfully created a New Supplier.'),'actReload'=>base_url('admin/inventory/supplier'),'icon' => '<i class="ti-check-box"></i>'
        ); } else {
    	    $msg = array( 'sup_id'=>form_error('sup_id'),'name'=>form_error('name'),'fname'=>form_error('fname'),
                'mobile'=>form_error('mobile'),'email'=>form_error('email'),'state'=>form_error('state'),
            );
    	    $data = array( 'addClas' => 'tst_danger', 'msg' => $msg, 'icon' => '<i class="pe-7s-sun bx-spin"></i>' );
    	} echo json_encode($data);
    }

?>