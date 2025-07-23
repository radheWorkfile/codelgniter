<?php 
    public function add_kanyadan_ben()
{
    $this->form_validation->set_rules('br_name', 'Bride Name', 'trim|required');
    $this->form_validation->set_rules('br_fname', 'Bride Father Name', 'trim|required');
    $this->form_validation->set_rules('br_mname', 'Bride Mother Name', 'trim|required');
    $this->form_validation->set_rules('br_dob', 'DOB', 'trim|required');
    $this->form_validation->set_rules('br_aadhaar_no', 'Aadhaar No', 'trim|required');
    $this->form_validation->set_rules('br_address', 'Bride Address', 'trim|required');
    $this->form_validation->set_rules('gr_mname', 'Groom Name', 'trim|required');
    $this->form_validation->set_rules('gr_fname', 'Groom Father Name', 'trim|required');
    $this->form_validation->set_rules('gr_mname', 'Groom Mother Name', 'trim|required');
    $this->form_validation->set_rules('gr_aadhaar_no', 'Groom Aadhaar No', 'trim|required');
    $this->form_validation->set_rules('gr_address', 'Groom Address', 'trim|required');

    if ($this->form_validation->run() === false) {
        echo json_encode(array('status' => 'error', 'message' => $this->form_validation->error_array() ));
        return;
    }

    $post = $this->input->post();
    $mem_id = $this->session->userdata('user_id');

    $lastId = $this->db->select('id, br_id')->from('kanyadan_youjna_support')->order_by('id', 'DESC')->limit(1)->get()->row();

    if (!empty($lastId) && !empty($lastId->br_id) && $lastId->br_id !== '0') {
        $lastNumber = (int)substr($lastId->br_id, 3);
        $lastKHY = 'KHY' . str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
    } else {
        $lastKHY = 'KHY1001';
    }
       

        $br_image_img         = $this->upload_image('youjna_doc', 'br_image');
        $br_birth_cer_img     = $this->upload_image('youjna_doc', 'br_birth_cer');
        $br_aadhaar_img       = $this->upload_image('youjna_doc', 'br_aadhaar_img');
        $br_pan_image         = $this->upload_image('youjna_doc', 'br_pan_image');
        $br_residence_proof   = $this->upload_image('youjna_doc', 'br_residence_proof');

        $gr_image             = $this->upload_image('youjna_doc', 'gr_image');
        $gr_birth_cer         = $this->upload_image('youjna_doc', 'gr_birth_cer');
        $gr_aadhaar_img       = $this->upload_image('youjna_doc', 'gr_aadhaar_img');
        $gr_pan_image         = $this->upload_image('youjna_doc', 'gr_pan_image');
        $gr_residence_proof   = $this->upload_image('youjna_doc', 'gr_residence_proof');

        $invitation_card      = $this->upload_image('youjna_doc', 'invitation_card');
        $marriage_img         = $this->upload_image('youjna_doc', 'marriage_img');

        $br_image_img         = ($br_image_img['icon'] === 'success') ? $br_image_img['text'] : '';
        $br_birth_cer_img     = ($br_birth_cer_img['icon'] === 'success') ? $br_birth_cer_img['text'] : '';
        $br_aadhaar_img       = ($br_aadhaar_img['icon'] === 'success') ? $br_aadhaar_img['text'] : '';
        $br_pan_image         = ($br_pan_image['icon'] === 'success') ? $br_pan_image['text'] : '';
        $br_residence_proof   = ($br_residence_proof['icon'] === 'success') ? $br_residence_proof['text'] : '';

        $gr_image             = ($gr_image['icon'] === 'success') ? $gr_image['text'] : '';
        $gr_birth_cer         = ($gr_birth_cer['icon'] === 'success') ? $gr_birth_cer['text'] : '';
        $gr_aadhaar_img       = ($gr_aadhaar_img['icon'] === 'success') ? $gr_aadhaar_img['text'] : '';
        $gr_pan_image         = ($gr_pan_image['icon'] === 'success') ? $gr_pan_image['text'] : '';
        $gr_residence_proof   = ($gr_residence_proof['icon'] === 'success') ? $gr_residence_proof['text'] : '';

        $invitation_card      = ($invitation_card['icon'] === 'success') ? $invitation_card['text'] : '';
        $marriage_img         = ($marriage_img['icon'] === 'success') ? $marriage_img['text'] : '';

        $value = array(
            
            'br_id'                  => $lastKHY,

            'br_image'               => $br_image_img,
            'br_birth_certificate'   => $br_birth_cer_img,
            'br_aadhaar_img'         => $br_aadhaar_img,
            'br_pan_img'             => $br_pan_image,
            'br_residence_proof'     => $br_residence_proof,
            
            'gr_image'               => $gr_image,
            'gr_birth_certificate'   => $gr_birth_cer,
            'gr_aadhaar_img'         => $gr_aadhaar_img,
            'gr_pan_img'             => $gr_pan_image,
            'gr_residence_proof'     => $gr_residence_proof,
            
            'marriage_photo'         => $invitation_card,
            'invitation_card_img'    => $marriage_img,
            
            'mem_id'                 => $mem_id,
            'br_name'                => $post['br_name'],
            'br_father'              => $post['br_fname'],
            'br_mother'              => $post['br_mname'],
            'br_mobile'              => $post['br_mobile'],
            'br_email'               => $post['br_email'],
            'br_dob'                 => $post['br_dob'],
            'br_state'               => $post['br_state'],
            'br_district'            => $post['br_district'],
            'br_aadhaar_no'          => $post['br_aadhaar_no'], 
            'br_address'             => $post['br_address'],
            'gr_name'                => $post['gr_name'],
            'gr_father'              => $post['gr_fname'],
            'gr_mother'              => $post['gr_mname'],
            'gr_mobile'              => $post['gr_mobile'],
            'gr_email'               => $post['gr_email'],
            'gr_dob'                 => $post['gr_dob'],
            'gr_state'               => $post['gr_state'],
            'gr_district'            => $post['gr_district'],
            'gr_aadhaar_no'          => $post['gr_aadhaar_no'],
            'gr_pan_no'              => $post['gr_pan_no'],
            'gr_address'             => $post['gr_address'],
            'date'                   => $post['marrageDate'],
            'remark'                 => $post['remark'],
        );

        $save = $this->db->insert('kanyadan_youjna_support', $value);

    if ($save) {
        $data = array('status' => 'success','message' => 'Thank you! Data added successfully.');
    } else {
        $data = array('status' => 'error','message' => 'Something went wrong. Please try again later.');
    }
    echo json_encode($data);
}

    function update_image()
    {
        $mem_id = $this->input->post('mem_id');
        $da = $this->upload_image('member', 'image');

        if ($da['icon'] == 'success') {
            $img = $da['text'];
            $data = array(
                'my_img' => $img,
            );
            $memb = $this->db->select('my_img')->where('id', $mem_id)->get('member')->row();
            unlink($memb->my_img);
            $this->db->where('id', $mem_id)->update('member', $data);
            $data = array('text' => "<p style='padding:10px;background:green;color:white'>Successfully Updated Image!<p>", "icon" => "success");
        } else {
            $data = array('text' => "<p style='padding:10px;border:1px solid red;color:white'>" . $da['text'] . "</p>", "icon" => "error");
        }

        echo json_encode($data);
    }
?>