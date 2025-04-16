<!DOCTYPE html>
<?php include('default.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission - <?php echo $company_1; ?></title>
    <?php include('include/css.php'); ?>
</head>

<body>
    <?php include('include/header.php'); ?>
    <main>
        <!-- Banner -->
        <section class="section position-relative" style="background-image: url(image/admission.jpg);width:100%;" id="section-padding-part">
            <div class="r-container">
                <div class="image-overlay"></div>
                <div class="position-relative" style="z-index: 2;">
                    <h1 class="font-1 fw-bold text-white text-anim" id="mobile-website-studies">Admission</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.php" class="text-white"><b>Home</b> &nbsp;&nbsp;|&nbsp;&nbsp;</a></li>
                            <li class="breadcrumb-item fw-bold active" aria-current="page">Admission</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>


        <section class="section">
            <div class="r-container">
                <div class="d-flex flex-lg-row flex-column-reverse gap-3">

                    <div class="col col-lg-3">
                        <div class="left"></div>
                        <div class="position-relative mt-4">
                            <img src="image/Eligibility-img.JPG" alt="" class="img-fluid rounded-3"
                                style="z-index: -2;">
                        </div>
                    </div>

                    <div class="col col-lg-9">
                        <div class="d-flex flex-column gap-3 p-3">
                            <h4 class="text-cark font-1 lh-1 fw-semibold text-anim"><span class="text_dark">Eligibility
                                    & Selection Criteria</h4>
                            <p class="text-gray text-justify" data-aos="fade-up" data-aos-duration="1000">The A. N. M.
                                program seeks dedicated individuals with relevant academic qualifications, professional
                                experience, and the required age or residency status. Candidates should demonstrate
                                strong problem-solving skills, leadership potential, and a commitment to growth.
                                Required documents like transcripts, ID proof, and certificates will be needed for
                                verification.</p>
                            <p class="text-gray text-justify" data-aos="fade-up" data-aos-duration="2000">Selection is
                                based on a rigorous evaluation process, considering academic excellence, work
                                experience, and alignment with A. N. M.’s core values. Candidates who meet the initial
                                criteria will undergo further assessments, including interviews and possibly written
                                tests. The final decision is made after a comprehensive review, focusing on merit,
                                potential impact, and readiness to contribute to the program’s success.</p>
                            <div class="border-bottom w-100"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>






        <!-- courses and eligibility criteria section start from here. -->
        <section class="section m-top-6">
            <div class="r-container">
                <div class="d-flex flex-column gap-3 justify-content-center text-center overflow-hidden">
                    <h5 class="text-white font-1 lh-1 fw-semibold bg-r-dard py-2 text-anim">COURSES AND ELIGIBILITY
                        CRITERIA</h5>
                    <div class="row">
                        <table class="table table-hover m-3" style="text-align: left;" data-aos="fade-up"
                            data-aos-duration="3000">

                            <tbody>
                                <tr>
                                    <td>Course</td>
                                    <td>A. N. M. (Females Only)</td>

                                </tr>
                                <tr>
                                    <td>Duration</td>
                                    <td>24 Months</td>

                                </tr>
                                <tr>
                                    <td>Academic Qualification</td>
                                    <td>Intermediate or equivalents</td>

                                </tr>
                                <tr>
                                    <td>Age Limit</td>
                                    <td>15 to 35 years</td>

                                </tr>
                                <tr>
                                    <td>Admission Process</td>
                                    <td>On the basis of written exam and interview</td>

                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </section>

        <!-- courses and eligibility criteria section end here. -->


        <!-- courses and eligibility criteria section start from here. -->
        <section class="section m-top-6">
            <div class="r-container">
                <div class="d-flex flex-column gap-3 overflow-hidden justify-content-center text-center">
                    <h5 class="text-white font-1 lh-1 fw-semibold bg-r-dard py-2 text-anim">MODE & METHOD OF SELECTION
                    </h5>
                    <div class="row row-cols-1 row-cols-lg-2">
                        <table class="table table-hover m-3" style="text-align: left;" data-aos="fade-up"
                            data-aos-duration="3000">
                            <tbody>
                                <tr>
                                    <td>1.&nbsp;</td>
                                    <td>Advertisement inviting application for admission are put up in selected
                                        newspapers ahead of the start of every new batch.</td>

                                </tr>
                                <tr>
                                    <td>2.&nbsp;</td>
                                    <td>Candidates seeking admission are required to submit duly filled up application
                                        form along with others required documents.</td>

                                </tr>

                                <tr>
                                    <td>3.&nbsp;</td>
                                    <td>Application form is made available at the school office with brochure for a
                                        charge of RS. 500 payable in cash.</td>

                                </tr>

                                <tr>
                                    <td>4.&nbsp;</td>
                                    <td>Eligible candidates are called for written test.</td>

                                </tr>


                                <tr>
                                    <td>5.&nbsp;</td>
                                    <td>Candidates who pass the written exam are called for interview.</td>

                                </tr>

                                <tr>
                                    <td>6.&nbsp;</td>
                                    <td>At the time of admission selected candidates are asked to produce original
                                        certificates for verification.</td>

                                </tr>

                                <tr>
                                    <td>7.&nbsp;</td>
                                    <td>Candidates finally selected through interview are, on payment of the required
                                        admission fee, admitted to the school for the course.</td>

                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </section>

        <!-- courses and eligibility criteria section end here. -->









    </main>


    <?php include('include/footer.php'); ?>
    <?php include('include/js.php'); ?>
</body>

</html>