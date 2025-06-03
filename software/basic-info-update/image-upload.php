<?php 

    function upload_image($path, $name)
    {

        $config['upload_path']          = './uploads/' . $path;
        $config['allowed_types']        = 'jpg|png|jpeg';
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload($name)) {
            $upload_data =  $this->upload->data();
            $image_path = "uploads/" . $path . '/' . $upload_data['file_name'];


            $a = array('photo' => $image_path);
            $this->session->set_userdata($a);


            $val = array('text' => $image_path, 'icon' => 'success');
        } else {
            $val = array('text' => $this->upload->display_errors(), 'icon' => 'error');
        }

        return $val;
    }


$doc = $this->db->select('aadhar_img, pan_img')->from('member_profile')->where('userid', $this->input->post('id'))->get()->row();

             $pan_img = $this->upload_image('member', 'pan_img');
             $adharard = $this->upload_image('member', 'aadhar_img');

                if ($pan_img['icon'] == 'success') {
                    unlink($doc->pan_img);
                    $pancard = $pan_img['text'];
                } else {
                    $pancard = $doc->pan_img;
                }


                if ($adharard['icon'] == 'success') {
                    unlink($doc->aadhar_img);

                    $adharard = $adharard['text'];
                } else {
                    $adharard = $doc->aadhar_img;
                }




?>