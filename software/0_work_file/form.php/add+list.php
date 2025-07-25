

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
            <th>Applicant Id</th>
            <th>Name</th>
            <th>Father Name</th>
            <th>Address</th>
            <th>Marrage Date</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>

      <?php if ($this->session->flashdata('flash-success')): ?><div id="flashMsg">
      <?= $this->session->flashdata('flash-success'); ?></div>
      <?php endif; ?>
      <?php if ($this->session->flashdata('flash-error')): ?>
      <div id="flashMsg"><?= $this->session->flashdata('flash-error'); ?></div>
      <?php endif; ?>


    <div class="row formSection"style="display:none;">


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

    $(document).ready(function(){
    $('#addItem').submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: '<?php echo base_url(); ?>member/add_kanyadan_ben',
        type: "POST",
       data: new FormData(this),
		processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function(data) {
             window.location.reload();
        },
       });
	});
	});
</script>

<script>
$(document).ready(function () {
$("#flashMsg").hide().fadeIn(1000).delay(2000).fadeOut(1000);
});
</script>

<?php 
        public function add_kanyadan_ben(){

            
    $this->form_validation->set_rules('br_name', 'Bride Name', 'trim|required');
    $this->form_validation->set_rules('br_fname', 'Bride Father Name', 'trim|required');
    $this->form_validation->set_rules('br_mname', 'Bride Mother Name', 'trim|required');

    if ($this->form_validation->run() === true) {
        $post = $this->input->post();

        $mem_id = $this->session->userdata('user_id');

       $lastId = $this->db->select('id, br_id')->from('kanyadan_youjna_support')->order_by('id', 'DESC')->limit(1)->get()->row();

        if (!empty($lastId) && !empty($lastId->br_id) && $lastId->br_id !== '0') {
            $lastNumber = (int)substr($lastId->br_id, 3); 
            $lastKHY = 'KHY' . str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
        } else {
            $lastKHY = 'KHY1001';
        }
      
        $invitation_card      = ($invitation_card['icon'] === 'success') ? $invitation_card['text'] : '';
        $marriage_img         = ($marriage_img['icon'] === 'success') ? $marriage_img['text'] : '';

        $value = array(
             'gr_pan_no'              => $post['gr_pan_no'],
            'gr_address'             => $post['gr_address'],
            'remark'                 => $post['remark'],
        );

        $data = $this->db->insert('kanyadan_youjna_support', $value);

        if ($data) {
        $this->session->set_flashdata('flash-success', '<div class="alert alert-success text-center">Successfully added.</div>');
        redirect('member/kanyadan_yojana');
        } else {
        $this->session->set_flashdata('flash-error', '<div class="alert text-center alert-danger">Oops! It seems the server is taking more time. Please refresh.</div>');
        redirect('member/kanyadan_yojana');
        }
        echo json_encode($data);
    }
}

?>


