<?php include('default.php');?>
<footer>
        <section class="py-5 position-relative" style="background-image: url(image/image-1920x900-2.jpg);">
            <div class="r-container">
                <div class="image-overlay-2"></div>
                <div class="position-relative" style="z-index: 2;">
                    <div class="row row-cols-1 row-cols-lg-2 text-lg-start text-center px-lg-0 px-3">
                        <div class="col">
                            <h4 class="text-white font-1 fw-bold fs-1 text-anim">
                            Ready to get started ?</h4>
                        </div>
                        <div class="col">
                            <div class="d-flex justify-content-lg-end justify-content-center h-100 align-items-center">
                                <a href="contact.php" type="button" class="btn btn-dark px-4 py-3 fs-5">Contact Us Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="px-lg-0 px-4 py-lg-5 py-4 bg-accent-color-1">
            <div class="r-container text-white">
                <div class="row row-cols-1 row-cols-lg-4">
                    <div class="col col-lg-4 mb-3">
                        <div class="d-flex flex-column h-100 justify-content-center">
                            <div class="logo-container">
                                <img src="<?php echo $logoPatn;?>" alt="Logo" class="img-fluid"style="height:4rem;">
                            </div>
                            <p class="text-white text-justify">
                                <?php echo $footerText;?>
                            </p>
                        </div>
                    </div>
                    <div class="col col-lg-1 mb-3"></div>
                    <div class="col col-lg-2 mb-3 mt-4">
                        <div class="d-flex flex-column">
                            <h5 class="font-1 fw-bold mb-3">Quick Link</h5>
                            <div class="d-flex flex-column gap-2">
                                <a href="javaScript:void(0);" class="d-flex flex-row gap-2 align-items-center link-light"><i
                                        class="fa-solid fa-chevron-right icon-color"></i>Home</a>
                                <a href="javaScript:void(0);" class="d-flex flex-row gap-2 align-items-center link-light"><i
                                        class="fa-solid fa-chevron-right icon-color"></i>About Us</a>
                                <a href="javaScript:void(0);" class="d-flex flex-row gap-2 align-items-center link-light"><i
                                        class="fa-solid fa-chevron-right icon-color"></i>Courses</a>
                                <a href="contact.php" class="d-flex flex-row gap-2 align-items-center link-light"><i
                                        class="fa-solid fa-chevron-right icon-color"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-1 mb-3"></div>
                   
                    <div class="col col-lg-4 mb-3">
                        <div class="d-flex flex-column mb-3">
                            <h5 class="font-1 fw-bold mb-2 mt-4">Get In Touch</h5>
                            <div style="display:flex;">
                                <div class="">
                                <i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;
                                </div>
                                <div class="px-2">
                                <p class="text-white"><?php echo $address;?> </p>
                                </div>
                            </div>
                            
                            <div class="d-flex flex-wrap">
                            <div class="d-flex flex-row me-2 gap-2 align-items-center">
                                    <i class="fa-solid fa-envelope"></i>
                                    <?php echo $email;?>
                                </div>
                                <div class="d-flex flex-row me-2 gap-2 align-items-center mt-2">
                                    <i class="fa-solid fa-phone"></i>
                                     <?php echo $mobile_1. ' / ' . $mobile_2; ?>
                                </div><br>
                            </div>
                        </div>
                        <div class="d-flex flex-column mb-3">
                            <!-- <h5 class="font-1 fw-bold mb-2">Social Media :</h5> -->
                            <div class="social-container">
                                <a href="https://www.facebook.com/" class="social-item bg-info">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href="https://www.twitter.com/" class="social-item bg-info">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="https://www.youtube.com/" class="social-item bg-info">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100" style="border-bottom: 1px solid #fff;"></div>
                <div class="text-center p-2"><?php echo $copyright;?></div>
            </div>
        </section>
    </footer>