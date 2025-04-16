<?php
//session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact Us || Aryaman Higher Education</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="description"
		content="Aryaman Higher Education is a new initiative of Aryaman Educational Trust in the field of health education aiming at furnishing humanity with well trained,  professionally expert nurses and midwives that can provide unparalleled maternity services.">
	<meta name="keywords"
		content="Best College For Nursing, Best College For Paramedical, Best Nursing & Paramedical College In Bihar, Nursing Colleges In Bihar, Paramedical College In Bihar, Affordable Nursing College In Bihar" />
	<!--// Meta tag Keywords -->
	<?php include("include/js.php") ?>
	<?php include("include/css.php") ?>
	<style>
		.cus-card {
			border: 1px dashed black;
			border-radius: 22px 1px 22px 1px;
		}

		.cus-card:hover {
			background: linear-gradient(to right, #c6edb0, #cdefe5);
			border: none;
			border-radius: 1px 22px 1px 22px;
		}

		.a-man {
			color: #5e2236;
		}
	</style>
</head>

<body>
	<?php
	include("include/header.php");
	?>
	<div class="container-fluid p-0">
		<div class="card bg-light text-danger banner">
			<img class="card-img img-fluid" src="images/contact-us.jpg" alt="Card image">
			<div class="card-img-overlay">
				<div class="row d-none">
					<div class="col-1"></div>
					<div class=" col-7 text-center ">
						<h3 class="card-title">Contact Us</h3>
						<p class="text-red d-none">Call Us <i class="fas fa-phone fa-rotate-90 px-2 "></i><span>
								+91 <?php echo $mobile_1; ?> <span class="text-warning">/</span> +91
								<?php echo $mobile_2; ?></span></p><br>
						<a href="contact-us.php" class="btn btn-danger my-2">Any Doubt</a>
						<div class="col-4"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<main>
		<section>
			<?php
			include("include/sideform.php");
			?>
		</section>
		<!-- contact -->
		<section>
			<div class="container mt-lg-5 mt-3">
				<div class="row text-center">
					<div class="col-md-4 mb-3">
						<div class="py-4 cus-card">
							<h3 class="text-red mb-2">Address Details</h3>
							<p class="text-red"> <?php echo $address; ?></p>
						</div>
					</div>
					<div class="col-md-5 mb-3">
						<div class="py-4 cus-card">
							<h3 class="text-red mb-2">Contact Details</h3>
							<p class="text-red">E-Mail : <a href="mailto:<?php echo $email; ?>"
									class="a-man"><?php echo $email; ?></a></p>

							<a href="tel:<?php echo $mobile_1 . ',' . $mobile_2; ?>" class="text-red"><i
									class="fas fa-phone fa-rotate-90 px-2 "></i>+91
								<?php echo $mobile_1 . ',' . $mobile_2; ?>
							</a>

						</div>
					</div>
					<div class="col-md-3">
						<div class="py-4 cus-card">
							<h3 class="text-red mb-2">Follow Us</h3>
							<p class="text-red py-3">
								<a target="_blank" href="<?php echo $facebook; ?>" class="a-man"><i
										class="fab fa-facebook-f mx-2"></i></a>
								<a target="_blank" href="<?php echo $instagram; ?>" class="a-man"><i
										class="fab fa-instagram mx-2"></i></a>
								<a target="_blank" href="<?php echo $twitter; ?>" class="a-man"><i
										class="fab fa-twitter mx-2"></i></a>
								<a target="_blank" href="<?php echo $youtube; ?>" class="a-man"><i
										class="fab fa-youtube mx-2 rounded"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="contact mt-5" id="contact">
			<div class="container pb-xl-5 pb-lg-3">
				<div class="row mx-sm-0 mx-2">
					<!-- map -->
					<div class="col-lg-6 map" data-aos="flip-left" data-aos-easing="ease-out-cubic"
						data-aos-duration="2000">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3604.9579124451607!2d85.349062!3d25.372727000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xae5b7c9a557dfd5d!2sRaj+Aryan+Nursing+%26+paramedical+college!5e0!3m2!1sen!2sus!4v1561552086012!5m2!1sen!2sus"
							width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<!-- //map -->
					<!-- contact form -->
					<div class="col-lg-6 main_grid_contact" data-aos="flip-left" data-aos-easing="ease-out-cubic"
						data-aos-duration="2000">
						<div class="form-w3ls p-md-5 p-4">
							<h4 class="mb-4 sec-title-w3 let-spa text-bl">Send us a message</h4>
							<form action="formhandler.php" method="post">
								<div class="form-group">
									<input class="form-control" type="text" name="Name" placeholder="Name" required="">
								</div>
								<div class=" form-group">
									<input class="form-control" type="email" name="Email" placeholder="Email"
										required="">
								</div>
								<div class="form-group">
									<input class="form-control" type="text" name="Phone Number"
										placeholder="Phone Number" required="">
								</div>
								<div class="form-group">
									<textarea name="message" rows="2" placeholder="Message" required=""></textarea>
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
									<button class="btn btn-sm mt-0 py-2 w-100" name="submit_contact" id="submit_contact"
										type="submit">Submit</button>
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
	<?php
	include("include/footer.php");
	?>
</body>

</html>