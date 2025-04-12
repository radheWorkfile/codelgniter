<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- title -->
    <?php include('default.php'); ?>
    <title>Contact Us | <?php echo $heading; ?></title>
    <?php include('include/css.php'); ?>
</head>

<body>
    <?php include('include/header.php'); ?>

    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url(assets/images/about/01.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">Contact Us</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.php">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- contact area -->
    <div class="contact-area py-120">
        <div class="container">
            <div class="contact-content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-map-location-dot"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Office Address</h5>
                                <p>Lachchu Bigha, Nalanda</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-phone-volume"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Call Us</h5>
                                <p><?php echo $mobile_1 . ' / ' . $mobile_2; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-envelopes"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Email Us</h5>
                                <p><a href="<?php echo $mail; ?>"><?php echo $email; ?></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-alarm-clock"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Open Time</h5>
                                <p>Mon - Sat (10.00AM - 04.00PM)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-img">
                            <img src="assets/images/about/3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 align-self-center">
                        <div class="contact-form">
                            <div class="contact-form-header">
                                <h2>Get In Touch</h2>
                                <p>Get in touch with us today for more information and inquiries about our programs and
                                    admissions! </p>
                            </div>
                            <form method="post" action="formhandler.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text"
                                                oninput="this.value = this.value.replace(/[^a-zA-Z]/g, ' ').replace(/(\  *?)\  */g, '$1')"
                                                class="form-control" id="name" name="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email"
                                                oninput="this.value = this.value.replace(/[^A-Za-z@.0-9]/g, '').replace(/(\  *?)\  */g, '$1')"
                                                class="form-control" id="email" name="email" placeholder="Your Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text"
                                        oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')"
                                         class="form-control" id="number" maxlength="10" name="number"
                                        placeholder="Your Mobile Number">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" oninput="this.value = this.value.replace(/[^a-zA-Z0-9,.\s]/g, '')" cols="30" rows="2" id="message" class="form-control"
                                        placeholder="Write Your Message"></textarea>
                                </div>

                                <div class="form-group col-md-12 mx-1">
                                    <div class="outer-box" style="border:1px solid #f1f1f1;">
                                        <div class="inner-box1 d-flex justify-content-around  py-2"
                                            style="background-color:white;">
                                            <span class="text-secondary">Enter Captcha &nbsp;</span>
                                            <div class="captcha-box-in d-flex align-items-center ">
                                                <div class="in-colo">
                                                    <span id="first"></span>
                                                    <span id="plus">+</span>
                                                    <span id="second"></span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group col-md-12 mb-3">
                                    <div style="border:1px solid #f1f1f1;">
                                        <input type="text" class="form-control py-2 px-4"
                                            oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')"
                                            id="num" placeholder="Enter Captcha Here" class="set-sum py-2 mt-3"
                                            onkeyup="myFunction()" />
                                    </div>
                                </div>


                                <button type="submit" onclick="return Handleform();" id="submitButton" name="submit"
                                    class="theme-btn">Send
                                    Message <i class="far fa-paper-plane"></i></button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact area -->

    <!-- map -->
    <div class="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3605.006094540979!2d85.34675697416033!3d25.371112224636843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f2975363495643%3A0x37ce816facd8a3f4!2sAshoka%20nursing%20%26%20paramedical%20college!5e0!3m2!1sen!2sin!4v1743760272598!5m2!1sen!2sin"
            width="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <?php include('include/footer.php'); ?>
    <?php include('include/script.php'); ?>

    <script>

        var firstNu = document.getElementById("first");
        var num1 = (firstNu.innerHTML = Math.floor(Math.random() * 100));

        var secNum = document.getElementById("second");
        var num2 = (secNum.innerHTML = Math.floor(Math.random() * 10));

        function myFunction() {
            var userInput = document.getElementById("num");
            var inputValu = userInput.value;
            return inputValu;
        }
        var storeRandomValue = parseInt(num1) + parseInt(num2);

    </script>

    <script>
        //  name  email  subject  message
        function Handleform() {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('number').value;
            var message = document.getElementById('message').value;
            var namePattern = /^[A-Za-z\s\-]+$/;
            var phoneRegex = /^\d{10}$/;
            var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            var dued = myFunction();
            if (!name) {
                alert("Please Enter Name");
                return false;
            } else if (!namePattern.test(name)) {
                alert("Enter Correct Name");
            } else if (!email) {
                alert("Enter Email Id");
                return false;
            } else if (!emailRegex.test(email)) {
                alert("Enter Valid Email");
                return false;
            } else if (!phone) {
                alert("Please Enter Phone Number");
                return false;
            } else if (!phoneRegex.test(phone)) {
                alert("Enter Correct Number");
                return false;
            } else if (!message) {
                alert("Enter Message");
                return false;
            } else if (!dued) {
                alert("Please Enter Captcha");
                return false;
            } else if (namePattern.test(dued)) {
                alert("Enter Only Number");
                return false;
            }
            else if (dued != storeRandomValue) {
                alert("Enter Correct Captcha");
                return false;
            }

        }
    </script>


</body>

</html>