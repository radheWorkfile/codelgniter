<!-- header area -->
<header class="header">
    <?php include('default.php'); ?>
    <link rel="shortcut icon" href="<?php echo $favicon;?>" type="image/x-icon">
    <div class="header-top">
        <div class="container">
            <div class="header-top-wrap">
                <div class="header-top-left">
                    <div class="header-top-social">
                        <span>Follow Us: </span>
                        <a href="<?php echo $facebook; ?>"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?php echo $instagram; ?>"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo $youtube; ?>"><i class="fab fa-youtube"></i></a>
                        <a href="<?php echo $whatsapp; ?>"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="header-top-right">
                    <div class="header-top-contact">
                        <ul>
                            <li>
                                <a href="<?php echo $call; ?>"><i class="far fa-phone-volume"></i>
                                    <?php echo $mobile_1 . ' | ' . $mobile_2; ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container position-relative">
                <a class="navbar-brand" href="index.php">
                    <img src="<?php echo $logo; ?>" alt="logo">
                </a>
                <div class="mobile-menu-right">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">


                        <li class="nav-item dropdown">
                            <a class="nav-link active" href="index.php"><i class="fa fa-home"
                                    aria-hidden="true"></i>&nbsp;Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>



                        <li class="nav-item mega-menu dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Courses</a>
                            <div class="dropdown-menu fade-down">
                                <div class="mega-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12 col-sm-4 col-md-4">


                                                <ul class="mega-menu-item">
                                                    <li><a class="dropdown-item" href="anm_course.php">A. N. M.</a></li>
                                                    <li><a class="dropdown-item" href="gnm_course.php">G. N. M.</a></li>
                                                    <li><a class="dropdown-item" href="bsc_nursing.php">B. Sc.
                                                            Nursing</a> </li>
                                                    <li><a class="dropdown-item" href="pbbsc_nursing.php">P. B. B. Sc.
                                                            Nursing</a></li>
                                                    <li><a class="dropdown-item  border-bottom_new"
                                                            href="msc_nursing.php">M. Sc. Nursing</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-sm-4 col-md-4">
                                                <ul class="mega-menu-item">
                                                    <li><a class="dropdown-item" href="dresser.php">Dresser</a></li>
                                                    <li><a class="dropdown-item" href="dmlt_course.php">D. M. L. T.</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="ot_assistant.php">O. T.
                                                            Assistant</a></li>
                                                    <li><a class="dropdown-item" href="dpt_course.php">D. P. T.</a></li>
                                                    <li><a class="dropdown-item border-bottom_new"
                                                            href="doct_course.php">D. O. C. T.</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-4">
                                                <ul class="mega-menu-item">
                                                    <li><a class="dropdown-item" href="dsi_course.php">D. S. I.</a></li>
                                                    <li><a class="dropdown-item" href="bpt_course.php">B. P. T.</a></li>
                                                    <li><a class="dropdown-item" href="bhm_course.php">B. H. M.</a></li>
                                                    <li><a class="dropdown-item" href="boct_course.php">B. O. C. T.</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="bmlt_course.php">B. M. L. T.</a>
                                                    </li>
                                                    <li><a class="dropdown-item border-bottom_new"
                                                            href="bot_course.php">B. O. T.</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="admission.php">Admission</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="placement.php">Placement</a>
                        </li>




                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                    <div class="nav-right">
                        <div class="nav-right-btn mt-2">
                            <a href="application-form.php" class="theme-btn"><span class="fal fa-pencil"></span>Apply
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- header area end -->


<main class="main" id="main-id-section">