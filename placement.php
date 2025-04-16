<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php include('default.php'); ?>
    <title>Placement | <?php echo $heading; ?></title>
    <?php include('include/css.php'); ?>
</head>

<body>
    <?php include('include/header.php'); ?>

    <!-- breadcrumb -->
    <div class="site-breadcrumb cus-width" style="background: url(assets/images/bg/placement.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">Placement</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.php">Home</a></li>
                <li class="active">Placement</li>
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
                                Training & Placement Cell </h2>
                        </div>
                        <p class="about-text text-justify">
                            The training and placement of students is a core objective of the institute, with a strong
                            emphasis on its significance from the outset. To support this goal, a dedicated Training &
                            Placement Cell has been established, led by a qualified Training & Placement Officer. The
                            cell is equipped with all necessary facilities to ensure smooth and effective operations,
                            aiming to secure promising futures for students in the paramedical field.
                        </p>
                        <p class="about-text text-justify mt-4">
                            The training and placement of students is a key objective of the institute. A dedicated
                            Training & Placement Cell, led by a qualified officer, facilitates hospital training for
                            final-year students in reputed organizations and works to secure optimal placements. Regular
                            communication is maintained with hospitals, and industry experts are invited to deliver
                            lectures and seminars, keeping students updated on the latest developments in the
                            paramedical field.
                        </p>
                    </div>
                </div>

                <div class="col-lg-1"></div>

                <div class="col-lg-4">
                    <div class="wow fadeInLeft" data-wow-delay=".25s">
                        <div class="about-img">
                            <div class="row g-4 mt-5">
                                <div class="col-md-6" style="width: 100%">
                                    <img class="img-1" src="assets/images/about/placemnet.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <?php include('include/all_courses.php'); ?>
    <?php include('include/footer.php'); ?>
    <?php include('include/script.php'); ?>
</body>

</html>