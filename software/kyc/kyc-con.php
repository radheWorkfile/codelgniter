<?php 
		public function manage_kyc_ver()
	{
		$post_data = $this->input->post();
		$record = $this->partners_model->manage_kyc_ver_mod($post_data);
		$i = $post_data['start'] + 1;
		$return['data'] = array();
		foreach ($record as $row) {

		$viewUid = base_url('mlm_software/admin/Partners/view_kyc/' . urlencode(base64_encode('view===' . $row->id)));
		$editUid =  base_url('mlm_software/admin/member/edit_kyc/' . urlencode(base64_encode('edit===' . $row->id)));

		$actionBtn = '
		<div style="text-align:center;width:170px;">
		<a href="' . $viewUid . '" class="btn btn-outline-warning btn-sm waves-effect btn-padd rounded-pill py-0 px-3" title="View"><i class="mdi mdi-eye"></i>&nbsp;View</a>
		</div>';

			// onclick="veri_kyc_details(' . $row->id . ')"  data-bs-toggle="modal" data-bs-target="#approve_kyc_mod"

			$view = "";
			// $view  .= '<span class="pendingBrk text-danger" onclick="kyc_pending(' . $row->id . ')" data-bs-toggle="modal" data-bs-target="#pending_kyc_mod">Reject </span>';
			if ($row->kyc_verification == 1) {
			$view .= '<span class=" approveBrk" style="padding:0rem 0.8rem;background-color:#e0e00e;color:#6f5507;border:2px solid #dada26;"> Pending </span>&emsp;';
			}elseif($row->kyc_verification == 2){
			$view .= '<span class=" approveBrk text-danger"style="border: 1px solid red;"> Rejected </span>&emsp;';
			}elseif($row->kyc_verification == 3){
			$view .= '<span class=" approveBrk" style="background-color:#10ab21;color:#fff;border:2px solid #26b811;"> Approved </span>&emsp;';
			}	

			if ($row->kyc_verification == 0) {
				$status = 'Wait..';
			} elseif ($row->kyc_verification == 1) {
				$status = 'Pending';
			} elseif ($row->kyc_verification == 2) {
				$status = 'Rejected';
			} elseif ($row->kyc_verification == 3) {
				$status = 'Approved';
			}
			$return['data'][] = array(
				$i++,
				$row->username,
				$row->name,				
				$row->kyc_remark?substr($row->kyc_remark, 0, 20).'...':'N/A',
				 $view,
				 $actionBtn,
			);
		}
		$return['recordsTotal']    = $this->partners_model->kyc_total_count();
		$return['recordsFiltered'] = $this->partners_model->kyc_total_filter_count($post_data);
		$return['draw']            = $post_data['draw'];
		echo json_encode($return);
	}

		
		
		public function view_kyc($id)
	{
		$getId = explode("===", base64_decode(urldecode($id)));
		$ver_member = $this->partners_model->get_mem_det($getId['1']);	
		$kyc_details = $this->db->select('*')->from('kyc_details')->where('patnar_id',$ver_member['mem_id'])->get()->row();
		$data['ver_member'] = $ver_member;
		$data['kyc_details'] = $kyc_details;
		$data['title'] = "View Kyc";
		$data['breadcrums'] = "View Kyc";
		$data['layout'] = 'mlm_software/admin/partners/view_kyc.php';
		$this->load->view('mlm_software/base', $data);
	}


	public function add_perInfomation()
	{

		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|xss_clean');
			$this->form_validation->set_rules('email', 'Email-Id', 'trim|required|xss_clean');
			$this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required|xss_clean');
			$this->form_validation->set_rules('address', 'Address', 'trim|required|xss_clean');
			if ($this->form_validation->run() == TRUE) {
				$post = $this->input->post();

				$value = array(
					'name'     => $post['name'],
					'mobile'   => $post['mobile'],
					'email'    => $post['email'],
					'gender'   => $post['gender'],
					'address'  => $post['address'],		
				);

				$member_data = $this->db->where('id',$post['mem_id'])->update('partners',$value);

                if( $member_data){
                     $member_besic_info = array(
					'date_of_birth' => $post['dob'],
					// 'state'    => $post['state'],
					// 'district' => $post['district'],
					// 'zipcode'  => $post['zipcode'],
				  );
			     $this->db->where('mem_id',$post['mem_id'])->update('partners_basic_manage',$member_besic_info);

				 $data = $this->session->set_flashdata('flash-success', '<div class="alert alert-success text-center">Your Personal Information Data Successfully Updated.</div>');

				 }else{

				 $data = $this->session->set_flashdata('flash-error', '<div class="alert text-center alert-danger">Oops! It seems the server is taking more time. Please refresh.</div>');

				 }
			    } else {

				$data = $this->session->set_flashdata('flash-error', '<div class="alert text-center alert-danger">Oops! It seems the server is taking more time. Please refresh.</div>');

			   }
			  echo json_encode($data);
		}
	}


		function upload_images($path, $name){
		$config = array('upload_path' => 'uploads/' . $path.'/','allowed_types' => "jpg|png|jpeg|JPEG|JPG",'overwrite' => FALSE,'encrypt_name' => TRUE,'max_size' =>"10120000");
        $this->load->library('upload', $config);
		$this->upload->initialize($config);
        if ($this->upload->do_upload($name))
		{
            $upload_data =  $this->upload->data();
            $image_path = "uploads/" . $path . '/' . $upload_data['file_name'];
            $a = array('photo' => $image_path);
            $this->session->set_userdata($a);
            $val = array('text' => $image_path, 'icon' => 'success');
        } else { 
			$val = array('text' => $this->upload->display_errors(), 'icon' => 'error');}

        return $val;
    }



	public function aadhaar_update()
	{
		
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('aadhaar_nu', 'Aadhaar Number', 'trim|required|xss_clean');
			if ($this->form_validation->run() == TRUE) {

			$post = $this->input->post();

            $f_aadhaar = $this->upload_images('member_document', 'frontAadhaarImg');
		
            $b_aadhaar = $this->upload_images('member_document', 'back_aadhaar_img');

            if ($f_aadhaar['icon'] == 'success') {
                $f_aadhaar_img = $f_aadhaar['text'];
            }

			if ($b_aadhaar['icon'] == 'success') {
                $b_aadhaar_img = $b_aadhaar['text'];
            }

            $value = array(
                'aadhaar_nu'    =>    $post['aadhaar_nu'],
                'front_aadhaar_img'   => $f_aadhaar_img,
                'back_aadhaar_img'    => $b_aadhaar_img,
            );

		    $existing_fAadhaar = $this->db->select('front_aadhaar_img')->from('partners_basic_manage')->where('mem_id', $post['curr_id'])->get()->row();

		    $existing_bAadhaar = $this->db->select('back_aadhaar_img')->from('partners_basic_manage')->where('mem_id', $post['curr_id'])->get()->row();

			if ($existing_fAadhaar){

		        unlink($existing_fAadhaar->front_aadhaar_img);

			}elseif($existing_bAadhaar){

                unlink($existing_bAadhaar->back_aadhaar_img);
				
			}

			$member_data = $this->db->where('mem_id', $post['curr_id'])->update('partners_basic_manage',$value);

			$data = $this->session->set_flashdata('flash-success', '<div class="alert alert-success text-center">Your Aadhaar Information Data Successfully Updated.</div>');

			}else{

			$data = $this->session->set_flashdata('flash-error', '<div class="alert text-center alert-danger">Oops! It seems the server is taking more time. Please refresh.</div>');

			}
			  echo json_encode($data);
		}
	}


	public function pan_update()
	{

		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('pan_number', 'Pan Number', 'trim|required|xss_clean');
			if ($this->form_validation->run() == TRUE) {

			$post = $this->input->post();

            $f_pan = $this->upload_images('member_document', 'front_pan_img');
		
            if ($f_pan['icon'] == 'success') {
                $f_pan_img = $f_pan['text'];
            }

            $value = array(
                'pan_nu'    => $post['pan_number'],
                'pan_img'   => $f_pan_img,
            );

			
		    $existing_fpan = $this->db->select('pan_img')->from('partners_basic_manage')->where('mem_id', $post['curr_user'])->get()->row();

			if ($existing_fpan){
		        unlink($existing_fpan->pan_img);
			}

				$member_data = $this->db->where('mem_id', $post['curr_user'])->update('partners_basic_manage',$value);
				$data = $this->session->set_flashdata('flash-success', '<div class="alert alert-success text-center">Your Aadhaar Information Data Successfully Updated.</div>');

				 }else{

				 $data = $this->session->set_flashdata('flash-error', '<div class="alert text-center alert-danger">Oops! It seems the server is taking more time. Please refresh.</div>');

				 }
			  echo json_encode($data);
		}
	}


	public function bank_update()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('bank_name', 'Bank Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('bank_ac_no', 'Bank Number', 'trim|required|xss_clean');
			$this->form_validation->set_rules('bank_Ifsc', 'Ifsc Code', 'trim|required|xss_clean');
			if ($this->form_validation->run() == TRUE) {

			$post = $this->input->post();

            $passbook = $this->upload_images('member_document', 'passbook_img');
		
            if ($passbook['icon'] == 'success') {
                $passbook_img = $passbook['text'];
            }

            $value = array(
                'bank_name'    => $post['bank_name'],    
                'bank_ac_no'    => $post['bank_ac_no'],    
                'bank_Ifsc'    => $post['bank_Ifsc'],    
                'passbook_img'   => $passbook_img,
            );
			
		    $passbook = $this->db->select('passbook_img')->from('partners_basic_manage')->where('mem_id', $post['holderId'])->get()->row();


			if ($passbook){
		        unlink($passbook->passbook_img);
			}

				$member_data = $this->db->where('mem_id', $post['holderId'])->update('partners_basic_manage',$value);
				$data = $this->session->set_flashdata('flash-success', '<div class="alert alert-success text-center">Your Bank Information Data Successfully Updated.</div>');

				 }else{

				 $data = $this->session->set_flashdata('flash-error', '<div class="alert text-center alert-danger">Oops! It seems the server is taking more time. Please refresh.</div>');

				 }
			  echo json_encode($data);
		}
	}


	public function nomnee_update()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('nomnee_name', 'Nomnee Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('relationName', 'Relation', 'trim|required|xss_clean');
			$this->form_validation->set_rules('n_address', 'Nomnee Address', 'trim|required|xss_clean');
			if ($this->form_validation->run() == TRUE) {

			$post = $this->input->post();

            $value = array(
                'nominee_name'           => $post['nomnee_name'],    
                'nominee_relationship'   => $post['relationName'],    
                'nominee_address'  		 => $post['n_address'],    
            );

				$member_data = $this->db->where('mem_id', $post['parId'])->update('partners_basic_manage',$value);
				$data = $this->session->set_flashdata('flash-success', '<div class="alert alert-success text-center">Your Nomnee Information Data Successfully Updated.</div>');

				 }else{

				 $data = $this->session->set_flashdata('flash-error', '<div class="alert text-center alert-danger">Oops! It seems the server is taking more time. Please refresh.</div>');

				 }
			  echo json_encode($data);
		}
	}


	


		public function kyc_verified()
	{

		if ($this->input->is_ajax_request()) {

			$id = $this->input->post('id');

			$ver_member = $this->member->get_mem_det($id);	

            $kyc_array = explode(',',($ver_member['is_kyc']?$ver_member['is_kyc']:'0,0,0,0,0'));
			$ver_member['is_verified']=$kyc_array;
			
			if ($ver_member) {
				echo json_encode($ver_member);
			} else {
				echo json_encode(array('error' => 'No member found'));
			}
		} else {
			echo json_encode(array('error' => 'Invalid request'));
		}
	}


   public function kyc_confirmination() {

    $post = $this->input->post();

    $kyc_parts = [];

    $kyc_parts[] = ($post['per_info'] === 'on') ? '1' : '0';
    $kyc_parts[] = ($post['aadhaar_info'] === 'on') ? '2' : '0';
    $kyc_parts[] = ($post['pan_info'] === 'on') ? '3' : '0';
    $kyc_parts[] = ($post['bank_info'] === 'on') ? '4' : '0';
    $kyc_parts[] = ($post['nomanee_info'] === 'on') ? '5' : '0';

    $is_kyc_value = implode(',', $kyc_parts);

    $all_checked = !in_array('0', $kyc_parts);

     $value = array(
        'is_kyc' => $is_kyc_value,
        'kyc_verification' => $all_checked ? 3 : 1,
        'kyc_remark' => $all_checked ? 'KYC Completed' : $post['message_remark'],
    );

    $this->db->where('id', $post['id'])->update('partners_basic_manage', $value);

    redirect('mlm_software/admin/member/kyc_verification');
}



