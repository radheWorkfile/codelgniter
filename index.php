<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php include('default.php'); ?>
    <title>Home | <?php echo $heading; ?></title>
    <?php include('include/css.php'); ?>
</head>

<body>
    <?php include('include/header.php'); ?>

    <!-- hero slider -->
    <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme">
            <div class="hero-single" style="background: url(assets/images/slider/slider-3.jpg); height:500px;">
                <div class="container">
                    <div class="row align-items-center mt-5">
                        <div class="col-md-12 col-lg-7">
                            <div class="hero-content">

                                <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s"
                                    style="width:150%;">
                                    <?php echo $company; ?>
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".75s">
                                    Ashoka Nursing & Paramedical College provides excellent healthcare education,
                                    fostering skilled, compassionate professionals.
                                </p>
                                <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                    <a href="about.php" class="theme-btn">About More<i
                                            class="fas fa-arrow-right-long"></i></a>
                                    <a href="contact.php" class="theme-btn theme-btn2">Learn More<i
                                            class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-single" style="background: url(assets/images/slider/slider-1.jpg);height:500px;">
                <div class="container">
                    <div class="row align-items-center mt-5">
                        <div class="col-md-12 col-lg-7">
                            <div class="hero-content">
                                <h6 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                    Welcome To ANPC!
                                </h6>
                                <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                    Start Your Beautiful And <span>Bright</span> Future
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".75s">
                                    Ashoka Nursing & Paramedical College provides comprehensive healthcare education,
                                    developing compassionate and proficient professionals for the industry.
                                </p>
                                <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                    <a href="about.php" class="theme-btn">About More<i
                                            class="fas fa-arrow-right-long"></i></a>
                                    <a href="contact.php" class="theme-btn theme-btn2">Learn More<i
                                            class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-single" style="background: url(assets/images/slider/slider-2.jpg);height:500px;">
                <div class="container">
                    <div class="row align-items-center mt-5">
                        <div class="col-md-12 col-lg-7">
                            <div class="hero-content">
                                <h6 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                    Welcome To ANPC!
                                </h6>
                                <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                    Start Your Beautiful And <span>Bright</span> Future
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".75s">
                                    With a focus on excellence, Ashoka Nursing & Paramedical College equips students
                                    with the skills to excel in healthcare professions.
                                </p>
                                <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                    <a href="about.php" class="theme-btn">About More<i
                                            class="fas fa-arrow-right-long"></i></a>
                                    <a href="contact.php" class="theme-btn theme-btn2">Learn More<i
                                            class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero slider end -->





    <!-- about area -->
    <div class="about-area py-3 py-lg-5">
        <div class="container">
            <div class="row g-4 align-items-center">

                <div class="col-lg-7">
                    <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline">Welcome to ANPC</span>
                            <h2 class="site-title">
                                Fueling Your Passion for <span>Success</span> <br>Through Education</h2>
                        </div>
                        <p class="about-text text-justify">
                            Ashoka Nursing & Paramedical College offers a well-rounded healthcare education through a
                            comprehensive curriculum that seamlessly combines academic learning with hands-on
                            experience. This approach ensures that students acquire not only the essential theoretical
                            knowledge for their careers but also develop the practical skills and confidence needed to
                            excel in the healthcare field. The college’s focus on real-world application helps students
                            master both the technical and interpersonal skills required in nursing and paramedical
                            professions.
                        </p>
                        <p class="about-text text-justify mt-4">
                            Ashoka Nursing & Paramedical College blends theory and practice to shape skilled healthcare
                            professionals. The college nurtures commitment, expertise, and compassion, empowering
                            graduates to make a meaningful impact and drive positive change in the healthcare industry.
                        </p>
                    </div>
                </div>

                <div class="col-lg-1"></div>

                <div class="col-lg-4">
                    <div class=" wow fadeInLeft" data-wow-delay=".25s">
                        <div class="about-img">
                            <div class="row g-4 mt-5">
                                <div class="col-md-6" style="width:100%;">
                                    <img class="img-1" src="assets/images/about/02.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- about area end -->


    <!-- counter area -->
    <div class="counter-area pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <img src="assets/img/icon/course.svg" alt="">
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="16" data-speed="3000">15 +</span>
                            <h6 class="title">+ Total Courses </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <img src="assets/img/icon/graduation.svg" alt="">
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="5411" data-speed="3000">1900</span>
                            <h6 class="title">+ Our Students</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <img src="assets/img/icon/teacher-2.svg" alt="">
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="53" data-speed="3000">750</span>
                            <h6 class="title">+ Skilled lecturers</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <img src="assets/img/icon/award.svg" alt="">
                        </div>
                        <div>
                            <span class="counter" data-count="+" data-to="30" data-speed="3000">30</span>
                            <h6 class="title">+ Win Awards</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter area end -->







    <!-- team-area -->
    <div class="team-area py-4 py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline"><i class="fa fa-user"></i> Our Teachers</span>
                        <h2 class="site-title">Meet With Our <span>Teachers</span></h2>
                        <p>Meet with our experienced teachers who guide and inspire, providing valuable insights and
                            support throughout your educational journey.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="team-item wow fadeInUp" data-wow-delay=".25s">
                        <div class="team-img">
                            <img src="assets/images/team/01.jpg" alt="thumb">
                        </div>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="teacher-single.php">Angela Vigil</a></h5>
                                <span>A. N. M. Teacher</span>
                            </div>
                        </div>
                        <span class="team-social-btn"><i class="far fa-share-nodes"></i></span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-item wow fadeInUp" data-wow-delay=".50s">
                        <div class="team-img">
                            <img src="assets/images/team/02.jpg" alt="thumb">
                        </div>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="teacher-single.php">Arihant kumar</a></h5>
                                <span>B. Sc. Teacher</span>
                            </div>
                        </div>
                        <span class="team-social-btn"><i class="far fa-share-nodes"></i></span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-item wow fadeInUp" data-wow-delay=".75s">
                        <div class="team-img">
                            <img src="assets/images/team/03.jpg" alt="thumb">
                        </div>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="javascript:void(0)">Ashish kumar</a></h5>
                                <span>M. Sc. Teacher</span>
                            </div>
                        </div>
                        <span class="team-social-btn"><i class="far fa-share-nodes"></i></span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-item wow fadeInUp" data-wow-delay="1s">
                        <div class="team-img">
                            <img src="assets/images/team/04.jpg" alt="thumb">
                        </div>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="">Ophelia D</a></h5>
                                <span>O. T. Trainer</span>
                            </div>
                        </div>
                        <span class="team-social-btn"><i class="far fa-share-nodes"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team-area end -->










    <!-- enroll area-->
    <div class="enroll-area pt-80 pb-80">
        <div class="container">
            <div class="col-lg-12">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item-1">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed font-size-1" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <span><i class="far fa-question"></i></span> &nbsp; What are the eligibility
                                        criteria for admission?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Eligibility varies by course, but generally includes a completed application, a
                                        specific academic qualification, and meeting age requirements.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item-1 mt-4">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button font-size-1" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <span><i class="far fa-question "></i></span> &nbsp;What programs does Ashoka
                                        Nursing & Paramedical College offer?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body ">
                                        <p class="font-size-1"> Ashoka Nursing & Paramedical College offers a wide range
                                            of courses including ANM, GNM, B.Sc. Nursing, M.Sc. Nursing, DPT, and more.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item-1 mt-4">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed font-size-1" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        <span><i class="far fa-question"></i></span> &nbsp; What are the admission
                                        requirements for nursing programs?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The admission requirements vary by course, but generally include a completed
                                        application form, educational transcripts, and meeting specific eligibility
                                        criteria such as age and academic qualifications.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item-1 mt-4">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed font-size-1" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <span><i class="far fa-question"></i></span> &nbsp; Does Ashoka Nursing &
                                        Paramedical College offer hands-on training?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, the college offers practical, hands-on training in state-of-the-art
                                        facilities to ensure students are well-prepared for real-world healthcare
                                        environments.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item-1 mt-4">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed font-size-1" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <span><i class="far fa-question"></i></span> &nbsp; How can I apply to Ashoka
                                        Nursing & Paramedical College?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Applications can be submitted online through the college's official website or
                                        directly at the college’s admission office, along with the necessary documents.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="enroll-right wow fadeInUp" data-wow-delay=".25s">
                            <div class="skill-content">
                                <div class="site-heading mb-3">
                                    <h2 class="site-title text-white">
                                        Explore Your <span>Creativity And Talent</span> With Us
                                    </h2>
                                </div>
                                <p class="text-white">
                                    There are many variations of passages available but the majority have suffered
                                    alteration in some form by injected humour randomised words which don't look even
                                    slightly believable. If you are going to use passage you need sure there anything
                                    embarrassing first true generator on the Internet.
                                </p>
                                <div class="skills-section">
                                    <div class="progress-box">
                                        <h5>Our Students <span class="pull-right">85%</span></h5>
                                        <div class="progress" data-value="85">
                                            <div class="progress-bar" role="progressbar"></div>
                                        </div>
                                    </div>
                                </div>
                                <a href="contact.php" class="theme-btn mt-5">Learn More<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- enroll area end -->





    <!-- testimonial area -->
    <div class="testimonial-area pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline"> Testimonials</span>
                        <h2 class="site-title text-dark">What Our Students <span>Say's</span></h2>
                        <p class="">Our students consistently share how transformative their experience has been at our
                            college. From hands-on training in ANM and GNM to in-depth academic knowledge in B.Sc
                            Nursing, they appreciate our commitment to both theory and practical learning.</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider owl-carousel owl-theme">
                <div class="testimonial-item man-testimonial-box wow fadeInUp" data-wow-delay=".25s">
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            At Ashoka Nursing & Paramedical College, I’m gaining top-tier healthcare education to make a
                            real impact!
                        </p>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="assets/images/testimonial/01.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Anthony Nicoll</h4>
                            <p>Student</p>
                        </div>
                    </div>
                    <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                </div>
                <div class="testimonial-item man-testimonial-box wow fadeInUp" data-wow-delay=".50s">
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            The education I’m receiving at Ashoka Nursing & Paramedical College is preparing me for a
                            significant healthcare contribution.
                        </p>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="assets/images/testimonial/02.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Richard Lock</h4>
                            <p>Student</p>
                        </div>
                    </div>
                    <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                </div>
                <div class="testimonial-item man-testimonial-box wow fadeInUp" data-wow-delay=".75s">
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            I’m receiving world-class healthcare training at Ashoka Nursing & Paramedical College,
                            preparing me to create a positive impact.
                        </p>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="assets/images/testimonial/03.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Randal Grand</h4>
                            <p>Student</p>
                        </div>
                    </div>
                    <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                </div>
                <div class="testimonial-item man-testimonial-box wow fadeInUp" data-wow-delay="1s">
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            Ashoka Nursing & Paramedical College equips me with essential tools and education to make a
                            real difference in healthcare.
                        </p>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="assets/images/testimonial/04.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Edward Miles</h4>
                            <p>Student</p>
                        </div>
                    </div>
                    <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                </div>
                <div class="testimonial-item man-testimonial-box">
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            At Ashoka Nursing & Paramedical College, I’m gaining skills and knowledge to make a lasting
                            healthcare impact.
                        </p>
                    </div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="assets/images/testimonial/05.jpg" alt="">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Ninal Gordon</h4>
                            <p>Student</p>
                        </div>
                    </div>
                    <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial area end -->




    <!-- youtube part  -->
    <!-- <div class="container-fluid py-2 py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <iframe width="100%" height="415" src="https://www.youtube.com/embed/Bao7CT02jls"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div> -->
    <!-- youtube part / -->





    <?php include('include/footer.php'); ?>
    <?php include('include/script.php'); ?>
</body>

</html>