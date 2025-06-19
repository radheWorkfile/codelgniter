<div id="preview_passbook_aadhaar" style="margin-top: 10px;display: flex; justify-content: center; align-items: center;"><img src="<?php echo base_url($member->back_pan_img?$member->back_pan_img:'');?>" style="height:3rem;" alt=""></div>
<div id="preview_front_aadhaar" style="margin-top: 10px;display: flex; justify-content: center; align-items: center;"><img src="<?php echo base_url($member->front_aadhaar_img?$member->front_aadhaar_img:'');?>" style="height:3rem;" alt=""></div>
<div id="preview_back_aadhaar" style="margin-top: 10px;display: flex; justify-content: center; align-items: center;"><img src="<?php echo base_url($member->back_aadhaar_img?$member->back_aadhaar_img:'');?>" style="height:3rem;" alt=""></div>
<div id="preview_front_pan" style="margin-top: 10px;display: flex; justify-content: center; align-items: center;"><img src="<?php echo base_url($member->front_pan_img?$member->front_pan_img:'');?>" style="height:3rem;" alt=""></div>



<script>
    
function showImagePreview(inputId, previewId) {
const input = document.getElementById(inputId);
const preview = document.getElementById(previewId);
input.addEventListener('change', function () {
preview.innerHTML = ''; const file = this.files[0];
if (file && file.type.startsWith('image/')) {
const reader = new FileReader(); reader.onload = function (e) {
const img = document.createElement('img');
img.src = e.target.result; img.style.height = '4rem';
img.style.width = 'auto'; img.style.display = 'block';img.style.margin = '0 auto';   
preview.appendChild(img); }; reader.readAsDataURL(file); } 
});
}
showImagePreview('frontAadhaarImg', 'preview_front_aadhaar');   
showImagePreview('back_aadhaar_img', 'preview_back_aadhaar');
showImagePreview('front_pan_img', 'preview_front_pan');
showImagePreview('passbook_img', 'preview_passbook_aadhaar');
</script>