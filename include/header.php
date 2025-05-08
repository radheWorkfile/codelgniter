<!-- Header -->
<?php include('./default.php'); ?>

<section class="bg-accent-color-1 py-3">
    <div class="r-container">
        <div class="row">
            <div class="d-flex flex-lg-row flex-column justify-content-lg-between justify-content-center gap-3">
                <ul class="d-flex m-0 flex-lg-row flex-column justify-content-center align-items-center gap-3 text-white font-2 text-center text-lg-start"
                    style="list-style: none;">
                    <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="<?php echo $call; ?>"
                            class="text-white">
                            &nbsp; <?php echo $mobile_1 . ' / ' . $mobile_1; ?></a></li>
                    <!-- <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="<?php echo $emailLink; ?>" class="text-white"><?php echo $email; ?></a></li> -->
                </ul>
                <div class="social-container justify-content-center">
                    <a target="_blank" href="<?php echo $facebook; ?>" class="social-item bg-info">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a target="_blank" href="<?php echo $twitter; ?>" class="social-item bg-info">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a target="_blank" href="<?php echo $youtube; ?>" class="social-item bg-info">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sticky-top bg-white">
    <div class="r-container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <div class="logo-container">
                        <img src="<?php echo $logoPatn; ?>" alt="" class="img-fluid" style="height:4rem;">
                    </div>
                </a>
                <button class="navbar-toggler accent-color border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 font-2 fw-semibold gap-lg-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php"><i class="fa fa-home"
                                    aria-hidden="true"></i>&nbsp;Home</a>
                        </li>

                        <li class="nav-item"> <a class="nav-link" href="about_us.php">About Us</a></li>

                        <li class="nav-item dropdown" title="Click Me">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="true">
                                Services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="anm_course.php">Services 1</a></li>
                                <li><a class="dropdown-item" href="bse_nursing.php">Services 2</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown" title="Click Me">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="true">
                                Pages
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="anm_course.php">Media</a></li>
                                <li><a class="dropdown-item" href="anm_course.php">Blog</a></li>
                                <li><a class="dropdown-item" href="bse_nursing.php">Login</a></li>
                                <li><a class="dropdown-item" href="bse_nursing.php">Register</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"> <a class="nav-link" href="gallery.php">Gallery</a></li>

                        <li class="nav-item">
                            <a class="nav-link" href="admission.php">Admission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="placement.php">Placement</a>
                        </li>

                    </ul>
                    <a href="contact.php" type="button" class="btn button bg-accent-color" type="submit">
                        Contact Us</a>
                </div>
            </div>
        </nav>
    </div>
</section>
<!-- End  of Header -->