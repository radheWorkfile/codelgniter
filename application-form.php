<!DOCTYPE html>
<?php include('default.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Application Form | <?php echo $heading; ?></title>
    <?php include('include/css.php'); ?>
    <?php ?>
</head>

<body>
    <?php include('include/header.php'); ?>

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
                <form action="./formhandler_application.php" method="post">
                    <div class="row">
                        <h5 class="mb-3">Basic Information</h5>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Enter Name <span class="text-danger">*</span> </label>
                                <input type="text"
                                    oninput="this.value = this.value.replace(/[^a-zA-Z]/g, ' ').replace(/(\  *?)\  */g, '$1')"
                                    class="form-control" id="name" name="name" placeholder="Enter Name">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Father's Name <span class="text-danger">*</span></label>
                                <input type="text"
                                    oninput="this.value = this.value.replace(/[^a-zA-Z]/g, ' ').replace(/(\  *?)\  */g, '$1')"
                                    id="father" class="form-control" name="fathername" placeholder="Your Father's Name">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Mother's Name</label>
                                <input type="text"
                                    oninput="this.value = this.value.replace(/[^a-zA-Z]/g, ' ').replace(/(\  *?)\  */g, '$1')"
                                    class="form-control" name="mothername" placeholder="Your Mother's Name">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Mobile Number <span class="text-danger">*</span></label>
                                <input type="text"
                                    oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')"
                                    maxlength="10" id="mobile" class="form-control" name="number"
                                    placeholder="Your Contact Number">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Email Address <span class="text-danger">*</span></label>
                                <input type="email"
                                    oninput="this.value = this.value.replace(/[^A-Za-z@.0-9]/g, '').replace(/(\  *?)\  */g, '$1')"
                                    id="email" class="form-control" name="email" placeholder="Your Email Address">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Date Of Birth <span class="text-danger">*</span></label>
                                <input type="date" id="dob" class="form-control" name="dob">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Gender <span class="text-danger">*</span></label>
                                <select class="form-select" id="gender" name="gender">
                                    <option value="">Choose Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Present Address <span class="text-danger">*</span></label>
                                <input type="text" id="address" class="form-control" name="address"
                                    placeholder="Your Present Address">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Select Program Type <span class="text-danger">*</span></label>
                                <select class="form-select" id="program" name="program">
                                    <option value="">Choose Program Type</option>
                                    <option value="A. N. M."> A. N. M.</option>
                                    <option value="G. N. M."> G. N. M.</option>
                                    <option value="B. Sc. Nursing"> B. Sc. Nursing</option>
                                    <option value="P. B. B. Sc. Nursing"> P. B. B. Sc. Nursing</option>
                                    <option value="Dresser"> Dresser</option>
                                    <option value="D. S. I."> D. S. I.</option>
                                    <option value="M. Sc. Nursing"> M. Sc. Nursing</option>
                                    <option value="D. M. L. T."> D. M. L. T.</option>
                                    <option value="O. T. Assistant"> O. T. Assistant</option>
                                    <option value="D. P. T."> D. P. T.</option>
                                    <option value="D. O. C. T."> D. O. C. T.</option>
                                    <option value="B. P. T."> B. P. T.</option>
                                    <option value="D. O. C. T."> D. O. C. T.</option>
                                    <option value="B. H. M."> B. H. M.</option>
                                    <option value="B. O. C. T."> B. O. C. T.</option>
                                    <option value="B. M. L. T."> B. M. L. T.</option>
                                    <option value="B. O. T."> B. O. T.</option>
                                </select>
                            </div>
                        </div>

                        <h5 class="mt-4 mb-3">Academic Information</h5>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Highest Qualification<span class="text-danger">*</span></label>
                                <input type="text" id="qualification" class="form-control" name="qualification"
                                    placeholder="Your Qualification">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Year Of Completion<span class="text-danger">*</span></label>
                                <input type="text"
                                    oninput="this.value= this.value.replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')"" maxlength="
                                    4" id="yoc" class="form-control" name="yoc" placeholder="Completion Year">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Current Status<span class="text-danger">*</span></label>
                                <select class="form-select" id="status" name="status">
                                    <option value="">Choose Current Status</option>
                                    <option value="Student">Student</option>
                                    <option value="Business Man">Business Man</option>
                                    <option value="Government Job">Government Job</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="agree" name="agree" value="1">
                                <label class="form-check-label" for="agree">
                                    By Submitting This Form You Agree To The <a href="#">Terms & Conditions</a> And <a
                                        href="#">Privacy Policy</a>.
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-9"></div>
                                <div class="col-md-3">
                                    <button type="submit" name="submit" onclick="return submitHandler()"
                                        class="theme-btn">Submit Application<i
                                            class="fas fa-arrow-right-long"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- application end-->


    <?php include('include/footer.php'); ?>
    <?php include('include/script.php'); ?>
    <script>
        const submitHandler = () => {
            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const father = document.getElementById("father").value;
            const dob = document.getElementById("dob").value;
            const mobile = document.getElementById("mobile").value;
            const gender = document.getElementById("gender").value;
            const address = document.getElementById("address").value;
            const program = document.getElementById("program").value;
            const qualification = document.getElementById("qualification").value;
            const yoc = document.getElementById("yoc").value;
            const status = document.getElementById("status").value;

            if (!name) {
                alert("Enter Name");
                return false;
            } else if (!father) {
                alert("Enter Father Name");
                return false;
            } else if (!mobile) {
                alert("Enter Mobile Number");
                return false;
            } else if (!email) {
                alert("Enter Email Id");
                return false;
            }
            else if (!dob) {
                alert("Select DOB");
                return false;
            }
            else if (!gender) {
                alert("Select Gender");
                return false;
            }
            else if (!address) {
                alert("Enter Address");
                return false;
            }
            else if (!program) {
                alert("Select Program");
                return false;
            }
            else if (!qualification) {
                alert("Enter Qualification");
                return false;
            }
            else if (!yoc) {
                alert("Enter Year Of Completion");
                return false;
            }
            else if (!status) {
                alert("Select Current Status");
                return false;
            }
        }
    </script>
</body>

</html>