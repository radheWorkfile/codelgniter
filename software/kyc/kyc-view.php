
		<div class="row">
		<div class="col-md-12">
		<div class="card bg-dark-c">
		<h5 class="bg-dark-g py-2 px-5 shadow-sm text-white">View Kyc</h5>
		<div class="row">

		<div class="col-md-4 py-4 px-5">
		<div class="card shadow" id="perInfo_Sec">
		<img src="<?php echo $getImg?$getImg:'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIf4R5qPKHPNMyAqV-FjS_OTBB8pfUV29Phg&s'; ?>"
		class="card-img-top object-fit-contain p-3"
		alt="User Icon"
		style="height:10rem;width:100%;object-fit:contain;">
		
		<p class="card-title text-center pb-1"><small><span class="border border-success px-3 btn-outline-primary rounded"><?php echo $member->name ? $member->name : 'Welnex'; ?></span></small></p>
		<p class="card-title text-center pb-1"><small><span class="border border-danger px-3 btn-outline-danger rounded-pill"><?php echo $member->username ? $member->username : 'Welnex'; ?></span></small></p>
		<div class="text-center mb-1">
		<a href="mailto:<?php echo $member->email; ?>" class="btn btn-success me-2 waves-effect waves-light btn-sm" target="_blank"><i class="mdi mdi-email-outline me-1"></i>Send Mail</a>
		<a href="tel:<?php echo $member->mobile; ?>" class="btn btn-primary waves-effect waves-light btn-sm" target="_blank"><i class="mdi mdi-phone-outline me-1"></i>Phone Call</a>
		</div>

		<!-- Clickable Section Headers -->
		<h6 class="bg-dark-n px-3 py-2 text-white m-0 pointer section-toggle" data-target="perInfo">
		<i class="fas fa-id-card me-2 py-1"></i> Personal Information
		<?php if($kyc_details->per_remark == 'completed'  && $kyc_details->per_status == '1'):?>
		<span class="float-end"><i class="fa fa-check-circle text-success"></i></span>
		 <?php else:?>
		 <span class="float-end"><i class="fas fa-times-circle text-danger"></i></span>
		 <?php endif;?>
		</h6>
		<h6 class="bg-dark-n px-3 py-2 text-white border-top border-white border-2 m-0 pointer section-toggle" data-target="aadhaarInfo">
		<i class="fas fa-address-card me-2 py-1"></i> Aadhar Information
		<?php if($kyc_details->aadhaar_remark == 'completed'  && $kyc_details->aadhaar_status == '1'):?>
		<span class="float-end"><i class="fa fa-check-circle text-success"></i></span>
		 <?php else:?>
		<span class="float-end"><i class="fas fa-times-circle text-danger"></i></span>
		 <?php endif;?>
		</h6>
		<h6 class="bg-dark-n px-3 py-2 text-white border-top border-white border-2 m-0 pointer section-toggle" data-target="PanInfo">
		<i class="fas fa-address-card me-2 py-1"></i> Pan Information
		<?php if($kyc_details->pan_remark == 'completed'  && $kyc_details->pan_status == '1'):?>
		<span class="float-end"><i class="fa fa-check-circle text-success"></i></span>
		 <?php else:?>
		 <span class="float-end"><i class="fas fa-times-circle text-danger"></i></span>
		 <?php endif;?>
		</h6>
		<h6 class="bg-dark-n px-3 py-2 text-white border-top border-white border-2 m-0 pointer section-toggle" data-target="bankInfoUpdate">
		<i class="fas fa-university me-2 py-1"></i> Bank Information
		<?php if($kyc_details->bank_remark == 'completed'  && $kyc_details->bank_status == '1'):?>
		<span class="float-end"><i class="fa fa-check-circle text-success"></i></span>
		 <?php else:?>
		 <span class="float-end"><i class="fas fa-times-circle text-danger"></i></span>
		 <?php endif;?>
		</h6>
		<h6 class="bg-dark-n px-3 py-2 text-white border-top border-white border-2 m-0 pointer section-toggle" data-target="nommineeInfo">
		<i class="fas fa-user-friends me-2 py-1"></i> Nominee Information
		<?php if($kyc_details->nomnee_remark == 'completed'  && $kyc_details->nomnee_status == '1'):?>
		<span class="float-end"><i class="fa fa-check-circle text-success"></i></span>
		 <?php else:?>
		 <span class="float-end"><i class="fas fa-times-circle text-danger"></i></span>
		 <?php endif;?>
		</h6>
		</div>
		</div>

		<div class="col-md-8"style="padding:1.5rem 1.5rem 1.5rem 0rem;">

		<!-- View part part  fade in fade out -->
		<?php if ($this->session->flashdata('flash-success')): ?><div id="flashMsg">
		<?= $this->session->flashdata('flash-success'); ?></div>
		<?php endif; ?>
		<?php if ($this->session->flashdata('flash-error')): ?>
		<div id="flashMsg"><?= $this->session->flashdata('flash-error'); ?></div>
		<?php endif; ?>
		<script>
		$(document).ready(function () {
		$("#flashMsg").hide().fadeIn(1000).delay(2000).fadeOut(1000);
		});
		</script>
		<!-- View part end -->


		<div class="row m-0">
		<!-- Sections -->

		


		<div class="col-md-12" id="perInfo">
		<div class="card rounded-top shadow">
		<h6 class="bg-dark-g py-3 px-5 shadow-sm text-white rounded-top mb-0">
		<i class="fas fa-id-card me-2 py-1"></i> Personal Information
		<span class="float-end"> 
		<?php if($kyc_details->per_remark != 'completed'  && $kyc_details->per_status != '1'):?>
		<span class="bg-danger border border-danger border-2 px-4 py-1 rounded-pill text-white pointer" data-bs-toggle="modal" data-bs-target="#perInfoModel">Reject</span>
		<span class="bg-success px-4 py-1 rounded-pill pointer" id="perInfo_Approved">Approved</span>
		<?php else:?>
		<span class="text-white"><i class="fa fa-check-circle"></i>&nbsp;Approved</span>
		<?php endif;?>
		</form>
		</span>
		</h6>

		
		<form action="javaScript:void(0);" id="perInfomation" method="post" data-id="<?php echo $targetInfo;?>" enctype="multipart/form-data">
		<div class="row py-4 px-3">

		<div class="col-md-6">
		<label class="text-color fw-bold lable-m"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Name</label>
		<div class="input-group m-t-2">
		<input type="text" readonly name="name" id="name" value="<?php echo $ver_member['name']?$ver_member['name']:'';?>">
		<input type="hidden" readonly name="id" id="id" value="<?php echo $ver_member['id']?$ver_member['id']:'';?>">
		<input type="hidden" readonly name="mem_id" id="mem_id" value="<?php echo $ver_member['mem_id']?$ver_member['mem_id']:'';?>">
		</div>
		</div>

		<div class="col-md-6">
		<label class="text-color fw-bold lable-m"><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;&nbsp;Mobile Number</label><div class="cover"></div>
		<div class="input-group m-t-2"><input type="text" name="mobile" id="mobile" readonly value="<?php echo $ver_member['mobile']?$ver_member['mobile']:'';?>">
		</div>
		</div>

		<div class="col-md-6 m-t-1">
		<label class="text-color fw-bold lable-m"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;Email-Id</label><div class="cover"></div>
		<div class="input-group m-t-2"><input type="text" name="email" id="email" readonly value="<?php echo $ver_member['email']?$ver_member['email']:'';?>">
		</div>
		</div>

		<!-- <div class="col-md-6 m-t-1">
		<label class="text-color fw-bold lable-m"><i class="fa fa-venus"></i>&nbsp;&nbsp;Gender</label>
		<div class="input-group m-t-2">
		<input type="text " readonly name="gender" id="gender" value="<?php echo $ver_member['gender']?$ver_member['gender']:'';?>">
		<div class="cover"></div>
		</div>
		</div> -->

		<div class="col-md-6 m-t-1">
		<label class="text-color fw-bold lable-m"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Date of Birth</label>
		<div class="input-group m-t-2">
		<input type="text" readonly name="dob" id="dob" value="<?php echo $ver_member['date_of_birth']?$ver_member['date_of_birth']:'';?>">
		<div class="cover"></div>
		</div>
		</div>


		<!-- <div class="col-md-6 m-t-1">
		<label class="text-color fw-bold lable-m"><i class="fa fa-link" aria-hidden="true"></i>&nbsp;&nbsp;State</label><div class="cover"></div>
		<div class="input-group m-t-2"><input type="text" name="state" id="state" readonly value="<?php echo $ver_member['state']?$ver_member['state']:'';?>">
		</div>
		</div> -->


		<!-- <div class="col-md-6 m-t-1">
		<p>State</p>
		<div class="m-t-1">
		<select class="input-group select2-with-search arvManage py-2"  name="state" id="state" data-id="district"style="border:1px solid #d2d2d2;">
        <option value=""> --- Select One --- </option>
        <?//php foreach($getState as $state): ?>
        <option value="<?php echo $state->id; ?>"><?php echo htmlspecialchars($state->state_cities); ?></option>
        <?///php endforeach; ?>
        </select>
		</div>
		</div> -->
		


		<!-- <div class="col-md-6 m-t-1">
		<label class="text-color fw-bold lable-m"><i class="fa fa-link" aria-hidden="true"></i>&nbsp;&nbsp;District</label><div class="cover"></div>
		<div class="input-group m-t-2"><input type="text" name="district" id="district" readonly value="<?php echo $ver_member['district']?$ver_member['district']:'';?>">
		</div>
		</div> -->


		<!-- <div class="col-md-6 m-t-1">
		<label class="text-color fw-bold lable-m"><i class="fa fa-link" aria-hidden="true"></i>&nbsp;&nbsp;Zip-Code</label><div class="cover"></div>
		<div class="input-group m-t-2"><input type="text" name="zipcode" id="zipcode" readonly value="<?php echo $ver_member['zipcode']?$ver_member['zipcode']:'';?>">
		</div>
		</div> -->

		<div class="col-md-12 m-t-1 px-3">
		<label for="" class="text-color lable-m"><i class="fa fa-map text-color" aria-hidden="true"></i>&nbsp;Address</label>
		<textarea name="address" id="address" class="w-100"><?php echo $ver_member['address']?$ver_member['address']:'';?></textarea>
		</div>


		<div class="row mt-4">
		<div class="col-md-1"></div>
		<div class="col-md-2">
		<button type="submit" class="btn btn-outline-dark"><i class="fa fa-arrow-left"></i> Back </button>	
		</div>
		<div class="col-md-6"></div>
		<div class="col-md-2">
		<p class="btn btn-primary editBtn" data-section="per"><i class="fa fa-edit"></i> Edit</p>
		<button type="submit" name="submit" class="btn btn-success updateBtn updateBtn_per" style="display:none;"><i class="fa fa-save"></i> Update</button>
		</div>
		<div class="col-md-1"></div>
		</div>

		</div>
		</form>


		</div>
		</div>
		</div>

		<div class="col-md-12 d-none" id="aadhaarInfo">
		<div class="card rounded-top shadow">
		<h6 class="bg-dark-g py-3 px-5 shadow-sm text-white rounded-top mb-0">
		<i class="fas fa-address-card me-2 py-1"></i> Aadhar Information   
		<span class="float-end">   
		<span class="bg-danger px-4 py-1 rounded-pill text-white pointer" data-bs-toggle="modal" data-bs-target="#aadhaarInfoModel"  id="aadhaarReject">Reject</span>
		<span class="bg-success px-4 py-1 rounded-pill pointer" id="aadhaarApprove">Approved</span>
		</span>
		</h6>

		<form action="javaScript:void(0);" id="aadhaarInformation" method="post" enctype="multipart/form-data">
		<div class="row py-4 px-3">

		<div class="col-md-12 mb-3">
		<div class="py-2 px-3" style="background-color:rgb(233, 234, 234);border:3px solid rgb(227, 230, 230);">
		<label for="aadhar" class="form-label mb-1"><span class="text-danger">*</span> Aadhar Number</label>
		<input type="text" id="aadhaar_nu" name="aadhaar_nu" readonly value="<?php echo $ver_member['aadhaar_nu']?$ver_member['aadhaar_nu']:'';?>" maxlength="12" oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')" class="form-control border-0 border-bottom rounded-0 bg-transparent p-0" placeholder="Enter Aadhar Number">
		<input type="hidden" readonly name="curr_id" id="curr_id" value="<?php echo $ver_member['mem_id']?$ver_member['mem_id']:'';?>">
		</div>
		</div>

		<div class="col-md-6 mb-3">
		<div class="py-2 px-3" style="background-color:rgb(233, 234, 234);border:3px solid rgb(227, 230, 230);">
		<label for="aadhar" class="form-label mb-1"><span class="text-danger">*</span> Aadhar Front Image</label>
		<input type="file" id="frontAadhaarImg" name="frontAadhaarImg" value="<?php echo $ver_member['front_aadhaar_img']?$ver_member['front_aadhaar_img']:'';?>" readonly class="form-control border-0 border-bottom rounded-0 bg-transparent p-0" placeholder="Enter Aadhar Number">
		<div id="preview_front_aadhaar" style="margin-top: 10px;display: flex; justify-content: center; align-items: center;"><img src="<?php echo base_url($ver_member['front_aadhaar_img']?$ver_member['front_aadhaar_img']:'');?>" style="height:3rem;" alt=""></div>
		</div>
		</div>

		<div class="col-md-6 mb-3">
		<div class="py-2 px-3" style="background-color:rgb(233, 234, 234);border:3px solid rgb(227, 230, 230);">
		<label for="aadhar" class="form-label mb-1"><span class="text-danger">*</span> Aadhar Back Image</label>
		<input type="file" name="back_aadhaar_img" id="back_aadhaar_img" readonly require value="<?php echo $ver_member['back_aadhaar_img']?$ver_member['back_aadhaar_img']:'';?>" class="form-control border-0 border-bottom rounded-0 bg-transparent p-0" placeholder="Enter Aadhar Number">
		<div id="preview_back_aadhaar" style="margin-top: 10px;display: flex; justify-content: center; align-items: center;"><img src="<?php echo base_url($ver_member['back_aadhaar_img']?$ver_member['back_aadhaar_img']:'');?>" style="height:3rem;" alt=""></div>
		</div>
		</div>


		<div class="row mt-4">
		<div class="col-md-1"></div>
		<div class="col-md-2">
		<button type="submit" class="btn btn-outline-dark"><i class="fa fa-arrow-left"></i> Back </button>	
		</div>
		<div class="col-md-6"></div>
		<div class="col-md-2">
		<p class="btn btn-primary editBtn" data-section="aadhaar"><i class="fa fa-edit"></i> Edit</p>
		<button type="submit" name="submit" class="btn btn-success updateBtn updateBtn_aadhaar" style="display:none;"><i class="fa fa-save"></i> Update</button>
		</div>
		<div class="col-md-1"></div>
		</div>

		</div>
		</form>


		</div>
		</div>

		<div class="col-md-12 d-none" id="PanInfo">
		<div class="card rounded-top shadow">
		<h6 class="bg-dark-g py-3 px-5 shadow-sm text-white rounded-top mb-0">
		<i class="fas fa-address-card me-2 py-1"></i> Pan Information
		<span class="float-end"> 
		<span class="bg-danger px-4 py-1 rounded-pill text-white pointer" data-bs-toggle="modal" data-bs-target="#panInfoModel">Reject</span>
		<span class="bg-success px-4 py-1 rounded-pill pointer" id="panInfoApproved">Approved</span>
		</span>
		</h6>


		<form action="javaScript:void(0);" id="panInformation_1" method="post" enctype="multipart/form-data">
		<div class="row py-4 px-3">

		<div class="col-md-6 mb-3">
		<div class="py-2 px-3" style="background-color:rgb(233, 234, 234);border:3px solid rgb(227, 230, 230);">
		<label for="aadhar" class="form-label mb-1"><span class="text-danger">*</span> Pan Number</label>
		<input type="text" id="pan_number" name="pan_number" readonly require value="<?php echo $ver_member['pan_nu']?$ver_member['pan_nu']:'N/A';?>" class="form-control border-0 border-bottom rounded-0 bg-transparent p-0" placeholder="Enter Aadhar Number" maxlength="10" oninput="validatePAN(this)">
		<input type="hidden" readonly name="curr_user" id="curr_user" value="<?php echo $ver_member['mem_id']?$ver_member['mem_id']:'';?>">
		</div>
		</div>

		<div class="col-md-6 mb-3">
		<div class="py-2 px-3" style="background-color:rgb(233, 234, 234);border:3px solid rgb(227, 230, 230);">
		<label for="aadhar" class="form-label mb-1"><span class="text-danger">*</span> Pan Image</label>
		<input type="file" id="front_pan_img" name="front_pan_img" readonly value="<?php echo $ver_member['front_pan_img']?$ver_member['front_pan_img']:'';?>" class="form-control border-0 border-bottom rounded-0 bg-transparent p-0" placeholder="Enter Aadhar Number">
		<div id="preview_front_pan" style="margin-top: 10px;display: flex; justify-content: center; align-items: center;"><img src="<?php echo base_url($ver_member['front_pan_img']?$ver_member['front_pan_img']:'');?>" style="height:3rem;" alt=""></div>
		</div>
		</div>


		<div class="row mt-4">
		<div class="col-md-1"></div>
		<div class="col-md-2">
		<button type="submit" class="btn btn-outline-dark"><i class="fa fa-arrow-left"></i> Back </button>	
		</div>
		<div class="col-md-6"></div>
		<div class="col-md-2">

		<p class="btn btn-primary editBtn" data-section="pan"><i class="fa fa-edit"></i> Edit</p>
		<button type="submit" name="submit" class="btn btn-success updateBtn updateBtn_pan" style="display:none;"><i class="fa fa-save"></i> Update</button>
		</div>
		<div class="col-md-1"></div>
		</div>

		</div>
		</form>


		</div>
		</div>

		<div class="col-md-12 d-none" id="bankInfoUpdate">
		<div class="card rounded-top shadow">
		<h6 class="bg-dark-g py-3 px-5 shadow-sm text-white rounded-top mb-0">
		<i class="fas fa-university me-2 py-1"></i> Bank Information
		<span class="float-end"> 
		<span class="bg-danger px-4 py-1 rounded-pill text-white pointer" data-bs-toggle="modal" data-bs-target="#bankInfoModel">Reject</span>
		<span class="bg-success px-4 py-1 rounded-pill pointer" id="bankInfoApproved">Approved</span>
		</span>
		</h6>


		<form action="javaScript:void(0);" id="bankInformation" method="post" enctype="multipart/form-data">
		<div class="row py-4 px-3">

		<div class="col-md-6 m-t-1">
		<label class="text-color fw-bold lable-m"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Bank Name</label><div class="cover"></div>
		<div class="input-group m-t-2"><input type="text" name="bank_name" id="bank_name" readonly value="<?php echo $ver_member['bank_name']?$ver_member['bank_name']:'';?>">
		<input type="hidden" readonly name="holderId" id="holderId" value="<?php echo $ver_member['mem_id']?$ver_member['mem_id']:'';?>">
		</div>
		</div>


		<div class="col-md-6 m-t-1">
		<label class="text-color fw-bold lable-m"><i class="fa fa-user"></i>&nbsp;&nbsp;A/C Holder</label><div class="cover"></div>
		<div class="input-group m-t-2"><input type="text" name="holder_name" id="holder_name" readonly value="<?php echo $ver_member['name']?$ver_member['name']:'';?>">
		</div>
		</div> 

		<div class="col-md-6 m-t-1">
		<label class="text-color fw-bold lable-m"><i class="fa fa-user"></i>&nbsp;&nbsp;A/C Number</label><div class="cover"></div>
		<div class="input-group m-t-2"><input type="text" name="bank_ac_no" id="bank_ac_no" readonly require value="<?php echo $ver_member['bank_ac_no']?$ver_member['bank_ac_no']:'';?>" oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')">
		</div>
		</div>

		<div class="col-md-6 m-t-1">
		<label class="text-color fw-bold lable-m"><i class="fa fa-user"></i>&nbsp;&nbsp;IFSC Code</label><div class="cover"></div>
		<div class="input-group m-t-2"><input type="text" name="bank_Ifsc" id="bank_Ifsc" readonly require value="<?php echo $ver_member['bank_Ifsc']?$ver_member['bank_Ifsc']:'';?>">
		</div>
		</div>



		<div class="col-md-6 mb-3">
		<div class="py-2 px-3"style="background-color:rgb(233, 234, 234);border:3px solid rgb(227, 230, 230);">
		<label for="aadhar" class="form-label mb-1 text-color fw-bold lable-m"><span class="text-danger">*</span> Bank Passbook</label>
		<input type="file" id="passbook_img" require name="passbook_img" value="<?php echo $ver_member['passbook_img']?$ver_member['passbook_img']:'';?>" readonly class="form-control border-0 border-bottom rounded-0 bg-transparent p-0" placeholder="Enter Aadhar Number">
		<div id="preview_passbook_aadhaar" style="margin-top: 10px;display: flex; justify-content: center; align-items: center;"><img src="<?php echo base_url($ver_member['passbook_img']?$ver_member['passbook_img']:'');?>" style="height:3rem;" alt=""></div>
		</div>
		</div>




		<div class="row mt-4">
		<div class="col-md-1"></div>
		<div class="col-md-2">
		<button type="submit" class="btn btn-outline-dark"><i class="fa fa-arrow-left"></i> Back </button>	
		</div>
		<div class="col-md-6"></div>
		<div class="col-md-2">
		<?php if($kyc_details->bank_remark != 'completed'  && $kyc_details->bank_status != '1'):?>
		<p class="btn btn-primary editBtn" data-section="bank"><i class="fa fa-edit"></i> Edit</p>
		<button type="submit" name="submit" class="btn btn-success updateBtn updateBtn_bank" style="display:none;"><i class="fa fa-save"></i> Update</button>
		<?php else:?>
		<span class="text-white"><i class="fa fa-check-circle"></i>&nbsp;Approved</span>
		<?php endif;?>
		</div>
		<div class="col-md-1"></div>
		</div>

		</div>
		</form>

		</div>
		</div>

		<div class="col-md-12 d-none" id="nommineeInfo">
		<div class="card rounded-top shadow">
		<h6 class="bg-dark-g py-3 px-5 shadow-sm text-white rounded-top mb-0">
		<i class="fas fa-user-friends me-2 py-1"></i> Nominee Information
		<span class="float-end"> 
		<span class="bg-danger px-4 py-1 rounded-pill text-white pointer" data-bs-toggle="modal" data-bs-target="#nomneeInfoModel">Reject</span>
		<span class="bg-success px-4 py-1 rounded-pill pointer" id="nomneeInfoApproved">Approved</span>
		</span>
		</h6>

		<form action="javaScript:void(0);" id="nomneeInformation" method="post" enctype="multipart/form-data">
		<div class="row py-4 px-3"> 

		<div class="col-md-6 m-t-1">
		<label class="text-color fw-bold lable-m"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Nomnee Name</label><div class="cover"></div>
		<div class="input-group m-t-2"><input type="text" name="nomnee_name" id="nomnee_name" readonly value="<?php echo $ver_member['nominee_name']?$ver_member['nominee_name']:'';?>">
		<input type="hidden" readonly require name="parId" id="parId" value="<?php echo $ver_member['mem_id']?$ver_member['mem_id']:'';?>">
		</div>
		</div>

		<div class="col-md-6 m-t-1">
		<label class="text-color fw-bold lable-m"><i class="fa fa-link" value="123456789123456" readonly aria-hidden="true"></i>&nbsp;&nbsp;Relationship</label><div class="cover"></div>
		<div class="input-group m-t-2"><input type="text" name="relationName" id="relationName" require readonly value="<?php echo $ver_member['nominee_relationship']?$ver_member['nominee_relationship']:'';?>">
		</div>
		</div>

		<div class="col-md-12 m-t-1 px-3">
		<label for="" class="text-color"><i class="fa fa-map text-color" aria-hidden="true"></i>&nbsp;Address</label>
		<textarea name="n_address" id="n_address" require class="w-100"><?php echo $ver_member['nominee_address']?$ver_member['nominee_address']:'';?></textarea>
		</div>

		<div class="row mt-4">
		<div class="col-md-1"></div>
		<div class="col-md-2">
		<button type="submit" class="btn btn-outline-dark"><i class="fa fa-arrow-left"></i> Back </button>	
		</div>
		<div class="col-md-6"></div>
		<div class="col-md-2">
		<p class="btn btn-primary editBtn" data-section="nomnee"><i class="fa fa-edit"></i> Edit</p>
		<button type="submit" name="submit" class="btn btn-success updateBtn updateBtn_nomnee" style="display:none;"><i class="fa fa-save"></i> Update</button>
		</div>
		<div class="col-md-1"></div>
		</div>

		</div>
		</form>


		</div>
		</div>
		</div>
		</div>



		</div>
		</div>
		</div>
		</div>


		<!-- ---------------------- persional info Model section start from here. --------------------  -->


