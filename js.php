<script>
     $(document).ready(function() {
    $(".arvManage").change(function() {
        let actNbtn = $(this).attr('id');
        let getTrgtId = $(this).attr('data-id');
        let getResourceLoc = $('#base_url').val() + "admin/inventory/cityList";
        $('#' + getTrgtId).css('color', '#099b7e !important').html('<option>Please Wait.....</option>');
        $.post(getResourceLoc, { id: $('#' + actNbtn).val(), actnType: getTrgtId, brID: $('#state').val(), clsId: $('#class_manage').val(), secID: $('#sec_manage').val() },
            function(htmlAmi) {
                if (getTrgtId == "rollNo") {
                    $('#' + getTrgtId).val(htmlAmi);
                    $('#' + getTrgtId).css('color', 'rgb(62, 62, 62) !important');
                } else {
                    $('#' + getTrgtId).html(htmlAmi);
                    $('#' + getTrgtId).css('color', 'rgb(62, 62, 62) !important');
                }
            });
    }); });

// viewSupplier

function viewSupplier(id) {
    $.ajax({
        type: "POST",
        url: '<?= base_url() ?>admin/inventory/supplierList/viewSupplier',
        data: { id: id },
        dataType: 'json',
        success: function(data) {
            console.log(data);
            $('#supId').text(data.sup_id);
            $('#supName').text(data.name);
            $('#supMobile').text(data.mobile);
            $('#supEmail').text(data.email);
        },
    });
}
    
var actPerFsuppItem = '';
$(document).ready(function() {
    let searchObj = {};
    var targetAction = $('#targetListItem').attr('data-id');
    actPerFsuppItem = {
        printTable: function(search_data) {
            getpaginate(search_data, '#targetListItem', targetAction, 'Only For Tnx id, Month.');
        }
    };
    actPerFsuppItem.printTable(searchObj);
});



    $('#addItem').submit(function(e) {
    let target = $(this).attr('data-id');
    e.preventDefault();
    $.ajax({
        url: target,
        type: "POST",
        data: $(this).serialize(),
        dataType: 'json',
        beforeSend: function() {$('#btnSubmit').html('<i class="fe fe-settings bx-spin"></i> Please Wait');},
        complete: function() {$('#btnSubmit').html('<i class="ti-save"></i> Save');},
        success: function(htmlAmi) {
            toastMultiShow(htmlAmi.addClas, htmlAmi.msg, htmlAmi.icon);
            if (htmlAmi.addClas === 'tst_success') {
                if (htmlAmi.actReload) {
                    setTimeout(function() {
                        window.location.href = htmlAmi.actReload;
                    }, 1000);
                }
            }
        }
    });
});
    /*********************************************************************/
</script>