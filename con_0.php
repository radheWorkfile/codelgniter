


function sellerFun(id) {
    if (id === "2") {
        $("#franchiseSection").removeClass("d-none");
    } else {
        $("#franchiseSection").addClass("d-none");
    }
}


    $(document).ready(function(){
    $('#bankInformation').submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: '<?php echo base_url(); ?>mlm_software/admin/member/bank_update',
        type: "POST",
       data: new FormData(this),
		processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function(htmlAmi) {
            console.log(htmlAmi);
            window.location.reload();
        },
       });
	});
	}); 


    $("#payNow").on("submit", function(e) {
    e.preventDefault();
    const section = $(this).data('section'); 
    const id = $(this).data('id'); 
    const id = $("#qtyDisplay").val(); 

    const formData = new FormData();
    formData.append('id', id);
    formData.append('section', section);
    formData.append('aadhaar_no', $('#aadhaar_no').val());
    formData.append('front_aadhaar', $('#front_aadhaar')[0].files[0]);
    formData.append('back_aadhaar', $('#back_aadhaar')[0].files[0]);

    $.ajax({
        type: "POST",
        url: '<?= base_url("member/profile/updatesdfsdfsd") ?>',
        data: formData,
        contentType: false, // Very important
        processData: false, // Very important
        success: function(data) {
           window.location.reload();
        },
        
    });
});



public function kyc_verified_mem()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|xss_clean');
			$this->form_validation->set_rules('email', 'Email-Id', 'trim|required|xss_clean');
			$this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required|xss_clean');
			$this->form_validation->set_rules('address', 'Address', 'trim|required|xss_clean');
			if ($this->form_validation->run() == TRUE) {
				$post = $this->input->post();
			    $this->db->where()->update();
			} else {
				$msg =  array(
					'name'    => form_error('name'),
					'mobile'  => form_error('mobile'),
					'email'   => form_error('email'),
					'dob'     => form_error('dob'),
					'address' => form_error('address'),
				);
				$data = array('icon' => 'error', 'text' => $msg);
			}
			echo json_encode($data);
		}
	}



	public function kyc_verified_mem()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
			if ($this->form_validation->run() == TRUE) {
				$post = $this->input->post();

				$value = array(
					'name'     => $post['name'],
					'mobile'   => $post['mobile'],
				);

				$member_data = $this->db->where('id',$post['mem_id'])->update('msdr_members',$value);
				$data = $this->session->set_flashdata('flash-success', '<div class="alert alert-success text-center">Your Personal Information Data Successfully Updated.</div>');

				 }else{

				 $data = $this->session->set_flashdata('flash-error', '<div class="alert text-center alert-danger">Oops! It seems the server is taking more time. Please refresh.</div>');

				 }
			  echo json_encode($data);
		}
	}




   $getId = explode("===", base64_decode(urldecode($id)));
    
    $viewUid = base_url('mlm_software/admin/member/operation/' . urlencode(base64_encode('view===' . $row->id)));
    $editUid =  base_url('mlm_software/admin/member/operation/' . urlencode(base64_encode('edit===' . $row->id)));
    $veiwTree =  base_url('mlm_software/admin/member/operation/' . urlencode(base64_encode('tree===' . $row->id)));
    $admnLoggin = base_url('member/login/isCheckLoggedInByAdmin/' . urlencode(base64_encode($row->username . '===' . $row->shw_pass)));
    
    $actionBtn = '
    <div style="text-align:center;width:170px;">
    <a href="' . $admnLoggin . '" class="btn btn-outline-dark btn-sm waves-effect btn-padd" target="_blank" title="member login"><i class="bx bx-log-in-circle"></i> </a>
    <a href="' . $veiwTree . '" class="btn btn-outline-primary btn-sm waves-effect btn-padd" title="Tree View"><i class="bx bx-sitemap"></i> </a>
    <a href="' . $editUid . '" class="btn btn-outline-success btn-sm waves-effect btn-padd" title="Edit"><i class="mdi mdi-square-edit-outline me-1"></i></a>
    <a href="' . $viewUid . '" class="btn btn-outline-warning btn-sm waves-effect btn-padd" title="View"><i class="mdi mdi-eye"></i></a>
    <a href="javascript:void(0)" class="btn btn-outline-danger btn-sm waves-effect btn-padd getAction" data-id="del_member-mlm_software/admin/member/operation-' . $row->id . '"  data-bs-toggle="modal" data-bs-target="#deleteModel" title="Delete">
    <i class="bx bxs-trash"></i> </a></div>';