<!-- Modal -->
<div class="modal fade" id="perInfoModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><span class="spinner-border spinner-border-sm"></span> Persional Information Remark</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
	   <form action="javaScript:void(0);" id="perRemark" method="post" enctype="multipart/form-data">
      <div class="modal-body">
		<label for="">Remark Message</label> 
	  <textarea name="perRemark" id="perRemark"  class="w-100" row="2"></textarea>
	  <input type="hidden" readonly name="uId" id="uId" value="<?php echo $ver_member['mem_id']?$ver_member['mem_id']:'';?>">
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
		<i class="fas fa-x-circle"></i> Close
		</button>
		<button type="submit" name="submit" class="btn btn-primary">
		<i class="fa fa-check-circle"></i> Submit
		</button>
      </div>
		</form>

    </div>
  </div>
</div>

<!-- ------------------------------------  Aadhaar model ------------------------------  -->

<div class="modal fade" id="aadhaarInfoModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><span class="spinner-border spinner-border-sm"></span> Aadhaar Information Remark</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
	   <form action="javaScript:void(0);" id="aadhaarRemark" method="post" enctype="multipart/form-data">
      <div class="modal-body">
		<label for="">Remark Message</label> 
	  <textarea name="aadhaar_remark" id="aadhaar_remark"  class="w-100" row="2"></textarea>
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
		<i class="fas fa-x-circle"></i> Close
		</button>
		<button type="submit" name="submit" class="btn btn-primary">
		<i class="fa fa-check-circle"></i> Submit
		</button>
      </div>
		</form>

    </div>
  </div>
