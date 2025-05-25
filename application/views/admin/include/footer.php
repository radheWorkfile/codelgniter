    <!-- Social Media End Here -->
    <!-- Footer Area Start Here -->
    <footer class="footer-wrap-layout1">
    <div class="copyright">© Copyrights 2019 - All rights reserved Designed by <a
    href="#">Camwel Solution</a></div>
    </footer>
    <!-- Footer Area End Here -->
    </div>
    </div>
    <!-- Page Area End Here -->
    </div>
    <!-- jquery-->

    <!-- ++++++++++++++++++++++ Toast css and div section start from here. +++++++++++++++++++++++++++++++++++++ -->
    <div class="arvToast" style="visibility: visible;"><div class="tChild tDanger" id="mrk-email_id" style="display: none;"><i class="fa-solid fa-circle-exclamation me-2"></i>The Email Id field is required.<i class="fa-solid fa-xmark mClose" id="icn-email_id"></i></div><div class="tChild tDanger" id="mrk-mobileNu" style="display: none;"><i class="fa-solid fa-circle-exclamation me-2"></i>The Mobile No. field is required.<i class="fa-solid fa-xmark mClose" id="icn-mobileNu"></i></div><div class="tChild tDanger" id="mrk-membrAddr" style="display: none;"><i class="fa-solid fa-circle-exclamation me-2"></i>The Address field is required.<i class="fa-solid fa-xmark mClose" id="icn-membrAddr"></i></div><div class="tChild tDanger" id="mrk-empPassword" style="display: none;"><i class="fa-solid fa-circle-exclamation me-2"></i>The Password field is required.<i class="fa-solid fa-xmark mClose" id="icn-empPassword"></i></div></div>
	<style>
	.hidden {display: none;}
	.arvToast {position: fixed;top: 20px;right: 20px;z-index: 9999;min-width: 250px;max-width: 400px;font-family: Arial, sans-serif;}
	.tChild {margin-bottom: 10px;padding: 12px 40px 12px 10px;border-radius: 6px;box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);color: #fff;position: relative;font-size: 14px;animation: fadeIn 0.4s ease-in-out;text-align: left;}
	.tst_success {background-color: #28a745;}
	.tst_danger {background-color: #c0392b;}
	.tst_warning {background-color: #f0ad4e;}
	.mClose {position: absolute;right: 12px;top: 50%;transform: translateY(-50%);cursor: pointer;font-size: 16px;line-height: 1;}
	@keyframes fadeIn {from {opacity: 0;transform: translateY(-10px);}to {opacity: 1;transform: translateY(0);}}
	.bg-light-yellow{background-color:#fff0e9;}
	</style>
    <!-- +++++++++++++++++++++++++++ Toast css and div section end here. +++++++++++++++++++++++++++++++++++++++++++++++ -->


         <script>
		
	function get_search(tbactn, frmId, tbstorage) {
		$(frmId).submit(function (e) {
		e.preventDefault();
		$(tbstorage).DataTable().clear().destroy();
		let search = $(frmId).serializeArray();
		let searchObj = {};
		$.each(search, function (i, row) {
		searchObj[row.name] = row.value;
		});
		tbactn.printTable(searchObj);
		$('html,body').animate({
		scrollTop: $(tbstorage).offset().top
		}, 'slow');
		});
	}

		function getpaginate(search_data, id, pageLoc, plchldr) {
			$(id).DataTable({
			"processing": true,
			"serverSide": true,
			"order": [],
			"bDestroy": true,
			'columnDefs': [{
			'targets': [1, 2, 3],
			'orderable': true
			}],
			"ajax": {
			"url": pageLoc,
			"type": "POST",
			"dataSrc": "data",
			"data": search_data
			},
			language: {
			searchPlaceholder: plchldr
			},
			// dom: 'Bfrtip',
			dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
			"lengthMenu": [
			[10, 25, 50, 100, -1],
			[10, 25, 50, 100, "All"]
			],
			"buttons": [] /*"excel", "pdf", "print"*/
			});

		}


        	(function($) {
        		"use strict"
        		$("#toastr-danger-top-right").on("click", function() {
        			toastr.error("Please input mobile number.", "", {
        				positionClass: "toast-top-right",
        				timeOut: 10e3,
        				closeButton: !0,
        				debug: !1,
        				newestOnTop: !0,
        				progressBar: !0,
        				preventDuplicates: !0,
        				onclick: null,
        				showDuration: "30000",
        				hideDuration: "100000",
        				extendedTimeOut: "100000",
        				showEasing: "swing",
        				hideEasing: "linear",
        				showMethod: "fadeIn",
        				hideMethod: "fadeOut",
        				tapToDismiss: !1
        			})
        		});

        		$(document).ready(function() {
        			$('.arvDate').datepicker({
        				format: 'dd-mm-yyyy'
        			});
        			$(".getTargetAction").click(function() {
        				let actnID = $(this).attr('id');
        				let actNbtn = $(this).attr('data-id');
        				let getData = actNbtn.split('===');
        				if (actnID == 'cnfChanges') {
        					if (getData[0] == 'cnfDeleteDetail') {
        						$('#cnfChanges').html('Please Wait <i class="fa fa-sun bx-spin"></i>');
        						$.post($('#base_url').val() + getData[1], {
        							oprType: getData[0],
        							id: getData[2]
        						}, function(htmlAmi) {
        							$('#cnfChanges').html('Confirm Delete <i class="fa-solid fa-trash-can"></i>');
        							if (htmlAmi.action == 'success') {
        								setTimeout(function() {
        									$('#deletePanel').modal('hide');
        									window.location.reload(1)
        								}, 2000);
        							}
        							$('.actnData').html(htmlAmi.msg).css('color', htmlAmi.tClor);
        						}, 'json');

        					}
        				}
        			});

        		});


        		$(document).on("click", '.mClose', function() {
        			let getID = $(this).attr('id');
        			let targetID = getID.split('-');
        			$('#mrk-' + targetID[1]).fadeOut('slow');
        		});
        	})(jQuery);

        	$(document).ready(function() {
        		$(".arvSidebar").unbind('click').click(function() {
        			let actNbtn = $(this).attr('id');
        			let tagretLoc = $(this).attr('data-id');
        			if (actNbtn == "dashboardPanel") {
        				window.location.replace(tagretLoc);
        			}
        		});
        	});


//   ++++++++++++++++++++++++++++++++++ Create & Back & list section start ++++++++++++++++

		$('#createItem').on('submit', function (e) {
			e.preventDefault(); let $form = $(this);
			let targetAct = $form.data('id'); let formData = $form.serialize();
			$('#submit-btn').html('<i class="fas fa-spinner text-light actProtate"></i> Wait...');
			setTimeout(function () {
			$.ajax({ url: targetAct, type: "POST", data: formData, dataType: 'json',
			complete: function () { 
			$('#submit-btn').html('<i class="fas fa-save text-white" id="save-icon"></i> Save');
			}, success: function (response) { if (response.addClas === 'tst_danger') {
			$('.arvToast').removeClass('success-toast').addClass('error-toast'); } else {
			$('.arvToast').removeClass('error-toast').addClass('success-toast');
			} toastMultiShow(response.addClas, response.msg, response.icon);
			if (response.addClas === 'tst_success') { setTimeout(function () { window.location.reload(); }, 2000);
			} } }); }, 2000);
		});



		$(document).on('click', '.back-btn', function () {
		const $btn = $(this);
		const targetUrl = $btn.data('url');
		$btn.find('.icon-arrow').addClass('d-none');
		$btn.find('.icon-refresh').removeClass('d-none');
		setTimeout(function () {
		window.location.href = targetUrl;
		}, 2000);
		});


		var accPermission = '';
		$(document).ready(function () {
		let searchObj = {};
		var targetAction = $('#listItem').attr('data-id'); // Corrected ID
		accPermission = {
		printTable: function (search_data) {
		getpaginate(search_data, '#listItem', targetAction, 'Search');
		} };
		accPermission.printTable(searchObj);
		});

//   ++++++++++++++++++++++++++++++++++ Create & Back & list section end ++++++++++++++++

        function toastMultiShow(adCls, msg, icon) {
            let valid = ''; let myClass = "tSuccess tWarning tDanger";
            let restCls = myClass.replace(adCls, " ");
            if (typeof msg === 'object') {$.each(msg, function (i, item) {
            if (item != "") {
            valid += '<div class="tChild ' + adCls + '" id="mrk-' + i + '">' +
            icon + ' ' + item.replace(/(<([^>]+)>)/ig, "") +
            '<i class="fa-solid fa-xmark mClose" id="icn-' + i + '"></i></div>';
            setTimeout(function () { $('#mrk-' + i).fadeOut('slow'); }, 3000);
            } }); } else {
            valid += '<div class="tChild ' + adCls + '" id="mrk-single">' +
            icon + ' ' + msg +
            '<i class="fa-solid fa-xmark mClose" id="icn-single"></i></div>';
            setTimeout(function () { $('#mrk-single').fadeOut('slow'); }, 3000); }
            $('.arvToast').css('visibility', 'visible').html(valid);
         }


		    $(function () {
        $(document).unbind("click", '.ActnCmdByAmi').on("click", '.ActnCmdByAmi', function () {
            let actNbtn = $(this).attr('id');
            let uriActn = $(this).attr('data-id');
            $.post(uriActn, {
                endDt: 'confirm'
            },
                function (htmlAmi) {
                    var frame1 = $('<iframe />');
                    frame1[0].name = "frame1";
                    $("body").append(frame1);
                    var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
                    frameDoc.document.open();
                    frameDoc.document.write(htmlAmi);
                    frameDoc.document.close();
                    setTimeout(function () {
                        window.frames["frame1"].focus();
                        window.frames["frame1"].print();
                        frame1.remove();
                    }, 500);
                });
        });
    });
	//   ++++++++++++++++++++++++++++++++++++++++++++++++++
</script>



<!-- ======================================= Without Model Status ===============================  -->

	<div class="modal fade" id="actPstatus_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document" style="max-width: 400px;"> 
	<div class="modal-content"><div class="modal-body">
	<p class="mt-3 text-shadow text-dark fw-bold pb-1 fs-md"><i class="fa fa-spinner fs-5 actProtate text-danger text-shadow" aria-hidden="true"></i>&nbsp;Manage Status</p>
	<p class="text-shadow text-center" style="font-size:13px;">
	<i class="fa fa-exclamation-circle text-danger fs-5 text-shadow" aria-hidden="true"></i>&nbsp;Are you sure you want to delete?</p>
	<div class="d-flex justify-content-end gap-2 mt-4">
	<button type="button" class="btn btn-outline-dark py-2 px-4" data-bs-dismiss="modal">
	<i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back </button>&nbsp;&nbsp;
	<button type="button" class="btn btn-outline-danger pu-2 px-4 statusConfirmBtn" data-id="">Confirm Delete <i class="fa fa-trash fs-5" aria-hidden="true"></i>
	</button>
	</div>  </div>  </div> 
	</div> </div>


	<script>
	function rotateAndRedirect(anchor, url, changeStatusURL) {
	anchor.innerHTML = ''; const cog = document.createElement('i');
	cog.className = 'fas fa-refresh actProtate text-white me-1';
	const waitText = document.createElement('span');
	waitText.innerText = ' processing...';waitText.style.color = '#fff';
	waitText.style.fontSize = '0.875rem';anchor.appendChild(cog);
	anchor.appendChild(waitText);const id = url.split('/').pop(); 
	$.ajax({ url: changeStatusURL, type: 'POST',data: { id: id }, dataType: 'json',
	success: function (response) { if (response.status === 'success') {
	showMessage('<i class="fa fa-power-off text-success text-samll"></i> Status changed successfully!', 'success');
	const newStatus = response.newStatus == 1 ? 'Active' : 'Deactive';
	const newClass = response.newStatus == 1 ? 'btn-success' : 'btn-danger';
	anchor.className = `btn ${newClass} btn-sm mx-1 shadow btn-xs sharp`;
	anchor.innerHTML = `<i class="fas fa-power-off text-white"></i> ${newStatus}`;
	} else { showMessage(response.message || '<i class="fa fa-power-off text-danger" aria-hidden="true"></i> Something went wrong!', 'error');
	anchor.innerHTML = `<i class="fas fa-power-off text-white"></i> Retry`;
	} }, error: function () {
	showMessage('<i class="fa fa-power-off text-danger text-samll" aria-hidden="true"></i> Server error occurred.', 'error');
	anchor.innerHTML = `<i class="fas fa-power-off text-white"></i> Retry`;
	} }); return false; }
	function showMessage(message, type) {
	const alertBox = document.createElement('div');
	alertBox.className = `alert alert-${type === 'success' ? 'success' : 'danger'} mt-2`;
	alertBox.innerHTML = message; alertBox.style.position = 'fixed'; alertBox.style.top = '10px';
	alertBox.style.right = '10px'; alertBox.style.zIndex = '9999'; alertBox.style.minWidth = '20%';
	document.body.appendChild(alertBox); setTimeout(() => { alertBox.remove(); }, 3000); }
	</script>

<!-- ======================================= Without Model Status end ===============================  -->



<!-- ======================================= status with model section start ===============================  -->

<div class="modal fade" id="actHasStatusModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 400px;">
    <div class="modal-content">
      <div class="modal-body pt-5">
        <p class="text-center text-success fw-bold">
          <i class="fa fa-power-off text-success"></i>&nbsp;Status Change
        </p>
        <p class="text-center text-danger text-info" style="font-size:13px;">
          <i class="fa fa-question-circle text-danger"></i>&nbsp;
          Are you sure you want <span id="actHasStatusName" class="fw-bold text-success"></span> this record?
        </p>
        <div class="d-flex justify-content-end gap-2 mt-4">
          <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">
            <i class="fa fa-arrow-circle-left"></i> Back
          </button>&nbsp;
          <button type="button" class="btn btn-outline-success" id="cnfStatusNow">
            Confirm Status<i class="fa fa-save"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
let statusId = null; let statusUrl = null; let $statusBtn = null; let statusTable = null; let currentStatus = null;
$(document).on('click', '.actHasStatus', function (e) { e.preventDefault();
    $statusBtn = $(this); statusId = $statusBtn.data('id');statusUrl = $statusBtn.data('url');
    statusTable = $statusBtn.data('table'); currentStatus = parseInt($statusBtn.data('status'));
    if (!statusId || !statusUrl || !statusTable) {
    toastMultiShow('tst_danger', 'Missing status data.', '<i class="ti-close"></i>'); return;
    } if (currentStatus === 1) { $('#actHasStatusName').text('to deactivate');
    } else { $('#actHasStatusName').text('to activate');} $('#cnfStatusNow').data(
    { id: statusId, table: statusTable, url: statusUrl, status: currentStatus });
    $('#actHasStatusModal').modal('show');
});

$('#cnfStatusNow').on('click', function () {
    const id = $(this).data('id');
    const table = $(this).data('table');
    const url = $(this).data('url');
    const current = $(this).data('status');
    if (!id || !table || !url) {
        toastMultiShow('tst_danger', 'Invalid request.', '<i class="ti-close"></i>');return;
    } $.post(url, { id, table, current, permission: 'yes' }, function (response) {
        $('#actHasStatusModal').modal('hide');
        if (response.status === 'success') {
            let newStatus = response.newStatus; if (newStatus === 1) {
            $statusBtn .removeClass('btn-danger') .addClass('btn-success')
            .data('status', 1) .attr('title', 'Change Status')
            .html('<i class="fas fa-power-off text-white"></i> Active');
            } else { $statusBtn
            .removeClass('btn-success') .addClass('btn-danger') .data('status', 0)
            .attr('title', 'Change Status') .html('<i class="fas fa-power-off text-white"></i> Deactive');
            } toastMultiShow('tst_success', '<i class="fa fa-check text-white"></i> Status updated successfully!', '<i class="ti-check-box"></i>');
        } else { toastMultiShow('tst_danger', response.msg || 'Could not update status.', '<i class="ti-close"></i>');
        } }, 'json').fail(function () {
        $('#actHasStatusModal').modal('hide');
        toastMultiShow('tst_danger', 'Server error. Try again.', '<i class="ti-close"></i>');
    });
});

$('#actHasStatusModal').on('hidden.bs.modal', function () {
    statusId = null; statusUrl = null; $statusBtn = null; statusTable = null; currentStatus = null; $('#actHasStatusName').text('');
});

</script>



<!-- ======================================= status with model section end ===============================  -->


<!-- ========================================== Delete Model start ==============================  -->

<div class="modal fade" id="actPdelete" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document" style="max-width: 400px;"> 
    <div class="modal-content">
      <div class="modal-body pt-5">
        <p class="text-center fw-bold">
          <i class="fa fa-trash text-danger"></i>&nbsp;Delete Details
        </p>
        <p class="text-center text-danger" style="font-size:13px;">
          <i class="fa fa-power-off text-danger"></i>&nbsp;
          Are you sure <span id="deleteUserName" class="fw-bold text-success"></span> you want to delete?
        </p>
        <div class="d-flex justify-content-end gap-2 mt-4">
          <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">
            <i class="fa fa-arrow-circle-left"></i> Back
          </button>&nbsp;
          <button type="button" class="btn btn-outline-danger" id="cnfChanges">
            Confirm Delete <i class="fa fa-trash"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>


<script>

let deleteTargetId = null; let deleteUrl = null; let $currentBtn = null; let tableName = null;
$(document).on('click', '.open-delete-modal', function (e) {
e.preventDefault(); $currentBtn = $(this);
deleteTargetId = $currentBtn.data('id'); deleteUrl = $currentBtn.data('url'); tableName = $currentBtn.data('table');
if (!deleteTargetId || !deleteUrl || !tableName) {
toastMultiShow('tst_danger', 'Missing data attributes.', '<i class="ti-close"></i>'); return; }
    $currentBtn.find('.delete-icon').addClass('d-none');
    $currentBtn.find('.refresh-icon').removeClass('d-none'); $('#deleteUserName').text('this record');
    $('#cnfChanges').data({ id: deleteTargetId, table: tableName, url: deleteUrl });
    $('#actPdelete').modal('show'); });
$('#cnfChanges').on('click', function () {
    const id = $(this).data('id'); const table = $(this).data('table'); const url = $(this).data('url');
    if (!id || !table || !url) {
    toastMultiShow('tst_danger', 'Invalid delete request.', '<i class="ti-close"></i>'); return;
    } $.post(url, { id, table, permission: 'yes' }, function (response) {
    $('#actPdelete').modal('hide'); if (response.status === 'success') {
    toastMultiShow('tst_success', '<i class="fa fa-check text-white"></i> Deleted successfully!', '<i class="ti-check-box"></i>');
    setTimeout(() => location.reload(), 1200);
    } else { toastMultiShow('tst_danger', response.msg || 'Could not delete.', '<i class="ti-close"></i>');
    } }, 'json').fail(function () {
    toastMultiShow('tst_danger', 'Server error. Try again.', '<i class="ti-close"></i>');
    });
});

$('#actPdelete').on('hidden.bs.modal', function () {
    resetIcons(); deleteTargetId = null; deleteUrl = null; currentBtn = null; 
	ableName = null; $('#deleteUserName').text('');
});

function resetIcons() { if ($currentBtn) {
        $currentBtn.find('.refresh-icon').addClass('d-none');
        $currentBtn.find('.delete-icon').removeClass('d-none');
} }

</script>

<!-- ========================================== print id-card & certificate ================================  -->

<script>
		
function print_id_card(elem, id) {
    const originalIcon = elem.querySelector('i');
    const originalHTML = originalIcon.outerHTML;
    elem.innerHTML = '<i class="fas fa-cog actProtate text-white"></i>';
    setTimeout(() => {
        elem.innerHTML = originalHTML;
        $.ajax({
            url: '<?= base_url() ?>admin/employee/id_card',
            type: "POST",
            data: { id: id },
            success: function (data) {
                popup(data);
            }
        });
    }, 2000);
}

function print_certificate(elem, id) {
    const originalIcon = elem.querySelector('i');
    const originalHTML = originalIcon.outerHTML;
    elem.innerHTML = '<i class="fas fa-cog actProtate text-white"></i>';
    setTimeout(() => {
        elem.innerHTML = originalHTML;
        $.ajax({
            url: '<?= base_url() ?>admin/employee/certificate',
            type: "POST",
            data: { id: id },
            success: function (data) {
                popup(data);
            }
        });
    }, 2000);
}

function popup(data) {
    var frame1 = $('<iframe />');
    frame1[0].name = "frame1";
    frame1.css({ "position": "absolute", "top": "-1000000px" });
    $("body").append(frame1);
    var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : 
        frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
    frameDoc.document.open();
    frameDoc.document.write('<html><head><title></title></head><body>' + data + '</body></html>');
    frameDoc.document.close();
    setTimeout(function () {
        window.frames["frame1"].focus();
        window.frames["frame1"].print();
        frame1.remove();
    }, 500);
}


</script>

<!-- ========================================== print id-card & certificate ================================  -->
		

<!-- ++++++++++++++++++++++++++ status section start +++++++++++++  -->



<!-- ++++++++++++++++++++++++++ view and edit rotate section start +++++++++++++  -->
<script>
function rotateAndRedirectView(elem, url) {
    const icon = elem.querySelector('i');
    const originalClass = icon.className;

    icon.className = 'fas fa-cog fa-spin text-white actProtate';

    setTimeout(() => {
        icon.className = originalClass;
        window.location.href = url;
    }, 2000);
}

function rotateAndRedirectEdit(elem, url) {
    const icon = elem.querySelector('i');
    const originalClass = icon.className;

    icon.className = 'fas fa-cog fa-spin text-white actProtate';

    setTimeout(() => {
        icon.className = originalClass;
        window.location.href = url;
    }, 2000);
}
</script>

<!-- ++++++++++++++++++++++++++ view and edit rotate section end +++++++++++++  -->








