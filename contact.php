<!DOCTYPE html>
<?php include('default.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - <?php echo $company_1; ?></title>
    <?php include('include/css.php'); ?>
    <style>
        @media(min-width:991px) {
            .cus-box {
                padding-right: 6rem;
            }
        }

        @media(max-width:600px) {
            .cus-box {
                padding: 0rem;
            }
        }
    </style>
</head>

<body>
    <?php include('include/header.php'); ?>

    <main>
        <!-- Banner -->
        <section class="section position-relative" style="background-image: url(image/image-1920x900-7.jpg);"
            id="section-padding-part">
            <div class="r-container">
                <div class="image-overlay"></div>
                <div class="position-relative" style="z-index: 2;">
                    <h1 class="font-1 fw-bold text-white" id="mobile-website-studies">Contact Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.php" class="text-white">Home &nbsp;&nbsp; |</a></li>
                            <li class="breadcrumb-item fw-bold active" aria-current="page">&nbsp;&nbsp;Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="r-container">
                <div class="row row-cols-1 row-cols-lg-2">
                    <div class="col mb-3 cus-box">
                        <div class="d-flex flex-column gap-3 h-100 justify-content-center">
                            <h3 class="font-1 lh-1 fw-bold fs-1">Get In Touch</h3>
                            <p>Contact us today for support, inquiries, or feedback. We’re ready to assist, value your
                                input, and ensure a smooth experience.</p>
                            <div class="d-flex flex-column">
                            </div>
                            <div class="d-flex flex-column gap-3">


                                <div class="col col-lg-12 m-top-3">
                                    <div class="position-relative mt-3 bg-g-blue py-3 px-3">
                                        <p class="text-center" style="font-size:4rem;"><i
                                                class="fa-solid fa-map-location-dot text-white"></i></p>
                                        <p class="text-center text-white font-weight-6"><?php echo $address; ?></p>
                                    </div>
                                </div>

                                <div class="col col-lg-12">
                                    <div class="position-relative mt-3 bg-g-blue py-3 px-3">
                                        <p class="text-center" style="font-size:4rem;"><i
                                                class="fa-solid fa-envelope text-white"></i></p>
                                        <p class="text-center text-white font-weight-6"><?php echo $email; ?></p>
                                    </div>
                                </div>

                                <!-- <div class="col col-lg-12">
                            <div class="position-relative mt-3 bg-danger py-3 px-3">
                            <p class="text-center"style="font-size:4rem;"><i class="fa-solid fa-phone"></i></p>
                            <p class="text-center"><?php echo $mobile_1 . ' | ' . $mobile_2;
                            ; ?></p>
                            </div>
                            </div> -->


                            </div>

                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="bg-accent-color rounded-4">
                            <div class="h-100 d-flex flex-column p-5">
                                <h6 class="font-2 text-white mb-3">Contact Us</h6>
                                <!-- <h3 class="font-1 lh-1 fw-bold fs-1 mb-3 text-white">GFill The Form</h3> -->

                                <form method="post" action="formhandler.php">
                                    <div class="mb-3">
                                        <input type="text" class="form-control py-2 px-4" name="name" id="name"
                                            placeholder="Name" required>
                                        <div class="invalid-feedback">
                                            The field is required.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control py-2 px-4" name="email" id="email"
                                            placeholder="Email" required>
                                        <div class="invalid-feedback">
                                            The field is required.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control py-2 px-4" name="number" id="number"
                                            placeholder="Mobile Number" required maxlength="10">
                                        <div class="invalid-feedback">
                                            The field is required.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control py-2 px-4" id="message" name="message" rows="2"
                                            placeholder="Message"></textarea>
                                    </div>

                                    <div class="form-group col-md-12 mx-1">
                                        <div class="outer-box">
                                            <div class="inner-box1 d-flex justify-content-around  py-2"
                                                style="background-color:white;">
                                                <span class="text-secondary">Enter Captcha &nbsp;</span>
                                                <div class="captcha-box-in d-flex align-items-center ">
                                                    <div class="in-colo">
                                                        <span id="first"></span>
                                                        <span id="plus">+</span>
                                                        <span id="second"></span>
                                                    </div>
                                                    <!-- <div class="set-pa "> <a  onclick="refresh();"><i
                                                            class="fa-solid fa-arrows-rotate"></i></a></div> -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>




                                    <div class="mb-3 mt-3">
                                        <input type="text" class="form-control py-2 px-4"
                                            oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')"
                                            id="num" placeholder="Enter Captcha Here" class="set-sum py-2 mt-3"
                                            onkeyup="myFunction()" />
                                        <div class="invalid-feedback">
                                            The field is required.
                                        </div>
                                    </div>


                                    <div class="mb-3">
                                        <button type="submit" class="btn bg-dark text-white py-3" id="submitButton"
                                            onclick="return Handleform();">
                                            Send Message
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-5">
            <div class="r-container">
                <div class="mb-3">

                    <iframe loading="lazy" class="maps overflow-hidden rounded-3"
                        src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d57438.916158994616!2d85.24839522288292!3d25.871706814612974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x39ed6b00259228c1%3A0xe4c3833771e21a!2sAryaman%20college%20of%20higher%20studies%2C%20V7CQ%2BMR5%2C%20Dumra%20-%20Jalalpur%20-%20Madarpur%20-%20Bhagwanpur%20Rd%2C%20Bhagwanpur%2C%20Bafapur%20Banthu%2C%20Bihar%20844114!3m2!1d25.871631599999997!2d85.2896239!4m0!5e0!3m2!1sen!2sin!4v1743578761193!5m2!1sen!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" title="<?php echo $company_2; ?>"
                        aria-label="<?php echo $company_1; ?>"></iframe>
                </div>
            </div>
        </section>

    </main>



    <?php include('include/footer.php'); ?>
    <?php include('include/js.php'); ?>

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