
<form class="row g-3" action="<?php echo base_url('login/auth');?>" method="post">

<i class="bx bx-hide" id="showPassword" style="cursor: pointer;"></i>

<?php
if ($_REQUEST['msg'] == 'invalid') {
echo '<div class="alert alert-danger" id="alert" style="font-size:11.7px;">
<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
Invalid Login Details!! Please Check Username, Password
</div>';
}
else if ($_REQUEST['msg'] == 'impassable') {
echo '<div class="alert alert-warning" id="alert" style="font-size:11.7px;">
<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
Contact to super admin, it seems the account is blocked
</div>';
}
elseif($this->uri->segment(2) == 'logout'){
echo '<div class="alert alert-success" id="alert">
😎 Log Out Successfully ! 😎.
</div>';
}
?>

<script>
    const passwordInput = document.getElementById("password");
    const toggleIcon = document.getElementById("showPassword");
  
    toggleIcon.addEventListener("click", function () {
      const isPassword = passwordInput.type === "password";
      passwordInput.type = isPassword ? "text" : "password";
  
      // Optionally toggle icon class
      toggleIcon.classList.toggle("bx-hide", !isPassword);
      toggleIcon.classList.toggle("bx-show", isPassword);
    });
  </script>
