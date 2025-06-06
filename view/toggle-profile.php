


<div class="table-responsive" id="perInfo_Sec">
  <div class="bg-new-pro w-100 p-2" data-target="perInfo">
    <h6 class="text-white"><i class="fas fa-user"></i>&nbsp;&nbsp;Personal Information</h6>
  </div>
  <div class="bg-new-pro w-100 p-2" data-target="aadhaarInfo">
    <h6 class="text-white"><i class="fas fa-id-card"></i>&nbsp;&nbsp;Aadhar Information</h6>
  </div>
  <div class="bg-new-pro w-100 p-2" data-target="PanInfo">
    <h6 class="text-white"><i class="fas fa-address-card"></i>&nbsp;&nbsp;PAN Information</h6>
  </div>
  <div class="bg-new-pro w-100 p-2" data-target="bankInfoUpdate">
    <h6 class="text-white"><i class="fas fa-university"></i>&nbsp;&nbsp;Banking Information</h6>
  </div>
  <div class="bg-new-pro w-100 p-2" data-target="nommineeInfo">
    <h6 class="text-white"><i class="fas fa-user-friends"></i>&nbsp;&nbsp;Nominee Information</h6>
  </div>
</div>

<!-- Sections -->
<div class="row" id="perInfo"></div>
<div class="row d-none" id="aadhaarInfo"></div>
<div class="row d-none" id="PanInfo"></div>
<div class="row d-none" id="bankInfoUpdate"></div>
<div class="row d-none" id="nommineeInfo"></div>


<script>
$(document).ready(function () {
  const allSections = ['perInfo', 'aadhaarInfo', 'PanInfo', 'bankInfoUpdate', 'nommineeInfo'];
  let currentVisible = 'perInfo';
  $('#' + currentVisible).removeClass('d-none');
  $('#perInfo_Sec .bg-new-pro').on('click', function () {
    const targetId = $(this).data('target');
    if (targetId === currentVisible) {
      if (currentVisible !== 'perInfo') {
        $('#' + currentVisible).addClass('d-none');
        $('#perInfo').removeClass('d-none');
        currentVisible = 'perInfo';
      }
    } else {
      $('#' + currentVisible).addClass('d-none');
      $('#' + targetId).removeClass('d-none');
      currentVisible = targetId;
    }
  });
});
</script>



<script>
  document.addEventListener("DOMContentLoaded", function () {
    const allSections = ['perInfo', 'aadhaarInfo', 'PanInfo', 'bankInfoUpdate', 'nommineeInfo'];
    let currentVisible = 'perInfo'; 

    document.getElementById(currentVisible).classList.remove('d-none');
    document.querySelectorAll('#perInfo_Sec .bg-new-pro').forEach(header => {
      header.addEventListener('click', function () {
        const targetId = this.getAttribute('data-target');

        if (targetId === currentVisible) {
          if (currentVisible !== 'perInfo') {
            document.getElementById(currentVisible).classList.add('d-none');
            document.getElementById('perInfo').classList.remove('d-none');
            currentVisible = 'perInfo';
          }
        } else {
          if (document.getElementById(currentVisible)) {
            document.getElementById(currentVisible).classList.add('d-none');
          }
          document.getElementById(targetId).classList.remove('d-none');
          currentVisible = targetId;
        }
      });
    });
  });
</script>
