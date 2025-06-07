    <!doctype html>
    <?php include('default.php');?>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | <?php echo $company;?></title>
    <?php include('include/css.php');?>

    <!-- line after and before section start -->
    <style>
    .actPtitle {display: flex;align-items: center;text-align: center;gap: 12px;}
    .actPtitle::before,
    .actPtitle::after {content: "";width: 4%;height: 2px;background-color:red; }
    </style>
    <!-- line after and before section end -->


    </head>
    <body>
    <?php include('include/header.php');?>
    <style>
    .scroll-wrapper {
      overflow-x: auto;
      scroll-snap-type: x mandatory;
      display: flex;
      gap: 1rem;
      padding-bottom: 1rem;
    }

    .scroll-wrapper::-webkit-scrollbar {
      display: none; /* optional: hide scrollbar */
    }

    .message-card {
      flex: 0 0 auto;
      width: 300px;
      scroll-snap-align: start;
    }
    </style>

      <!-- Banner section start. -->
      <style>

    /* Button section start. */
    .custom-btn span {display: inline-block; background: linear-gradient(135deg, #ff4e50, #f9d423);padding: 0.6rem 1.2rem; border-radius: 1.3rem; color: white; font-weight: 500; text-decoration: none; transition: background 0.4s ease;}
    .custom-btn span:hover { background: linear-gradient(135deg, #3a1c71, #d76d77);color: #fff;}
    /* Button section end */
    h2 {
        font-weight: 900;
    }

    .banner-slider {
        overflow: hidden;
        width: 100%;
        height: 400px;
        position: relative;
    }

    .slide-track {
        display: flex;
        transition: transform 1s ease-in-out;
    }

    .slide {
        flex: 0 0 100%;
        height: 400px;
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        position: relative;
    }

    .slide::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }

    .text-box {
        color: white;
        max-width: 600px;
        margin-left: 6rem;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
        position: relative;
        z-index: 2;
    }

    .first-text {
        animation: slideInLeft 2s ease forwards;
        opacity: 0;
        transform: translateX(-100%);
    }

    @keyframes slideInLeft {
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @media (max-width: 768px) {
        .banner-slider {
            height: auto;
        }

        .slide {
            flex-direction: column;
            justify-content: center;
            padding: 2rem 1rem;
            text-align: center;
            height: auto;
        }

        .text-box {
            margin-left: 0;
            max-width: 100%;
            padding: 1rem;
        }
    }
</style>

    <section class="banner-slider">
        <div class="slide-track" id="slideTrack">
        <div class="slide" style="background-image:url('https://img.freepik.com/free-photo/beautiful-young-woman-working-her-laptop-her-office-home_231208-13967.jpg');">
        <div class="text-box first-text">
        <h2 class="actYrk__">Lorem ipsum dolor sit amet.</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore praesentium perferendis corporis perspiciatis dolorem voluptatum esse magni accusamus totam fugit. Placeat, ratione.</p>
        <a href="" class="custom-btn"><span>Contact Us</span></a>
        </div>
        </div>
        <div class="slide" style="background-image:url('https://img.freepik.com/free-photo/beautiful-young-woman-working-her-laptop-her-office-home_231208-13967.jpg');">
        <div class="text-box">
        <h3>Lorem ipsum dolor sit amet.</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quas culpa?</p>
        <a href="" class="custom-btn"><span>Contact Us</span></a>
        </div>
        </div>
        <div class="slide" style="background-image:url('https://img.freepik.com/free-photo/beautiful-young-woman-working-her-laptop-her-office-home_231208-13967.jpg');">
        <div class="text-box">
        <h2>Lorem ipsum dolor sit amet.</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quas culpa?</p>
        <a href="" class="custom-btn"><span>Contact Us</span></a>
        </div>
        </div>
    </div>
    </section>
    <!-- Banner section end -->

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
    <div class="col-md-5">
    <img src="https://img.freepik.com/free-photo/beautiful-young-woman-working-her-laptop-her-office-home_231208-13967.jpg" alt="" class="p-4" style="height:50vh;">
    </div>
    <div class="col-md-7">
    <h3 class="actPtitle" data-aos="fade-up">Lorem ipsum dolor sit amet. ddd</h3>
    <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. In, mollitia harum eaque, vel distinctio delectus quo eveniet non culpa nesciunt iste similique reprehenderit est ab, quasi voluptate obcaecati maiores! Magnam necessitatibus cupiditate quia eos, odit voluptatem adipisci. Dolorem, laudantium! Est vitae eius veritatis accusamus sunt delectus ipsam ducimus nemo repudiandae aspernatur sapiente, nostrum rerum esse!</p>
    <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. In, mollitia harum eaque, vel distinctio delectus quo eveniet non culpa nesciunt iste similique reprehenderit est ab, quasi voluptate obcaecati maiores! Magnam necessitatibus cupiditate quia eos, odit voluptatem adipisci. Dolorem, laudantium! Est vitae eius veritatis accusamus sunt delectus ipsam ducimus nemo repudiandae aspernatur sapiente, nostrum rerum esse!</p>
    <a href="" class="custom-btn"><span>Contact Us</span></a>
    </div> </div> </div>
    </section>
    <!-- About Section end -->

<!-- Gallery section start  -->
    <section class="py-5"style="background-color:#f8f8f8;">
    <div class="container">

    <div class="row">
    <div class="col-md-8 offset-md-2">
    <h2 class="text-center">Our Gallery</h2>
    <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda minus quibusdam nobis delectus dolorum excepturi commodi dignissimos laborum provident vero?</p>
    </div>
    </div>

    <div class="row my-3">
    <div class="col-md-5">
    <img src="https://img.freepik.com/free-photo/beautiful-young-woman-working-her-laptop-her-office-home_231208-13967.jpg" alt="" class="p-4" style="height:50vh;">
    </div>
    <div class="col-md-7">
    <div class="border-bottom">
    <p> At Urban Construction Homes Pvt. Ltd., we believe in delivering more than just services—we deliver trust, innovation, and measurable results. Here’s why hundreds of clients choose us over others: </p>
    </div>
    <div class="border-bottom pt-3">
    <p> At Urban Construction Homes Pvt. Ltd., we believe in delivering more than just services—we deliver trust, innovation, and measurable results. Here’s why hundreds of clients choose us over others: </p>
    </div>
    <div class="border-bottom pt-3">
    <p> At Urban Construction Homes Pvt. Ltd., we believe in delivering more than just services—we deliver trust, innovation, and measurable results. Here’s why hundreds of clients choose us over others: </p>
    </div>
    </div> 
    </div>

    </div>
    </section>
<!-- Gallery section end  -->





    <!-- Fix background image section start -->
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
    <section class="call-do-action-area">
    <div class="container">
    <div class="row py-1">
    <div class="col-md-12">
    <h2>Your Heading Here</h2>
    <p class="w-75 text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed quasi in unde quisquam obcaecati sit iure tempore eaque neque cumque voluptate atque, pariatur impedit iste ab commodi nesciunt sequi, temporibus blanditiis harum deserunt soluta aliquam? Expedita harum consequatur laudantium tenetur nemo eligendi ab animi, nesciunt officia consequuntur quidem nisi. Nemo quod nisi eveniet tenetur ad!</p>
    <a href="" class="custom-btn"><span>Contact Us</span></a>
    </div>
    </div>
    </div>
    </section>
    <!-- Fix background image section end -->

    <!-- Border content section start -->
    <section class="my-5">
    <div class="container border py-3">
    <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-5">
    <img src="https://img.freepik.com/free-photo/beautiful-young-woman-working-her-laptop-her-office-home_231208-13967.jpg" alt="" class="p-4" style="height:50vh;">
    </div>
    <div class="col-md-7 px-5 pt-3">
    <h3 class="actPtitle">Lorem ipsum dolor sit amet.</h3>
    <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. In, mollitia harum eaque, vel distinctio delectus quo eveniet non culpa nesciunt iste similique reprehenderit est ab, quasi voluptate obcaecati maiores! Magnam necessitatibus cupiditate quia eos, odit voluptatem adipisci. Dolorem, laudantium! Est vitae eius veritatis accusamus sunt delectus ipsam ducimus nemo repudiandae aspernatur sapiente, nostrum rerum esse!</p>
    </div> 
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- Border content section start -->


<!-- Client message section start. -->
<section class="py-5" style="background-color:#f8f8f8;">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <h2 class="text-center">Client Message</h2>
        <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda minus quibusdam nobis delectus dolorum excepturi commodi dignissimos laborum provident vero?</p>
      </div>
    </div>

    <div class="row mt-4">
      <div class="scroll-wrapper">

        <!-- Card 1 -->
        <div class="message-card p-4 border rounded shadow-sm bg-white">
          <div class="text-center mb-3">
            <img src="https://cdn-icons-png.flaticon.com/512/9187/9187604.png" class="img-fluid" style="max-width: 80px;">
          </div>
          <div class="d-flex justify-content-between mb-3">
            <p class="mb-0 fw-bold">Radhe Kumar</p>
            <p class="mb-0 text-warning">*****</p>
          </div>
          <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta reprehenderit deleniti dolores, ea rem mollitia.</p>
        </div>

        <!-- Card 2 -->
        <div class="message-card p-4 border rounded shadow-sm bg-white">
          <div class="text-center mb-3">
            <img src="https://cdn-icons-png.flaticon.com/512/9187/9187604.png" class="img-fluid" style="max-width: 80px;">
          </div>
          <div class="d-flex justify-content-between mb-3">
            <p class="mb-0 fw-bold">Radhe Kumar</p>
            <p class="mb-0 text-danger">*****</p>
          </div>
          <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta reprehenderit deleniti dolores, ea rem mollitia.</p>
        </div>

        <!-- Card 3 -->
        <div class="message-card p-4 border rounded shadow-sm bg-white">
          <div class="text-center mb-3">
            <img src="https://cdn-icons-png.flaticon.com/512/9187/9187604.png" class="img-fluid" style="max-width: 80px;">
          </div>
          <div class="d-flex justify-content-between mb-3">
            <p class="mb-0 fw-bold">Radhe Kumar</p>
            <p class="mb-0 text-warning">*****</p>
          </div>
          <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta reprehenderit deleniti dolores, ea rem mollitia.</p>
        </div>

        <!-- Card 4 -->
        <div class="message-card p-4 border rounded shadow-sm bg-white">
          <div class="text-center mb-3">
            <img src="https://cdn-icons-png.flaticon.com/512/9187/9187604.png" class="img-fluid" style="max-width: 80px;">
          </div>
          <div class="d-flex justify-content-between mb-3">
            <p class="mb-0 fw-bold">Radhe Kumar</p>
            <p class="mb-0 text-warning">*****</p>
          </div>
          <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta reprehenderit deleniti dolores, ea rem mollitia.</p>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- Client message section end -->


   <!-- Get ready section start -->
<style>
.btn-gradient-blue {
    background: linear-gradient(to right, #1e3c72, #2a5298);
    color: #fff;
    border: none;
}
.btn-gradient-blue:hover {
    background: linear-gradient(to right, #1e3c72, #2a5298);
    color: #fff;
}
</style>
<section class="text-white py-5" style="background: linear-gradient(to right, #08113c, #00042e);">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <h3 class="mb-4 text-white">Ready to get started?</h3>
                <div class="d-inline-flex gap-3">
                    <a href="#" class="btn btn-gradient-blue fw-semibold px-4 py-2">Quick Message</a>
                    <a href="#" class="btn btn-gradient-blue fw-semibold px-4 py-2">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
   <!-- Get ready section end -->




























    <?php include('include/footer.php');?>
    <?php include('include/js.php');?>

    <!-- banner js section start  -->
        <script>
        const track = document.getElementById("slideTrack");
        const slides = track.children; let index = 0;
        const firstClone = slides[0].cloneNode(true);
        track.appendChild(firstClone);
        const slideCount = slides.length;
        setInterval(() => { index++;
        track.style.transition = 'transform 1s ease-in-out';
        track.style.transform = `translateX(-${index * 100}%)`;
        if (index === slideCount - 1) {
        setTimeout(() => {
        track.style.transition = 'none';
        track.style.transform = `translateX(0)`;
        index = 0; }, 1000); }}, 4000);
        </script>

    <!-- banner js section end -->
    </body>
    </html>