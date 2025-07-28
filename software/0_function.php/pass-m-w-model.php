

<a href="javaScript:void(0);" class="nav-link "><span class="title" data-toggle="modal"  data-target="#view_model_sec">Manage Account</span></a>


 <!-- Model section start from here by r@rk -->
<div class="modal fade" id="view_model_sec" role="dialog">
  <div class="modal-dialog" style="max-width: 500px;width: 75%;"> 
    <div class="modal-content">
      <div class="modal-header position-relative">
        <button type="button" class="btn btn-default" style="position: absolute;right: 10px;border-radius: 50%;padding: 0px 7px;backgrount-color: red;color: red;font-size: 16px;" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"style="color:#549711 !important;"> <i class="fa fa-key" aria-hidden="true"></i> Enter Password </h4>
      </div>

     <form class="" action="javaScript:void(0);" method="POST" id="get_verify" enctype="multipart/form-data">
      <div class="modal-body">
      <div class="form-group">
      <label for="passwordInput">Enter Password</label>
      <input type="text" class="form-control" id="pro_password" name="pro_password" placeholder="Enter your password">
      
      </div>
      </div>

      <div class="modal-footer" style="margin-top: -1rem;">
      <a href="#" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa fa-arrow-left"></i> Back</a>
      <button type="submit" name="submit" class="btn btn-success" data-bs-dismiss="modal"style="margin-top:-1rem;" style="margin-top:-1rem;"> <i class="fa fa-check"></i> Submit </button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Model section end here by r@rk -->





      <script>
        $(document).ready(function () {
    $('#get_verify').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: '<?php echo base_url(); ?>account/get_verify',
            type: 'POST',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            success: function (response) {
                const res = JSON.parse(response);
                const alertBox = $('#form-alert');
                alertBox.html('').removeClass('alert-success alert-danger');
                if (res.status === 'error') {
                    alertBox.addClass('alert-danger').html('<i class="fa fa-check-circle"></i> ' + res.message).fadeIn();setTimeout(() => {alertBox.fadeOut();}, 1000);
                    }if (res.status === 'success') {alertBox
                    .addClass('alert-success').html('<i class="fa fa-check-circle"></i> ' + res.message).fadeIn();
                     setTimeout(() => {window.location.href = res.actReload;}, 1000); 
                }
            }
        });
    });
});
    </script>


    <?php 
        public function get_verify() {
        $this->form_validation->set_rules('pro_password', 'Password', 'trim|required');
        if ($this->form_validation->run() === false) {
            echo json_encode(array('status' => 'error', 'message' => $this->form_validation->error_array()));
            return;
        }
        $post = $this->input->post();
        $pro_password = $this->db->select('id,profile_password,name')->from('admin')->get()->result_array();
        foreach($pro_password as $p){
          $user_id = $this->db->select('id,profile_password')->from('admin')->where('id',$p['id'])->get()->row();
        }
         if($post['pro_password'] == $user_id->profile_password){
            // echo "Match password";
            $data = ['status' => 'success', 'message' => 'Successfully.', 'actReload' => base_url('account')];
         }else{
            // echo "Not Match password";
            $data = ['status' => 'error', 'message' => 'Invalid Password', 'actReload' => base_url('admin')];
         }
        echo json_encode($data);
    }
    
    ?>