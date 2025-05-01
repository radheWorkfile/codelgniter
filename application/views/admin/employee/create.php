
				<div class="page-wrapper">
				<div class="page-content">
				<div id="repeater">
				<div class="card">
				<div class="card-body">

				<div class="d-flex align-items-center justify-content-between">
				<h5 class="mb-4"><i class="bx bx-home-alt"></i> Create Employee</h5>
				<button class="btn btn-primary w-start"><a href="javaScript:void(0);" class="text-white">+ Create Employee</a></button>
				<button class="btn btn-danger back-btn hidden"><a href="javaScript:void(0);" class="text-white">+ Back</a></button>
				</div>

		<!--===============================================================-->

				<div class="card-body p-4 basic-management f-work hidden">  
				<form class="row g-3" id="targetItem" method="post" accept-charset="utf-8" data-id="<?php echo $createAction; ?>">
				<div class="col-md-4">
				<label for="input25" class="form-label">Name</label>
				<div class="input-group">
				<span class="input-group-text"><i class="bx bx-user"></i></span>
				<input type="text" class="form-control" id="name" name="name" placeholder="First Name">
				</div>
				</div>

				<div class="col-md-4">
				<label for="input26" class="form-label">Father Name</label>
				<div class="input-group">
				<span class="input-group-text"><i class="bx bx-user"></i></span>
				<input type="text" class="form-control" id="fname" name="fname" placeholder="Last Name">
				</div>
				</div>

				<div class="col-md-4">
				<label for="input28" class="form-label">Mobile Number</label>
				<div class="input-group">
				<span class="input-group-text"><i class="bx bx-lock-alt"></i></span>
				<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Password">
				</div>
				</div>

				<div class="col-md-4">
				<label for="input27" class="form-label">Email</label>
				<div class="input-group">
				<span class="input-group-text"><i class="bx bx-envelope"></i></span>
				<input type="text" class="form-control" id="email" name="email" placeholder="Email">
				</div>
				</div>

				<div class="col-md-4">
				<label for="input29" class="form-label">DOB</label>
				<div class="input-group">
				<span class="input-group-text"><i class="bx bx-calendar"></i></span>
				<input type="text" class="form-control" name="dob" id="dob" placeholder="DOB">
				</div>
				</div>

				<div class="col-md-4">
				<label for="input32" class="form-label">Address</label>
				<div class="input-group">
				<span class="input-group-text"><i class="bx bx-buildings"></i></span>
				<input type="text" class="form-control" name="address" id="address" placeholder="City">
				</div>
				</div>
                 

				<divDIV class="col-md-9"></divDIV>
				<div class="col-md-3 MT-5">
				<div class="d-md-flex d-grid align-items-center gap-3">
				<button type="button" class="btn btn-danger px-4">Back</button>
				<button type="submit" name="submit" id="submit-btn" class="btn btn-primary px-4">Submit</button>
				</div>
				</div>

				</form>
				</div>

                <!-- Repeater Items ==================================-->

				<div class="card-body p-4 basic-management l-man-work"> 
				<div class="table-responsive">
				<table class="table mb-0">
					<thead class="table-light">
						<tr>
						<th>SI.NO</th>
						<th>Order</th>
						<th>Company Name</th>
						<th>Total</th>
						<th>Date</th>
						<th>Status</th>
						<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						<td>1. </td>
						<td>
						<div class="d-flex align-items-center">
						<div class="ms-2"><h6 class="mb-0 font-14">#OS-000354</h6></div>
						</div>
						</td>
						<td>Gaspur Antunes</td>
						<td>$485.20</td>
						<td>June 10, 2020</td>
						<td><button type="button" class="btn btn-success btn-sm radius-3 px-3">Status</button></td>
						<td>
						<div class="d-flex order-actions">
						<a href="javascript:;" class="ms-1 bg-info text-white"><i class="lni lni-android"></i></a>
						<a href="javascript:;" class="ms-1 bg-warning text-white"><i class="lni lni-printer"></i></a>
						<a href="javascript:;" class="ms-1 bg-warning text-white"><i class="lni lni-printer"></i></a>
						<a href="javascript:;" class="ms-1 bg-primary text-white"><i class="lni lni-eye"></i></a>
						<a href="javascript:;" class="ms-1 bg-success text-white"><i class="bx bxs-edit"></i></a>
						<a href="javascript:;" class="ms-1 bg-danger text-white"><i class="bx bxs-trash"></i></a>
						</div>
						</td>
						</tr>
					</tbody>
				</table>
				</div>
				</div>
                <!-- Repeater Items ==================================-->

				</div>
				</div>
				</div>
				</div>		
				</div>

	<div class="arvToast" style="visibility: visible;"><div class="tChild tDanger" id="mrk-email_id" style="display: none;"><i class="fa-solid fa-circle-exclamation me-2"></i>The Email Id field is required.<i class="fa-solid fa-xmark mClose" id="icn-email_id"></i></div><div class="tChild tDanger" id="mrk-mobileNu" style="display: none;"><i class="fa-solid fa-circle-exclamation me-2"></i>The Mobile No. field is required.<i class="fa-solid fa-xmark mClose" id="icn-mobileNu"></i></div><div class="tChild tDanger" id="mrk-membrAddr" style="display: none;"><i class="fa-solid fa-circle-exclamation me-2"></i>The Address field is required.<i class="fa-solid fa-xmark mClose" id="icn-membrAddr"></i></div><div class="tChild tDanger" id="mrk-empPassword" style="display: none;"><i class="fa-solid fa-circle-exclamation me-2"></i>The Password field is required.<i class="fa-solid fa-xmark mClose" id="icn-empPassword"></i></div></div>


				<style>
				.hidden {display: none;}

				@-webkit-keyframes spin{0%{-webkit-transform: rotate(0deg);}100%{-webkit-transform:rotate(360deg);}}@keyframes spin{0%{transform:rotate(0deg);}100%{transform:rotate(360deg);}}
				.bx-spin{-webkit-animation:spin 2s linear infinite;animation:spin 2s linear infinite}.bx-spin-hover:hover{-webkit-animation:spin 2s linear infinite;animation:spin 2s linear infinite}		
				.arvToast{ z-index: 111;position: fixed;right: 20px;top: 80px;min-width: 420px; visibility: hidden;}.tChild{background-color:#fff;padding:15px 20px 15px 15px;border-bottom:3px solid #e3e3e3;box-shadow: 0rem 0.3125rem 0.3125rem 0rem rgba(82, 63, 105, 0.05);margin-bottom: 10px;}.mClose{ float: right;font-size: 16px;cursor: pointer;margin: 0px -5px 2px 10px;}.tSuccess{ background-color: #0D9299;border-bottom:3px solid #006F75;;color: white;}.tDanger{ background-color: #d73300;border-bottom: 3px solid #c12e00;color: white;}.tWarning{ background-color: #f0d22e;border-bottom: 3px solid #d0b103;color: #8e5d00;}.tDefault{background-color: #d5d5d5;border-bottom: 3px solid #b9b9b9;color: #5b5b5b;}.tPrimary{ background-color: #5351F4;border-bottom: 3px solid #3736AF;color: #fff;}	
				.table .thead-arvDef th {background-color:#0c5edd;color:#fff;}
				.pull-right{ float:right;}
				.rvClose{ float:right;margin:-10px -10px 0px 0px;font-size:12px;}
				.delsMsg {color: #716d6c;text-align: center;font-size: 20px;margin: 30px 0px 10px 0px;}
				.actnData {text-align: center;margin: 0px 0px 20px 0px;color: #db3704;font-size: .8rem;}
				.border-radius-2{border-radius:2rem;}
				.bg-g{background-image: linear-gradient(to bottom right, #12c1ca, #13999f);}
				.font-size-2{font-size:2rem;}
				.shadow-hover:hover{box-shadow:5px 5px 22px grey;}
				.mt--1{margin-top:-0.6rem;}
				.mt--2{margin-top:-1.5rem;}
				.border-1{border:1px solid #128388;}
				.border-radius-1{border-radius:1rem;}
				.cursor-pointer{cursor: pointer;}
				.imageView {transition: transform 0.3s ease-in-out; }
				.imageView:hover {transform: scale(5.5);}
				.miLvs{ padding-left:13px;padding-right:13px;border-radius:none;}
        		.text-center{text-align:center;}
				.table >thead >tr >th:last-child.sorting{background-image: none!important;}
				table >thead >tr >th:last-child.sorting_asc{background-image: none!important;}
				table >thead >tr >th:last-child.sorting_desc{background-image: none!important;}

				</style>
				<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

				<!-- for List => l-man-work | for form => f-work hidden  | for back btn => back-btn hidden  | for create btn => w-start -->
				<script>
				document.querySelector('.l-man-work').classList.add('active');
				document.querySelector('.f-work').classList.add('hidden');
				document.querySelector('.back-btn').classList.add('hidden');
				document.querySelector('.w-start').addEventListener('click', function () {
				const fWork = document.querySelector('.f-work');
				fWork.classList.remove('hidden');
				fWork.classList.add('active');
				const lMan = document.querySelector('.l-man-work');
				lMan.classList.add('hidden');
				lMan.classList.remove('active');
				const backBtn = document.querySelector('.back-btn');
				backBtn.classList.remove('hidden');
				backBtn.classList.add('active');
				this.classList.add('hidden');
				});
				</script>


		<script>
			// Append using thsi function section start from here.
				$(".arvManage").change(function(){
				let actNbtn = $(this).attr('id');
				let getTrgtId = $(this).attr('data-id');
				let getResourceLoc = $('#base_url').val() + "admin/employee/findBranchDetails";
				$('#'+getTrgtId).css('color', '#099b7e !important').html('<option>Please Wait.....</option>');
				$.post(getResourceLoc, { id:$('#'+actNbtn).val(),actnType:getTrgtId,brID:$('#branch').val() }, function(htmlAmi) {
				$('#'+getTrgtId).html(htmlAmi);
				$('#'+getTrgtId).css('color', 'rgb(62, 62, 62) !important')
				});
				});
			// Append using thsi function section end here.
			
			
			// Listing section start from here.
			$('#targetItem').on('submit', function(e) {
			e.preventDefault();
			let targetAct = $(this).data('id'); 
			$.ajax({url: targetAct,type: "POST",data: $(this).serialize(),dataType: 'json',
			beforeSend: function() {$('#submit-btn').html('<i class="fa fa-settings bx-spin"></i>Processing...');},
			complete: function() {$('#submit-btn').html('<i class="ti-save"></i> Saved');},
			success: function(htmlAmi){
			if(htmlAmi.addClas=='tst_success'){
			$('#miRsltMessage').html(htmlAmi.msg).fadeIn();
			setTimeout(function(){window.location.reload(1);},2000);
			}else if(htmlAmi.addClas=='tst_warning'){$('#miRsltMessage').html(htmlAmi.msg).fadeIn();}	
			else{if(htmlAmi.addClas=='tst_danger'){$('#ppass').html(htmlAmi.msg.prePass).fadeIn().fadeOut(2000);}
			}} , }); });
			// Listing section end from here.


			// don't know section start from here.
			function isCheck(str){ var inputBx = $('#' + str).val(); if(inputBx==""){ return '';} else {return inputBx;}}
			function toastMultiShow(adCls, msg, icon){
			let valid = "";
			let myClass = "tst_success tst_warning tst_danger tst_default";
			let restCls = myClass.replace(adCls, " ");
			let addonMsg = "";
			$.each(msg, function(i, item) { valid += "<li>" + item + "</li>"; });
			$(".tst_danger") /*.addClass("ts_dan")*/ ;
			$(".tst_warning").addClass("ts_war");
			if (adCls == "tst_success") { addonMsg = icon + " <ul>" + valid + "</ul>"; } else if (adCls == "tst_danger") { addonMsg = icon + " <ul>" + valid + "</ul>"; } else if (adCls == "tst_warning") { addonMsg = icon + " <ul>" + valid + "</ul>"; }else{ addonMsg = icon + " <ul>" + valid + "</ul>"; }
			$(".ami_toast").css("visibility", "visible").html(addonMsg).addClass(adCls).removeClass(restCls);
			setTimeout(function() { $(".ami_toast").css("visibility", "hidden") }, 2000);}
			function isNull(str){ let inputBx = $('#' + str).val(); if (inputBx == "") { $('#' + str).addClass('parsley-error').removeClass('parsley-success').focus(); } else { $('#' + str).addClass('parsley-success').removeClass('parsley-error').focus(); } }
			function isError(str, id){ if (str == "1") { $('#' + id).addClass('parsley-error').removeClass('parsley-success parsley-warning').focus(); } else if (str == "2") { $('#' + id).addClass('parsley-warning').removeClass('parsley-success parsley-error').focus(); } else { $('#' + id).addClass('parsley-success').removeClass('parsley-error parsley-warning').focus(); } }
			function btnOutClass(crntCls, crntBtn){
			let myClass = "btn-outline-primary btn-outline-secondary btn-outline-light btn-outline-dark btn-outline-success btn-outline-danger btn-outline-info btn-outline-warning";
			let restCls = myClass.replace(crntCls, " ");
			$('#' + crntBtn).addClass(crntCls).removeClass(restCls);}
			// don't know section end from here.

            // Date start to show from here.
			function startTime() {
			const today = new Date();
			let h = today.getHours();
			let m = today.getMinutes();
			let s = today.getSeconds();
			m = checkTime(m);
			s = checkTime(s);
			document.getElementById('miClock').innerHTML =  h + ":" + m + ":" + s;
			setTimeout(startTime, 1000);
			}
            // Date end to show from here.

			
			</script>




