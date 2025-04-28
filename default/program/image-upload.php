<?php 
 $config['upload_path']          = './uploads/employee_document/';
 $config['allowed_types']        = 'gif|jpg|png|jpeg';
 $config['max_size']             = config_item('image_size');
 
 $this->load->library('upload', $config);
 
 if (!$this->upload->do_upload('aadhaar_img')) {
     
     $msg = array('error' => $this->upload->display_errors());
     $data = array('text' => $msg, 'icon' => "error";
     
 } else {
     
     $img_data = $this->upload->data();
     $aadhr_img = base_url('uploads/employee_document/' . $img_data['raw_name'] . $img_data['file_ext']);
     
 }
 
 if (!$this->upload->do_upload('pan_img')) {
     $msg = array('error' => $this->upload->display_errors());
     $data = array('text' => $msg, 'icon' => "error";
 } else {a
     $img_data = $this->upload->data();
     $pan_imag = base_url('uploads/employee_document/' . $img_data['raw_name'] . $img_data['file_ext']);
     
 }

?>