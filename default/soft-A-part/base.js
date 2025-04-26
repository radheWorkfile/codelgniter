/******************************************** for append use thsi *************************/
$(".arvManage").change(function() {
    let actNbtn = $(this).attr('id');
    let getTrgtId = $(this).attr('data-id');
    let getResourceLoc = $('#base_url').val() + "admin/student/findBranchDetails";
    $('#' + getTrgtId).css('color', '#099b7e !important').html('<option>Please Wait.....</option>');
    $.post(getResourceLoc, { id: $('#' + actNbtn).val(), actnType: getTrgtId, brID: $('#branch').val() }, function(htmlAmi) {
        if (getTrgtId == "rollNo") {
            $('#' + getTrgtId).val(htmlAmi);
            $('#' + getTrgtId).css('color', 'rgb(62, 62, 62) !important');
        } else {
            $('#' + getTrgtId).html(htmlAmi);
            $('#' + getTrgtId).css('color', 'rgb(62, 62, 62) !important');
        }
    });
});
/*********************************************************************/

$('#add_fundDetails').submit(function(e) {
    let target = $('#base_url').val() + $("#locTrgt").text();
    e.preventDefault();
    $.ajax({
        url: target,
        type: "POST",
        data: $(this).serialize(),
        dataType: 'json',
        beforeSend: function() { $('#manageAction').html('<i class="fe fe-sun bx-spin"></i> Please Wait'); },
        complete: function() { $('#manageAction').html('<i class="ti-save"></i> Submit'); },
        success: function(htmlAmi) {
            toastMultiShow(htmlAmi.addClas, htmlAmi.msg, htmlAmi.icon);
            if (htmlAmi.addClas == 'tst_success') {
                setTimeout(function() { window.location.reload(1); }, 2000);
            }
        }
    });

});

/*********************************************************************/

function update_attendance(id) {
    $.ajax({
        url: base_url + 'admin/Attendance/update_attendance_status',
        type: "POST",
        data: {
            'id': id
        },
        success: function(data) {
            $('#up_attendance').html(data);
        },
    });
}

$('#attendance_updata').submit(function(e) {
    // let base_url = $('#base_url').val();
    e.preventDefault();
    $.ajax({
        url: base_url + 'admin/Attendance/update_attendance_status_data',
        type: "POST",
        data: $(this).serialize(),
        dataType: 'json',
        beforeSend: function() { $('#attendancedataupdate').html('<i class="fe fe-settings bx-spin"></i> Please Wait'); },
        complete: function() { $('#attendancedataupdate').html('<i class="ti-save"></i> Submit'); },
        success: function(htmlAmi) {
            toastMultiShow(htmlAmi.addClas, htmlAmi.msg, htmlAmi.icon);
            if (htmlAmi.addClas == 'tst_success') {
                setTimeout(function() { window.location.reload(1); }, 2000);
            }
        }
    });
});

/*********************************************************************/

$(document).ready(function() {
    $("#LogedMemDonation").on("submit", function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '<?= base_url() ?>member/dashboard/LogedMemDonation',
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(response) {
                $('.messagetxttt').prop('disabled', true).text('Submitting...');
                setTimeout(function() {
                    window.location.reload(true);
                }, 1000);
            },
        });
    });
});


$(document).ready(function() {
    $("#donate-payment").hide();
    $("#amount").keyup(function() {
        if (!$("#amount").val().trim()) {
            $("#donate-payment").hide();
        } else {
            $("#donate-payment").show();
        }
    });
});



$(document).ready(function() {
    $("#email").keyup(function() {
        var email = $(this).val();
        var emailRegex = /^[a-zA-Z0-9._-]+@[a-zAZ0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (emailRegex.test(email)) {
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>site/test_3',
                data: { email: email },
                dataType: 'json',
                success: function(response) {
                    if (response.name) { $('#name').val(response.name); }
                    if (response.father_name) { $('#f_name').val(response.father_name); }
                    if (response.address) { $('#address').val(response.address); }
                    if (response.mobile_number) { $('#mobile').val(response.mobile_number); }
                },

            });
        }
    });
});