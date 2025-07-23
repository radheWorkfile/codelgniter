    <div class="col-md-4 text-white mt-4">  
    <label for="validationCustom01" class="form-label">Patient Image <span class="text-danger fs-3">* </span></label>
    <input type="file" class="form-control" name="patient_img" id="patient_img" value="<?php echo $yojna_info->patient_img?$yojna_info->patient_img:'';?>" >
    </div>
<div id="form-alert" class="alert"></div>
<style>
#form-alert {position: fixed;top: 20px;right: 20px;width: 310px;display: none;z-index: 9999;animation: slideInLeft 0.3s ease-out;}
.alert-danger.single-error {background-color: #f8d7da;color: #721c24;padding: 6px;margin-bottom: 8px;border-radius: 5px;
border: 1px solid #f5c6cb;font-size: 14px;box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);text-align: left;}
.alert-success {background-color: #d4edda;color: #155724;padding: 6px;border-radius: 5px;border: 1px solid #c3e6cb;font-size: 14px;text-align: left;}
#form-alert i {margin-right: 6px;}
@keyframes slideInLeft {from {opacity: 0;transform: translateX(-30px);}to {opacity: 1;transform: translateX(0);}
}
</style>
<script>
$(document).ready(function(){
  $(".actBtn").click(function(){
    $(".formSection").toggle();
    $(".listSection").toggle();
  });
});

</script>

<script>

$(document).ready(function () {
    $('#update_emergency_yojana').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: '<?php echo base_url(); ?>admin/update_emergency_yojana',
            type: 'POST',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            success: function (response) {
                const res = JSON.parse(response);
                const alertBox = $('#form-alert');
                alertBox.html('').removeClass('alert-success alert-danger');
                if (res.status === 'error') {
                    for (let key in res.message) {
                        alertBox.append(`<div class="alert-danger single-error"><i class="fa fa-exclamation-circle"></i> ${res.message[key]}</div>`);
                    } alertBox.fadeIn(300, function () {setTimeout(() => {alertBox.fadeOut(500);}, 1000);
                    });}if (res.status === 'success') {alertBox
                    .addClass('alert-success').html('<i class="fa fa-check-circle"></i> ' + res.message).fadeIn();
                     setTimeout(() => {window.location.href = res.actReload;}, 1000); 
                }
            }
        });
    });
});


</script>

<?php 


public function update_emergency_yojana()
{
    $this->form_validation->set_rules('name', 'Name', 'trim|required');
    $this->form_validation->set_rules('fname', 'Father Name', 'trim|required');

    if ($this->form_validation->run() === false) {
        echo json_encode(['status' => 'error','message' => $this->form_validation->error_array()]);return;
    }
  
    $value = [
        'message'                => $post['message'],
    ];

    $save = $this->db->where('id', $id)->update('emergency_yojana', $value);

    if ($save) {
        $data = ['status' => 'success', 'message' => 'Data saved successfully.', 'actReload' => base_url('admin/emergency_yojana')];
    } else {
        $data = ['status' => 'error', 'message' => 'Something went wrong. Please try again later.', 'actReload' => base_url('admin/emergency_yojana')];
    }

    echo json_encode($data);
}

