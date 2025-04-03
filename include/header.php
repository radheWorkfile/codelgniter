   <!--================================= Header -->
   
   <?php include('default.php');?>
   <link rel="shortcut icon" href="<?php echo $favicon;?>" />
    <header class="header header-sticky">
        <div class="topbar bg-dark py-3 d-none d-lg-flex">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="d-none d-lg-flex align-items-center text-center">
                            <div class="mr-3 d-inline-block">
                                <a class="text-white" href="mailto:gethelp@university.com"><i class="far fa-envelope mr-2"></i><span>&nbsp;</span><?php echo $email;?></a>
                            </div>
                            <div class="mr-auto d-inline-block">
                                <a class="text-white" href="mailto:gethelp@university.com"><i class="fas fa-phone-alt mr-2"></i><span>&nbsp;</span><?php echo $mobile_1.' | '.$mobile_2;?></a>
                            </div>
                            <div class="social-icon">
                                <ul class="social-icon">
                                    <li>
                                        <a href="<?php echo $facebook;?>"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $twitter;?>"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $linkedin;?>"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $instagram;?>"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="d-lg-flex align-items-center">
                            <!-- logo -->
                            <a class="navbar-brand logo" href="index.php">
                                <img src="<?php echo $logoPatn;?>" alt="Logo" style="height:5rem;">
                            </a>
                            <nav class="navbar navbar-expand-lg">

                                <!-- Navbar toggler START-->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                                <!-- Navbar toggler END-->

                                <!-- Navbar START -->
                                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                                    <ul class="navbar-nav">
                                         <li class="nav-item">
                                            <a class="nav-link" href="index.php"><i class="fa fa-home" style="font-size:1rem;" aria-hidden="true"></i> Home</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="about.php">About Us</a>
                                        </li>

                                     


                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Course<i class="fas fa-chevron-down fa-xs"></i>
                      </a>
                                            <!-- Dropdown Menu -->
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="bba_course.php"><i class="fa fa-book" aria-hidden="true"></i> &nbsp;B. B. A.</a></li>
                                                <li><a class="dropdown-item" href="bca_course.php"><i class="fa fa-book" aria-hidden="true"></i> &nbsp;B. C. A.</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="admission.php">Admission</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="placement_cell.php">Placement</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <!-- Navbar END-->
                                <div class="col-sm-4 text-md-right mb-4 mb-sm-0">
                                <a class="btn btn-primary" href="contact.php"><i class="fa fa-user-circle" aria-hidden="true"></i> Contact Us</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--=================================
    Header -->