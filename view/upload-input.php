<div class="col-md-6">
  <div class="amiprD">
    <i class="bx bx-user-circle"></i>
    <span class="amiprDspn">Front Aadhaar Upload :</span>
    <input type="file" id="front_aadhaar" class="front_aadhaar" accept="image/*">
    <div id="preview_front_aadhaar" style="margin-top: 10px;"></div>
  </div>
</div>

<div class="col-md-6">
  <div class="amiprD">
    <i class="bx bx-user-circle"></i>
    <span class="amiprDspn">Back Aadhaar Upload :</span>
    <input type="file" id="back_aadhaar" class="back_aadhaar" accept="image/*">
    <div id="preview_back_aadhaar" style="margin-top: 10px;"></div>
  </div>
</div>

<script>
  function showImagePreview(inputId, previewId) {
    const input = document.getElementById(inputId);
    const preview = document.getElementById(previewId);

    input.addEventListener('change', function () {
      preview.innerHTML = '';
      const file = this.files[0];
      if (file && file.type.startsWith('image/')) {
        const reader = new FileReader();
        reader.onload = function (e) {
          const img = document.createElement('img');
          img.src = e.target.result;
          img.style.height = '1rem';
          img.style.width = 'auto';
          img.style.display = 'block';    
          img.style.margin = '0 auto';    
          preview.appendChild(img);
        };
        reader.readAsDataURL(file);
      } else {
        preview.innerText = "Please upload a valid image.";
      }
    });
  }
  showImagePreview('front_aadhaar', 'preview_front_aadhaar');
	showImagePreview('back_aadhaar', 'preview_back_aadhaar');
	showImagePreview('front_pan', 'preview_front_pan');
	showImagePreview('back_pan', 'preview_back_pan');
</script>