<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery || Aryaman Higher Education</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="description"
        content="Raj Aryan Nursing & Paramedical College is a new initiative of Aryaman Educational Trust in the field of health education aiming at furnishing humanity with well trained,  professionally expert nurses and midwives that can provide unparalleled maternity services.">
    <meta name="keywords"
        content="Best College For Nursing, Best College For Paramedical, Best Nursing & Paramedical College In Bihar, Nursing Colleges In Bihar, Paramedical College In Bihar, Affordable Nursing College In Bihar" />
    <?php include("include/js.php") ?>
    <?php include("include/css.php") ?>
</head>

<body>
    <?php include("include/header.php"); ?>
    <div class="container-fluid p-0">
        <div class="card bg-light text-danger banner">
            <img class="card-img img-fluid" src="images/gallery/gallery.jpg" alt="Card image">
            <div class="card-img-overlay">
                <div class="row d-none">
                    <div class="col-1"></div>
                    <div class=" col-7 text-center ">
                        <h3 class="card-title">Contact Us</h3>
                        <p class="text-red d-none">Call Us <i class="fas fa-phone fa-rotate-90 px-2 "></i><span>
                                +91 9905417686 <span class="text-warning">/</span> +91 9308819517</span>
                        </p><br>
                        <a href="contact-us.php" class="btn btn-danger my-2">Any Doubt</a>
                        <div class="col-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content section start from here. -->

    <section class="my-5">
        <div class="container">
            <!-- Image Grid -->

            <style>
                .cus-border {
                    border: 1px dotted #ef5660;
                    ;
                    border-radius: 0.5rem;
                    padding: 2%;
                }
            </style>

            <div class="row my-5">
                <div class="col-md-8 offset-md-2">
                    <h3 class="text-center wow animate__ animate__heartBeat  animated" style="font-weight:700;"
                        data-wow-delay="0.5s" data-wow-duration="1.5s"><span>Gallery</span></h3>
                    <p class="text-center mt-1 text-dark wow animate__ animate__zoomIn  animated" data-wow-delay="0.5s"
                        data-wow-duration="1.5s">Explore our vibrant
                        gallery showcasing moments of creativity,
                        inspiration, and community—capturing the essence of our journey through stunning visuals.</p>
                </div>
            </div>

            <div class="row">

                <div class="col-md-3 py-2">
                    <div class="cus-border">
                        <img class="card-img img-fluid" src="images/gallery/img-1.jpg" alt="Card image"
                            onclick="openPopup(this)">
                    </div>
                </div>

                <div class="col-md-3 py-2">
                    <div class="cus-border">
                        <img class="card-img img-fluid" src="images/gallery/img-2.jpg" alt="Card image"
                            onclick="openPopup(this)">
                    </div>
                </div>

                <div class="col-md-3 py-2">
                    <div class="cus-border">
                        <img class="card-img img-fluid" src="images/gallery/img-3.jpg" alt="Card image"
                            onclick="openPopup(this)">
                    </div>
                </div>

                <div class="col-md-3 py-2">
                    <div class="cus-border">
                        <img class="card-img img-fluid" src="images/gallery/img-4.jpg" alt="Card image"
                            onclick="openPopup(this)">
                    </div>
                </div>

            </div>

            <!-- Popup Fullscreen -->
            <div id="imgPopup"
                style="display:none; position:fixed; z-index:9999; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.9); text-align:center;">
                <span onclick="closePopup()"
                    style="position:absolute; top:20px; right:30px; color:white; font-size:40px; font-weight:bold; cursor:pointer;">&times;</span>
                <img id="popupImage" src="" style="margin-top:50px; max-width:100%; max-height:90vh;">
            </div>

        </div>
    </section>



    <!-- content section end from here. -->
    <main>
        <section>
            <?php
            include("include/sideform.php");
            ?>
        </section>





    </main>
    <?php include("include/footer.php"); ?>
    <script>
        function openPopup(imgElement) {
            const popup = document.getElementById("imgPopup");
            const popupImage = document.getElementById("popupImage");
            popupImage.src = imgElement.src;
            popup.style.display = "block";
        }

        function closePopup() {
            document.getElementById("imgPopup").style.display = "none";
        }
    </script>

</body>

</html>