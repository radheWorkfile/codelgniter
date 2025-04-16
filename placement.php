<?php
//session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Placement || Aryaman Higher Education</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="description"
		content="Aryaman Higher Education is a new initiative of Aryaman Educational Trust in the field of health education aiming at furnishing humanity with well trained,  professionally expert nurses and midwives that can provide unparalleled maternity services.">
	<meta name="keywords"
		content="Best College For Nursing, Best College For Paramedical, Best Nursing & Paramedical College In Bihar, Nursing Colleges In Bihar, Paramedical College In Bihar, Affordable Nursing College In Bihar" />
	<!--// Meta tag Keywords -->
	<?php include("include/js.php") ?>
	<?php include("include/default.php") ?>
	<?php include("include/css.php") ?>
</head>

<body>
	<?php
	include("include/header.php");
	?>
	<div class="container-fluid p-0">
		<div class="card bg-light text-danger banner">
			<img class="card-img img-fluid" src="images/placement.jpg" alt="Placement img">
			<div class="card-img-overlay">
				<div class="row d-none">
					<div class="col-lg-1"></div>
					<div class="col-lg-6 col-sm-11 text-center ">
						<h3 class="card-title">Best Training &amp; Placement Cell</h3>
						<p class="text-red d-none">Call Us <i class="fas fa-phone fa-rotate-90 px-2 "></i><span>
								+91 <?php echo $mobile_1; ?> <span class="text-warning">/</span> +91
								<?php echo $mobile_2; ?></span></p><br>
						<a href="contact-us.php" class="btn btn-danger my-2">Need Assistance ?</a>
						<div class="col-lg-5 col-sm-1"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</header>
	<main>
		<section>
			<?php
			include("include/sideform.php");
			?>
		</section>
		<section>
			<div class="container-fluid p-0 ">
				<div class="container mt-lg-5 mt-3">
					<div class="row">
						<div class="col-md-12">
							<img class="img-fluid w-50 float-left mr-5 mb-2" src="images/t-cell.jpg" alt="Course">
							<h4 class="text-danger special-font mb-3 wow animate__ animate__zoomIn  animated"
								data-wow-delay="0.5s" data-wow-duration="1.5s">Training &amp; Placement Cell</h4>
							<p class="text-justify text-dark wow animate__ animate__zoomIn  animated"
								data-wow-delay="0.5s" data-wow-duration="1.5s">Training & placement of students is one
								of the main
								objective of this institute. The institute is very much concerned with necessity and
								importance of training & placement right from the inception.
								As a result, a full fledged training & placement cell has been established in this
								institute headed by Training & Placement officer has been set up for the sake of
								students bright future in the paramedical field. </p>
							<p class="text-justify text-dark mt-2 wow animate__ animate__zoomIn  animated"
								data-wow-delay="0.5s" data-wow-duration="1.5s">The training & placement cell is provided
								all
								necessary facilities required for the smooth & effective functioning. The cell also
								arranges hospital training for all the final year students in reputed organizations &
								puts its best efforts for their placement. In this context, the institute keeps regular
								contact with various hospitals through letters, telephones, E-Mail consultants &
								personal visits.Experts from industries and other professional organizations are invited
								for delivering Lectures/Seminars to the students to make them aware of the latest
								developments in the paramedical field.</p>
						</div>
					</div>
				</div>
				<div class="container mt-5">
					<div class="row">
						<div class="col-md-8 eligibility">
							<table class="table table-hover">
								<thead>
									<tr class="text-center bg-danger text-light">
										<th scope="col" colspan="2">ACTIVITIES OF PLACEMENT CELL</th>
									</tr>
								</thead>
								<tbody>
									<tr class="wow animate__ animate__zoomIn  animated" data-wow-delay="0.5s"
										data-wow-duration="1.5s">
										<th scope="row">1</th>
										<td>To look into the placement of the pass out students by way of arranging
											campus interview by the experts / executive from reputed orgnization</td>
									</tr>
									<tr class="wow animate__ animate__zoomIn  animated" data-wow-delay="0.5s"
										data-wow-duration="1.5s">
										<th scope="row">2</th>
										<td>Arranging the Extension lectures from experts of the different organizations
											to make the students aware about the latest development in the industry &
											the actual world of work.</td>
									</tr>
									<tr class="wow animate__ animate__zoomIn  animated" data-wow-delay="0.5s"
										data-wow-duration="1.5s">
										<th scope="row">3</th>
										<td>Hospital visits are also arranged for the students. College buses are
											provided to these students for hospital visit.</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-4 admission-process">
							<table class="table table-hover">
								<thead>
									<tr class="text-center bg-danger text-light">
										<th scope="col" colspan="2">OUR PARTNERS</th>
									</tr>
								</thead>
								<tbody>
									<tr class="wow animate__ animate__zoomIn  animated" data-wow-delay="0.5s"
										data-wow-duration="1.5s">
										<th scope="row">1</th>
										<td>Sri Ram Hospital</td>
									</tr>
									<tr class="wow animate__ animate__zoomIn  animated" data-wow-delay="0.5s"
										data-wow-duration="1.5s">
										<th scope="row">2</th>
										<td>Chanakya Hospital</td>
									</tr>
									<tr class="wow animate__ animate__zoomIn  animated" data-wow-delay="0.5s"
										data-wow-duration="1.5s">
										<th scope="row">3</th>
										<td>Shri Sai Hospital</td>
									</tr>
									<tr class="wow animate__ animate__zoomIn  animated" data-wow-delay="0.5s"
										data-wow-duration="1.5s">
										<th scope="row">4</th>
										<td>Star Hospital</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
		</section>
	</main>
	<?php
	include("include/footer.php");
	?>
</body>

</html>