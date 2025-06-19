
<script>
    $(document).ready(function(){
	$('#aadhaarInformation').submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: '<?php echo base_url(); ?>mlm_software/admin/member/aadhaar_update',
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

</script>
<?php 




 	function upload_image($path, $name){
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

            $f_aadhaar = $this->upload_image('member_document', 'frontAadhaarImg');
		
            $b_aadhaar = $this->upload_image('member_document', 'back_aadhaar_img');

            if ($f_aadhaar['icon'] == 'success') {
                $f_aadhaar_img = $f_aadhaar['text'];
            }

			if ($b_aadhaar['icon'] == 'success') {
                $b_aadhaar_img = $b_aadhaar['text'];
            }

            $value = array(
                'aadhaar_nu'    => $post['aadhaar_nu'],
                'front_aadhaar_img'   => $f_aadhaar_img,
                'back_aadhaar_img'    => $b_aadhaar_img,
            );


		    $existing_fAadhaar = $this->db->select('front_aadhaar_img')->from('msdr_member_basic')->where('mem_id', $post['curr_id'])->get()->row();

		    $existing_bAadhaar = $this->db->select('back_aadhaar_img')->from('msdr_member_basic')->where('mem_id', $post['curr_id'])->get()->row();
			if ($existing_fAadhaar){
		        unlink($existing_fAadhaar->front_aadhaar_img);
			}elseif($existing_bAadhaar){
                unlink($existing_bAadhaar->back_aadhaar_img);
			}

				$member_data = $this->db->where('mem_id', $post['curr_id'])->update('msdr_member_basic',$value);
				$data = $this->session->set_flashdata('flash-success', '<div class="alert alert-success text-center">Your Aadhaar Information Data Successfully Updated.</div>');

				 }else{

				 $data = $this->session->set_flashdata('flash-error', '<div class="alert text-center alert-danger">Oops! It seems the server is taking more time. Please refresh.</div>');

				 }
			  echo json_encode($data);
		}
	}

?>