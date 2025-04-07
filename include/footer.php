</main>
<?php include('default.php'); ?>
<footer class="footer-area">
    <div class="footer-shape">
        <img src="assets/img/shape/03.png" alt="">
    </div>
    <div class="footer-widget">
        <div class="container">
            <div class="row footer-widget-wrapper pt-100 pb-70">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-widget-box about-us">
                        <a href="#" class="footer-logo">
                            <img src="<?php echo $logo; ?>" alt="">
                        </a>
                        <p class="mb-3 text-justify">
                            <?php echo $footerText; ?>
                        </p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Quick Links</h4>
                        <ul class="footer-list">
                            <li><a href="#"><i class="fas fa-caret-right"></i> Home</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> About Us</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Admission</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Placement</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Courses</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Our Courses</h4>
                        <ul class="footer-list">
                            <li><a href="#"><i class="fas fa-caret-right"></i> A. N. M.</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> G. N. M.</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> B. Sc. Nursing</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> P. B. B. Sc. Nursing</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> M. Sc. Nursing</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i> Dresser</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Contact Us</h4>
                        <div class="footer-newsletter">
                            <ul class="footer-contact">
                                <li><i class="far fa-map-marker-alt"></i><?php echo $address; ?></li>
                                <li><a href="tel:<?php echo $mobile_1 . ' | ' . $mobile_2; ?>"><i
                                            class="far fa-phone"></i><?php echo $mobile_1 . ' | ' . $mobile_2; ?></a></li>
                                <li><a href="<?php echo $mail; ?>"><i
                                            class="far fa-envelope"></i><?php echo $email; ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright-wrapper">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p class="copyright-text">
                            <?php echo $copyright; ?>
                        </p>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <ul class="footer-social">
                            <li><a href="<?php echo $facebook; ?>"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?php echo $facebook; ?>"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="<?php echo $facebook; ?>"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="<?php echo $facebook; ?>"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->
<!-- scroll-top -->
<a href="#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>
<!-- scroll-top end -->