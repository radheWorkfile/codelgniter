


public function save_news()
{
    $this->form_validation->set_rules('heading', 'Subject', 'trim|required');
    $this->form_validation->set_rules('news', 'Message', 'trim|required');
    if ($this->form_validation->run() === false) {
        echo json_encode(array('status' => 'error', 'message' => $this->form_validation->error_array() ));
        return;
    }

    $post = $this->input->post();


    $save = $this->common->save_data('notification_manage', $val);
    if ($save) {
        $data = array('status' => 'success','message' => 'News saved successfully.');
    } else {
        $data = array('status' => 'error','message' => 'Something went wrong. Please try again later.');
    }
    echo json_encode($data);
}



public function save_news()
{
    $this->form_validation->set_rules('heading', 'Subject', 'trim|required');
    $this->form_validation->set_rules('news', 'Message', 'trim|required');
    if ($this->form_validation->run() === false) {
        echo json_encode(array('status' => 'error','message' => $this->form_validation->error_array()));
        return;
    }
    $post = $this->input->post();
   

    $save = $this->common->save_data('notification_manage', $val);

    if ($save) {
        $data = array('status' => 'success','message' => 'News saved successfully.');
    } else {
        $data = array('status' => 'error','message' => 'Something went wrong. Please try again later.');
    }
    echo json_encode($data);
}

******************************************************************************************* 
<div id="form-alert" class="alert"></div>

<script>
$(document).ready(function () {
    $('#addNews').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: '<?php echo base_url(); ?>mlm_software/admin/news/save_news',
            type: 'POST',data: new FormData(this),
            processData: false, contentType: false, cache: false,
            success: function (response) {
                const res = JSON.parse(response);const alertBox = $('#form-alert');
                alertBox.html('').removeClass('alert-success').removeClass('alert-danger').show();
                if (res.status === 'error') { for (let key in res.message) {
                alertBox.append(`
                <div class="alert-danger single-error"> <i class="fa fa-exclamation-circle"></i> ${res.message[key]} </div>
                `);}setTimeout(() => {alertBox.fadeOut(); }, 2000);}
                if (res.status === 'success') {
                alertBox .addClass('alert-success').html('<i class="fa fa-check-circle"></i> ' + res.message) .fadeIn();
                setTimeout(() => {alertBox.fadeOut();location.reload();}, 2000);
                }
            }
        });
    });
});
</script>
<style>
#form-alert {position: fixed;top: 20px;right: 20px;width: 310px;display: none;z-index: 9999;animation: slideInLeft 0.3s ease-out;}
.alert-danger.single-error {background-color: #f8d7da;color: #721c24;padding: 6px;margin-bottom: 8px;border-radius: 5px;
border: 1px solid #f5c6cb;font-size: 14px;box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);text-align: left;}
.alert-success {background-color: #d4edda;color: #155724;padding: 6px;border-radius: 5px;border: 1px solid #c3e6cb;font-size: 14px;text-align: left;}
#form-alert i {margin-right: 6px;}
@keyframes slideInLeft {from {opacity: 0;transform: translateX(-30px);}to {opacity: 1;transform: translateX(0);}
}
</style>


******************************************************************************************* 
