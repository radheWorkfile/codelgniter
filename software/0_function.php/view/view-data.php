<?php

/***************************************************************************************************
 * Copyright (c) 2020. by Camwel Corporate Solution PVT LTD
 * This project is developed and maintained by Camwel Corporate Solution PVT LTD.
 * Nobody is permitted to modify the source or any part of the project without permission.
 * Project Developer: Camwel Corporate Solution PVT LTD
 * Developed for: Camwel Corporate Solution PVT LTD
 **************************************************************************************************/
?>
<style>
  img {
    max-width: 50px !important;
    height:35px;
    margin: 0px auto;
  }

  .view-cus-card {
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    background-color: #fff;
  }

  .cus-card-img {
    display: flex;
    justify-content: center;
    margin-bottom: 1rem;
  }

  .cus-card-info {
    display: flex;
    justify-content: space-between;
    gap: 1rem;
    flex-wrap: wrap;
  }

  .cus-card-info>div {
    width: 48%;
  }

  .left-info p,
  .right-info p {
    margin: 0.3rem 0;
  }

  .edit-btn-container {
    text-align: center;
    margin-top: 2rem;
  }

  table,
  tr,
  th,
  td {
    border: 1px dashed black;
    padding: 10px;
  }

  sup {
    cursor: pointer;
  }
</style>

<div class="row">
  <div class="col-md-12">
    <div class="view-cus-card" style="padding:0rem 1rem;">

      <table>
        <tr>
          <td colspan="4">
            <h3 class="text-center">Emergency Yojana Details</h3>
          </td>
        </tr>

        <tr>
        <td colspan="4">
        <h4 style="background-color:#b53b3b; color:white; padding:10px; margin:0;">
         Prsional Information
        </h4>
        </td>
        </tr>

        <tr>
          <th>Name</th>
          <td><?php echo $yojna_info->name;?></td>
          <th>Userid</th>
          <td><?php echo $yojna_info->user_id;?></td>
        </tr>
        <tr>
          <th>Phone No</th>
          <td><?php echo $yojna_info->mobile;?></td>
          <th>Email</th>
          <td><?php echo $yojna_info->email;?></td>
        </tr>

         <tr>
          <th>Father Name</th>
          <td><?php echo $yojna_info->father;?></td>
          <th>Mother Name</th>
          <td><?php echo $yojna_info->mother;?></td>
        </tr>

         <tr>
          <th>DOB</th>
          <td><?php echo $yojna_info->dob;?></td>
          <th>State</th>
          <td><?php echo $yojna_info->state;?></td>
        </tr>

         <tr>
          <th>District</th>
          <td><?php echo $yojna_info->district ;?></td>
          <th>Address</th>
           <td><?php echo $yojna_info->address ;?></td>
        </tr>

        <tr>
          <th>Aadhaar No</th>
          <td><?php echo $yojna_info->aadhaar_no;?></td>
          <th>Pan-No</th>
           <td><?php echo $yojna_info->pan_no;?></td>
        </tr>



        <tr>

        <th>Aadhaar Image</th>
        <td>
            <img src="<?php echo ($yojna_info->f_aadhaar_img != '') ? base_url($yojna_info->f_aadhaar_img) : base_url('uploads/default.jpg'); ?>" width="100" class="zoom-img">
        </td>
         <th>Pan Image</th>

        <th>
            <img src="<?php echo ($yojna_info->pan_img != '') ? base_url($yojna_info->pan_img) : base_url('uploads/default.jpg'); ?>" width="100" class="zoom-img">
        </th>
        
        </tr>

        <tr>
        <td colspan="4">
        <h4 style="background-color:#b53b3b; color:white; padding:10px; margin:0;">
         Hospital Information
        </h4>
        </td>
        </tr>


         <tr>
          <th colspan="1">Hospital Name</th>
          <td colspan="3"><?php echo $yojna_info->hos_name;?></td>
        </tr>

         <tr>
          <th>Mobile No</th>
          <td><?php echo $yojna_info->hos_mobile_no;?></td>  
          <th>Amount</th>
           <td>₹ <?php echo $yojna_info->amount;?></td>
        </tr>

         <tr>
          <th colspan="1">Address</th>
          <td colspan="3"><?php echo $yojna_info->hos_address;?></td>
        </tr>

        <tr>
        <th colspan="1">Patient  Image</th>
        <td>
        <img src="<?php echo ($yojna_info->patient_img  != '') ? base_url($yojna_info->patient_img ) : base_url('uploads/default.jpg'); ?>" width="100" class="zoom-img">
        </td>
        </tr>

        <tr>
        <th colspan="3">Medical Report</th>
        <th>
        <img src="<?php echo ($yojna_info->medical_report  != '') ? base_url($yojna_info->medical_report ) : base_url('uploads/default.jpg'); ?>" width="100" class="zoom-img">
        </th>
        </tr>

        <tr>
        <th colspan="3">Hospital Bill</th>
        <th>
        <img src="<?php echo ($yojna_info->hospital_bill  != '') ? base_url($yojna_info->hospital_bill ) : base_url('uploads/default.jpg'); ?>" width="100" class="zoom-img">
        </th>
        </tr>

        <tr>
        <th colspan="3">Doctor Prescription</th>
        <th>
        <img src="<?php echo ($yojna_info->doctor_prescription  != '') ? base_url($yojna_info->doctor_prescription ) : base_url('uploads/default.jpg'); ?>" width="100" class="zoom-img">
        </th>
        </tr>


        <tr>
        <th colspan="3">IPD Patient Bill</th>
        <th>
        <img src="<?php echo ($yojna_info->ipd_patient_img  != '') ? base_url($yojna_info->ipd_patient_img ) : base_url('uploads/default.jpg'); ?>" width="100" class="zoom-img">
        </th>
        </tr>

         <tr>
        <th colspan="3">Doctor Prescription </th>
        <th>
        <img src="<?php echo ($yojna_info->doctor_prescription  != '') ? base_url($yojna_info->doctor_prescription ) : base_url('uploads/default.jpg'); ?>" width="100" class="zoom-img">
        </th>
        </tr>


         <tr>
        <th colspan="3">Death Img </th>
        <th>
        <img src="<?php echo ($yojna_info->death_img  != '') ? base_url($yojna_info->death_img ) : base_url('uploads/default.jpg'); ?>" width="100" class="zoom-img">
        </th>
        </tr>


         <tr>
        <th colspan="3">Death Certificate </th>
        <th>
        <img src="<?php echo ($yojna_info->death_certificate  != '') ? base_url($yojna_info->death_certificate ) : base_url('uploads/default.jpg'); ?>" width="100" class="zoom-img">
        </th>
        </tr>
    

      </table>
      <!-- Centered Button -->
    </div>
  </div>
</div>

<style>
.zoom-img {
transition: transform 0.3s ease;
cursor: zoom-in;
}
.zoom-img:hover {
transform: scale(5); 
z-index: 10;
position: relative;
}
</style>

