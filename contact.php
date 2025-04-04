<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="<?php echo $company;?>" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact Us | <?php echo $company;?></title>
    <?php include('include/css.php');?>
  </head>

  <body>
   <?php include('include/header.php');?>





    <section class="py-5">
      <div class="container">
        <div class="row">
         
          <div class="col-lg-4 mt-5">
            <div class="row">
              <div class="col-lg-12">
                  <div class="d-flex mb-3 bg-primary p-5 border-radius-1 mb-4">
                    <div class="text-primary mr-3 px-2">
                      <i class="fas fa-3x fa-map-signs text-white"></i>
                    </div>
                    <div class="recent-post-info">
                      <span class="text-white">17504 Carlton Cuevas Rd Gulfport, MS, 39503</span>
                    </div>
                  </div>
                </div>
              
              <div class="col-lg-12">
                  <div class="d-flex bg-dark p-5 border-radius-1">
                    <div class="text-white mr-3 px-2">
                      <i class="fas fa-3x fa-headphones-alt"></i>
                    </div>
                    <div class="recent-post-info">
                      <span class="text-white">+(704) 279-1249<br> 24 X 7 online support</span>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12 mt-4">
                  <div class="d-flex mb-3 p-5 border-radius-1 mb-4"style="background-color:#5d5307;">
                    <div class="text-primary mr-3 px-2">
                      <i class="far fa-3x fa-envelope text-white"></i>
                    </div>
                    <div class="recent-post-info">
                      <span class="text-white">letstalk@academic.com<br> Mon-Fri 8:30am-6:30pm</span>
                    </div>
                  </div>
                </div>


              </div>
          </div>
   
          <div class="col-lg-1 mb-4 mb-lg-0"></div>
          

          <div class="col-lg-6 mb-4 mb-lg-0"style="border:1px solid #d2d2d2;padding:4rem;">
            <h4 class="">Get in touch</h4>
            <p>Contact Us for expert guidance and support.</p>
            <form action="formhandler.php">
                <div class="">
                <div class="form-group col-md-12 py-2">
                  <input type="text" class="form-control bg-white border" name="name" id="name" placeholder="Your Name">
                </div>
                <div class="form-group col-md-12 py-2">
                  <input type="text" class="form-control bg-white border" name="number" id="number" placeholder="Phone Number">
                </div>
                <div class="form-group col-md-12 py-2">
                  <input type="email" class="form-control bg-white border" name="email" id="email" placeholder="Email Address">
                </div>
                <div class="form-group col-md-12 py-2">
                  <textarea class="form-control bg-white border" rows="2" id="message" name="message" placeholder="Message"></textarea>
                </div>

                       <div class="form-group ccol-md-12 py-2">
                        <div class="outer-box"style="border:1px solid #f1f1f1;">
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


                        <div class="form-group col-md-12 mb-3 py-2">
                        <div style="border:1px solid #f1f1f1;">
                        <input type="text" class="form-control py-2 px-4"
                        oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')"
                        id="num" placeholder="Enter Captcha Here" class="set-sum py-2 mt-3" onkeyup="myFunction()" />
                        </div>
                       </div>

                       <div class="mb-3">
                        <button  class="btn bg-dark text-white py-3" id="submitButton"
                        type="submit" onclick="return Handleform();">Send Message</button>
                        </div>
              </div>
            </form>
          </div>



        </div>
      </div>
    </section>
    <!--=================================
    contact -->

    <!--=================================
    Map -->
    <section class="">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-sm-12">
            <div class="map h-500">
              <!-- iframe START -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.978736187896!2d85.34814687416036!3d25.372029124599482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f297a4bd104831%3A0x5e24d78b4919bf87!2sASHOKA%20COLLEGE%20OF%20PROFESSIONAL%20STUDIES!5e0!3m2!1sen!2sin!4v1743594734528!5m2!1sen!2sin" width="600" style="width: 100%; height: 100%;"></iframe>
              <!-- iframe END -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Map -->

    <?php include('include/footer.php');?>
    <?php include('include/js.php');?>


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
