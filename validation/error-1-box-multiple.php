
public function save_news()
{
    $this->form_validation->set_rules('heading', 'Subject', 'trim|required');
    $this->form_validation->set_rules('news', 'Message', 'trim|required');

    if ($this->form_validation->run() === false) {
    echo json_encode(['status' => 'error','message' => validation_errors('<div class="float-start"><i class="fa fa-exclamation-circle"></i> ', '</div>')]);
    return;
    }

    ******************************************

    if ($data) {
        echo json_encode(['status' => 'success', 'message' => 'Data submitted successfully.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong. Please try again later.']);
    }

}

<script>
$(document).ready(function () {
    $('#addNews').submit(function (e) {
        e.preventDefault();

        $.ajax({
            url: '<?php echo base_url(); ?>mlm_software/admin/news/save_news',
            type: 'POST',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            success: function (response) {
                const res = JSON.parse(response);
                const alertBox = $('#form-alert');
                if (res.status === 'error') {
                    alertBox
                  .removeClass('alert-success').addClass('alert-danger').html(res.message).fadeIn();
                   setTimeout(() => {alertBox.fadeOut();}, 5000);
                }
                if (res.status === 'success') {
                    alertBox.removeClass('alert-danger').addClass('alert-success') .html('<i class="fa fa-check-circle"></i> ' + res.message) .fadeIn();
                    setTimeout(() => {alertBox.fadeOut();location.reload();}, 3000);
                }
            },
            
        });
    });
});
</script>

<div id="form-alert" class="alert"></div>

<style>
#form-alert {
position: fixed;top: 20px;right: 20px;width: 310px;display: none;z-index: 9999;padding: 12px 15px;
border-radius: 5px;font-size: 14px;box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);transition: all 0.3s ease;}
.alert-danger {background-color: #f8d7da;color: #721c24;border: 1px solid #f5c6cb;}
.alert-success {background-color: #d4edda;color: #155724;border: 1px solid #c3e6cb;}
#form-alert i {margin-right: 6px;}
</style>