</div>


<!-- ------------------------------------  Pan model ------------------------------  -->

<div class="modal fade" id="panInfoModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><span class="spinner-border spinner-border-sm"></span> Pan Information Remark</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
	   <form action="javaScript:void(0);" id="panRemark" method="post" enctype="multipart/form-data">
      <div class="modal-body">
		<label for="">Remark Message</label> 
	  <textarea name="pen_remark" id="pen_remark"  class="w-100" row="2"></textarea>
	  <input type="hidden" readonly name="uId" id="uId" value="<?php echo $ver_member['mem_id']?$ver_member['mem_id']:'';?>">
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
		<i class="fas fa-x-circle"></i> Close
		</button>
		<button type="submit" name="submit" class="btn btn-primary">
		<i class="fa fa-check-circle"></i> Submit
		</button>
      </div>
		</form>

    </div>
  </div>
</div>

<!-- ------------------------------------  Bank info model ------------------------------  -->

<div class="modal fade" id="bankInfoModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><span class="spinner-border spinner-border-sm"></span> Bank Information Remark</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
	   <form action="javaScript:void(0);" id="bankRemark" method="post" enctype="multipart/form-data">
      <div class="modal-body">
		<label for="">Remark Message</label> 
	  <textarea name="bank_remark" id="bank_remark"  class="w-100" row="2"></textarea>
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
		<i class="fas fa-x-circle"></i> Close
		</button>
		<button type="submit" name="submit" class="btn btn-primary">
		<i class="fa fa-check-circle"></i> Submit
		</button>
      </div>
		</form>

    </div>
  </div>
