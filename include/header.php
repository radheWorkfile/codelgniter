  <?php include('default.php');?>
  <!-- top bar section start from here. -->
  <section class="pt-2" style="background-color:#000c2d;">
    <div class="container-flude">
    <div class="row px-4">
    <div class="col-md-6 col-sm-6">
    <p class="text-white"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; +91 8709732783</p>
    </div>
    <div class="col-md-6 col-sm-6" style="text-align:right;">
    <p class="text-white"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;  radhekumarfromrajgir@gmail.com</p>
    </div>
    </div>
    </div>
    </section>
    <!-- top bar section start from here. -->


    <!-- desk menu section start from here. -->
    <nav class="navbar cus-desk-menu">
    <div class="logo">
    <a href="#" class="text-dark">MyLogo</a>
    </div>
    <ul class="nav-links">
    <li class="mx-2"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a></li>
    <li class="mx-2"><a href="about.php">About Us</a></li>
    

    <li class="dropdown mx-2">
    <a href="#">Services</a>
    <ul class="dropdown-menu">
    <li><a href="web_design.php">Web Design</a></li>
    <li><a href="app_development.php">App Development</a></li>
    <li><a href="digital_marketing.php">Digital Marketing</a></li>
    </ul>
    </li class="mx-2">

    <li class="dropdown mx-2">
    <a href="#">Pages</a>
    <ul class="dropdown-menu">
    <li><a href="web_design.php">Full Section</a></li>
    <li><a href="app_development.php">About Section</a></li>
    <li><a href="digital_marketing.php">Card Section </a></li>
    <li><a href="digital_marketing.php">Get In Touch </a></li>
    <li><a href="digital_marketing.php">Faq Section </a></li>
    <li><a href="digital_marketing.php">Client Message </a></li>
    </ul>
    </li class="mx-2">

    <li class="mx-2"><a href="gallery.php">Gallery</a></li>
    <li class="mx-2"><a href="about.php">Media</a></li>  
    <li class="mx-2"><a href="blog.php">Blog</a></li> 

    <li class="dropdown mx-2">
    <a href="#">Contact</a>
    <ul class="dropdown-menu">
    <li class="mx-2"><a href="contact.php">Contact-1</a></li>
    <li class="mx-2"><a href="contact.php">Contact-2</a></li>
    <li class="mx-2"><a href="contact.php">Contact-3</a></li>
    <li class="mx-2"><a href="contact.php">Contact-4</a></li>
    <li class="mx-2"><a href="contact.php">Contact-5</a></li>
    <li class="mx-2"><a href="contact.php">Contact-6</a></li>
    <li class="mx-2"><a href="contact.php">Contact-7</a></li>
    <li class="mx-2"><a href="contact.php">Contact-8</a></li>
    
    </ul>
    </li class="mx-2">


    
    </ul>
    <p class="m-0"><a href="#" class="button"><i class="fa fa-user" aria-hidden="true"></i> &nbsp;Login</a></p>
    <div class="burger" id="burger">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    </div>
    </nav> 
    <!-- desk menu section start from here. -->
  
<!-- Mobile menu section start from here. -->
      <nav class="navbar bg-info fixed-top custom-mob-menu">
      <div class="container-fluid">
      <a class="navbar-brand" href="#">Radhe Radhe</a>
      <button class="navbar-toggler text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header bg-dark">
      <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Radh ekumar</h5>
      <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
        <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
        Dropdown
        </a>
        <ul class="dropdown-menu bg-white border-none">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li>
        </li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
        </li>
        </ul>
        </div>
        </div>
        </div>
        </nav>
<!-- Mobile menu section start from here. -->



<style>

/* 575   767px   991px    991px   */

li{list-style:none;}

@media (max-width: 575px) {
.d-none{display:none;}
.col-sm-4 {width: 33%;}
.col-sm-3 {width: 24%;}
.col-sm-6 {width: 49%;}
.col-sm-12 {width: 98%;}
}

.dropdown-menu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #fff;
  list-style: none;
  padding: 10px 0;
  border-radius: 5px;
  width:300%;
  border:none;
}
.nav-links {
  display: flex;
  list-style: none;
  margin:auto;
}
* {margin: 0;padding: 0;box-sizing: border-box;}
 body {font-family: Arial, sans-serif;}
.navbar {display: flex;justify-content: space-between;align-items: center;  background-color: #fff;padding: 10px 20px;}

.navbar .logo a {
  color: white;
  text-decoration: none;font-size: 24px;}



.nav-links li {
  position: relative;
  margin-left: 0px;
}



.nav-links li a {
  color: #000c2d; 
  text-decoration: none;
  font-size: 16px;
  padding: 8px 12px;
  display: block;
  transition: background-color 0.3s, color 0.3s;
}

.nav-links li a:hover {
  /* background-color: #f0c5a6; */
  color:rgb(233, 109, 8);
}



.dropdown-menu li a {
  padding: 10px 20px;
  position: relative;
  transition: background-color 0.3s;
}

.dropdown-menu li a::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 2px;
  background-color: rgb(233, 109, 8);
  transition: width 0.5s ease-in-out;
}

.dropdown-menu li a:hover::after {
  width: 100%;
}

.dropdown:hover .dropdown-menu {
  display: block;
}

.burger {
  display: none;
  flex-direction: column;
  cursor: pointer;
}

.burger .line {
  width: 25px;
  height: 3px;
  background-color: white;
  margin: 4px 0;
}

  @media screen and (max-width: 768px) {
  .nav-links {display: none;flex-direction: column;width: 100%;text-align: center;
    background-color: #333;position: absolute;top: 60px;left: 0;padding: 20px;}
  .nav-links li {margin: 15px 0;}
  .burger {display: flex;}
  .nav-links.active {display: flex;}
  .dropdown-menu {position: static;display: none;width: 100%;}
  .dropdown.active .dropdown-menu { display: block;}}

/* navbar button section start from here. */
.button {display: inline-block;padding: 10px 30px;font-size: 16px;
text-align: center;text-decoration: none;background: linear-gradient(45deg, #ff6a00, #ee0979); color: white;
border-radius: 30px; transition: background 0.3s ease, transform 0.3s ease;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); }
.button:hover { background: linear-gradient(45deg, #ff7f50, #ff1493);}
/* navbar button section end here. */


</style>