<!DOCTYPE html>
<?php include('default.php');?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Application Form | <?php echo $heading;?></title>
    <?php include('include/css.php');?>
    <?php ?>
    </head>
    <body>
    <?php include('include/header.php');?>

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/images/bg/online-application.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Application Form</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Application Form</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- application -->
        <div class="application py-120">
            <div class="container">
                <div class="application-form">
                    <h3>Book Now</h3>
                    <form action="#">
                        <div class="row">
                            <h5 class="mb-3">Basic Information</h5>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Enter Name</label>
                                    <input type="text" class="form-control" name="firstname" placeholder="Your First Name">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Father's Name</label>
                                    <input type="text" class="form-control" name="fathername" placeholder="Your Father's Name">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Mother's Name</label>
                                    <input type="text" class="form-control" name="mothername" placeholder="Your Mother's Name">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input type="text" class="form-control" name="number" placeholder="Your Contact Number">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Your Email Address">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Date Of Birth</label>
                                    <input type="date" class="form-control" name="dob">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-select" name="gender">
                                        <option value="">Choose Gender</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Present Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="Your Present Address">
                                </div>
                            </div>
                           

                          


                           
   
    
    
    

    
    
    
   
    

    
    
  
   
    
    



                            
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Select Program Type</label>
                                    <select class="form-select" name="program">
                                        <option value="">Choose Program Type</option>
                                        <option value="1"> A. N. M.</option>
                                        <option value="2"> G. N. M.</option>
                                        <option value="3"> B. Sc. Nursing</option>
                                        <option value="3"> P. B. B. Sc. Nursing</option>
                                        <option value="3"> Dresser</option>
                                        <option value="3"> D. S. I.</option>
                                        <option value="3"> M. Sc. Nursing</option>
                                        <option value="3"> D. M. L. T.</option>
                                        <option value="3"> O. T. Assistant</option>
                                        <option value="3"> D. P. T.</option>
                                        <option value="3"> D. O. C. T.</option>
                                        <option value="3"> B. P. T.</option>
                                        <option value="3"> D. O. C. T.</option>
                                        <option value="3"> B. H. M.</option>
                                        <option value="3"> B. O. C. T.</option>
                                        <option value="3"> B. M. L. T.</option>
                                        <option value="3"> B. O. T.</option>
                                    </select>
                                </div>
                            </div>
                           
                            <h5 class="mt-4 mb-3">Academic Information</h5>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Highest Qualification</label>
                                    <input type="text" class="form-control" name="qualification" placeholder="Your Qualification">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Year Of Completion</label>
                                    <input type="text" class="form-control" name="yoc" placeholder="Completion Year">
                                </div>
                            </div>
                           
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Current Status</label>
                                    <select class="form-select" name="status">
                                        <option value="">Choose Current Status</option>
                                        <option value="1">Student</option>
                                        <option value="2">Business Man</option>
                                        <option value="3">Government Job</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="agree" name="agree" value="1">
                                  <label class="form-check-label" for="agree">
                                    By Submitting This Form You Agree To The <a href="#">Terms & Conditions</a> And <a href="#">Privacy Policy</a>.
                                  </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-9"></div>
                                    <div class="col-md-3">
                                    <button type="submit" class="theme-btn">Submit Application<i class="fas fa-arrow-right-long"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- application end-->


   <?php include('include/footer.php');?>
   <?php include('include/js.php');?>
</body>
</html>