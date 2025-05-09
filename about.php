  <!doctype html>
  <?php include('default.php');?>
  <html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home | <?php echo $company;?></title>
  <?php include('include/css.php');?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
  <?php include('include/header.php');?>


  <!-- Banner section start -->
  <style>
  .banner-slider {width: 100%;height: 400px;overflow: hidden;position: relative;}
  .slide-item {width: 100%;height: 100%;background-size: cover;background-position: center; position: relative;display: flex;align-items: center;justify-content: flex-start;}
  .slide-item::before {content: '';position: absolute;top: 0; left: 0; right: 0; bottom: 0;background-color: rgba(0, 0, 0, 0.4); z-index: 1;}
  .text-slide {max-width: 600px;padding: 2rem;text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);color: white;margin-left: -100%;animation: textIn 6s forwards;border-radius: 10px;z-index: 2;position: relative;}
  @keyframes textIn {0% {margin-left: -100%;opacity: 0;}100% {margin-left: 5%;opacity: 1;}}
  </style>
  <!-- Banner section end -->


  <!-- Banner section start -->
  <section class="banner-slider">
  <div class="slide-item" style="background-image:url('https://img.freepik.com/free-photo/beautiful-young-woman-working-her-laptop-her-office-home_231208-13967.jpg');">
  <div class="text-slide">
  <h3>About Us</h3>
  <p>Home | About us</p>
  </div>
  </div>
  </section>
  <!-- Banner section end -->



<!-- About Section start -->
   <!-- line after and before section start -->
    <style>
    .actPtitle {display: flex;align-items: center;text-align: center;gap: 12px;}
    .actPtitle::before,
    .actPtitle::after {content: "";width: 4%;height: 2px;background-color:red; }
    </style>
    <!-- line after and before section end -->

  <!-- button section start -->
