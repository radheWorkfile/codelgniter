<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login | Software</title>
<?php include('include/css.php');?>
</head>
<body class="">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-cover">
			<div class="">
				<div class="row g-0">

					<div class="col-12 col-xl-6 col-xxl-6 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">

                        <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
							<div class="card-body">
                                 <img src="<?php echo base_url();?>soft_assets/images/login-images/login-cover.svg" class="img-fluid auth-img-cover-login" width="650" alt=""/>
							</div>
						</div>
						
					</div>

					<div class="col-12 col-xl-5 col-xxl-5 auth-cover-right align-items-center justify-content-center">
						<div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
							<div class="card-body p-sm-5"style="border-left:1px solid #d2d2d2;">
								<div class="">
									<div class="mb-3 text-center">
										<img src="assets/images/logo-icon.png" width="60" alt="">
									</div>
									<div class="text-center mb-4">
										<h5 class="">Login</h5>
										<p class="mb-0">Please log in to your account</p>
									</div>
									<div class="form-body">

									 <?php
                    				  if ($_REQUEST['msg'] == 'invalid') {
                    				  echo '<div class="alert alert-danger" id="alert" style="font-size:11.7px;">
                    				  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    				  Invalid Login Details!! Please Check Username, Password
                    				  </div>';
                    				  }
                    				  else if ($_REQUEST['msg'] == 'impassable') {
                    				  echo '<div class="alert alert-warning" id="alert" style="font-size:11.7px;">
                    				  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    				  Contact to super admin, it seems the account is blocked
                    				  </div>';
                    				  }
                    				  elseif($this->uri->segment(2) == 'logout'){
                    				  echo '<div class="alert alert-success" id="alert">
                    				  😎 Log Out Successfully ! 😎.
                    				  </div>';
                    				  }
                    				  ?>

										  <form class="row g-3" action="<?php echo base_url('login/auth');?>" method="post">
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email</label>
												<input type="email" class="form-control" id="email_id" name="email_id" value="superadmin@g.com" placeholder="jhon@example.com">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="password" name="password" value="superadmin" placeholder="Enter Password"> 
													<a href="javascript:;" class="input-group-text bg-transparent">
    												<i class="bx bx-hide" id="showPassword" style="cursor: pointer;"></i></a>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-md-6 text-end">	<a href="authentication-forgot-password.html">Forgot Password ?</a>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary">Sign in</button>
												</div>
											</div>
											<div class="col-12">
												<div class="text-center ">
													<p class="mb-0">Don't have an account yet? <a href="authentication-signup.html">Sign up here</a>
													</p>
												</div>
											</div>
										</form>
									</div>
									<div class="login-separater text-center mb-5"> <span>OR SIGN IN WITH</span>
										<hr>
									</div>
									<div class="list-inline contacts-social text-center">
										<a href="javascript:;" class="list-inline-item bg-facebook text-white border-0 rounded-3"><i class="bx bxl-facebook"></i></a>
										<a href="javascript:;" class="list-inline-item bg-twitter text-white border-0 rounded-3"><i class="bx bxl-twitter"></i></a>
										<a href="javascript:;" class="list-inline-item bg-google text-white border-0 rounded-3"><i class="bx bxl-google"></i></a>
										<a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0 rounded-3"><i class="bx bxl-linkedin"></i></a>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-md-1"></div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<?php include('include/js.php');?>
     
	<script>
  const passwordInput = document.getElementById("password");
  const toggleIcon = document.getElementById("showPassword");

  toggleIcon.addEventListener("click", function () {
    const isPassword = passwordInput.type === "password";
    passwordInput.type = isPassword ? "text" : "password";

    // Optionally toggle icon class
    toggleIcon.classList.toggle("bx-hide", !isPassword);
    toggleIcon.classList.toggle("bx-show", isPassword);
  });
</script>


</body>
</html>