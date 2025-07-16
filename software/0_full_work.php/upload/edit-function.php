<!-- ******************************************************************* -->

    <div class="row formSection">
    <div id="form-alert" class="alert"></div>

    <form  method="post" id="updateItem" enctype="multipart/form-data">

      <div class="col-md-12">
      <h5 class="fw-bold"style="padding:10px 10px;background-color:#22a2ff;color:white!important;"><i class="fa fa-female text-white" aria-hidden="true"></i> Bride Information</h5>
      </div>
          
      <div class="col-md-12">
            
      <div class="col-md-4 text-white">
      <label for="validationCustom01" class="form-label">Name <span class="text-danger fs-3">* </span></label>
      <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $value->id?$value->id:'';?>">
      <input type="text" class="form-control" name="br_name" id="br_name" value="<?php echo $value->br_name?$value->br_name:'';?>">
      </div>

      <div class="col-md-4 text-white">
      <label for="validationCustom01" class="form-label"> Father Name <span class="text-danger fs-3">* </span></label>
      <input type="text" class="form-control" name="br_fname" id="br_fname" value="<?php echo $value->br_father?$value->br_father:'';?>">
      </div>

      <div class="col-md-4 text-white">
      <label for="validationCustom01" class="form-label"> Mother Name <span class="text-danger fs-3">* </span></label>
      <input type="text" class="form-control" name="br_mname" id="br_mname" value="<?php echo $value->br_mother?$value->br_mother:'';?>">
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Mobile Number</label>
      <input type="text" class="form-control" name="br_mobile" id="br_mobile" value="<?php echo $value->br_mobile?$value->br_mobile:'';?>">
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Email-Id</label>
      <input type="text" class="form-control" name="br_email" id="br_email" value="<?php echo $value->br_email?$value->br_email:'';?>">
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Date of Birth <span class="text-danger fs-3">* </span></label>
      <input type="text" class="form-control" name="br_dob" id="br_dob" value="<?php echo $value->br_dob?$value->br_dob:'';?>">
      </div>

       <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">State</label>
      <input type="text" class="form-control" name="br_state" id="br_state" value="<?php echo $value->br_state?$value->br_state:'';?>">
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">District</label>
      <input type="text" class="form-control" name="br_district" id="br_district" value="<?php echo $value->br_district?$value->br_district:'';?>">
      </div>


      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Aadhaar Number <span class="text-danger fs-3">* </span></label>
      <input type="text" class="form-control" name="br_aadhaar_no" id="br_aadhaar_no" value="<?php echo $value->br_aadhaar_no?$value->br_aadhaar_no:'';?>">
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Pan Number <span class="text-danger fs-3">* </span></label>
      <input type="text" class="form-control" name="br_pan_no" id="br_pan_no" value="<?php echo $value->br_pan_no?$value->br_pan_no:'';?>">
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Upload Image <span class="text-danger fs-3">* </span></label>
      <input type="file" class="form-control" name="br_image" id="br_image" value="<?php echo $value->br_image?$value->br_image:'';?>"require>
      <input type="text" class="form-control" name="" id="" value="<?php echo $value->br_image?$value->br_image:'';?>"require>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Birth Certificate <span class="text-danger fs-3">* </span></label>
      <input type="file" class="form-control" name="br_birth_certificate" id="br_birth_certificate" value="<?php echo $value->br_birth_certificate?$value->br_birth_certificate:'';?>"require>
      <input type="text" class="form-control" name="" id="" value="<?php echo $value->br_birth_certificate?$value->br_birth_certificate:'';?>"require>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Aadhaar Image <span class="text-danger fs-3">* </span></label>
      <input type="file" class="form-control" name="br_aadhaar_img" id="br_aadhaar_img" value="<?php echo $value->br_aadhaar_img?$value->br_aadhaar_img:'';?>"require>
      <input type="text" class="form-control" name="" id="" value="<?php echo $value->br_aadhaar_img?$value->br_aadhaar_img:'';?>"require>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Pan Image <span class="text-danger fs-3">* </span></label>
      <input type="file" class="form-control" name="br_pan_img" id="br_pan_img" value="<?php echo $value->br_pan_img?$value->br_pan_img:'';?>"require>
      <input type="text" class="form-control" name="" id="" value="<?php echo $value->br_pan_img?$value->br_pan_img:'';?>"require>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Residence Proof <span class="text-danger fs-3">* </span></label>
      <input type="file" class="form-control" name="br_residence_proof" id="br_residence_proof" value="<?php echo $value->br_residence_proof?$value->br_residence_proof:'';?>"require>
      <input type="text" class="form-control" name="" id="" value="<?php echo $value->br_residence_proof?$value->br_residence_proof:'';?>"require>
      </div>


      <div class="col-md-12 text-white mt-4">
      <label for="validationCustom01" class="form-label">Address <span class="text-danger fs-3">* </span></label>
      <textarea class="form-control" name="br_address"  id="br_address"><?php echo $value->br_address?$value->br_address:'';?></textarea>
      </div>

      </div>


      <div class="col-md-12">
      <h5 class="fw-bold"style="padding:10px 10px;background-color:#22a2ff;color:white!important;"><i class="fa fa-female text-white" aria-hidden="true"></i> Groom Information</h5>
      </div>


          
      <div class="col-md-12">
            
      <div class="col-md-4 text-white">
      <label for="validationCustom01" class="form-label">Name <span class="text-danger fs-3">* </span></label>
      <input type="text" class="form-control" name="gr_name" id="gr_name" value="<?php echo $value->gr_name?$value->gr_name:'';?>">
      </div>

      <div class="col-md-4 text-white">
      <label for="validationCustom01" class="form-label">Father Name <span class="text-danger fs-3">* </span></label>
      <input type="text" class="form-control" name="gr_fname" id="gr_fname" value="<?php echo $value->gr_father?$value->gr_father:'';?>">
      </div>

      <div class="col-md-4 text-white">
      <label for="validationCustom01" class="form-label">Mother Name <span class="text-danger fs-3">* </span></label>
      <input type="text" class="form-control" name="gr_mname" id="gr_mname" value="<?php echo $value->gr_mother?$value->gr_mother:'';?>">
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Mobile Number</label>
      <input type="text" class="form-control" name="gr_mobile" id="gr_mobile" value="<?php echo $value->gr_mobile?$value->gr_mobile:'';?>">
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Email-Id</label>
      <input type="text" class="form-control" name="gr_email" id="gr_email" value="<?php echo $value->gr_email?$value->gr_email:'';?>">
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Date of Birth <span class="text-danger fs-3">* </span></label>
      <input type="text" class="form-control" name="gr_dob" id="gr_dob" value="<?php echo $value->gr_dob?$value->gr_dob:'';?>">
      </div>

       <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">State</label>
      <input type="text" class="form-control" name="gr_state" id="gr_state" value="<?php echo $value->gr_state?$value->gr_state:'';?>">
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">District</label>
      <input type="text" class="form-control" name="gr_district" id="gr_district" value="<?php echo $value->gr_district?$value->gr_district:'';?>">
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Aadhaar Number <span class="text-danger fs-3">* </span></label>
      <input type="text" class="form-control" name="gr_aadhaar_no" id="gr_aadhaar_no" value="<?php echo $value->gr_aadhaar_no?$value->gr_aadhaar_no:'';?>">
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Pan Number</label>
      <input type="text" class="form-control" name="gr_pan_no" id="gr_pan_no" value="<?php echo $value->gr_pan_no?$value->gr_pan_no:'';?>">
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Upload Image <span class="text-danger fs-3">* </span></label>
      <input type="file" require class="form-control" name="gr_image" id="gr_image" value="<?php echo $value->gr_image?$value->gr_image:'';?>">
      <input type="text" require class="form-control" name="" id="" value="<?php echo $value->gr_image?$value->gr_image:'';?>">
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Birth Certificate <span class="text-danger fs-3">* </span></label>
      <input type="file"require class="form-control" name="gr_birth_certificate" id="gr_birth_certificate" value="<?php echo $value->gr_birth_certificate?$value->gr_birth_certificate:'';?>">
      <input type="text"require class="form-control" name="" id="" value="<?php echo $value->gr_birth_certificate?$value->gr_birth_certificate:'';?>">
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Aadhaar Image</label>
      <input type="file"require class="form-control" name="gr_aadhaar_img" id="gr_aadhaar_img" value="<?php echo $value->gr_aadhaar_img?$value->gr_aadhaar_img:'';?>">
      <input type="text"require class="form-control" name="" id="" value="<?php echo $value->gr_aadhaar_img?$value->gr_aadhaar_img:'';?>">
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Pan Image</label>
      <input type="file" require class="form-control" name="gr_pan_img" id="gr_pan_img" value="<?php echo $value->gr_pan_img?$value->gr_pan_img:'';?>">
      <input type="text" require class="form-control" name="" id="" value="<?php echo $value->gr_pan_img?$value->gr_pan_img:'';?>">
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Residence Proof</label>
      <input type="file" require class="form-control" name="gr_residence_proof" id="gr_residence_proof" value="<?php echo $value->gr_residence_proof?$value->gr_residence_proof:'';?>">
      <input type="text" require class="form-control" name="" id="" value="<?php echo $value->gr_residence_proof?$value->gr_residence_proof:'';?>">
      </div>


      <div class="col-md-12 text-white mt-4">
      <label for="validationCustom01" class="form-label">Address</label>
      <textarea class="form-control" name="gr_address"  id="gr_address"><?php echo $value->gr_address?$value->gr_address:'';?></textarea>
      </div>

      </div>



      <div class="col-md-12">
      <h5 class="fw-bold"style="padding:10px 10px;background-color:#22a2ff;color:white!important;"><i class="fa fa-female text-white" aria-hidden="true"></i> Marrage Information</h5>
      </div>


          
      <div class="col-md-12">

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Marrage Date <span class="text-danger fs-3">* </span></label>
      <input type="date" class="form-control" name="marrageDate" id="marrageDate" value="<?php echo $value->date?$value->date:'';?>">
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Upload Invitation Card <span class="text-danger fs-3">* </span></label>
      <input type="file" class="form-control" name="invitation_card_img" id="invitation_card_img" value="<?php echo $value->invitation_card_img?$value->invitation_card_img:'';?>" require>
      <input type="text" class="form-control" name="" id="" value="<?php echo $value->invitation_card_img?$value->invitation_card_img:'';?>" require>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Upload Marriage Photo <span class="text-danger fs-3">* </span></label>
      <input type="file" class="form-control" name="marriage_photo" id="marriage_photo" value="<?php echo $value->marriage_photo?$value->marriage_photo:'';?>"require>
      <input type="text" class="form-control" name="" id="" value="<?php echo $value->marriage_photo?$value->marriage_photo:'';?>"require>
      <a href="javaScript:void(0);">View Image</a>
      </div>

       <div class="col-md-12 text-white mt-4">
      <label for="validationCustom01" class="form-label">Message</label>
      <textarea class="form-control" name="remark"  id="remark"><?php echo $value->remark?$value->remark:'';?></textarea>
      </div>




      </div>


        <!-- <div class="col-md-4 text-white">
        <label for="validationCustom01" class="form-label"><span class="text-danger fs-3">* </span>Father / Husband</label>
        <select class="form-select py-3 form-control" id="gardian_type" name="gardian_type ">
        <option selected disabled value="<?php echo $value->br_name?$value->br_name:'';?>">Choose One</option>
        <option value="1">Father Name</option>
        <option value="2">Hasband Name</option>
        </select>
        </div> -->

    

        <div class="col-md-12"style="margin-top:2rem;">
        <div class="row">
        <div class="col-md-11">
        <button type="submit" name="submit" class="btn bg-primary" style="float: right;background-color:#22a2ff;box-shadow:3px 3px 3px #105a8f;"> <i class="fa fa-save"></i> Submit </button>
        </div>
        <div class="col-md-1"></div>
        </div>
        </div>