<style>
.btn-fill-effect { position: relative; overflow: hidden; z-index: 1; color: #0d6efd; background-color: transparent; border-color: #0d6efd; transition: color 0.4s ease;}
.btn-fill-effect::before {content: ""; position: absolute; top: 0; left: 0; width: 0%; height: 100%; background-color: #0d6efd; z-index: -1;transition: width 0.4s ease;}
.btn-fill-effect:hover::before { width: 100%;}
.btn-fill-effect:hover { color: #fff;}
</style>
  <!-- button section end -->
  <section>
  <div class="container">
  <div class="row py-5">
  <div class="col-md-5">
  <img class="w-100" src="https://media.istockphoto.com/id/1468678624/photo/nurse-hospital-employee-and-portrait-of-black-man-in-a-healthcare-wellness-and-clinic-feeling.jpg?s=612x612&w=0&k=20&c=AGQPyeEitUPVm3ud_h5_yVX4NKY9mVyXbFf50ZIEtQI=" alt="">
  </div>
  <div class="col-md-7">
  <p class="actPtitle">About Us</p>
  <h2 class="mb-0">Lorem ipsum dolor sit</h2>
  <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ipsa aliquid fuga blanditiis. Qui ipsum, libero necessitatibus neque labore dolor architecto natus dolores repellendus, voluptates corporis ratione sit repudiandae eaque odit est quas!</p>
  <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ipsa aliquid fuga blanditiis. Qui ipsum, libero necessitatibus neque labore dolor architecto natus dolores repellendus, voluptates corporis ratione sit repudiandae eaque odit est quas!</p>
  <a href="#" class="btn btn-fill-effect btn-outline-primary px-4 py-2">Contact Us</a>
  </div>
  </div>
  </div>
  </section>

<!-- About Section end -->


   <!-- Mission vision section start -->
    <style>
    .call-do-action-area {
    background: linear-gradient(to left, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
    url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoYBTkVVzSMIi1RVriqx6bAJGERQoVnCQyuQ&s');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
    padding: 80px 0;
    color: #fff;
    }
    </style>
  <!-- Mission vision section start -->
  <style>
  .nav-pills .nav-link {color: #fff; border: 1px solid #fff; border-radius: 2rem; background-color: transparent; transition: all 0.3s ease; padding: 0.3rem 2rem; }
  .nav-pills .nav-link.active { background-color: #fff; color: #0d6efd; border-color: #fff; padding: 0.3rem 2rem;}
  </style>
  <!-- Mission vision section end -->


    <section class="call-do-action-area">
    <div class="container">
    <div class="row py-1">

    <div class="col-md-12 text-center">
    <!-- Nav Pills -->
    <ul class="nav nav-pills justify-content-center mb-4 gap-2">
    <li class="nav-item">
    <a class="nav-link active" data-bs-toggle="pill" href="#mission">Mission</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#vision">Vision</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#our-story">Our Story</a>
    </li>
    </ul>
    <!-- Tab Content -->
    <div class="tab-content">
    <div class="tab-pane fade show active" id="mission">
    <div class="row p-5 border" style="border-radius:1rem;">
          <div class="col-md-5">
          <img style="border-radius:1rem;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkXEO2l1kTNL_jE0xj0iSSTCfyy5XwfchYaA&s" class="w-100" alt="">
          </div>
          <div class="col-md-7">
          <h3 class="actPtitle">Our Mission</h3>
          <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat quos, eum libero architecto repellendus culpa explicabo aliquid iusto sit accusantium cupiditate dolor! Dolore est tempora nam. Aliquid facilis ipsa adipisci eaque quae? Maiores veniam est eveniet aut sed commodi exercitationem unde, voluptatibus consectetur. Quaerat quae nisi qui, molestiae consectetur atque assumenda ipsa. Possimus reprehenderit accusamus neque! Ipsum magni quam praesentium, assumenda natus eum sed quo cupiditate laudantium repellendus, pariatur ratione totam quia blanditiis perspiciatis perferendis. Autem qui nesciunt.</p>
          </div>
    </div>
    </div>
    <div class="tab-pane fade" id="vision">
   <div class="row p-5 border" style="border-radius:1rem;">
         <div class="col-md-5">
         <img style="border-radius:1rem;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkXEO2l1kTNL_jE0xj0iSSTCfyy5XwfchYaA&s" class="w-100" alt="">
         </div>
         <div class="col-md-7">
         <h3 class="actPtitle">Our Vision</h3>
         <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat quos, eum libero architecto repellendus culpa explicabo aliquid iusto sit accusantium cupiditate dolor! Dolore est tempora nam. Aliquid facilis ipsa adipisci eaque quae? Maiores veniam est eveniet aut sed commodi exercitationem unde, voluptatibus consectetur. Quaerat quae nisi qui, molestiae consectetur atque assumenda ipsa. Possimus reprehenderit accusamus neque! Ipsum magni quam praesentium, assumenda natus eum sed quo cupiditate laudantium repellendus, pariatur ratione totam quia blanditiis perspiciatis perferendis. Autem qui nesciunt.</p>
         </div>
    </div>
    </div>
    <div class="tab-pane fade" id="our-story">
    <div class="row p-5 border" style="border-radius:1rem;">
        <div class="col-md-5">
        <img style="border-radius:1rem;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkXEO2l1kTNL_jE0xj0iSSTCfyy5XwfchYaA&s" class="w-100" alt="">
        </div>
        <div class="col-md-7">
        <h3 class="actPtitle">Our Story</h3>
        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat quos, eum libero architecto repellendus culpa explicabo aliquid iusto sit accusantium cupiditate dolor! Dolore est tempora nam. Aliquid facilis ipsa adipisci eaque quae? Maiores veniam est eveniet aut sed commodi exercitationem unde, voluptatibus consectetur. Quaerat quae nisi qui, molestiae consectetur atque assumenda ipsa. Possimus reprehenderit accusamus neque! Ipsum magni quam praesentium, assumenda natus eum sed quo cupiditate laudantium repellendus, pariatur ratione totam quia blanditiis perspiciatis perferendis. Autem qui nesciunt.</p>
        </div>
    </div>
    </div>
    </div>
    </div>

    </div>
    </div>
    </section>
   <!-- Mission vision section end -->













  <?php include('include/footer.php');?>
  <?php include('include/js.php');?>
  </body>
  </html>