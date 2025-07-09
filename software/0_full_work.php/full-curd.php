

<div class="row actBtn">
 <div class="col-md-12">
 <button class="btn btn-primary"style="float:right;">+ Add Beneficiary </button>
 </div>
</div><br>

<div class="row listSection">
  <div class="col-md-12">
    <div class="table-responsive">
      <table id="example" class="table nowrap table-striped">
        <thead class="bg-primary">
          <tr>
            <th>SI.NO</th>
            <th>User Id</th>
            <th>Name</th>
            <th>Father Name</th>
            <th>Aadhaar No</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1; foreach($yojna_info as $y => $inf):?>
              <tr>
            <td><?php echo $i++;?></td>
            <td><?php echo $inf['br_id'];?></td>
            <td><?php echo $inf['br_name'];?></td>
            <td><?php echo $inf['br_father'];?></td>
            <td><?php echo $inf['br_aadhaar_no'];?></td>
            <td>Status</td>
            <td>
            <a href="javascript:void(0)" data-id="<?php echo $inf->id;?>" class="viewa_section"  data-toggle="modal"  data-target="#view_model" ><i class="fa fa-eye"style="color:#0b8bf9;"></i></a>&emsp;
            <a href="javascript:void(0)" data-id="<?php echo $inf->id;?>" class="viewa_section"  data-toggle="modal"  data-target="#view_model" ><i class="fa fa-edit"style="color:#620baa;"></i></a>&emsp;
            <a href="javascript:void(0)" data-id="<?php echo $inf->id;?>" class="viewa_section"  data-toggle="modal"  data-target="#view_model" ><i class="fa fa-print text-danger"></i></a>&emsp;
            </td>
          </tr>
           <?php endforeach;?>
        </tbody>
      </table>
    </div>
  </div>
