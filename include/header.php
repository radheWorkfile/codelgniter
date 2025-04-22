<?php include('include/default.php'); ?>
<!-- header -->
<header id="home">
	<!-- top-bar -->
	<!-- //top-bar -->
	<!-- header 2 -->
	<!-- navigation -->
	<div class="container-fluid px-0" style="border-bottom:1px solid #dedede;">
		<div class="row  topnav bg-topnav">
			<div class="col-sm-12 pt-2 px-3 lead">
				<ul class="small text-white list-unstyled mb-2 mt-1">
					<li><i class="fas fa-phone fa-rotate-90 px-2 "></i><span>
							<a href="tel:<?php echo $mobile_1; ?>" class="text-white">+91 <?php echo $mobile_1; ?></a>
							<span class="text-warning">/</span> <a href="tel:<?php echo $mobile_2; ?>"
								class="text-white">+91 <?php echo $mobile_2; ?></a></span></li>
					<!-- <li class=" d-none d-lg-inline-block d-xl-inline-block"><i class="fas fa-envelope pr-2"></i>
					<span><?//php echo $email; ?></span></li> -->
					<li class="text-white d-none d-md-inline-block d-lg-inline-block d-xl-inline-block ">
						<a target="_blank" href="<?php echo $facebook; ?>"><i class="fab fa-facebook-f"></i></a>
						<a target="_blank" href="<?php echo $instagram; ?>"><i class="fab fa-instagram"></i></a>
						<a target="_blank" href="<?php echo $twitter; ?>"><i class="fab fa-twitter"></i></a>
						<a target="_blank" href="<?php echo $youtube; ?>"><i class="fab fa-youtube pr-2 rounded"></i></a>
					</li>
				</ul>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-light  sticky-top">
			<a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-fluid w-rnpc-logo  logo-img"
					alt="logo">&nbsp;</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
				aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home
							<span class="sr-only"></span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about-us.php">About Us</a>
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link">Courses<i class="fas fa-caret-down mx-1"></i></a>
						<div class="dropdown-content">
							<a href="a-n-m.php">A. N. M.</a>
							<a href="g-n-m.php">G. N. M.</a>
							<a href="bsc_nursing.php">B. Sc. Nursing</a>
							<div class="dropdown-sub">
							<a href="javascript:void(0);">Engineering ( Diploma )</a>
							<div class="dropdown-content-1">
							<a href="civil_eng.php">Civil Engineering</a>
							<a href="electrical_eng.php">Electrical Engineering</a>
							<a href="computer_science_eng.php">Computer Science & Engineering</a>
							<a href="electronics_eng.php">Electronics Engineering</a>
							<a href="artificial_intelligence.php">Artificial Intelligence ( AI )</a>
							
							</div>
							</div>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="gallery.php">Gallery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="admission.php">Admission</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="placement.php">Placement</a>
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