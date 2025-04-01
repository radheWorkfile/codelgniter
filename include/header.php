


<?php include('include/default.php');?>
	<!-- header -->
	<header id="home">
		<!-- top-bar -->
	<!-- //top-bar -->
	<!-- header 2 -->
	<!-- navigation -->
	<div class="container-fluid px-0"style="border-bottom:1px solid #dedede;">
	<div class="row  topnav bg-topnav">
		<div class="col-sm-12 pt-2 px-3 lead">
			<ul class="small text-white list-unstyled mb-2 mt-1">
				<li><i class="fas fa-phone fa-rotate-90 px-2 "></i><span>
					+91 <?php echo $mobile_1; ?> <span class="text-warning">/</span> +91 <?php echo $mobile_2; ?></span></li>
				<li class=" d-none d-lg-inline-block d-xl-inline-block"><i class="fas fa-envelope pr-2"></i>
					<span><?php echo $email;?></span></li>
				<li class="text-white d-none d-md-inline-block d-lg-inline-block d-xl-inline-block ">
					<a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
					<a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
					<a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
					<a target="_blank" href="#"><i class="fab fa-youtube pr-2 rounded"></i></a>
				</li>
			</ul>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-light  sticky-top">
		<a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-fluid w-25 logo-img" alt="ranpc-logo">&nbsp;</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
		  <ul class="navbar-nav ml-auto">
			<li class="nav-item active">
			  <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="about-us.php">About Us</a>
			</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link">Courses<i class="fas fa-caret-down mx-1"></i></a>
                <div class="dropdown-content">
                  <a href="a-n-m.php">A. N. M.</a>
				  <a href="g-n-m.php" class="d-none">G. N. M.</a>
				  <!-- <a href="bsc-nursing.php">B. Sc. Nursing</a> -->
                </div>
            </li>
			<li class="nav-item">
			  <a class="nav-link" href="ranpc-admission.php">Admission</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="ranpc-placement.php">Placement</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="contact-us.php">Contact Us</a>
			</li>
		  </ul>
		</div>
	  </nav>
		<!-- //nav -->
	</div>
	<!-- //navigation -->
    <!-- //header 2 -->
    