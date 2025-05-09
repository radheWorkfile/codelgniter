    <!doctype html>
    <?php include('default.php');?>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog | <?php echo $company;?></title>
    <?php include('include/css.php');?>
    </head>
    <body>
    <?php include('include/header.php');?>


<!-- Banner section start -->
    <style>h2{font-weight:600;}</style>
    <section style="background-image: url('assets/web-img/gallery/banner.jpg'); background-size: cover; background-position: center; height: 300px; display: flex; align-items: center; justify-content: center; text-align: center;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-white">
                <h2>Our Blog</h3>
                <p>Home | Our Blog</p>
            </div>
        </div>
    </div>
</section>
<!-- Banner section start -->




    <!-- About Section start -->
    <style>         
    .img-border { border: 1px solid #d2d2d2; padding: 0.5rem; }
    h3{font-weight:600;}
    .custom-btn span { display: inline-block;background: linear-gradient(135deg, #ff4e50, #f9d423);
    padding: 0.6rem 1.2rem; border-radius: 1.3rem; color: white;
    font-weight: 500; text-decoration: none; transition: background 0.4s ease;}
    .custom-btn span:hover {
    background: linear-gradient(135deg, #3a1c71, #d76d77); /* hover gradient */
    color: #fff;
    }
    </style>           
    <section class="my-5 py-5">
    <div class="container">
    <div class="row">
    <div class="col-md-8 offset-md-2">
    <h2 class="text-center">Our Gallery</h2>
    <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda minus quibusdam nobis delectus dolorum excepturi commodi dignissimos laborum provident vero?</p>
    </div> </div>
    <div class="row">
    <div class="col-md-5">
    <img src="https://img.freepik.com/free-photo/beautiful-young-woman-working-her-laptop-her-office-home_231208-13967.jpg" alt="" class="p-4" style="height:50vh;">
    </div>
    <div class="col-md-7">
    <h3 class="">Lorem ipsum dolor sit amet.</h3>
    <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. In, mollitia harum eaque, vel distinctio delectus quo eveniet non culpa nesciunt iste similique reprehenderit est ab, quasi voluptate obcaecati maiores! Magnam necessitatibus cupiditate quia eos, odit voluptatem adipisci. Dolorem, laudantium! Est vitae eius veritatis accusamus sunt delectus ipsam ducimus nemo repudiandae aspernatur sapiente, nostrum rerum esse!</p>
    <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. In, mollitia harum eaque, vel distinctio delectus quo eveniet non culpa nesciunt iste similique reprehenderit est ab, quasi voluptate obcaecati maiores! Magnam necessitatibus cupiditate quia eos, odit voluptatem adipisci. Dolorem, laudantium! Est vitae eius veritatis accusamus sunt delectus ipsam ducimus nemo repudiandae aspernatur sapiente, nostrum rerum esse!</p>
    <a href="" class="custom-btn"><span>Contact Us</span></a>
    </div> </div> </div>
    </section>
    <!-- About Section end -->



<!-- blog card section start.  -->

    <section>
    <div class="container">
    <div class="row">
    <div class="col-md-8 offset-md-2">
    <h2 class="text-center">Our Blog</h2>
    <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda minus quibusdam nobis delectus dolorum excepturi commodi dignissimos laborum provident vero?</p>
    </div> </div>
    <div class="row">
      <!-- Blog Card 1 -->
        <div class="col-md-4">
        <main class="blog-card-1 mx-auto p-4 rounded-3 bg-g  mb-5 overflow-hidden">
        <img src="https://brandingandbuzzing.com/wp-content/uploads/2020/12/pexels-sound-on-3756879-e1608577391154.jpg" alt="Mobile in Hand" class="rounded-3 d-block mb-3">
        <h4 class="fw-bold mb-1">UI/UX Best Practices</h3>
        <p>Discover the key principles of user-centric design that help create engaging digital experiences.</p>
        <span class="date d-block mb-2">Mar. 10, 2021</span>
        <span class="category py-1 text-center rounded-3 fw-bold d-block mb-3">Design</span>
        </main>
        </div>
      <!-- Blog Card 2 -->
        <div class="col-md-4">
        <main class="blog-card-2 mx-auto p-4 rounded-3 bg-g  mb-5 overflow-hidden">
        <img src="https://brandingandbuzzing.com/wp-content/uploads/2020/12/pexels-sound-on-3756879-e1608577391154.jpg" alt="Coding" class="rounded-3 d-block mb-3">
        <h4 class="fw-bold mb-1">UI/UX Best Practices</h3>
        <p>Discover the key principles of user-centric design that help create engaging digital experiences.</p>
        <span class="date d-block mb-2">Mar. 10, 2021</span>
        <span class="category py-1 text-center rounded-3 fw-bold d-block mb-3">Design</span>
        </main>
        </div>
      <!-- Blog Card 3 -->
        <div class="col-md-4">
        <main class="blog-card-3 mx-auto p-4 rounded-3 bg-g  mb-5 overflow-hidden">
        <img src="https://brandingandbuzzing.com/wp-content/uploads/2020/12/pexels-sound-on-3756879-e1608577391154.jpg" alt="Design" class="rounded-3 d-block mb-3">
        <h4 class="fw-bold mb-1">UI/UX Best Practices</h3>
        <p>Discover the key principles of user-centric design that help create engaging digital experiences.</p>
        <span class="date d-block mb-2">Mar. 10, 2021</span>
        <span class="category py-1 text-center rounded-3 fw-bold d-block mb-3">Design</span>
        </main>
        </div>
    </div>
    </div>
    </section>

    <style>
    .bg-g{background-color:#e8e8e8;}
    main { margin-top: 2rem; max-width: 100%; width: 100%; box-shadow: 0 10px 10px rgba(153, 150, 150, 0.6); }
    main img { width: 100%; height: auto; }
    main .category { font-size: 0.875rem; cursor: pointer; max-width: 107px; width: 100%; background-color: rgb(140, 140, 148); color: #fff; }
    main .date { color: #9999aa; }
    </style>
<!-- blog card section end.  -->

    <?php include('include/footer.php');?>
    <?php include('include/js.php');?>

    </body>
    </html>