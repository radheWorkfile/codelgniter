<?php
//session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>About Us || Aryaman Higher Education</title>
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
	<?php include("include/default.php") ?>
</head>

<body>
	<?php
	include("include/header.php");
	?>
	<div class="container-fluid p-0">
		<div class="card bg-light text-danger banner">
			<img class="card-img img-fluid" src="images/about-us.jpg" alt="Card image">
			<div class="card-img-overlay">
				<div class="row d-none">
					<div class="col-lg-6 col-sm-11 text-center ">
						<h3 class="card-title">About Us</h3>
						<div class="col-lg-6 col-sm-1"></div>
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
		<section class="my-5">
			<div class="container mt-lg-5 mt-3">
				<div class="row">
					<div class="col-md-8 px-4">
						<h3 class="text-danger mb-2 wow animate__ animate__zoomIn  animated" data-wow-delay="0.5s"
							data-wow-duration="1.5s"><span class="special-font">About Us</span></h3>
						<p class="text-justify text-dark wow animate__ animate__zoomIn  animated" data-wow-delay="0.5s"
							data-wow-duration="1.5s"><b><?php echo $company; ?> </b>is a forward-looking initiative
							launched by the Aryaman Educational Trust, dedicated to advancing health education. Its core
							mission is to nurture compassionate, highly skilled nurses and midwives capable of
							delivering outstanding maternity care and contributing meaningfully to society.</p>
						<p class="text-justify text-dark wow animate__ animate__zoomIn  animated" data-wow-delay="0.5s"
							data-wow-duration="1.5s">The college prides itself on a well-regarded teaching faculty
							that firmly believes a strong education forms the foundation of a successful professional
							journey. To ensure consistent academic growth, students undergo regular assessments that
							help them track progress and stay motivated to excel.</p>
					</div>
					<div class="col-md-4">
						<h3 class="text-danger mb-2 special-font wow animate__ animate__zoomIn  animated"
							data-wow-delay="0.5s" data-wow-duration="1.5s">Our Mission</h3>
						<p class="text-justify text-dark wow animate__ animate__zoomIn  animated" data-wow-delay="0.5s"
							data-wow-duration="1.5s">Our mission is to develop and expand opportunities for each
							condidate and all to have excellent and pleasent nursing facilities and experiences. We are
							working in the direction of making a healthy society full of hopes for the future.We believe
							in our team and we will achieve our goal on time with your blessings and our hard work.</p>
					</div>
				</div>
			</div>
			<div class="container mt-5">
				<div class="row">

					<div class="col-md-4 d-flex align-items-center ">
						<img src="images/vision.png" class="img-fluid w-100 bg-info py-5" alt="Vision">
					</div>
					<div class="col-md-8">
						<h3 class="text-danger mb-2"><span class="special-font">Our Vision</span></h3>
						<p class="text-justify text-dark wow animate__ animate__zoomIn  animated" data-wow-delay="0.5s"
							data-wow-duration="1.5s"><?php echo $company; ?>, is the prism that refracts all our
							endeavours — whether it is our architecture, curriculum design, pedagogy, hostel life,
							laboratories, cafe or the library. In short, we simply celebrate the liminal space where the
							‘<?php echo $company_1 ?>’ meetRaj Aryan Nurs the ‘local’.To flourish in the world today,
							one
							cannot afford substantive and rigid visions of the good life. One has to appreciate the
							negotiated nature of the contemporary. That is why we emphasise reflexivity, flexibility,
							diversity and accommodation as key values. While that is the ethos of critical engagement,
							we aspire to craft, we are equally keen to develop top quality doctors for dedicated patient
							care.</p>
					</div>
				</div>
			</div>

		</section>
	</main>
	<!--Calling footer.php-->
	<?php
	include("include/footer.php");
	?>
</body>

</html>