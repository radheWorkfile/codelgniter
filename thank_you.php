<!DOCTYPE html>
<?php session_start(); ?>

<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thank you - <?php echo $company; ?></title>
        <?php include('default.php'); ?>
        <?php include('include/css.php'); ?>
</head>

<body>
        <?php include('include/header.php'); ?>
        <section class="section m-6 my-5">
                <div class="r-container">
                        <div class="d-flex flex-lg-row flex-column-reverse gap-3">
                                <div class="col col-lg-2"></div>
                                <div class="col col-lg-8 py-3 px-5"
                                        style="background-color:#f2f2f2;border-top:5px solid #2dd2ff;border-radius:1rem;">
                                        <div class="container" style="margin:auto;">
                                                <?php echo $_SESSION['response']; ?>
                                        </div>
                                </div>
                                <div class="col col-lg-2"></div>
                        </div>
        </section>
        <?php include('include/footer.php'); ?>
        <?php include('include/js.php'); ?>
</body>

</html>