</div>

<!-- ------------------------------------  Nomnee info model ------------------------------  -->

<div class="modal fade" id="nomneeInfoModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><span class="spinner-border spinner-border-sm"></span> Nomnee Information Remark</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
	   <form action="javaScript:void(0);" id="nomneeRemark" method="post" enctype="multipart/form-data">
      <div class="modal-body">
		<label for="">Remark Message</label> 
	  <textarea name="nomnee_remark" id="nomnee_remark"  class="w-100" row="2"></textarea>
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
		<i class="fas fa-x-circle"></i> Close
		</button>
		<button type="submit" name="submit" class="btn btn-primary">
		<i class="fa fa-check-circle"></i> Submit
		</button>
      </div>
		</form>

    </div>
  </div>
</div>


		<!-- ---------------------- Model section start from end. --------------------  -->



		<style>
		.bg-dark-c{background-color:rgb(14, 33, 51) !important;}
		.bg-dark-n{background-color:rgb(17, 39, 61) !important;}
		.bg-dark-g{background-color:rgb(6, 91, 109) !important;}
		.pointer{cursor: pointer;}
		.m-t-1{margin-top:-1.1rem;}
		.m-t-2{margin-top:-1.8rem;}
		.lable-m{font-size:12px;}
		</style>


		<script>

		$(document).ready(function () {
			$('.editBtn').on('click', function () {
			const $btn = $(this);const section = $btn.data('section');
			$btn.html('<span class="spinner-border spinner-border-sm" aria-hidden="true"></span> Wait...');
			setTimeout(function () {
			$btn.hide();  $('.updateBtn_' + section).show(); $('input, textarea').removeAttr('readonly').removeClass('d-none');  }, 1000); });
			const allSections = ['perInfo', 'aadhaarInfo', 'PanInfo', 'bankInfoUpdate', 'nommineeInfo'];
			let currentVisible = 'perInfo';
			$('#' + currentVisible).removeClass('d-none');
			$('#perInfo_Sec .section-toggle').on('click', function () {
			const targetId = $(this).data('target');
			if (targetId === currentVisible) {if (currentVisible !== 'perInfo') {
			$('#' + currentVisible).addClass('d-none'); $('#perInfo').removeClass('d-none'); currentVisible = 'perInfo'; }
			} else { $('#' + currentVisible).addClass('d-none'); $('#' + targetId).removeClass('d-none');
			currentVisible = targetId; } });
		});


	function validatePAN(input) {
    let value = input.value.toUpperCase().replace(/[^A-Z0-9]/g, '');
    let formattedValue = '';
    let lettersPart = value.slice(0, 5).replace(/[^A-Z]/g, '');
    formattedValue += lettersPart;
    let digitsPart = value.slice(lettersPart.length, lettersPart.length + 4).replace(/[^0-9]/g, '');
    formattedValue += digitsPart;
    if (formattedValue.length == 9) {
    let lastLetterPart = value.slice(lettersPart.length + digitsPart.length, lettersPart.length + digitsPart.length + 1).replace(/[^A-Z]/g, '');
    formattedValue += lastLetterPart;
    }
    input.value = formattedValue;
    }


	function showImagePreview(inputId, previewId) {
	const input = document.getElementById(inputId);
	const preview = document.getElementById(previewId);
	input.addEventListener('change', function () {
	preview.innerHTML = ''; const file = this.files[0];
	if (file && file.type.startsWith('image/')) {
	const reader = new FileReader(); reader.onload = function (e) {
	const img = document.createElement('img');
	img.src = e.target.result; img.style.height = '4rem';
	img.style.width = 'auto'; img.style.display = 'block';img.style.margin = '0 auto';   
	preview.appendChild(img); }; reader.readAsDataURL(file); } 
	});
	}
	showImagePreview('frontAadhaarImg', 'preview_front_aadhaar');   
	showImagePreview('back_aadhaar_img', 'preview_back_aadhaar');
	showImagePreview('front_pan_img', 'preview_front_pan');
	showImagePreview('passbook_img', 'preview_passbook_aadhaar');


	$(document).ready(function(){
		$('#perInfomation').submit(function(e) {
		e.preventDefault();
		$.ajax({
		url: '<?php echo base_url(); ?>mlm_software/admin/member/kyc_verified_mem',
		type: "POST",
		data: $(this).serialize(),
		dataType: 'json',
		beforeSend: function() {$('#btnSubmit').html('<i class="fe fe-settings bx-spin"></i> Please Wait');},
		complete: function() {$('#btnSubmit').html('<i class="ti-save"></i> Save');},
		success: function(htmlAmi) {
			console.log(htmlAmi);
		    window.location.reload();
		 } });
		});
		});

	$(document).ready(function(){
	$('#aadhaarInformation').submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: '<?php echo base_url(); ?>mlm_software/admin/member/aadhaar_update',
        type: "POST",
       data: new FormData(this),
		processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function(htmlAmi) {
            console.log(htmlAmi);
            window.location.reload();
        },
       });
	});
	});

	$(document).ready(function(){
	$('#panInformation_1').on('submit',function(e) {
    e.preventDefault();
    $.ajax({
        url: '<?php echo base_url(); ?>mlm_software/admin/member/pan_update',
        type: "POST",
       data: new FormData(this),
		processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function(htmlAmi) {
            window.location.reload();
        },
       });
	});
	});


		$(document).ready(function(){
	$('#bankInformation').submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: '<?php echo base_url(); ?>mlm_software/admin/member/bank_update',
        type: "POST",
       data: new FormData(this),
		processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function(htmlAmi) {
            console.log(htmlAmi);
            window.location.reload();
        },
       });
	});
	}); 


		$(document).ready(function(){
		$('#nomneeInformation').submit(function(e) {
		e.preventDefault();
		$.ajax({
		url: '<?php echo base_url(); ?>mlm_software/admin/member/nomnee_update',
		type: "POST",
		data: $(this).serialize(),
		dataType: 'json',
		beforeSend: function() {$('#btnSubmit').html('<i class="fe fe-settings bx-spin"></i> Please Wait');},
		complete: function() {$('#btnSubmit').html('<i class="ti-save"></i> Save');},
		success: function(htmlAmi) {
			console.log(htmlAmi);
		    window.location.reload();
		 } });
		});
		});

		$(document).ready(function(){
		$('#perRemark').submit(function(e) {
		e.preventDefault();
		$.ajax({
		url: '<?php echo base_url(); ?>mlm_software/admin/member/perRemark',
		type: "POST",
		data: $(this).serialize(),
		dataType: 'json',
		beforeSend: function() {$('#btnSubmit').html('<i class="fe fe-settings bx-spin"></i> Please Wait');},
		complete: function() {$('#btnSubmit').html('<i class="ti-save"></i> Save');},
		success: function(htmlAmi) {
			console.log(htmlAmi);
		    window.location.reload();  
		 } });
		});
		});

		
