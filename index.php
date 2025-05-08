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


      <!-- Banner section start. -->
      <style>

        /* Button section start. */
        .custom-btn span {
  display: inline-block;
  background: linear-gradient(135deg, #ff4e50, #f9d423); /* gradient */
  padding: 0.6rem 1.2rem;
  border-radius: 1.3rem;
  color: white;
  font-weight: 500;
  text-decoration: none;
  transition: background 0.4s ease;
}

.custom-btn span:hover {
  background: linear-gradient(135deg, #3a1c71, #d76d77); /* hover gradient */
  color: #fff;
}
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
                <h2>Lorem ipsum dolor sit amet.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore praesentium perferendis corporis perspiciatis dolorem voluptatum esse magni accusamus totam fugit. Placeat, ratione.</p>
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