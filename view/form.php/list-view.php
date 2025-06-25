
  



    <div class="col-md-10"></div>
    <div class="col-md-2">
    <button type="button" class="btn btn-light text-dark float-end" id="sec_manage">+ Add Patner</button>
    </div>
        
    <table class="responsive list_manage mt-4">  
    <tr class="bg-info">
    <th>S.N.</th>
    <th>Project Name</th>
    <th>Property No</th>
    <th>Property Amount</th>
    <th>Paid Amount</th>
    <th>Remaing Amount</th>
    <th>Booking Date</th>
    </tr>
    </table>



 <form class="row g-3 needs-validation" id="form_manage">

  <div class="col-md-4 text-white">
    <label for="validationCustom01" class="form-label"><span class="text-danger fs-3">* </span>First Name</label>
    <input type="text" class="form-control" id="f_name" id="f_name" value="" required>
  </div>

   <div class="col-md-4 text-white mt-4">
    <label for="validationCustom01" class="form-label">Mid Name</label>
    <input type="text" class="form-control" name="m_name" id="m_name" value="" required>
  </div>

   <div class="col-md-4 text-white">
    <label for="validationCustom01" class="form-label"><span class="text-danger fs-3">* </span>Last Name</label>
    <input type="text" class="form-control" id="l_name" name="l_name" value="" required>
  </div>

   <div class="col-md-4 text-white">
    <label for="validationCustom01" class="form-label"><span class="text-danger fs-3">* </span>Father / Husband</label>
     <select class="form-select py-3" id="gardian_type" name="gardian_type " required>
      <option selected disabled value="">Choose One</option>
      <option value="1">Father Name</option>
      <option value="2">Hasband Name</option>
    </select>
  </div>

  <div class="col-md-4 text-white father_sec">  
    <label for="validationCustom01" class="form-label"><span class="text-danger fs-3">* </span>Father Name</label>
    <input type="text" class="form-control" id="father_name" name="father_name" value="" required>
  </div>

  <div class="col-md-4 text-white hasband_sec">
    <label for="validationCustom01" class="form-label"><span class="text-danger fs-3">* </span>Husband Name</label>
    <input type="text" class="form-control" id="husband_name" name="husband_name" value="" required>
  </div>
  
   <div class="col-md-4 text-white">
    <label for="validationCustom01" class="form-label"><span class="text-danger fs-3">* </span>Mobile Number</label>
    <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="" required>
  </div>
  
   <div class="col-md-4 text-white">
    <label for="validationCustom01" class="form-label">Email-Id</label>
    <input type="text" class="form-control" id="email_id" name="email_id" value="" required>
  </div>

     <div class="col-md-4 text-white">
    <label for="validationCustom01" class="form-label">Date of Birth</label>
    <input type="text" class="form-control" id="dob" name="dob" value="" required>
  </div>

      <div class="col-md-4 text-white">
    <label for="validationCustom01" class="form-label">Enter Occupation</label>
    <input type="text" class="form-control" id="occupation" name="occupation" value="" required>
  </div>

   <div class="col-md-4 text-white">
    <label for="validationCustom01" class="form-label"><span class="text-danger fs-3">* </span> Aadhar Number</label>
    <input type="text" class="form-control" id="aadhaar_no" name="aadhaar_no" value="" required>
  </div>


   <div class="col-md-4 text-white">
    <label for="validationCustom01" class="form-label"><span class="text-danger fs-3">* </span> Pan Number</label>
    <input type="text" class="form-control" id="pan_no" name="pan_no" value="" required>
  </div>

    <div class="col-md-4 text-white">
    <label for="validationCustom01" class="form-label">State</label>
    <input type="text" class="form-control" id="state" name="state" value="" required>
  </div>

   <div class="col-md-4 text-white">
    <label for="validationCustom01" class="form-label">District</label>
    <input type="text" class="form-control" id="district" name="district" value="" required>
  </div>

    <div class="col-md-4 text-white">
    <label for="validationCustom01" class="form-label">Pin Code</label>
    <input type="text" class="form-control" id="pin_code" name="pin_code" value="" required>
  </div>

  <div class="col-md-4 text-white">
    <label for="validationCustom01" class="form-label">photo Upload</label>
    <input type="file" class="form-control" id="file" name="file" value="" required>
  </div>

   <div class="col-md-12 text-white">
    <label for="validationCustom01" class="form-label"><span class="text-danger fs-3">* </span> Address </label>
    <textarea name="address" row="2" id="address" class="form-control"></textarea>
  </div>

  <div class="col-12 mt-4">
    <button class="btn btn-primary float-end" type="submit">Submit form</button>
  </div>
</form>





<style>
.heading-man{background-color: #e3dede;padding: 0.8rem 0rem;border: 2px solid #cdcccc;}
table tr th{color:white;padding:1rem 2rem!important;}
table tr td{color:black;padding:1rem 1.6rem!important;}
.w-15{width:15%;}
</style>
<script>
$(document).ready(function(){
$(".father_sec").hide(); $(".hasband_sec").hide(); $("#gardian_type").change(function(){ 
var id = $("#gardian_type").val(); if(id === '1'){ $(".father_sec").toggle(); $(".hasband_sec").hide();
}else { $(".father_sec").hide(); $(".hasband_sec").toggle(); } });});

 $(document).ready(function(){
    $("#form_manage").hide();
    $("#sec_manage").on('click',function(){
     $("#form_manage").toggle();
     $(".list_manage").toggle();
    });
 });

</script>