</div>




    <div class="row formSection"style="display:none;">
    <div id="form-alert" class="alert"></div>

    <form class="" action="javaScript:void(0);" method="post" id="addItem" enctype="multipart/form-data" novalidate>

      <div class="col-md-12">
      <h5 class="bg-primary fw-bold"style="padding:10px 10px;"><i class="fa fa-female" aria-hidden="true"></i> Bride Information</h5>
      </div>
          
      <div class="col-md-12">
            
      <div class="col-md-4 text-white">
      <label for="validationCustom01" class="form-label">Name <span class="text-danger fs-3">* </span></label>
      <input type="text" class="form-control" name="br_name" id="br_name" value="" required>
      </div>

      <div class="col-md-4 text-white">
      <label for="validationCustom01" class="form-label"> Father Name <span class="text-danger fs-3">* </span></label>
      <input type="text" class="form-control" name="br_fname" id="br_fname" value="" required>
      </div>

      <div class="col-md-4 text-white">
      <label for="validationCustom01" class="form-label"> Mother Name <span class="text-danger fs-3">* </span></label>
      <input type="text" class="form-control" name="br_mname" id="br_mname" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Mobile Number</label>
      <input type="text" class="form-control" name="br_mobile" id="br_mobile" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Email-Id</label>
      <input type="text" class="form-control" name="br_email" id="br_email" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Date of Birth <span class="text-danger fs-3">* </span></label>
      <input type="text" class="form-control" name="br_dob" id="br_dob" value="" required>
      </div>

       <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">State</label>
      <input type="text" class="form-control" name="br_state" id="br_state" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">District</label>
      <input type="text" class="form-control" name="br_district" id="br_district" value="" required>
      </div>


      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Aadhaar Number <span class="text-danger fs-3">* </span></label>
      <input type="text" class="form-control" name="br_aadhaar_no" id="br_aadhaar_no" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Pan Number <span class="text-danger fs-3">* </span></label>
      <input type="text" class="form-control" name="br_pan_no" id="br_pan_no" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Upload Image <span class="text-danger fs-3">* </span></label>
      <input type="file" class="form-control" name="br_image" id="br_image" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Birth Certificate <span class="text-danger fs-3">* </span></label>
      <input type="file" class="form-control" name="br_birth_cer" id="br_birth_cer" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Aadhaar Image <span class="text-danger fs-3">* </span></label>
      <input type="file" class="form-control" name="br_aadhaar_img" id="br_aadhaar_img" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Pan Image <span class="text-danger fs-3">* </span></label>
      <input type="file" class="form-control" name="br_pan_image" id="br_pan_image" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Residence Proof <span class="text-danger fs-3">* </span></label>
      <input type="file" class="form-control" name="br_residence_proof" id="br_residence_proof" value="" required>
      </div>


      <div class="col-md-12 text-white mt-4">
      <label for="validationCustom01" class="form-label">Address <span class="text-danger fs-3">* </span></label>
      <textarea class="form-control" name="br_address"  id="br_address"></textarea>
      </div>

      </div>


      <div class="col-md-12">
      <h5 class="bg-primary fw-bold"style="padding:10px 10px;margin-top:2rem;"><i class="fa fa-user" aria-hidden="true"></i> Groom Information</h5>
      </div>


          
      <div class="col-md-12">
            
      <div class="col-md-4 text-white">
      <label for="validationCustom01" class="form-label">Name <span class="text-danger fs-3">* </span></label>
      <input type="text" class="form-control" name="gr_name" id="gr_name" value="" required>
      </div>

      <div class="col-md-4 text-white">
      <label for="validationCustom01" class="form-label">Father Name <span class="text-danger fs-3">* </span></label>
      <input type="text" class="form-control" name="gr_fname" id="gr_fname" value="" required>
      </div>

      <div class="col-md-4 text-white">
      <label for="validationCustom01" class="form-label">Mother Name <span class="text-danger fs-3">* </span></label>
      <input type="text" class="form-control" name="gr_mname" id="gr_mname" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Mobile Number</label>
      <input type="text" class="form-control" name="gr_mobile" id="gr_mobile" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Email-Id</label>
      <input type="text" class="form-control" name="gr_email" id="gr_email" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Date of Birth <span class="text-danger fs-3">* </span></label>
      <input type="text" class="form-control" name="gr_dob" id="gr_dob" value="" required>
      </div>

       <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">State</label>
      <input type="text" class="form-control" name="gr_state" id="gr_state" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">District</label>
      <input type="text" class="form-control" name="gr_district" id="gr_district" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Aadhaar Number <span class="text-danger fs-3">* </span></label>
      <input type="text" class="form-control" name="gr_aadhaar_no" id="gr_aadhaar_no" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Pan Number</label>
      <input type="text" class="form-control" name="gr_pan_no" id="gr_pan_no" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Upload Image <span class="text-danger fs-3">* </span></label>
      <input type="file" class="form-control" name="gr_image" id="gr_image" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Birth Certificate <span class="text-danger fs-3">* </span></label>
      <input type="file" class="form-control" name="gr_birth_cer" id="gr_birth_cer" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Aadhaar Image</label>
      <input type="file" class="form-control" name="gr_aadhaar_img" id="gr_aadhaar_img" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Pan Image</label>
      <input type="file" class="form-control" name="gr_pan_image" id="gr_pan_image" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Residence Proof</label>
      <input type="file" class="form-control" name="gr_residence_proof" id="gr_residence_proof" value="" required>
      </div>


      <div class="col-md-12 text-white mt-4">
      <label for="validationCustom01" class="form-label">Address</label>
      <textarea class="form-control" name="gr_address"  id="gr_address"></textarea>
      </div>

      </div>



      <div class="col-md-12">
      <h5 class="bg-primary fw-bold"style="padding:10px 10px;margin-top:2rem;"><i class="fa fa-user" aria-hidden="true"></i> Marrage Information</h5>
      </div>


          
      <div class="col-md-12">

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Marrage Date <span class="text-danger fs-3">* </span></label>
      <input type="date" class="form-control" name="marrageDate" id="marrageDate" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Upload Invitation Card <span class="text-danger fs-3">* </span></label>
      <input type="file" class="form-control" name="invitation_card" id="invitation_card" value="" required>
      </div>

      <div class="col-md-4 text-white mt-4">
      <label for="validationCustom01" class="form-label">Upload Marriage Photo <span class="text-danger fs-3">* </span></label>
      <input type="file" class="form-control" name="marriage_img" id="marriage_img" value="" required>
      </div>

       <div class="col-md-12 text-white mt-4">
      <label for="validationCustom01" class="form-label">Message</label>
      <textarea class="form-control" name="remark"  id="remark"></textarea>
      </div>




      </div>


        <!-- <div class="col-md-4 text-white">
        <label for="validationCustom01" class="form-label"><span class="text-danger fs-3">* </span>Father / Husband</label>
        <select class="form-select py-3 form-control" id="gardian_type" name="gardian_type " required>
        <option selected disabled value="">Choose One</option>
        <option value="1">Father Name</option>
        <option value="2">Hasband Name</option>
        </select>
        </div> -->

    

        <div class="col-md-12"style="margin-top:2rem;">
        <div class="row">
        <div class="col-md-11">
        <button type="submit" name="submit" class="btn bg-primary" style="float: right;"> <i class="fa fa-save"></i> Submit </button>
        </div>
        <div class="col-md-1"></div>
        </div>
        </div>