$(document).ready(function() {
    $("#perInfo_Approved").click(function(e) {
        e.preventDefault(); 
        const formData = new FormData();
        formData.append('uId', $('#uId').val());
        $.ajax({
            type: "POST",
            url: '<?= base_url("mlm_software/admin/member/perInfo_Approved") ?>',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                // window.location.reload();
            },
        });
    });
});



$(document).ready(function() {
    $("#aadhaarApprove").click(function(e) {
        e.preventDefault(); 
        const formData = new FormData();
        formData.append('uId', $('#uId').val());
        $.ajax({
            type: "POST",
            url: '<?= base_url("mlm_software/admin/member/aadhaar_Approved") ?>',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                window.location.reload();
            },
        });
    });
});


$(document).ready(function() {
    $("#aadhaarRemark").on("submit",function(e) {
        e.preventDefault(); 
        const formData = new FormData();
        formData.append('uId', $('#uId').val());
        formData.append('aadhaar_remark', $('#aadhaar_remark').val());
        $.ajax({
            type: "POST",
            url: '<?= base_url("mlm_software/admin/member/aadhaar_remark") ?>',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                window.location.reload();
            },
        });
    });
});


$(document).ready(function() {
    $("#panInfoApproved").click(function(e) {  
		alert("Pan info");
        e.preventDefault(); 
        const formData = new FormData();
        formData.append('uId', $('#uId').val());
        $.ajax({
            type: "POST",
            url: '<?= base_url("mlm_software/admin/member/pan_Approved") ?>',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                window.location.reload();
            },
        });
    });
});