public function perRemark()
{
	if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('perRemark', 'Persional Information Remark', 'trim|required|xss_clean');
			if ($this->form_validation->run() == TRUE) {

              $post = $this->input->post();

				$value = array(
    				'per_remark' => $post['perRemark'],    
    				'per_status' => '0'
				);

				$patnarId = array('patnar_id' => $post['uId']);
				
				$mem_basic_data = array( 'kyc_verification' => '2');

				$this->db->where('mem_id', $post['uId'])->update('partners_basic_manage',$mem_basic_data);

				$merge = array_merge($value, $patnarId);

				$exists = $this->db->select('patnar_id')->from('kyc_details')->where('patnar_id', $post['uId'])->get()->row();

				if ($exists) {
    				$this->db->where('patnar_id', $exists->patnar_id)->update('kyc_details', $value);
				} else {
    				$this->db->insert('kyc_details', $merge);
				}

				$this->session->set_flashdata('flash-success', '<div class="alert alert-success text-center">Your Persional Information Remark Updated.</div>');
				
		    }else{

			$data = $this->session->set_flashdata('flash-error', '<div class="alert text-center alert-danger">Oops! It seems the server is taking more time. Please refresh.</div>');
			redirect('mlm_wellnexcare_1/mlm_software/admin/member/view_kyc');

		    } echo json_encode($data);
		}
}


