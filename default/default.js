



<script>

    
        	function get_search(tbactn, frmId, tbstorage) {
        		$(frmId).submit(function(e) {
        			e.preventDefault();
        			$(tbstorage).DataTable().clear().destroy();
        			let search = $(frmId).serializeArray();
        			let searchObj = {};
        			$.each(search, function(i, row) {
        				searchObj[row.name] = row.value;
        			});
        			tbactn.printTable(searchObj);
        			$('html,body').animate({
        				scrollTop: $(tbstorage).offset().top
        			}, 'slow');
        		});
        	}

        	function getpaginate(search_data, id, pageLoc, plchldr) //id,page,placehldr
        	{
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

        		$(document).on("click", '.getAction', function() {
        			let actNbtn = $(this).attr('data-id');
        			let getData = actNbtn.split('===');
        			if (getData[0] == 'viewDelete') {
        				$('#delAr--' + getData[2]).html('<i class="fa fa-sun bx-spin"></i>');
        				$.post($('#base_url').val() + getData[1], {
        					oprType: getData[0],
        					id: getData[2]
        				}, function(htmlAmi) {
        					$('.actnData').html(htmlAmi.msg).css('color', htmlAmi.tClor);
        					$('#cnfChanges').attr('data-id', htmlAmi.action);
        					$('#delAr--' + getData[2]).html('<i class="fa fa-trash"></i>');
        				}, 'json');
        			}
        		});



            $(function() {
    $(document).on("click", '.getAction', function() {
        let actNbtn = $(this).attr('data-id');
        let getData = actNbtn.split('===');

        if (getData[0] == 'miStatusView') {
            let target = $('#base_url').val() + getData[1];
            $.post(target, { oprType: getData[0], id: getData[2] }, function(htmlAmi) {
                $('.actnData').html(htmlAmi.msg);
                $('#cnfChangesStatus').attr('data-id', htmlAmi.action);
            }, 'json');
        } 
        else if (getData[0] == 'miStatusChange') {
            let getCurentId = $(this).attr("id");
            $("#" + getCurentId).prop("disabled", true).css('color', 'green');
            
            let target = $('#base_url').val() + getData[1];
            $('#cnfChanges,#cnfChangesStatus').html('<i class="fa fa-sun bx-spin"></i> Please Wait').removeClass('btn-outline-secondary').addClass('btn-outline-primary');
            
            $.post(target, { oprType: getData[0], id: getData[2] }, function(htmlAmi) {
                $('#' + getCurentId).html('Confirm <i class="fa-regular fa-circle-check"></i>').removeClass('btn-outline-primary').addClass('btn-outline-secondary');
                $("#arvs--" + getData[2]).addClass(htmlAmi.btnAdCls).removeClass(htmlAmi.btnRmvCls).html(htmlAmi.btnTxt);
                $('.actnData').html(htmlAmi.msg);
                $("#" + getCurentId).prop("disabled", false);
                if (htmlAmi.reloadPage) {
                    setTimeout(function() {
                      $('#statusChange').modal('hide');
                        window.location.href = htmlAmi.reloadPage;
                    }, 2500); 
                }
                else{
                  $('#statusChange').delay(3000).modal('hide');
                }
            }, 'json');
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

        	function toastMultiShow(adCls, msg, icon) {
        		let valid = '';
        		let myClass = "tSuccess tWarning tDanger";
        		let restCls = myClass.replace(adCls, " ");
        		let addonMsg = '';
        		$.each(msg, function(i, item) {
        			if (item != "") {
        				valid += '<div class="tChild ' + adCls + '" id="mrk-' + i + '">' + icon + item.replace(/(<([^>]+)>)/ig, "") + '<i class="fa-solid fa-xmark mClose" id="icn-' + i + '"></i></div>';
        				setTimeout(function() {
        					$('#mrk-' + i).fadeOut('slow');
        				}, 3000);
        			}
        		});
        		$('.arvToast').css('visibility', 'visible').html(valid);
        	}
    


</script>