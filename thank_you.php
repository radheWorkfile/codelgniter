<!DOCTYPE html>
<?php session_start(); ?>
<?php  include('default.php');?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you - <?php echo $company;?></title>
    <?php include('include/css.php');?>
</head>

<body>
<?php include('include/header.php');?>
    <main>
    <section class="inner-banner bg-overlay-black-70 bg-holder" style="background-image: url('images/bg/06.jpg');">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12">
            <div class="text-center">
              <h1 class="text-white">Thank You</h1>
            </div>
            <div class="d-flex justify-content-center ">
              <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active text-white"><span>Thank You</span></li>
            </ol>
            </div>
          </div>
        </div>
      </div>
    </section>



        <section class="section m-6">
            <div class="r-container">
            <div class="d-flex flex-lg-row flex-column-reverse gap-3">

           
            <div class="col col-lg-2"></div>

            <div class="col col-lg-8 bg-dark py-3 px-5"style="border-top:5px solid #a61d37;border-radius:1rem;">
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

   
<?php include('include/footer.php');?>
<?php include('include/js.php');?>
</body>
</html>