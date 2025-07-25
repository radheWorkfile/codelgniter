    <td>
    <?php if($e['status'] == '0'){ ?>
    <a href="javascript:void(0)" data-id="<?php echo $e['id']; ?>" class="actPstatus"style="text-decoration:none;" data-table="<?php echo 'kanyadan_youjna_support'; ?>">
    <span class='bg-danger text-shadow'style='padding:2px 14px;border-radius:1rem;'>Pending</span>
    </a>&emsp;
    <?php } elseif($e['status'] == '1'){ ?>
    <a href="javascript:void(0)" data-id="<?php echo $e['id']; ?>" style="text-decoration:none;" class="actPstatus" data-table="<?php echo 'kanyadan_youjna_support'; ?>">
    <span class='bg-success text-shadow'style='padding:2px 10px;border-radius:1rem;'>Approved</span>
    </a>&emsp;
    <?php } ?>
    </td>


<div id="form-alert" class="alert"></div>

<style>
#form-alert {position: fixed;top: 20px;right: 20px;width: 310px;display: none;z-index: 9999;animation: slideInLeft 0.3s ease-out;}
.alert-danger.single-error {background-color: #f8d7da;color: #721c24;padding: 6px;margin-bottom: 8px;border-radius: 5px;
border: 1px solid #f5c6cb;font-size: 14px;box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);text-align: left;}
.alert-success {background-color: #d4edda;color: #155724;padding: 6px;border-radius: 5px;border: 1px solid #c3e6cb;font-size: 14px;text-align: left;}
#form-alert i {margin-right: 6px;}
@keyframes slideInLeft {from {opacity: 0;transform: translateX(-30px);}to {opacity: 1;transform: translateX(0);}
}
</style>


<script>
$(document).ready(function () {
    $('.actPstatus').on('click', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        var table = $(this).data('table'); 
        $.ajax({
            url: '<?php echo base_url(); ?>admin/actPstatus/' + id,
            type: 'POST',
            data: { id: id, table: table }, 
            success: function (response) {
                const res = JSON.parse(response);
                const alertBox = $('#form-alert');
                alertBox.html('').removeClass('alert-success alert-danger').show();
                if (res.status === 'success') {
                    alertBox.addClass('alert-success').html('<i class="fa fa-check-circle"></i> ' + res.message).fadeIn();
                    setTimeout(() => { alertBox.fadeOut(); location.reload(); }, 1000);
                } else {
                    alertBox.addClass('alert-danger').html('<i class="fa fa-exclamation-circle"></i> ' + res.message).fadeIn();
                    setTimeout(() => { alertBox.fadeOut(); location.reload(); }, 1000);
                }
            }
        });
    });
});
</script>

<?php  
 public function actPstatus($id)
    {
        $table = $this->input->post('table');
        $getValue = $this->db->select('id, status')->from($table)->where('id', $id)->get()->row();
        if (!empty($getValue)) {
            if ($getValue->status == '0') {
                $this->db->where('id', $id)->update($table, ['status' => '1']);
                $data = ['status' => 'success', 'message' => 'Thank you! You are approved now.'];
            } elseif ($getValue->status == '1') {
                $this->db->where('id', $id)->update($table, ['status' => '0']);
                $data = ['status' => 'error', 'message' => 'Thank you! Your status is pending now.'];
            }
        } else {
            $data = ['status' => 'error', 'message' => 'Something went wrong. Please try again later.'];
        }
        echo json_encode($data);
    }
?>

