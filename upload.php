


<!-- **************************** Final-Image-Upload *****************  -->
<?php  
     $f_pan = $this->upload_image('member_document', 'front_pan');
            $b_pan = $this->upload_image('member_document', 'back_pan');

            if ($f_pan['icon'] == 'success') {
                $f_pan_img = $f_pan['text'];
            }

			if ($b_pan['icon'] == 'success') {
                $b_pan_img = $b_pan['text'];
            }

            $value = array(
                'pan_nu'      => $post['pan_no'],
                'front_pan_img'   => $f_pan_img,
                'back_pan_img'    => $b_pan_img,
            );

	function upload_image($path, $name)
    {
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
        } 
		else {$val = array('text' => $this->upload->display_errors(), 'icon' => 'error');}

        return $val;
		
    }

?>
<!-- *********************************************  -->