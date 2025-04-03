<!DOCTYPE html>
<?php include('default.php');?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="<?php echo $company;?>" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home | <?php echo $company;?></title>
    <?php include('include/css.php');?>
  </head>

  <body>

  <?php include('include/header.php');?>
    <!--=================================
    Banner -->
    <section class="banner position-ralative">
      <div id="main-slider" class="swiper-container h-800 h-lg-700 h-md-600 h-sm-400">
        <div class="swiper-wrapper">
          <!-- Swiper Slider 1-->
          <div class="swiper-slide align-items-center d-flex bg-overlay-black-40" style="background-image: url(images/bg/03.jpg); background-size: cover; background-position: center center;">
            <div class="swipeinner container">
              <div class="row justify-content-center text-center">
                <div class="col-lg-10 col-md-12">
                  <div class="slider-1">
                    <div class="animated" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">
                      <h1 class="animated text-white mb-4 text-shadow" data-swiper-animation="fadeInUp" data-duration="1.5s" data-delay="0.25s"><?php echo $company;?></h1>
                      <div class="animated text-white px-lg-5" data-swiper-animation="fadeInUp" data-duration="2.5s" data-delay="0.25s">
                        <p class="d-none d-sm-block text-shadow">Ashoka Nursing & Paramedical College offers top-tier education in nursing and paramedical sciences, fostering skilled professionals dedicated to healthcare excellence and community well-being.</p>
                      </div>
                      <a href="about.php" class="animated4 btn btn-white mt-4 mr-1 mr-sm-2" data-swiper-animation="fadeInUp" data-duration="3.5s" data-delay="0.25s">Read More<span></span></a>
                      <a href="contact.php" class="animated4 btn btn-primary mt-4 ml-1 ml-sm-2" data-swiper-animation="fadeInUp" data-duration="3.5s" data-delay="0.25s">Contact Us<span></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Swiper Slider 2-->
          <div class="swiper-slide align-items-center d-flex bg-overlay-black-40" style="background-image: url(images/bg/01.jpg); background-size: cover; background-position: center center;">
            <div class="swipeinner container">
              <div class="row justify-content-start">
                <div class="col-xl-8 col-lg-10 col-md-12">
                  <div class="slider-2">
                    <div class="animated" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">
                      <h1 class="animated text-white mb-4" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">The Education You Want. The Attention You Deserve</h1>
                      <div class="animated text-dark" data-swiper-animation="fadeInUp" data-duration="2.5s" data-delay="0.25s">
                       <p class="text-white d-none d-sm-block">There are basically six key areas to higher achievement. Some people will tell you there are four while others may tell you there are eight.</p>
                      </div>
                      <a href="#" class="animated4 btn btn-dark mt-4" data-swiper-animation="fadeInUp" data-duration="3s" data-delay="0.25s">Learn More<span></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     <!-- Pagination -->
      <div class="swiper-button-prev text-white"><i class="fa fa-arrow-left"></i></div>
      <div class="swiper-button-next text-white"><i class="fa fa-arrow-right"></i></div>
    </section>
    <!--=================================
    Banner -->


    <!--=================================
    About -->
    <section class="m-top-13">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 mb-4 mb-lg-0 pr-xl-6">
            <div class="section-title mb-4">
              <h1 class="title"><span class="text-maroon"  data-duration="1s">Tailored Learning, </span></h1>
              <h2 class="title"><span class="text-maroon"  data-duration="1s"></span> Remarkable Achievements</h2>
              <p class="mb-1 mb-lg-5 text-justify">Ashoka College of Professional Studies is a premier institution offering quality education across various disciplines. It emphasizes academic excellence, practical skills, and holistic development through dynamic learning, experienced faculty, and industry-relevant programs..</p>
            </div>
            <p class="mb-2 mb-lg-5 text-justify">At Ashoka College, students thrive in an engaging learning environment with expert faculty and modern facilities. The college fosters growth through activities, workshops, and internships, promoting leadership, critical thinking, and lifelong learning.</p>
            <a href="about.php" class="btn btn-primary btn-round">Read More</a>
          </div>
          <div class="col-lg-5 pr-lg-5">
            <div class="row">
             
              <div class="col-sm-5 mt-sm-5 mt-4">
                <img class="img-fluid mb-sm-2 w-100 border-radius" src="images/about/02.jpg" alt="">
              </div>
              <div class="col-sm-7">
                <img class="img-fluid w-100 border-radius" src="images/about/01.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    About -->

    <!--=================================
    Counter -->
    <section class="space-pb padding-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
            <div class="counter">
              <div class="counter-icon">
                <i class="flaticon-team-1"></i>
              </div>
              <div class="counter-content">
                <span class="timer" data-to="1790" data-speed="10000">1790</span>
                <label>Satisfied Students</label>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
            <div class="counter">
              <div class="counter-icon">
                <i class="flaticon-diploma-1"></i>
              </div>
              <div class="counter-content align-self-center">
                <span class="timer" data-to="245" data-speed="10000">245</span>
                <label>Course Completed</label>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-4 mb-md-0">
            <div class="counter">
              <div class="counter-icon">
                <i class="flaticon-support"></i>
              </div>
              <div class="counter-content">
                <span class="timer" data-to="491" data-speed="10000">491</span>
                <label>Expert Advisors</label>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="counter">
              <div class="counter-icon">
                <i class="flaticon-trophy-1"></i>
              </div>
              <div class="counter-content">
                <span class="timer" data-to="1090" data-speed="10000">346</span>
                <label>Award Winning</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Counter -->

    <!--=================================
    Action box -->
    <section class="space-ptb bg-overlay-black-80 bg-holder" data-jarallax='{"speed": 0.5}' style="background-image: url(images/bg/09.jpg);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 text-center">
            <span class="text-white d-block mb-4 h6 font-weight-normal">Are you ready to start your journey with us?</span>
            <h2 class="text-white mb-4 display-7">Education for Individual and Social Responsibility</h2>
            <a class="btn btn-primary mr-sm-3 mt-3" href="contact.php">Become A Student</a>
            <a class="btn btn-white mt-3" href="about.php">Discover More</a>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Action box -->



      <!--=================================
    Counter -->
    <section class="space-pb padding-5">
      <div class="container">
        <div class="row">
        
          <div class="col-sm-12 col-lg-12">
          <h5 class="text-white font-1 lh-1 fw-semibold bg-r-dard py-2 text-anim text-center">DISCIPLINARY GUIDELINE</h5>
            <table class="table table-hover m-3 aos-init aos-animate" style="text-align: left;" data-aos="fade-up" data-aos-duration="3000">
                        
                        <tbody>
            
                        <tr>
                        <td>1.&nbsp;</td>
                        <td>The students shall not do anything that may be judged as discriminating on their part against any of their college mates, members of staff and others on the basis of caste , creed, nationality, race, colour gender and religion.</td>
                        <td></td>
                        </tr>
                        <tr>
                        <td>2.&nbsp;</td>
                        <td>The students shall have to exercise punctually and practically honour the routine and schedules laid down by the college and its peripheral or subsidiary wings likes hostel, mess, etc…</td>
                        <td></td>
                        </tr>
            
                        <tr>
                        <td>3.&nbsp;</td>
                        <td>The student shall not do incriminating act nor shall they encourage others do so.</td>
                        <td></td>
                        </tr>
            
                        <tr>
                        <td>4.&nbsp;</td>
                        <td>The students shall have to keep trying to behave more and more in conformity with the principles and manners recommended for good quality working professional nurses and midwives by incorporating in their manners the spirit of team work, honesty , commitment, cleanness and high standard of spiritual and moral values.</td>
                        <td></td>
                        </tr>
                       
                        </tbody>
                        </table>
          </div>

        </div>
      </div>
    </section>
    <!--=================================
    Counter -->



   <!--=================================
    Testimonial-->
    <section class="space-ptb bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel testimonial-center" data-nav-arrow="false" data-nav-dots="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0" data-autoheight="true">
              <!-- item-01 START -->
              <div class="item">
                <div class="testimonial-item">
                  <div class="testimonial-quote text-center mb-4">
                    <i class="fas fa-quote-left fa-2x text-white"></i>
                  </div>
                    <div class="text-center">
                      <h5 class="mb-4">You won’t regret it. I can’t say enough about Ashoka College of Professional Studies. <span class="text-primary"> It’s the perfect choice for building a <br>successful future.</span></h5>
                    </div>
                  <div class="testimonial-content">
                    <p class="mb-lg-5">This is where you spark powerful change, embrace freedom in your thoughts, and feel a sense of accomplishment—walking confidently 10 years into your future.</p>
                  </div>
                  <div class="testimonial-author">
                    <div class="testimonial-avatar avatar avatar-md mr-0 border-dashed-1">
                      <img class="img-fluid " src="images/avatar/02.jpg" alt="">
                    </div>
                    <div class="testimonial-name">
                      <h5 class="name">Arihant Kumar.</h5>
                      <span>- Manager</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- item-01 END -->

              <!-- item-02 START -->
              <div class="item">
                <div class="testimonial-item">
                  <div class="testimonial-quote text-center mb-4">
                    <i class="fas fa-quote-left fa-2x text-white"></i>
                  </div>
                    <div class="text-center">
                      <h5 class="mb-4">Ashoka College of Professional Studies impressed me on multiple levels.<span class="text-primary">I wish I had discovered it sooner—it’s truly the perfect <br>choice for my future.</span></h5>
                    </div>
                  <div class="testimonial-content">
                    <p>These changes are purposeful because they are the ones you choose, guiding you to live the life you desire and fulfill your dreams.</p>
                  </div>
                  <div class="testimonial-author">
                    <div class="testimonial-avatar avatar avatar-md mr-0 border-dashed-1">
                      <img class="img-fluid " src="images/avatar/05.jpg" alt="">
                    </div>
                    <div class="testimonial-name">
                      <h5 class="name">Ashish kumar.</h5>
                      <span>- Our Teacher</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- item-02 END -->

              <!-- item-03 START -->
              <div class="item">
                <div class="testimonial-item">
                  <div class="testimonial-quote text-center mb-4">
                    <i class="fas fa-quote-left fa-2x text-white"></i>
                  </div>
                    <div class="text-center">
                      <h5 class="mb-4">hanks, everyone! Keep up the great work—I didn’t even<span class="text-primary"><br>need any training.</span></h5>
                    </div>
                  <div class="testimonial-content">
                    <p>Stepping away from comfort leads to personal freedom and fulfillment. Take the step now with Ashoka College of Professional Studies.</p>
                  </div>
                  <div class="testimonial-author">
                    <div class="testimonial-avatar avatar avatar-md mr-0 border-dashed-1">
                      <img class="img-fluid " src="images/avatar/03.jpg" alt="">
                    </div>
                    <div class="testimonial-name">
                      <h5 class="name">Uma Shanker.</h5>
                      <span>- Team Leader</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- item-03 END -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Testimonial-->






  <?php include('include/footer.php');?>
  <?php include('include/js.php');?>


  </body>
</html>
