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


<!-- Banner section start -->
    <style>h2{font-weight:600;}</style>
    <section style="background-image: url('assets/web-img/gallery/banner.jpg'); background-size: cover; background-position: center; height: 300px; display: flex; align-items: center; justify-content: center; text-align: center;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-white">
                <h2>Our Gallery</h3>
                <p>Home | Gallery</p>
            </div>
        </div>
    </div>
</section>
<!-- Banner section start -->





    <!-- Gallery section start -->
    <style>         
    .img-border {           
    border: 1px solid #d2d2d2;          
    padding: 0.5rem;            
    }</style>           
<section class="my-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="text-center">Our Gallery</h2>
                <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda minus quibusdam nobis delectus dolorum excepturi commodi dignissimos laborum provident vero?</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="img-border">
                    <img src="https://img.freepik.com/free-photo/beautiful-young-woman-working-her-laptop-her-office-home_231208-13967.jpg" alt="" onclick="openPopup(this)" style="height:14rem;width:100%;">
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="img-border">
                    <img src="https://img.freepik.com/premium-photo/young-professional-woman-using-laptop-while-working-home-office_774935-101.jpg" alt="" onclick="openPopup(this)" style="height:14rem;width:100%;">
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="img-border">
                    <img src="https://img.freepik.com/free-photo/beautiful-young-woman-working-her-laptop-her-office-home_231208-13967.jpg" alt="" onclick="openPopup(this)" style="height:14rem;width:100%;">
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="img-border">
                    <img src="https://img.freepik.com/free-photo/beautiful-young-woman-working-her-laptop-her-office-home_231208-13967.jpg" alt="" onclick="openPopup(this)" style="height:14rem;width:100%;">
                </div>
            </div>
        </div>
    </div>

    
		<div id="imgPopup" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; 
		background-color: rgba(0, 0, 0, 0.8); z-index:9999; justify-content:center; align-items:center;">
		<span onclick="closePopup()" 
		style="position:absolute; top:20px; right:30px; font-size:30px; color:white; cursor:pointer;">&times;</span>
		<img id="popupImage" style="max-width:90%; max-height:90%; margin:auto; display:block;">
		</div>

</section>
    <!-- Gallery section start -->



    <?php include('include/footer.php');?>
    <?php include('include/js.php');?>

    <!-- Gallery section start -->
    <script>
    function openPopup(imgElement) {
    const popup = document.getElementById("imgPopup");
    const popupImage = document.getElementById("popupImage");
    popupImage.src = imgElement.src;
    popup.style.display = "flex";
    }
    function closePopup() {
    document.getElementById("imgPopup").style.display = "none";
    }
    </script>
    <!-- Gallery section end -->

    </body>
    </html>