$(document).ready(function() {
    $("#panRemark").on("submit",function(e) {
        e.preventDefault(); 
        const formData = new FormData();
        formData.append('uId', $('#uId').val());
        formData.append('pen_remark', $('#pen_remark').val());
        $.ajax({
            type: "POST",
            url: '<?= base_url("mlm_software/admin/member/pan_remark") ?>',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                window.location.reload();
            },
        });
    });
});



$(document).ready(function() {
    $("#bankInfoApproved").click(function(e) {
        e.preventDefault(); 
        const formData = new FormData();
        formData.append('uId', $('#uId').val()); 
        $.ajax({
            type: "POST",
            url: '<?= base_url("mlm_software/admin/member/bank_Approved") ?>',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                window.location.reload();
            },
        });
    });
});


$(document).ready(function() {
    $("#bankRemark").on("submit",function(e) {
        e.preventDefault(); 
        const formData = new FormData();
        formData.append('uId', $('#uId').val());
        formData.append('bank_remark', $('#bank_remark').val());
        $.ajax({
            type: "POST",
            url: '<?= base_url("mlm_software/admin/member/bank_remark") ?>',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                window.location.reload();
            },
        });
    });
});



$(document).ready(function() {
    $("#nomneeInfoApproved").click(function(e) {
        e.preventDefault(); 
        const formData = new FormData();
        formData.append('uId', $('#uId').val()); 
        $.ajax({
            type: "POST",
            url: '<?= base_url("mlm_software/admin/member/nomnee_Approved") ?>',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                window.location.reload();
            },
        });
    });
});


