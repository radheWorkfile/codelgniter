<?php 
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



//         $passbook_img = $this->upload_image('member_document', 'passbook');

// 			if ($passbook_img['icon'] == 'success') {
// 			$img_path = $passbook_img['text'];
// 			}

// 			$value = array(
// 			'passbook_img'      => $img_path,
// 			'
// 			);
			
// 			$existing = $this->db->select('passbook_img')->from('msdr_member_basic')->where('mem_id', $id)->get()->row();
// 			if ($existing){
// 			    unlink($existing->passbook_img);
// 			}

// 			$update = $this->db->where('mem_id', $id)->update('msdr_member_basic', $value);


?>