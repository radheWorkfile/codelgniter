<!DOCTYPE html>
<?php session_start(); ?>
<?php include('default.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you - <?php echo $company_1; ?></title>
    <?php include('include/css.php'); ?>
</head>

<body>
    <?php include('include/header.php'); ?>
    <main>
        <!-- Banner -->




        <section class="section" style="background: linear-gradient(to right, #0dcaf0, #feb47b);">
            <div class="r-container">
                <div class="d-flex flex-lg-row flex-column-reverse gap-3">


                    <div class="col col-lg-2"></div>

                    <div class="col col-lg-8 bg-danger py-3 px-5" style="border-top:5px solid red;border-radius:1rem;">
                        <div class="container" style="margin:auto;">
                            <?php
                            echo $_SESSION['response'];
                            ?>
                        </div>
                    </div>

                    <div class="col col-lg-2"></div>





                </div>
        </section>


    </main>


    <?php include('include/footer.php'); ?>
    <?php include('include/js.php'); ?>
</body>

</html>