public function update_emergency_yojana()
{
    $this->form_validation->set_rules('name', 'Name', 'trim|required');
    $this->form_validation->set_rules('fname', 'Father Name', 'trim|required');
    $this->form_validation->set_rules('mname', 'Mother Name', 'trim|required');
    $this->form_validation->set_rules('dob', 'DOB', 'trim|required');
    $this->form_validation->set_rules('aadhaar_no', 'Aadhaar No', 'trim|required');
    $this->form_validation->set_rules('pan_no', 'Pan No', 'trim|required');
    $this->form_validation->set_rules('hos_name', 'Hospital Name', 'trim|required');
    $this->form_validation->set_rules('hos_mobile_no', 'Hospital Mobile No', 'trim|required');
    $this->form_validation->set_rules('hos_address', 'Hospital Address', 'trim|required');
    $this->form_validation->set_rules('amount', 'Total Amount', 'trim|required');

    $id = $this->input->post('id');

    if ($this->form_validation->run() === false) {
        echo json_encode(['status' => 'error','message' => $this->form_validation->error_array()]);return;
    }

    $post = $this->input->post();
    $doc = $this->db->select('*')->from('emergency_yojana')->where('id', $id)->get()->row();
    
    $all_images = array(
        'f_aadhaar_img' => 'Front Aadhaar Image',
        'b_aadhaar_img' => 'Back Aadhaar Image',
        'pan_img' => 'Pan Image',
        'patient_img' => 'Patient Image',
        'hospital_bill' => 'Hospital Bill',
        'medical_report' => 'Medical Report',
        'doctor_prescription' => 'Doctor Prescription',
        'death_certificate' => 'Death Certificate',
        'death_img' => 'Death Image ',
    );
    
    $image_data = array();
    $errors = array();

  foreach ($all_images as $field => $field_name) {
    if (!empty($_FILES[$field]['name'])) {
        
        $file_tmp = $_FILES[$field]['tmp_name'];
        $file_type = mime_content_type($file_tmp);
        $file_size = $_FILES[$field]['size'];
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];

        if (!in_array($file_type, $allowed_types)) {
            $errors[] = $field_name . ' must be a JPG, PNG, or GIF image.';
            continue;
        }
        if ($file_size > 2 * 1024 * 1024) {
            $errors[] = $field_name . ' must be less than 2MB in size.';
            continue;
        }
        $upload = $this->upload_image('youjna_doc', $field); 
        if ($upload['icon'] === 'success') {
            if (!empty($doc->$field) && file_exists(FCPATH . str_replace(base_url(), '', $doc->$field))) {
                @unlink(FCPATH . str_replace(base_url(), '', $doc->$field));
            }
            $image_data[$field] = $upload['text'];
        } else {
            $image_data[$field] = !empty($doc->$field) ? $doc->$field : '';
        }
    } else 
    {
        if (!empty($doc->$field)) {
            $image_data[$field] = $doc->$field;
        } else 
        {
            if (($field!='death_certificate')&&($field!='death_img'))
            {    
               $errors[] = $field_name . ' is required.'.$field;
            }
        }
    }
}


        if (!empty($errors)) {
            echo json_encode(array(
                'status' => 'error',
                'message' => $errors,
                'actReload_1' => base_url('admin/emergency_yojana')
            ));
            return;
        }


    $value = [
        'f_aadhaar_img'          => $image_data['f_aadhaar_img'],
        'b_aadhaar_img'          => $image_data['b_aadhaar_img'],
        'pan_img'                => $image_data['pan_img'],
        'hospital_bill'          => $image_data['hospital_bill'],
        'medical_report'         => $image_data['medical_report'],
        'doctor_prescription'    => $image_data['doctor_prescription'],
        'death_certificate'      => $image_data['death_certificate'],
        'death_img'              => $image_data['death_img'],

        'name'                   => $post['name'],
        'father'                 => $post['fname'],
        'mother'                 => $post['mname'],
        'mobile'                 => $post['mobile'],
        'email'                  => $post['email'],
        'gender'                 => $post['gender'],
        'dob'                    => $post['dob'],
        'state'                  => $post['state'],
        'district'               => $post['district'],
        'zipcode'                => $post['zipcode'],
        'aadhaar_no'             => $post['aadhaar_no'],
        'pan_no'                 => $post['pan_no'],
        'user_type'              => $post['userType'],
        'address'                => $post['address'],
        'hos_name'               => $post['hos_name'],
        'hos_mobile_no'          => $post['hos_mobile_no'],
        'hos_address'            => $post['hos_address'],
        'amount'                 => $post['amount'],
        'remark'                 => $post['remark'],
        'death_date'             => $post['death_date'],
        'message'                => $post['message'],
    ];


    $save = $this->db->where('id', $id)->update('emergency_yojana', $value);

    if ($save) {
        $data = ['status' => 'success', 'message' => 'Data saved successfully.', 'actReload' => base_url('admin/emergency_yojana')];
    } else {
        $data = ['status' => 'error', 'message' => 'Something went wrong. Please try again later.', 'actReload' => base_url('admin/emergency_yojana')];
    }

    echo json_encode($data);
}

?>