</form>






    </div>
    </div>

    <style>
        .form-label{color:black;}
    </style>

<script>

$(document).ready(function () {
    $('#updateItem').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: '<?php echo base_url(); ?>admin/update_kanyadan_ben',
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










<!-- ******************************************************************* -->

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
$(document).ready(function () {
    $('#updateItem').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: '<?php echo base_url(); ?>admin/update_kanyadan_ben',
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



<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


<?php 

    public function update_kanyadan_ben()
{
    $this->form_validation->set_rules('br_name', 'Bride Name', 'trim|required');
    $this->form_validation->set_rules('br_fname', 'Bride Father Name', 'trim|required');
    $this->form_validation->set_rules('br_mname', 'Bride Mother Name', 'trim|required');
    $this->form_validation->set_rules('br_dob', 'DOB', 'trim|required');
    $this->form_validation->set_rules('br_aadhaar_no', 'Aadhaar No', 'trim|required');
    $this->form_validation->set_rules('br_address', 'Bride Address', 'trim|required');
    $this->form_validation->set_rules('gr_name', 'Groom Name', 'trim|required');
    $this->form_validation->set_rules('gr_fname', 'Groom Father Name', 'trim|required');
    $this->form_validation->set_rules('gr_mname', 'Groom Mother Name', 'trim|required');
    $this->form_validation->set_rules('gr_aadhaar_no', 'Groom Aadhaar No', 'trim|required');
    $this->form_validation->set_rules('gr_address', 'Groom Address', 'trim|required');

    $id = $this->input->post('id');

    if ($this->form_validation->run() === false) {
        echo json_encode(array(
            'status' => 'error',
            'message' => $this->form_validation->error_array(),
            'actReload_1' => base_url('admin/editKanYojana/' . $id)
        ));
        return;
    }

    $post = $this->input->post();
    $doc = $this->db->select('*')->from('kanyadan_youjna_support')->where('id', $id)->get()->row();

    $all_images = array(
        'br_image' => 'Bride Image',
        'br_aadhaar_img' => 'Bride Aadhaar Image',
        'br_pan_img' => 'Bride PAN Image',
        'br_residence_proof' => 'Bride Residence Proof',
        'gr_image' => 'Groom Image',
        'gr_aadhaar_img' => 'Groom Aadhaar Image',
        'gr_residence_proof' => 'Groom Residence Proof',
        'gr_pan_img' => 'Groom PAN Image',
        'br_birth_certificate' => 'Bride Birth Certificate',
        'gr_birth_certificate' => 'Groom Birth Certificate',
        'invitation_card_img' => 'Invitation Card',
        'marriage_photo' => 'Marriage Image'
    );

    
    $image_data = array();
    $errors = array();

  foreach ($all_images as $field => $field_name) {
    if (!empty($_FILES[$field]['name'])) {
        $upload = $this->upload_image('youjna_doc', $field); 

        if ($upload['icon'] === 'success') {
            if (!empty($doc->$field) && file_exists(FCPATH . str_replace(base_url(), '', $doc->$field))) {
                @unlink(FCPATH . str_replace(base_url(), '', $doc->$field));
            }
            $image_data[$field] = $upload['text'];
        } else {
            $image_data[$field] = !empty($doc->$field) ? $doc->$field : '';
        }
    } else {
        if (!empty($doc->$field)) {
            $image_data[$field] = $doc->$field;
        } else {
            $errors[] = $field_name . ' is required.';
        }
    }
}

    if (!empty($errors)) {
        echo json_encode(array(
            'status' => 'error',
            'message' => $errors,
            'actReload_1' => base_url('admin/editKanYojana/' . $id)
        ));
        return;
    }


    $value = array(
        'br_image'               => $image_data['br_image'],
        'br_birth_certificate'   => $image_data['br_birth_certificate'],
        'br_aadhaar_img'         => $image_data['br_aadhaar_img'],
        'br_pan_img'             => $image_data['br_pan_img'],
        'br_residence_proof'     => $image_data['br_residence_proof'],
        'gr_image'               => $image_data['gr_image'],
        'gr_birth_certificate'   => $image_data['gr_birth_certificate'],
        'gr_aadhaar_img'         => $image_data['gr_aadhaar_img'],
        'gr_pan_img'             => $image_data['gr_pan_img'],
        'gr_residence_proof'     => $image_data['gr_residence_proof'],
        'invitation_card_img'    => $image_data['invitation_card_img'],
        'marriage_photo'         => $image_data['marriage_photo'],
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
        'remark'                 => $post['remark'],
    );

    $save = $this->db->where('id', $id)->update('kanyadan_youjna_support', $value);

    if ($save) {
        echo json_encode(array(
            'status' => 'success',
            'message' => 'Data saved successfully.',
            'actReload' => base_url('admin/kanyadan_yojana')
        ));
    } else {
        echo json_encode(array(
            'status' => 'error',
            'message' => 'Something went wrong. Please try again later.',
            'actReload' => base_url('admin/editKanYojana/' . $id)
        ));
    }
}

?>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->