

<script>
    
     var targeteventList_item = '';            
     $(document).ready(function() {
     let searchObj = {};
     var targetAction = $('#product_category').attr('data-id');
     targeteventList_item = {
     printTable: function(search_data) {
     getpaginate(search_data, '#product_category', targetAction, 'Only For Tnx id, Month.');
     }
     };
     targeteventList_item.printTable(searchObj);           
     });


   $('#add_unit').submit(function(e) {
     let target = $(this).attr('data-id');
    e.preventDefault();
    $.ajax({
        url: target,
        type: "POST",
        data: $(this).serialize(),
        dataType: 'json',
        beforeSend: function() { $('#btnSubmit').html('<i class="fe fe-settings bx-spin"></i> Please Wait'); },
        complete: function() { $('#btnSubmit').html('<i class="ti-save"></i> Save'); },
        success: function(response) {
            toastMultiShow(response.addClas, response.msg, response.icon);
           if (response.addClas === 'tst_success') {
                $('#add_unit')[0].reset();
            }
        }
    });
});

$('#edit_unit').submit(function(e) {
    let target = $(this).attr('data-id');
    e.preventDefault();
    $.ajax({
        url: target, type: "POST", data: $(this).serialize(), dataType: 'json',
        beforeSend: function() {  $('#btnSubmit').html('<i class="fe fe-settings bx-spin"></i> Please Wait'); },
        complete: function() {  $('#btnSubmit').html('<i class="ti-save"></i> Save');  },
        success: function(htmlAmi) { toastMultiShow(htmlAmi.addClas, htmlAmi.msg, htmlAmi.icon);
        if (htmlAmi.addClas === 'tst_success') { 
            if (htmlAmi.actReload) { 
              setTimeout(function() {
                window.location.href = htmlAmi.actReload;},1000); 
              }
           }
        }
    });
});


</script>

<script>


$("#addIpdData").on("submit", function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: base_url + 'admin/Patient/discharge_cerificate_man',
        data: new FormData(this),
        processData: false, contentType: false, cache: false,
        beforeSend: function() {$('#btn_reset').html('Please Wait.....');},
        complete: function() {$('#btn_reset').html('Update Now');},dataType: 'json',
        success: function(data) {
        console.log(data);
        $("#addIpdData")[0].reset();
        }
    });
});

    
        $("#addFouData").on("submit", function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: '<?= base_url() ?>admin/Tender/addDAta',
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function(data) {
                    console.log(data);
                    // window.location.reload(true);               
                }
            });
        });

  $("#addIpdData").on("submit", function(e) {
            e.preventDefault();
            // let target = $(this).attr('data-id');
            $.ajax({
                type: "POST",
                url:base_url+'admin/Patient/discharge_cerificate_man',
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                beforeSend: function() {
                    $('#btn_reset').html('Please Wait.....');
                },
                complete: function() {
                    $('#btn_reset').html('Update Now');
                },
                dataType: 'json',
                success: function(data) {
                  console.log(data);
                }
            });
        });

        $("#updateAllData").on("submit", function(e) {
            alert("sdfsdfsd");
            e.preventDefault();
            $.ajax({
                url: '<?= base_url() ?>admin/Register/updateData',
                type: "post",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function(data) {
                    console.log(data);
                    // window.location.reload(true);
                }
            });
        });


        function viewDatafun(id) {
            // alert(id);
            $.ajax({
                type: "POST",
                url: '<?= base_url() ?>' + 'admin/Register/viewDAta',
                data: {
                    'id': id
                },
                success: function(data) {
                    console.log(data);
                    $('#viewDetails').html(data);
                },
            });


        }

        function editDAtaFun(id) {
            alert(id);
            $.ajax({
                type: "POST",
                url: '<?= base_url() ?>' + 'admin/Register/editRegData',
                data: {
                    'id': id
                },
                success: function(data) {
                    console.log(data);
                    $('#editDetails').html(data);
                },
            });


        }


        function deleteDAta(id) {
            alert(id);
            $.ajax({
                type: "POST",
                url: '<?= base_url() ?>' + 'admin/Register/deleteData',
                data: {
                    'id': id
                },
                success: function(data) {
                    window.location.reload(true);
                },
            });
        }


function print_member_details(id, user_id) {
    alert("fdfds");
    $.ajax({
        url: base_url + 'super_admin/Customer/print_cus_idCard',
        type: "POST",
        data: {
            'id': id,
            'user_id': user_id,
        },
        success: function(data) {
            popup(data);
        },
    });
}


$("#addBuss").on("submit",function(e){
  
    e.preventDefault();
        $.ajax({
            url : '<?= base_url() ?>admin/BusinessType/addBussData',
            type:"post",
            data:new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            success: function(data) {
                console.log(data);
                window.location.reload(true);               
            }
        });
    }); 


$('#add_agent_data').submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: base_url + 'agent/agent/add_agent_data',
        type: "POST",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        dataType: 'json',
        success: function(data) {
            if (data.icon == "error") {
                var valid = '';
                $.each(data.text, function(i, item) {
                    valid += item;
                });
                Swal.fire({
                    position: "top-end",
                    icon: data.icon,
                    html: valid,
                    showConfirmButton: !1,
                    timer: 1500
                });
            } else {
                Swal.fire({
                    position: "top-end",
                    icon: data.icon,
                    title: data.text,
                    showConfirmButton: !1,
                    timer: 1500
                });
                setTimeout(function() {
                    window.location.reload(1);
                    window.location.href = base_url + 'agent/Agent/manage_agent';
                }, 1500);
            }
        }
    });
});
    </script>
