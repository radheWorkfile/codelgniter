
<!-- show image and on click image show in full screen using js. -->


<div class="row">

<div class="col-md-3">
<div class="cus-border">
<img class="card-img img-fluid" src="images/gallery/img-1.jpg" alt="Card image" onclick="openPopup(this)">
</div>
</div>

<div class="col-md-3">
<div class="cus-border">
<img class="card-img img-fluid" src="images/gallery/img-2.jpg" alt="Card image" onclick="openPopup(this)">
</div>
</div>

<div class="col-md-3">
<div class="cus-border">
<img class="card-img img-fluid" src="images/gallery/img-3.jpg" alt="Card image" onclick="openPopup(this)">
</div>
</div>

<div class="col-md-3">
<div class="cus-border">
<img class="card-img img-fluid" src="images/gallery/img-4.jpg" alt="Card image" onclick="openPopup(this)">
</div>
</div>

<!-- Popup Fullscreen -->
<div id="imgPopup" style="display:none; position:fixed; z-index:9999; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.9); text-align:center;">
<span onclick="closePopup()" style="position:absolute; top:20px; right:30px; color:white; font-size:40px; font-weight:bold; cursor:pointer;">&times;</span>
<img id="popupImage" src="" style="margin-top:50px; max-width:100%; max-height:90vh;">
</div>

</div>



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
