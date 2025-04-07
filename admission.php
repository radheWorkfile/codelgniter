    <!DOCTYPE html>
   
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Admission | <?php echo $heading;?></title>
    <?php include('default.php');?>
    <?php include('include/css.php');?>
    </head>

    <body>
    <?php include('include/header.php');?>

         <!-- breadcrumb -->
         <div class="site-breadcrumb" style="background: url(assets/images/bg/admission_banner.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Admission</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Admission</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- about area -->
        <div class="about-area py-5">
        <div class="container">
            <div class="row g-4 align-items-center">
            <div class="col-lg-7">
                <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                <div class="site-heading mb-3">
                    <h2 class="site-title">
                    Eligibility  Criteria  <span> & Selection </span> Process </h2>
                </div>
                <p class="about-text text-justify">
                Ashoka Nursing & Paramedical offers a variety of programs to equip students for a successful healthcare career, including A. N. M., G. N. M., B. Sc. Nursing, P. B. B. Sc. Nursing, M. Sc. Nursing, Dresser, D. M. L. T., and O. T. Assistant. These courses provide a blend of theoretical knowledge and hands-on experience to ensure students are prepared for industry challenges.
                </p>
                <p class="about-text text-justify mt-4">
                The Eligibility & Selection Criteria require candidates to meet academic, professional, and age/residency requirements. Applicants should showcase problem-solving skills, leadership potential, and a commitment to growth. Required documents such as transcripts, ID proof, and certificates must be submitted for verification during the application process.
                </p>
                </div>
            </div>

            <div class="col-lg-1"></div>

            <div class="col-lg-4">
                <div class="wow fadeInLeft" data-wow-delay=".25s">
                <div class="about-img">
                    <div class="row g-4 mt-5">
                    <div class="col-md-6" style="width: 100%">
                        <img class="img-1" src="assets/images/about/admission-img.jpg" alt="" />
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- about area end -->

   <?php include('include/all_courses.php');?>
   <?php include('include/footer.php');?>
   <?php include('include/script.php');?>
</body>
</html>