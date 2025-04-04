    <!doctype html>
    <?php include('default.php');?>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | <?php echo $company;?></title>
    <?php include('include/css.php');?>

        <style>
        /* banner text manage in all devices section start from here. */
        .cus-text-man{position:absolute;top:20rem;}
        .cus-btn{background-color:red;padding:0.3rem 1rem;border-radius:2rem;border:3px solid red;}
        @media(max-width:600px)
        {
        .cus-text-man{position:absolute;top:6rem;font-size:10px;padding:0rem 2rem;text-align:justify;}
        h3{font-size:15px;}
        }
        @media(min-width: 600px) and (max-width: 771px) {
        .cus-text-man {position: absolute;top: 13rem;font-size: 13px;padding: 0rem 2rem 0rem 4rem;text-align: justify;}
        h3 {font-size: 18px;}
        }
        @media(min-width: 772px) and (max-width: 991px) {
        .cus-text-man {position: absolute;top: 13rem;font-size: 13px;padding: 0rem 2rem 0rem 8rem;text-align: justify;}
        h3 {font-size: 18px;}
        }
        /* banner text manage in all devices section end here. */
        </style>

    </head>
    <body>
    <?php include('include/header.php');?>


<!-- Banner Section start from here. -->
 <section style="position:relative;">
 <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://png.pngtree.com/thumb_back/fh260/back_pic/00/11/26/6756376bb3e282a.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://png.pngtree.com/thumb_back/fh260/back_pic/00/11/26/6756376bb3e282a.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://png.pngtree.com/thumb_back/fh260/back_pic/00/11/26/6756376bb3e282a.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
 </section>
<!-- Banner Section End from here. -->



<!-- banner text section start from here. -->
 <section class="cus-text-man"> 
  <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8 col-sm-12">
         <h3 style="text-align:center;" class="text-anim">Lorem ipsum dolor sit amet.</h3>
         <p class="text-center" data-aos="fade-up" data-aos-duration="3000">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis vero quidem nihil optio ipsum iure minus magnam sapiente qui in. Rerum, quia ratione, praesentium culpa dolorem delectus optio tempora sapiente dolores sequi commodi!</p>
         <p class="text-center mt-3"><a href=""><span class="cus-btn">View More</span> </a></p>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
 </section>
<!-- banner test section start from here. -->





    <?php include('include/footer.php');?>
    <?php include('include/js.php');?>
    </body>
    </html>