public function perInfo_Approved()
{
		if ($this->input->is_ajax_request()) {
              $post = $this->input->post();
				$value = array(
    				'per_remark' => 'completed',    
    				'per_status' => '1'
				);
				$patnarId = array('patnar_id' => $post['uId']);

				$merge = array_merge($value, $patnarId);

				$exists = $this->db->select('patnar_id')->from('kyc_details')->where('patnar_id', $post['uId'])->get()->row();

				if ($exists) {
    				$this->db->where('patnar_id', $exists->patnar_id)->update('kyc_details', $value);
				} else {
    				$this->db->insert('kyc_details', $merge);
				}

				$checkedVerOrNot = $this->db->select('patnar_id,per_status,aadhaar_status,pan_status,bank_status,nomnee_status')->from('kyc_details')->where('patnar_id', $post['uId'])->get()->row();

				if ($checkedVerOrNot->per_status == '1' && $checkedVerOrNot->aadhaar_status == '1' && $checkedVerOrNot->pan_status == '1' && $checkedVerOrNot->bank_status == '1' && $checkedVerOrNot->nomnee_status == '1') 
				{
    				$mem_basic_data = array('kyc_verification' => '3');
    				$this->db->where('mem_id', $post['uId'])->update('partners_basic_manage', $mem_basic_data);
				}

				$data = $this->session->set_flashdata('flash-success', '<div class="alert alert-success text-center">Persional Information Approved Now.</div>');
				
		    } 
			echo json_encode($data);
		}


		public function aadhaar_remark()
		{

			if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('aadhaar_remark', 'Aadhaar Information Remark', 'trim|required|xss_clean');
			if ($this->form_validation->run() == TRUE) {

              $post = $this->input->post();

				$value = array(
    				'aadhaar_remark' => $post['aadhaar_remark'],    
    				'aadhaar_status' => '0'
				);

				$patnarId = array('patnar_id' => $post['uId']);

				$mem_basic_data = array( 'kyc_verification' => '2');

				$this->db->where('mem_id', $post['uId'])->update('partners_basic_manage',$mem_basic_data);

				$merge = array_merge($value, $patnarId);

				$exists = $this->db->select('patnar_id')->from('kyc_details')->where('patnar_id', $post['uId'])->get()->row();

				if ($exists) {
    				$this->db->where('patnar_id', $exists->patnar_id)->update('kyc_details', $value);
				} else {
    				$this->db->insert('kyc_details', $merge);
				}

				$this->session->set_flashdata('flash-success', '<div class="alert alert-success text-center">Your Persional Information Remark Updated.</div>');
				
		    }else{

			$data = $this->session->set_flashdata('flash-error', '<div class="alert text-center alert-danger">Oops! It seems the server is taking more time. Please refresh.</div>');
			redirect('mlm_wellnexcare_1/mlm_software/admin/member/view_kyc');

		    } echo json_encode($data);
		   }
		}


		public function aadhaar_Approved()
		{

			if ($this->input->is_ajax_request()) {
              $post = $this->input->post();
				$value = array(
    				'aadhaar_remark' => 'completed',    
    				'aadhaar_status' => '1'
				);
				$patnarId = array('patnar_id' => $post['uId']);

				$merge = array_merge($value, $patnarId);

				$exists = $this->db->select('patnar_id')->from('kyc_details')->where('patnar_id', $post['uId'])->get()->row();


				if ($exists) {
    				$this->db->where('patnar_id', $exists->patnar_id)->update('kyc_details', $value);
				} else {
    				$this->db->insert('kyc_details', $merge);
				}

				$checkedVerOrNot = $this->db->select('mem_id,per_status,aadhaar_status,pan_status,bank_status,nomnee_status')->from('kyc_details')->where('patnar_id', $post['uId'])->get()->row();

				if ($checkedVerOrNot->per_status == '1' && $checkedVerOrNot->aadhaar_status == '1' && $checkedVerOrNot->pan_status == '1' && $checkedVerOrNot->bank_status == '1' && $checkedVerOrNot->nomnee_status == '1') 
				{
    				$mem_basic_data = array('kyc_verification' => '3');
    				$this->db->where('mem_id', $post['uId'])->update('partners_basic_manage', $mem_basic_data);
				}

				$data = $this->session->set_flashdata('flash-success', '<div class="alert alert-success text-center"> Aadhaar Information Approved Now </div>');
				
		    } 
			echo json_encode($data);
		}


		public function pan_Approved()
		{

             if ($this->input->is_ajax_request()) {
              $post = $this->input->post();

				$value = array(
    				'pan_remark' => 'completed',    
    				'pan_status' => '1'
				);
				$patnarId = array('patnar_id' => $post['uId']);

				$merge = array_merge($value, $patnarId);

				$exists = $this->db->select('patnar_id')->from('kyc_details')->where('patnar_id', $post['uId'])->get()->row();


				if ($exists) {
    				$this->db->where('patnar_id', $exists->patnar_id)->update('kyc_details', $value);
				} else {
    				$this->db->insert('kyc_details', $merge);
				}

				$checkedVerOrNot = $this->db->select('mem_id,per_status,aadhaar_status,pan_status,bank_status,nomnee_status')->from('kyc_details')->where('patnar_id', $post['uId'])->get()->row();

				if ($checkedVerOrNot->per_status == '1' && $checkedVerOrNot->aadhaar_status == '1' && $checkedVerOrNot->pan_status == '1' && $checkedVerOrNot->bank_status == '1' && $checkedVerOrNot->nomnee_status == '1') 
				{
    				$mem_basic_data = array('kyc_verification' => '3');
    				$this->db->where('mem_id', $post['uId'])->update('partners_basic_manage', $mem_basic_data);
				}

				$data = $this->session->set_flashdata('flash-success', '<div class="alert alert-success text-center"> Aadhaar Information Approved Now </div>');
				
		    } 
			echo json_encode($data);

		}


		public function pan_remark()
		{
			if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('pen_remark', 'Pan Information Remark', 'trim|required|xss_clean');
			if ($this->form_validation->run() == TRUE) {

              $post = $this->input->post();

				$value = array(
    				'pan_remark' => $post['pen_remark'],    
    				'pan_status' => '0'
				);

				$patnarId = array('patnar_id' => $post['uId']);

				$mem_basic_data = array( 'kyc_verification' => '2');

				$this->db->where('mem_id', $post['uId'])->update('partners_basic_manage',$mem_basic_data);

				$merge = array_merge($value, $patnarId);

				$exists = $this->db->select('patnar_id')->from('kyc_details')->where('patnar_id', $post['uId'])->get()->row();

				if ($exists) {
    				$this->db->where('patnar_id', $exists->patnar_id)->update('kyc_details', $value);
				} else {
    				$this->db->insert('kyc_details', $merge);
				}

				$data = $this->session->set_flashdata('flash-success', '<div class="alert alert-success text-center">Your Persional Information Remark Updated.</div>');
				
		    }else{

			$data = $this->session->set_flashdata('flash-error', '<div class="alert text-center alert-danger">Oops! It seems the server is taking more time. Please refresh.</div>');
			redirect('mlm_wellnexcare_1/mlm_software/admin/member/view_kyc');

		    } echo json_encode($data);
		   }
		}




		public function bank_Approved()
		{

             if ($this->input->is_ajax_request()) {
              $post = $this->input->post();
				$value = array(
    				'bank_remark' => 'completed',    
    				'bank_status' => '1'
				);
				$patnarId = array('patnar_id' => $post['uId']);

				$merge = array_merge($value, $patnarId);

				$exists = $this->db->select('patnar_id')->from('kyc_details')->where('patnar_id', $post['uId'])->get()->row();


				if ($exists) {
    				$this->db->where('patnar_id', $exists->patnar_id)->update('kyc_details', $value);
				} else {
    				$this->db->insert('kyc_details', $merge);
				}

				$checkedVerOrNot = $this->db->select('mem_id,per_status,aadhaar_status,pan_status,bank_status,nomnee_status')->from('kyc_details')->where('patnar_id', $post['uId'])->get()->row();

				if ($checkedVerOrNot->per_status == '1' && $checkedVerOrNot->aadhaar_status == '1' && $checkedVerOrNot->pan_status == '1' && $checkedVerOrNot->bank_status == '1' && $checkedVerOrNot->nomnee_status == '1') 
				{
    				$mem_basic_data = array('kyc_verification' => '3');
    				$this->db->where('mem_id', $post['uId'])->update('partners_basic_manage', $mem_basic_data);
				}
				
				$data = $this->session->set_flashdata('flash-success', '<div class="alert alert-success text-center"> Aadhaar Information Approved Now </div>');
				
		    } 
			echo json_encode($data);

		}


		public function bank_remark()
		{
			if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('bank_remark', 'Bank Information Remark', 'trim|required|xss_clean');
			if ($this->form_validation->run() == TRUE) {

              $post = $this->input->post();

				$value = array(
    				'bank_remark' => $post['bank_remark'],    
    				'bank_status' => '0'
				);

				$patnarId = array('patnar_id' => $post['uId']);

				$mem_basic_data = array( 'kyc_verification' => '2');

				$this->db->where('mem_id', $post['uId'])->update('partners_basic_manage',$mem_basic_data);

				$merge = array_merge($value, $patnarId);

				$exists = $this->db->select('patnar_id')->from('kyc_details')->where('patnar_id', $post['uId'])->get()->row();

				if ($exists) {
    				$this->db->where('patnar_id', $exists->patnar_id)->update('kyc_details', $value);
				} else {
    				$this->db->insert('kyc_details', $merge);
				}

				$data = $this->session->set_flashdata('flash-success', '<div class="alert alert-success text-center">Your Persional Information Remark Updated.</div>');
				
		      }else{

			$data = $this->session->set_flashdata('flash-error', '<div class="alert text-center alert-danger">Oops! It seems the server is taking more time. Please refresh.</div>');

		    } echo json_encode($data);
		   }
		}



	    public function nomnee_Approved()
		   {

             if ($this->input->is_ajax_request()) {
              $post = $this->input->post();
				$value = array(
    				'nomnee_remark' => 'completed',    
    				'nomnee_status' => '1'
				);
				$patnarId = array('patnar_id' => $post['uId']);

				$merge = array_merge($value, $memberId);

				$exists = $this->db->select('patnar_id')->from('kyc_details')->where('patnar_id', $post['uId'])->get()->row();


				if ($exists) {
    				$this->db->where('patnar_id', $exists->patnar_id)->update('kyc_details', $value);
				} else {
    				$this->db->insert('kyc_details', $merge);
				}

				$checkedVerOrNot = $this->db->select('mem_id,per_status,aadhaar_status,pan_status,bank_status,nomnee_status')->from('kyc_details')->where('patnar_id', $post['uId'])->get()->row();

				if ($checkedVerOrNot->per_status == '1' && $checkedVerOrNot->aadhaar_status == '1' && $checkedVerOrNot->pan_status == '1' && $checkedVerOrNot->bank_status == '1' && $checkedVerOrNot->nomnee_status == '1') 
				{
    				$mem_basic_data = array('kyc_verification' => '3');
    				$this->db->where('mem_id', $post['uId'])->update('partners_basic_manage', $mem_basic_data);
				}
				
				$data = $this->session->set_flashdata('flash-success', '<div class="alert alert-success text-center"> Aadhaar Information Approved Now </div>');
				
		    } 
			echo json_encode($data);

		}


		public function nomnee_remark()
		{
			if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('nomnee_remark', 'Nomnee Information Remark', 'trim|required|xss_clean');
			if ($this->form_validation->run() == TRUE) {

              $post = $this->input->post();

				$value = array(
    				'nomnee_remark' => $post['nomnee_remark'],    
    				'nomnee_status' => '0'
				);

				$patnarId = array('patnar_id' => $post['uId']);

				$mem_basic_data = array( 'kyc_verification' => '2');

				$this->db->where('mem_id', $post['uId'])->update('partners_basic_manage',$mem_basic_data);

				$merge = array_merge($value, $patnarId);

				$exists = $this->db->select('patnar_id')->from('kyc_details')->where('patnar_id', $post['uId'])->get()->row();

				if ($exists) {
    				$this->db->where('patnar_id', $exists->patnar_id)->update('kyc_details', $value);
				} else {
    				$this->db->insert('kyc_details', $merge);
				}

				$data = $this->session->set_flashdata('flash-success', '<div class="alert alert-success text-center">Your Persional Information Remark Updated.</div>');
				
		      }else{

			$data = $this->session->set_flashdata('flash-error', '<div class="alert text-center alert-danger">Oops! It seems the server is taking more time. Please refresh.</div>');

		    } echo json_encode($data);
		   }
		}

?>