<?php
//session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include("include/default.php") ?>
	<title>Home || <?php echo $company_1; ?></title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="description"
		content="Aryaman Higher Education College is a new initiative of Aryaman Educational Trust in the field of health education aiming at furnishing humanity with well trained,  professionally expert nurses and midwives that can provide unparalleled maternity services.">
	<meta name="keywords"
		content="Aryaman Higher Education, Best College For Paramedical, <?php echo $company_1; ?> College In Bihar, Nursing Colleges In Bihar, Paramedical College In Bihar, Affordable Nursing College In Bihar" />
	<!--// Meta tag Keywords -->

	<?php include("include/css.php") ?>
</head>

<body>
	<?php
	include("include/header.php");
	?>
	<!--slider-->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="card bg-light text-white slider">
					<!-- <img class="d-block w-100 card-img" src="images/banner_higherEdu.png.JPG" alt="Third Slide slide"> -->
					<img class="d-block w-100 card-img" src="images/banner_111.png" id="ForDesk"
						alt="Third Slide slide">
					<div class="card-img-overlay">
						<div class="row text-center wow animate__animated animate__fadeInLeft" data-wow-delay="0.5s"
							data-wow-duration="1.5s">
							<div class="col-3"></div>
							<div class="col-6 text-left ">
								<!-- <h1 class="card-title caption-line"><br><? echo $company_1; ?></h1> -->
								<h1 class="card-title text-shadow text-man text-center suse-font wow ZoomIn">
									<br><b><?php echo $company_1; ?></b>
								</h1>
								<p class="text-center text-shadow textMan"
									style="line-height:18px;color:#110F47;font-weight:700;">Affiliated by Health Dept.
									Govt. of Bihar, BNRC, BUHS Patna. <br> ( Managed by M.R. Foundation ) <br> & <br> ( Aryan Abhishek Educational Trust )</p>
								<p class="text-center text-shadow textMan highlight-address text-white mt-5">Arvind
									Marg, Lachhubigha, Mahanandpur, Nagarnausa, Nalanda-801305</p>
								<div class="row mt-3 d-none">
									<div class="col-1"></div>
									<div class="col-5 text-center">A. N. M.
										<p class="mt-2"><a href="a-n-m.php"
												class="btn btn-sm btn-danger">Eligibility</a></p>
									</div>
									<div class="d-none">G. N. M.
										<p class="mt-2"><a href="g-n-m.php"
												class="btn btn-sm btn-danger">Eligibility</a></p>
									</div>
									<div class="d-none">B. Sc. Nursing
										<p class="mt-2"><a href="bsc-nursing.php"
												class="btn btn-sm btn-danger">Eligibility</a></p>
									</div>
									<div class="col-6"></div>
								</div>
								<div class="row mt-2">
									<div class="col-1"></div>
									<div class="col-9">
										<p class="d-none">Call Us <i class="fas fa-phone fa-rotate-90 px-1 "></i><span>
												+91 <?php echo $mobile_1; ?> <span class="text-warning">/</span> +91
												<?php echo $mobile_2; ?></span></p>
									</div>
									<div class="col-2"></div>
								</div>
							</div>
							<div class="col-3"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="card bg-light text-white slider">
					<img class="d-block w-100 card-img" src="images/3.jpg" alt="second slide">
					<div class="card-img-overlay">
						<div class="row text-center wow animate__animated animate__fadeInRight" data-wow-delay="0.5s"
							data-wow-duration="1.5s">
							<div class="col-lg-2 col-sm-1"></div>
							<div class="col-lg-6 col-sm-10 text-left ">
								<h3 class="card-title caption-line">Our Facilities</h3>
								<div class="row mt-3">
									<div class="col-md-1"></div>
									<div class="col-md-9">
										<ol>
											<li>A Team of Nursing Experts</li>
											<li>Well Equipped Lab Rooms</li>
											<li>Modern Class Rooms</li>
											<li>Extra Facilities For Girls</li>
										</ol>
									</div>
									<div class="col-md-2"></div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-1"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="card bg-light text-white slider">
					<img class="d-block w-100 card-img" src="images/1.jpg" alt="First slide">
					<div class="card-img-overlay">
						<div class="row text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.5s"
							data-wow-duration="1.5s">
							<div class="col-lg-2 col-sm-1"></div>
							<div class="col-lg-6 col-sm-10 text-left ">
								<h3 class="card-title caption-line">Placement &amp; Training Cell</h3>
								<div class="row mt-3">
									<div class="col-md-1"></div>
									<div class="col-md-9">
										<ol>
											<li>Campus Interview Arrangement</li>
											<li>Class Extension Arrangement</li>
											<li>Hospital Visit Arrangement</li>
											<li>Extra Training Facility</li>
										</ol>
									</div>
									<div class="col-md-2"></div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-1"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	

	<main>
		<section>
			<?php
			include("include/sideform.php");
			?>
			<div class="container mt-lg-5 mt-3">
				<div class="row">
					<div class="col-md-8">
						<h3 class="text-danger mb-2 wow animate__ animate__zoomIn animated" data-wow-delay="0.5s"
							data-wow-duration="1.5s">Welcome to <span
								class="special-font"><?php echo $company_1; ?></span></h3>
						<p class="text-justify text-dark wow animate__ animate__zoomIn animated" data-wow-delay="0.5s" data-wow-duration="1.5s"> <?php echo $company_1; ?> is a new initiative of <b> M.R. Foundation</b> in the field of health education. It aims to furnish society with well-trained, compassionate, and professionally skilled nurses and midwives who can deliver exceptional maternity services and contribute meaningfully to the healthcare sector.</p>
						<p class="text-justify text-dark wow animate__ animate__zoomIn animated" data-wow-delay="0.5s" data-wow-duration="1.5s"> Under the <b>Aryan Abhishek Educational Trust</b>, Aryaman Higher Education also promotes IT education, with the mission of preparing individuals to use technological expertise in supporting and improving maternity care with a humanitarian focus.</p>
						<p class="text-justify text-dark wow animate__ animate__zoomIn animated" data-wow-delay="0.5s" data-wow-duration="1.5s"> Our college offers quality teaching, regular exams, and interactive methods to build strong, successful, and practically skilled professionals.</p>
						
					</div>
					<div class="col-md-4">
						<h3 class="text-danger mb-2 special-font wow animate__ animate__zoomIn animated"
							data-wow-delay="0.5s" data-wow-duration="1.5s">Our Mission</h3>
						<p class="text-justify text-dark wow animate__ animate__zoomIn animated" data-wow-delay="0.5s"
							data-wow-duration="1.5s">With a mission to expand and develop opportunities for every candidate, we strive to offer excellent and pleasant nursing facilities and experiences. Our direction is clear: to build a hopeful and healthy society. We deeply believe in our team’s potential, and with your blessings and our hard work, success will come on time.</p>
					</div>
				</div>
			</div>
		</section>
		<!-- contact -->
		<section class="contact my-5" id="contact">
			<div class="container pb-xl-3 pb-lg-1">
				<h3 class="text-danger text-center font-weight-bold mb-4">Our Silent Features</h3>
				<div class="row mx-sm-0 mx-2 mb-0">
					<!-- map -->
					<div class="col-lg-6 map" data-aos="flip-left" data-aos-easing="ease-out-cubic"
						data-aos-duration="2000">
						<table class="table table-hover">
							<thead>
								<tr class="text-center bg-danger text-light">
									<th scope="col" colspan="2">ALL FEATURES</th>
								</tr>
							</thead>
							<tbody>
								<tr class="wow animate__ animate__zoomIn animated" data-wow-delay="0.5s"
									data-wow-duration="1.5s">
									<th scope="row">1</th>
									<td>Commited and sensible administrative and management system which is responsible
										to make future bright in the filed of nursing.</td>
								</tr>
								<tr class="wow animate__ animate__zoomIn animated" data-wow-delay="0.5s"
									data-wow-duration="1.5s">
									<th scope="row">2</th>
									<td>Highly qualified faculty membersthat are commited to quality teaching and meet
										national standards.</td>
								</tr>
								<tr class="wow animate__ animate__zoomIn animated" data-wow-delay="0.5s"
									data-wow-duration="1.5s">
									<th scope="row">3</th>
									<td>We have a special taraining and placement cell to arrange opportunities for
										freshers.</td>
								</tr>
								<tr class="wow animate__ animate__zoomIn animated" data-wow-delay="0.5s"
									data-wow-duration="1.5s">
									<th scope="row">4</th>
									<td>Schlorship facility for eligible students.</td>
								</tr>
								<tr class="wow animate__ animate__zoomIn animated" data-wow-delay="0.5s"
									data-wow-duration="1.5s">
									<th scope="row">5</th>
									<td>The college has well furnished salubrious hostel with supporting facilities like
										mess and recreational and area.</td>
								</tr>
								<tr class="wow animate__ animate__zoomIn animated" data-wow-delay="0.5s"
									data-wow-duration="1.5s">
									<th scope="row">6</th>
									<td>Adaquote recreational and sporting facilities like Badminton, Basketball,
										Carrom, Chess, etc.</td>
								</tr>
								<tr class="wow animate__ animate__zoomIn animated" data-wow-delay="0.5s"
									data-wow-duration="1.5s">
									<th scope="row">7</th>
									<td>Noise and pollution free campus and its surrounding.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- //map -->
					<!-- contact form -->
					<div class="col-lg-6 main_grid_contact" data-aos="flip-left" data-aos-easing="ease-out-cubic"
						data-aos-duration="2000">
						<div class="form-w3ls p-md-5 p-4">
							<h4 class="mb-4 sec-title-w3 let-spa text-danger">Feel free To Write Us</h4>
							<form action="formhandler.php" method="post">
								<div class="form-group">
									<input class="form-control" type="text" name="name" id="name" placeholder="Name"
										required="">
								</div>
								<div class=" form-group">
									<input class="form-control" type="email" name="email" id="email" placeholder="Email"
										required="">
								</div>
								<div class="form-group">
									<input class="form-control" type="text" name="mobile" id="mobile"
										placeholder="Phone Number" required="">
								</div>
								<div class="form-group">
									<textarea name="message" id="message" rows="4" placeholder="Message"
										required=""></textarea>
								</div>
								<div class="row mb-0">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control bg-dark text-white text-center"
												id="disabledInput" type="number"
												value=" <?php echo $n1; ?> + <?php echo $n2; ?> =" disabled>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="number" name="uanswer" class="form-control" placeholder="?"
												required="required" data-error="Answer is required.">

										</div>
									</div>
								</div>
								<div class="input-group1 text-right">
									<button class="btn btn-sm py-2 mt-0 w-100" type="submit" name="submit_home"
										id="submit_home">Submit</button>
								</div>
							</form>
						</div>
					</div>
					<!-- //contact form -->
				</div>
			</div>
		</section>
		<!-- //contact -->
	</main>
	<!--including footer.php-->
	<?php
	include("include/footer.php");
	?>


	<script>

	</script>
</body>

</html>