</form>






    </div>
    </div>


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
    $('#addItem').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: '<?php echo base_url(); ?>member/add_kanyadan_ben',
            type: 'POST',data: new FormData(this),
            processData: false, contentType: false, cache: false,
            success: function (response) {
                const res = JSON.parse(response);const alertBox = $('#form-alert');
                alertBox.html('').removeClass('alert-success').removeClass('alert-danger').show();
                if (res.status === 'error') { for (let key in res.message) {
                alertBox.append(`
                <div class="alert-danger single-error"> <i class="fa fa-exclamation-circle"></i> ${res.message[key]} </div>
                `);}setTimeout(() => {alertBox.fadeOut(); }, 2000);}
                if (res.status === 'success') {
                alertBox .addClass('alert-success').html('<i class="fa fa-check-circle"></i> ' + res.message) .fadeIn();
                setTimeout(() => {alertBox.fadeOut();location.reload();}, 2000);
                }
            }
        });
    });
});
</script>

<style>
#form-alert {position: fixed;top: 20px;right: 20px;width: 310px;display: none;z-index: 9999;animation: slideInLeft 0.3s ease-out;}
.alert-danger.single-error {background-color: #f8d7da;color: #721c24;padding: 6px;margin-bottom: 8px;border-radius: 5px;
border: 1px solid #f5c6cb;font-size: 14px;box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);text-align: left;}
.alert-success {background-color: #d4edda;color: #155724;padding: 6px;border-radius: 5px;border: 1px solid #c3e6cb;font-size: 14px;text-align: left;}
#form-alert i {margin-right: 6px;}
@keyframes slideInLeft {from {opacity: 0;transform: translateX(-30px);}to {opacity: 1;transform: translateX(0);}
}
</style>


<?php 

    public function kanyadan_yojana()
    {
        $data['yojna_info'] = $this->db->select('id,br_id,br_name,br_father,br_aadhaar_no,status')->from('kanyadan_youjna_support')->get()->result_array();
        $data['breadcrumb'] = "Kanyadan Yojana";
        $data['title'] = "Manage Kanyadan Yojana";
        $data['layout'] = 'kanyadan_yojana/kanyadan_beneficiary.php';
        $this->load->view('member/base', $data);
    }

    
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
            'br_father'               => $post['br_fname'],
            'br_mother'               => $post['br_mname'],
            'br_mobile'              => $post['br_mobile'],
            'br_email'               => $post['br_email'],
            'br_dob'                 => $post['br_dob'],
            'br_state'               => $post['br_state'],
            'br_district'            => $post['br_district'],
            'br_aadhaar_no'          => $post['br_aadhaar_no'], 
            'br_address'             => $post['br_address'],
            'gr_name'                => $post['gr_name'],
            'gr_father'               => $post['gr_fname'],
            'gr_mother'               => $post['gr_mname'],
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

        $save = $this->db->insert('kanyadan_youjna_support', $value);

    if ($save) {
        $data = array('status' => 'success','message' => 'News saved successfully.');
    } else {
        $data = array('status' => 'error','message' => 'Something went wrong. Please try again later.');
    }
    echo json_encode($data);
}

?>




