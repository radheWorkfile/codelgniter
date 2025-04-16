<!-- footer -->
<?php include('include/default.php'); ?>
<footer class="bg-colors pt-3 pb-1">
    <div class="container py-xl-4">
        <div class="row footer-grids">
            <div class="col-lg-3 col-sm-6 footer-grid">
                <h3 class="mb-sm-3 mb-2 pb-lg-2">Our Address</h3>
                <div class="row address-grid ">



                    <div class="address-right d-flex ">
                        <i class="fas fa-map-marker-alt px-2 pr-lg-2"></i>
                        <p><?php echo $address; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 footer-grid mt-lg-0 mt-4">
                <div class="address">
                    <h3 class="mb-sm-3 mb-2 pb-lg-2"> Contact Us</h3>
                    <div class="row address-grid">
                        <div class=" address-left text-center mt-3" id="rotate-right-part">
                            <i class="fas fa-phone fa-rotate-90 "></i>
                        </div>
                        <div class=" address-right">
                            <p>+91 <?php echo $mobile_1; ?></p>
                            <p>+91 <?php echo $mobile_2; ?></p>
                        </div>
                    </div>
                    <div class="row address-grid my-3 align-items-center pl-3">
                        <div class=" address-left text-center">
                            <i class="fa fa-envelope right-part-section"></i>
                        </div>
                        <div class=" address-right">
                            <p>
                                <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 footer-grid mt-sm-0 mt-4 px-lg-5">
                <h3 class="mb-sm-3 mb-2 pb-lg-2">Quick Links</h3>
                <div class="quicklinks ">
                    <div class="table table-hover text-white">
                        <ul style="list-style-type: none;">
                            <li>
                                <i class="fas fa-link"></i>
                                <a class="scroll" href="about-us.php">About Us</a>
                            </li>
                            <li class="py-2">
                                <i class="fas fa-link"></i>
                                <a class="scroll" href="placement.php">Placement</a>
                            </li>
                            <li>
                                <i class="fas fa-link"></i>
                                <a class="scroll" href="admission.php">Admission</a>
                            </li>
                            <li class="py-2">
                                <i class="fas fa-link"></i>
                                <a class="scroll" href="contact-us.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 footer-grid footer-contact mt-lg-0 mt-4 pl-lg-5">
                <h3 class="mb-sm-3 mb-2 pb-lg-2">Follow Us</h3>
                <!-- social icons -->
                <div class="social">
                    <div class="table table-hover text-white">

                        <ul style="list-style-type: none;">
                            <li>
                                <a href="<?php echo $facebook; ?>" target="_blank" class=" rounded-circle">
                                    <span class="fab fa-facebook"></span>
                                </a>
                                <td><a href="<?php echo $facebook; ?>" target="_blank">Facebook</a></td>
                            </li>
                            <li class=" py-2">
                                <a href="<?php echo $instagram; ?>" target="_blank" class=" rounded-circle">
                                    <span class="fab fa-instagram"></span>
                                </a>
                                <td><a href="<?php echo $instagram; ?>" target="_blank">Instagram</a></td>
                            </li>
                            <li>
                                <a href=" <?php echo $twitter; ?>" target="_blank" class="rounded-circle">
                                    <span class="fab fa-twitter"></span>
                                </a>
                                <td><a href="<?php echo $twitter; ?>" target="_blank">Twitter</a></td>
                            </li>
                            <li class=" py-2">
                                <a href="<?php echo $youtube; ?>" class=" rounded-circle">
                                    <span class="fab fa-youtube"></span>
                                </a>
                                <td><a href="<?php echo $youtube; ?>" target="_blank">Youtube</a></td>
                            </li>

                        </ul>
                    </div>
                </div>

                <!-- //social icons -->
            </div>
        </div>
    </div>
</footer>
<!-- //footer -->
<!-- copyright -->
<div class=" copyright-w3ls py-2">
    <div class="container">
        <div class="row">
            <!-- copyright -->
            <p class="col-lg-12 copy-right-grids text-bl text-lg-left text-center mt-lg-2 ">
            <div class="col-10">
                <span class="float-left small">© 2019 <?php echo $company_1; ?> |
                    All
                    Rights Reserved </span>
            </div>
            <div class="col-2">
                <span class="float-right small">Designed by
                    <a href="https://www.camwel.com/" target="_blank" class="text-colors"><img
                            src="./images/camwel_logo.png" style="width:50%"></a></span>
            </div>

            </p>
            <!-- //copyright -->

        </div>
    </div>
</div>
<!-- //copyright -->
<!-- move top icon -->
<a href="#home" class="move-top text-center bg-danger"></a>
<!-- //move top icon -->

<script src="js/jquery.js"></script>
<script src="js/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/main.js"></script>
<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
<script>
    new WOW().init();
</script>