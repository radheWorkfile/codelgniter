<div class="inner-body">                       
	<!-- Page Header -->
	<div class="page-header">
		<div>
			<h2 class="main-content-title tx-24 mg-b-5">Software</h2>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0);">Company Basic</a></li>
				<li class="breadcrumb-item active" aria-current="page">Setting</li>
			</ol>
		</div>
		<div class="d-flex">
			<div class="justify-content-center">
				<a href="<?php echo base_url('admin/employee/add_employee');?>" class="btn btn-success btn-icon-text my-2 me-2"> <i class="fe fe-plus"></i> Join Employee </a>
              <button type="button" class="btn btn-primary btn-icon-text my-2 me-2" id="miArvClk"> <i class="fe fe-filter me-2"></i> Current Time </button>
              <a href="<?php echo base_url('auth/login/signout');?>" class="btn btn-danger btn-icon-text  my-2 me-2"> <i class="fe fe-power me-2"></i> Sign Out </a>
			</div>
		</div>
	</div>
	<!-- End Page Header -->

	<style>
	.miBck a:hover{ background-color:#645bca; color:#fff;}
	.miBck{ font-weight:600;text-transform: uppercase; float:right;margin-right: 10px;}
	.miBck a{ border:1px solid #645bca;padding: 8px 12px 8px 12px;border-radius: 5px;color: #645bca;font-weight: bold;}
	.miLst{ font-weight:600;text-transform: uppercase;}
	.miLst i{ background-color: #645bca;padding: 11px 11px 10px 10px ;margin-right: 10px;border-radius: 20px;color: #fff;font-weight: bold;}
	.miHeader{padding: 20px 15px 15px 15px;border-bottom: 1px solid #cccece;margin: 0px -1px 20px -1px;border-top-left-radius: 5px;border-top-right-radius: 5px;}
	.cardTtl{border:1px solid #fff;padding:0px 0px 5px 0px;margin-bottom: 20px;border-radius: 5px;background-color: #fff;}
	.rotate{animation: rotation 5s infinite linear;font-size: 18px;}
	@keyframes rotation { from {transform: rotate(0deg);}to {transform: rotate(360deg);}}
	</style>
<!------------------------------------------------------------------------------------------>
	 <div class="row row-sm">
     	<div class="col-md-12 col-lg-12">
            <div class="alert alert-danger" role="alert">
                  <strong> Warning!</strong>
                    <span style="font-size:11.5px;"> 
             Please donot change any setting here until and unless you know what you are doing. Please take support team or developer advice before making any changes at live site.
                    </span>
             </div>
         </div>
        <div class="col-md-8 col-lg-8">
        	<div class="cardTtl">	
        		<div class="miHeader">
                	<span class="miLst"><i class="si si-home"></i>Company Basic Details</span>
                </div>
                <form id="basic_data">
                  <div class="row row-sm amiCrd">  
                    <div class="col-md-6">
                           <div class="form-group"><p class="mg-b-10">Company Name</p>
                            <input type="text" class="form-control" name="company_name" oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g,'').replace(/\s+/g,' ')" placeholder="Enter Your Company Name" value="<?php echo config_item('company_name') ?>">
                        </div>
                        <div class="form-group"><p class="mg-b-10">Mobile Number</p>
                            <input type="text" class="form-control"  name="mobile" placeholder="Enter Your Mobile Number" oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')" maxlength="10" value="<?php echo config_item('mobile_number') ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <p class="mg-b-10">Email ID</p>
                        <input type="text" class="form-control" name="email" placeholder="Enter Your Email ID" value="<?php echo config_item('email');?>">
                        </div>
                        <div class="form-group m-0">
                            <p class="mg-b-10">Owner Name</p>
                            <input type="text" class="form-control" name="owner_name" oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g,'').replace(/\s+/g,' ')" placeholder="Owner Name" value="<?php echo config_item('owner_name');?>">
                        </div>
                    </div>
                    
                    
                    <div class="col-md-12">
                        <label>Address: <span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text miClr"><i class="si si-event"></i></span>
                            </div>
                            <textarea class="form-control"  name="address" rows="8" placeholder="Enter Your Address."><?php echo config_item('address');?></textarea>
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-md-6">
                        <label>State: <span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text miClr"><i class="si si-layers"></i></span>
                            </div>
                           <div class="miSlwdth" style="width:87.75%"> 
							 <select class="form-control select2-with-search arvChange" name="get_state" id="get_state">
                              <option value=""> --- Select State --- </option>
                                <?php if($getState){foreach($getState as $state){?>   
                                  <option value="<?php echo $state->id;?>" <?php if($state->id==config_item('get_state')){echo 'selected="selected"';} ?> >
								  		<?php echo $state->state_cities;?>
                                   </option>
                                <?php }}?>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>District: <span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text miClr"><i class="si si-location-pin"></i></span>
                            </div>
                           <div class="miSlwdth" style="width:87.75%"> 
							 	<select class="form-control select2-with-search " name="district" id="district">
                              		<option value=""> --- Select Dsitrict --- </option>
                                     <?php if($getDistrict){foreach($getDistrict as $district){?>   
                                     <option value="<?php echo $district->id;?>" <?php if($district->id==config_item('district')){echo 'selected="selected"';} ?> >
								  			<?php echo $district->state_cities;?>
                                     </option>
                                <?php }}?>
                         		</select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Zipcode: <span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text miClr"><i class="si si-pin"></i></span>
                            </div>
                            <input type="text" class="form-control" name="zipCode" id="zipCode" oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')" maxlength="6" value="<?php echo config_item('zipCode');?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Registration No. : </label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text miClr"><i class="si si-home"></i></span>
                            </div>
                            <input type="text" class="form-control" name="cRegistration" id="cRegistration" value="<?php echo config_item('cRegistration');?>">
                        </div>
                    </div>
              
                    <div class="col-md-6">
                        <label>Pan No. : <span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text miClr"><i class="si si-grid"></i></span>
                            </div>
                            <input type="text" class="form-control" name="cPanNu" id="cPanNu" value="<?php echo config_item('cPanNu');?>" oninput="this.value = this.value.toUpperCase().replace(/[^A-Z0-9]/g, '')" placeholder="Ex:- BKMPK4221L" maxlength="10">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>GST No. : </label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text miClr"><i class="si si-loop"></i></span>
                            </div>
                            <input type="text" class="form-control" name="cGstNu" id="cGstNu" value="<?php echo config_item('cGstNu');?>" oninput="this.value = this.value.toUpperCase().replace(/[^A-Z0-9]/g, '')" placeholder="Ex:- 10BKMPK4221L1ZC" maxlength="15">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label>Company Url. : <span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text miClr"><i class="si si-link"></i></span>
                            </div>
                            <input type="text" class="form-control" name="compUrl" id="compUrl" value="<?php echo config_item('compUrl');?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn ripple btn-outline-success pull-right amiStl" id="cmpnyBasic"><i class="ti-save"></i> Submit</button>
                    </div>
                  </div>
                </form>
            </div>
            
<div class="row row-sm miBottom">
  <div class="col-sm-12 col-lg-12 col-xl-12">
    <div class="card">
      <div class="card-header border-0">
        <h6 class="card-title marGn">Company's Bank List </h6>
      </div>
      <div class="card-body ">
       <div class="row row-sm">
  		  <div class="col-sm-12 col-lg-12 col-xl-12">
           <div class="table-responsive">
              <table class="table text-nowrap text-md-nowrap table-striped table-bordered table-hover mg-b-0 " id="getBankDetails">
                <thead class="ami_tHeader">
                  <tr>
                    <th>S No.</th>
                    <th>Bank Name</th>
                    <th>Account Number</th>
                    <th>IFSC Code</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
					if($account)
					{
						$sn=0;
						foreach($account as $acc)
						{
						++$sn;
					?>
						<tr>
                        	<th><?php echo $sn;?>.</th>
                            <td><?php echo $acc->bank_name;?></td>
                            <td><?php echo $acc->account_no;?></td>
                            <td><?php echo $acc->ifsc_code;?></td>
                            <td><a class="btn ripple miView btn-sm getAction" id="mkAt-<?php echo $acc->id;?>" data-id="" href="javascript:void(0);"><i class="fe fe-eye"></i></a></td>
                        </tr>
					<?php	}}else{?>
							<tr>
                            	 <td colspan="5">
                            	   <div class="noDtFound">	
                                        <div style="color:#8a3b3b;text-transform:uppercase;font-weight:bold;">No data available in table</div>
                                        <img src="<?php echo base_url('uploads/addnewitem.svg');?>">
                                 	</div>
                                 </td>
                            </tr>
					<?php }?>
                </tbody>
                
              </table>
            </div> 
           </div>
          </div>         
      </div>
    </div>
  </div>
</div>
            
        </div>
        <div class="col-md-4 col-lg-4">
        	<div class="cardTtl">	
        		<div class="miHeader">
                	<span class="miLst"><i class="si si-home"></i>Dark Favicon</span>
                </div>
                  <div class="row row-sm amiCrd">  
                    <div class="col-md-12">
                            <div class="miFl">
                                <input type="file" id="dark_fabcon" name="dark_fabcon">
                                <button class="miBtnF pull-right uplod miUpload" id="darkFavicon" ><i class="ti-save"></i> Update</button>
                            </div>
                            
                        </div>
                    <div class="col-md-12">
                            <div class="text-center pt-2 miDrkLg">
                                <img src="<?php echo base_url(config_item('logo_sm_light'));?>" alt="Light Logo" width="15%">
                            </div>
                        </div>
                  </div>
              </div>
            <div class="cardTtl">	
        		<div class="miHeader">
                	<span class="miLst"><i class="si si-home"></i>Light Favicon</span>
                </div>
                  <div class="row row-sm amiCrd">  
                     <div class="col-md-12">
                                <div class="miFl">
                                    <input type="file"  id="light_fabcon" name="light_fabcon">
                                    <button class="miBtnF pull-right uplod miUpload" id="lightFavicon" ><i class="ti-save"></i> Update</button>
                                </div>	
                            </div>
                     <div class="col-md-12">
                                <div class="text-center pt-2 miLgtLg">
                                    <img src="<?php echo base_url(config_item('logo_sm'));?>" alt="Dark Logo" width="15%">
                                </div>
                            </div>
                  </div>
              </div>
            <div class="cardTtl">	
        	<div class="miHeader"><span class="miLst"><i class="si si-home"></i>Dark Logo</span></div>
            <div class="row row-sm amiCrd">  
          	   <div class="col-md-12">
                <div class="miFl logoR ">
                    <input type="file"  class="bgLog"  id="dark_logo">
                    <button class="miBtnF pull-right uplod miUpload" id="darkLogo"><i class="ti-save"></i> Update</button>
                </div>  
            </div>
               <div class="col-md-12">
                            <div class="text-center pt-2 miDrkLg">
                                <img src="<?php echo base_url(config_item('logo_dark'));?>" alt="Dark Logo" width="58%">
                            </div>
                        </div>
            </div>
           </div> 
            <div class="cardTtl" style="margin-bottom:75px !important;">	
        		<div class="miHeader">
                	<span class="miLst"><i class="si si-home"></i>Light Favicon</span>
                </div>
                  <div class="row row-sm amiCrd">  
                     <div class="col-md-12">
                            <div class="miFl logoR">
                                <input type="file" id="light_logo">
                                <button class="miBtnF pull-right uplod miUpload" id="lightLogo"><i class="ti-save"></i> Update</button>
                            </div>
                            
                        </div>
                     <div class="col-md-12">
                            <div class="text-center pt-2 miLgtLg">
                                <img src="<?php echo base_url(config_item('logo_light'));?>" alt="Dark Logo" width="58%">
                            </div>
                        </div>
                  </div>
              </div>   
        </div>
	 </div>
     
<!------------------------------------------------------------------------------------------>
    <!-- Row -->
    
					
<style>
.noDtFound{text-align:center;}
.noDtFound img{ height:180px;}
.ami_tHeader {background-color: #088;}
.ami_tHeader > tr > th {color: #FFFFFF !important;border: 1px solid #088 !important;border-top-width: 1px;border-bottom-width: 1px;border-bottom-style: solid;border-bottom-color: rgb(0, 136, 136);padding: 12px 0px 12px 5px !important;}

.marGn{ margin-top:7px;}
 .card-title::before {
  content: "";
  position: absolute;
  left: 0px;
  padding: 2px;
  height: 30px;
  background: #6f42c1;top: 20px;
}




.miDrkLg{ margin-top:5px;background-color: #e1e1e1;border: 1px solid #d2cdcd;}.miDrkLg img{padding: 10px;}
.miLgtLg{ margin-top:5px;background-color: #f16d75;border: 1px solid #c43d46;}.miLgtLg img{padding: 10px;}
.amiCrd{background-color:#fff;margin:15px;border: 1px solid #eee;}.amiStl{ margin-top: 18px; margin-bottom: 7px;}
.miFl{border:1px solid #004a99;border-radius:3px;border-top-left-radius: 5px; border-bottom-left-radius: 5px;}    
input[type="file"]{color: #004a99;}  
input[type="file"]::file-selector-button {margin-right: 20px;border: none;background: #004a99;padding: 7.8px 10px;border-radius: 3px;
  color: #fff;cursor: pointer;transition: background .2s ease-in-out;border-top-right-radius: 0px;border-bottom-right-radius: 0px;}
 .miBtnF{background-color:#004a99;padding: 8px 15px 8px 15px;color: #fff;margin-right: -1px;border: 1px solid #004a99;border-bottom: 0px;border-top-right-radius: 6px;border-bottom-right-radius: 6px;cursor:pointer} 
 .miBtnF:hover{ background-color:#003870;border: 1px solid #003870;border-bottom: 0px;}.uplod{ margin-top: -2.35rem; z-index: 5; position: relative;} 
 .uplodLogo {z-index: 5; position: relative;margin-top: -1px;}.logoR{ border-radius:6px;}#cmpnyBasic{ width:130px;}
</style>
<script>
$('#basic_data').submit(function (e) {
	let base_url=$('#base_url').val();
    e.preventDefault();
    $.ajax({
        url:base_url+'software/setting/basic_data',
        type:"POST",
        data:$(this).serialize(),
        dataType:'json',
		beforeSend:function(){$('#cmpnyBasic').html('<i class="fe fe-settings bx-spin"></i> Please Wait');},
        complete:function(){$('#cmpnyBasic').html('<i class="ti-save"></i> Submit');},
	    success:function(htmlAmi){toastMultiShow(htmlAmi.adClass,htmlAmi.msg,htmlAmi.icon);}
    });
});
$(document).ready(function() 
{
    $(".arvChange").change(function() 
	{
		let actNbtn = $(this).attr('id');
        let getTrgtId = $(this).attr('data-id');
		if (actNbtn=='get_state')
		{
			
            let getResourceLoc = $('#base_url').val() + "software/setting/cityList";
            $('#district').css('color', '#099b7e !important').html('<option>Please Wait.....</option>');
            $.post(getResourceLoc, { id: $('#' + actNbtn).val() }, function(htmlAmi) {
                $('#district').html(htmlAmi);
                $('#district').css('color', 'rgb(62, 62, 62) !important')
            });
        
			}
		});
});




$(".miUpload").on("click", function() {
	let actNbtn=$(this).attr('id');
	var myArray = {
        "darkFavicon"   :   "dark_fabcon",
        "lightFavicon"  :   "light_fabcon",
        "darkLogo"      :   "dark_logo", 
        "lightLogo"     :   "light_logo"
        };
	var lgImg = document.getElementById(myArray[actNbtn]).files[0];	
	if(!isCheck(myArray[actNbtn]))
    {let errMSG=["Please input logo image"];
    toastMultiShow('tst_danger',errMSG,'<i class="fe fe-settings bx-spin"></i>');
    }else{
	let base_url=$('#base_url').val();
	f = new FormData();
	f.append('file', lgImg);
	f.append('miActn', actNbtn);
	$.ajax({
		type: "POST",
		url: base_url + "software/setting/upload_logo",
		data: f,contentType: false,cache: false,processData: false,
		dataType:"json",
		success: function(dataAmi){toastMultiShow(dataAmi.adClass,dataAmi.msg,dataAmi.icon);setTimeout(function(){location.reload(true);}, 2000);}
	});
	}	
    })

function isCheck(str){var inputBx=$('#'+str).val();if(inputBx==""){return '';}else{return inputBx;}}	



</script>





					
					
					
					
					
					