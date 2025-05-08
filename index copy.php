    <!doctype html>
    <?php include('default.php');?>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | <?php echo $company;?></title>
    <?php include('include/css.php');?>


    </head>
    <body>
    <?php include('include/header.php');?>



    <style>
        h2{font-weight:900;}
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
    background-image: url('https://img.freepik.com/free-photo/beautiful-young-woman-working-her-laptop-her-office-home_231208-13967.jpg');
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
  }

  /* Add color overlay using RGBA */
  .slide::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5);  /* You can change this RGBA value */
    z-index: 1;  /* Make sure overlay is on top of the image */
  }

  .text-box {
    color: white;
    max-width: 700px;
    text-align: center;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
    position: relative;  /* Make sure text appears above the overlay */
    z-index: 2;  /* Text needs to be above the overlay */
  }

  /* Slide in from left for first slide */
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
</style>

<section class="banner-slider">
  <div class="slide-track" id="slideTrack">
    <div class="slide">
      <div class="text-box first-text">
        <h2>Lorem ipsum dolor sit amet.</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore praesentium perferendis corporis perspiciatis dolorem voluptatum esse magni accusamus totam fugit. Placeat, ratione.</p>
      </div>
    </div>
    <div class="slide">
      <div class="text-box">
        <h2>Lorem ipsum dolor sit amet.</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quas culpa?</p>
      </div>
    </div>
    <div class="slide">
      <div class="text-box">
        <h2>Lorem ipsum dolor sit amet.</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, quas culpa?</p>
      </div>
    </div>
  </div>
</section>










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