$(document).ready(function() {
    $("#nomneeRemark").on("submit",function(e) {
        e.preventDefault(); 
        const formData = new FormData();
        formData.append('uId', $('#uId').val());
        formData.append('nomnee_remark', $('#nomnee_remark').val());
        $.ajax({
            type: "POST",
            url: '<?= base_url("mlm_software/admin/member/nomnee_remark") ?>',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                window.location.reload();
            },
        });
    });
});




	


		</script>


		<style>	
		.input-group {max-width: 34rem;width: 96%;position: relative;}	
		.input-group label {position: absolute;opacity: 0.9;font-size: 12px;font-weight:800;	
		left: 1rem;pointer-events: none;color:rgb(25, 88, 67);transition: all 0.22s;top: 50%;transform: translateY(-50%);display: block;}	
		.input-group input {width: 100%;padding: 0.5rem;border:1px solid #d2d2d2;margin: 1.5rem 0;font-size: 12px;}	
		.input-group input:focus {border:1px solid rgb(197, 196, 196);outline: 0;}	
		.input-group input:focus + label,.input-group input:hover + label,	
		.input-group input:valid + label {top: 0;font-size: 12px;transform: translateY(0);left: 0;opacity: 1;}	
		.input-group .cover {width: 100%;position: absolute;}	
		.text-color{color:rgb(25, 88, 67);}
		.border-m{border:1px solid red;}
		</style>	


<script>
		function veri_kyc_details(id) {
		$.ajax({
			type: "POST",
			url: '<?php echo base_url(); ?>mlm_software/admin/member/kyc_verified',
			data: {
				'id': id
			},
			dataType: 'json',
			success: function(data)
			{
				//console.log(data.is_verified[0]);
				
				 const kyc = data.is_verified;
				 const checkboxMap={0:'per_info',1:'aadhaar_info',2:'pan_info',3:'bank_info',4:'nomanee_info'};

                for (let i = 0; i < kyc.length; i++) {
                    const fieldName = checkboxMap[i];
                    const isChecked = kyc[i] !== '0';
                    $(`input[name="${fieldName}"]`).prop('checked', isChecked);
                }
				
				$('#p_name').text(data.name);
				$('#p_mobile').text(data.mobile);
				$('#p_email').text(data.email);
				$('#p_address').text(data.address);
				$('#p_dob').text(data.date_of_birth);
				$('#p_adhar_num').text(data.aadhaar_nu);
				$('#f_adhar_card').html('<a href="' + base_url + data.front_aadhaar_img + '" target="_blank"><img src="' + base_url + data.front_aadhaar_img + '" class="actPbrk"  style="max-width:100%; height:50px;" alt="Aadhaar Front"></a>');
				$('#b_adhar_card').html('<a href="' + base_url + data.back_aadhaar_img + '" target="_blank"><img src="' + base_url + data.back_aadhaar_img + '" class="actPbrk" style="max-width:100%; height:50px;" alt="Aadhaar Back"></a>');
				$('#p_pan_num').text(data.pan_nu);
				$('#f_pan_img').html('<a href="' + base_url + data.front_pan_img + '" target="_blank"><img src="' + base_url + data.front_pan_img + '" class="actPbrk" style="max-width:100%; height:50px;" alt="Pan Card"></a>');
				$('#b_pan_img').html('<a href="' + base_url + data.back_pan_img + '" target="_blank"><img src="' + base_url + data.back_pan_img + '" class="actPbrk" style="max-width:100%; height:50px;" alt="Aadhaar Front"></a>');
				$('#bank_p_name').text(data.bank_name);
				$('#acc_numb').text(data.bank_ac_no);
				$('#ifsc_code').text(data.bank_Ifsc);
				$('#acc_branch').text(data.bankBrName);
				$('#acc_Passbook').html('<a href="' + base_url + data.passbook_img + '" target="_blank"><img src = "' + base_url + data.passbook_img + '" class="actPbrk" style="max-width:100%; height:50px;" alt="passbook Image"></a>');
				$('#nom_name').text(data.nominee_name);
				$('#nome_relation').text(data.nominee_relationship);
				$('#kycremark').text(data.kyc_remark);

				if (data && !data.error) {
					$('#id').val(data.id);
					let isComplete = true;
					if (data.aadhaar_nu) {
						$('#aadhaar_nu').text(data.aadhaar_nu).hide();
					} else {
						$('#aadhaar_nu').text('Update Aadhaar Number..').show();
						isComplete = false;
					}

					if (data.bank_ac_no) {
						$('#bank_ac_no').text(data.bank_ac_no).hide();
					} else {
						$('#bank_ac_no').text('Update Bank Acc Number.').show();
						isComplete = false;
					}

					if (data.nominee_name) {
						$('#nominee_name').text(data.nominee_name).hide();
					} else {
						$('#nominee_name').text('Update Nominee Name....').show();
						isComplete = false;
					}

					// if (data.adhar_img) {
					// 	$('#adhar_img').text(data.adhar_img).hide();
					// } else {
					// 	$('#adhar_img').text('Update Aadhaar Image...').show();
					// 	isComplete = false;
					// }

					// if (data.pan_img) {
					// 	$('#pan_img').html(data.pan_img).hide();
					// } else {
					// 	$('#pan_img').text('Update Pan Image...').show();
					// 	isComplete = false;
					// }

					if (data.passbook_img) {
						$('#passbook_img').html('<span class="text-success">Complete Your KYC</span><br>').show();
					} else {
						$('#passbook_img').text('Update Bank Passbook...').show();
						isComplete = false;
					}

					if (isComplete) {
						$('#passbook_img').html('<span class="text-success">Complete Your KYC</span><br>').show();
						$('#proceedProduct').show();
					} else {
						$('#passbook_img').html('');
						$('#proceedProduct').hide();
					}

				} else {
					alert("No data found for the given ID.");
					$('#proceedProduct').hide();
					$('#passbook_img').html('');
				}
			},
		});
	}
</script>

		
		
		
		
		
		
