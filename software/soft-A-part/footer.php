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
            } else if (getData[0] == 'miStatusChange') {
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
                    } else {
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
</script>





<script>
      $(document).ready(function () { $('.arvDate').datepicker({ format: 'dd-mm-yyyy' }); });
      /*Charitify Theme Scripts */
      (function ($) {
      "use strict"; $(window).on('load', function () { $('body').addClass('loaded'); });
      /*========================================================================= Sticky Header =========================================================================*/
      $(function () {
      var header = $("#header"), height = header.height(),
      yOffset = 0, triggerPoint = 100;
      $('.header-height').css('height', height + 'px');
      $(window).on('scroll', function () {
      yOffset = $(window).scrollTop();
      if (yOffset >= triggerPoint) { header.removeClass("animated cssanimation fadeIn"); header.addClass("navbar-fixed-top  cssanimation animated fadeInTop"); }
      else { header.removeClass("navbar-fixed-top cssanimation  animated fadeInTop"); header.addClass("animated cssanimation fadeIn"); }
      });
      });
      /*=========================================================================  Mobile Menu =========================================================================*/
      $(function () { $('#mainmenu').slicknav({ prependTo: '.site-branding', label: '', allowParentLinks: true }); });
      /*========================================================================= Scroll To Top =========================================================================*/
      $(window).on('scroll', function () {
      if ($(this).scrollTop() > 100) { $('#scroll-to-top').fadeIn(); } else { $('#scroll-to-top').fadeOut(); }
      });     
      })(jQuery);

      $(document).ready(function () {
      $(".arvChange").unbind('change').change(function () {
      var actNbtn = $(this).attr('id');
      let getID = $(this).val();
      if (actNbtn == 'state') { finDetails($(this).attr('data-id'), '#district', getID, actNbtn); }
      else if (actNbtn == 'sector') {
      if (getID == '7') { $('#current_city').hide(); $('#business_type_section,#buss_nameSec').show(); } else { $('#current_city').show(); $('#business_type_section,#buss_nameSec').hide(); }
      finDetails($(this).attr('data-id'), '#industries', getID, actNbtn);
      }
      });
      });

      function toastMultiShow(adCls, msg, icon) { let valid = ''; let myClass = "tSuccess tWarning tDanger"; let restCls = myClass.replace(adCls, " "); let addonMsg = ''; $.each(msg, function (i, item) { if (item != "") { valid += '<div class="tChild ' + adCls + '" id="mrk-' + i + '">' + icon + item.replace(/(<([^>]+)>)/ig, "") + '<i class="fa-solid fa-xmark mClose" id="icn-' + i + '"></i></div>'; setTimeout(function () { $('#mrk-' + i).fadeOut('slow'); }, 3000); } }); $('.arvToast').css('visibility', 'visible').html(valid); }
      function finDetails(resource, trgtID, getID, actNbtn) {
      $(trgtID).html('<option>Please Wait.....</option>');
      $(trgtID).css('color', '#AA6203');
      $.post(resource, { id: getID, actionBase: actNbtn }, function (htmlAmi) { $(trgtID).html(htmlAmi); $(trgtID).css('color', 'rgb(19,20,20)') });
      }
      $("#registerDet").on("submit", function (e) {
      e.preventDefault();
      $.ajax({
      url: $(this).attr('data-id'), type: "POST", data: $(this).serialize(), dataType: 'json',
      beforeSend: function () { $('#saveProcess').html('<div class="loader"></div> Please Wait'); },
      complete: function () { $('#saveProcess').html('<i class="fa-regular fa-floppy-disk"></i> Submit'); },
      success: function (data) {
      //$('.messagetxttt').prop('disabled', true).text('Submitting...');
      toastMultiShow(data.adClass, data.msg, data.icon); 
     if(data.adClass=='tSuccess'){ setTimeout(function () { window.location.reload(1); }, 2000); }
     }
      });
      });
    </script>


<style>
		@-webkit-keyframes spin{0%{-webkit-transform: rotate(0deg);}100%{-webkit-transform:rotate(360deg);}}@keyframes spin{0%{transform:rotate(0deg);}100%{transform:rotate(360deg);}}
		.bx-spin{-webkit-animation:spin 2s linear infinite;animation:spin 2s linear infinite}.bx-spin-hover:hover{-webkit-animation:spin 2s linear infinite;animation:spin 2s linear infinite}		
		.arvToast{ z-index: 111;position: fixed;right: 20px;top: 80px;min-width: 420px; visibility: hidden;}.tChild{background-color:#fff;padding:15px 20px 15px 15px;border-bottom:3px solid #e3e3e3;box-shadow: 0rem 0.3125rem 0.3125rem 0rem rgba(82, 63, 105, 0.05);margin-bottom: 10px;}.mClose{ float: right;font-size: 16px;cursor: pointer;margin: 0px -5px 2px 10px;}.tSuccess{ background-color: #0D9299;border-bottom:3px solid #006F75;;color: white;}.tDanger{ background-color: #d73300;border-bottom: 3px solid #c12e00;color: white;}.tWarning{ background-color: #f0d22e;border-bottom: 3px solid #d0b103;color: #8e5d00;}.tDefault{background-color: #d5d5d5;border-bottom: 3px solid #b9b9b9;color: #5b5b5b;}.tPrimary{ background-color: #5351F4;border-bottom: 3px solid #3736AF;color: #fff;}	
		.table .thead-arvDef th {background-color:#0c5edd;color:#fff;}
		.pull-right{ float:right;}
		.rvClose{ float:right;margin:-10px -10px 0px 0px;font-size:12px;}
		.delsMsg {color: #716d6c;text-align: center;font-size: 20px;margin: 30px 0px 10px 0px;}
		.actnData {text-align: center;margin: 0px 0px 20px 0px;color: #db3704;font-size: .8rem;}
		.border-radius-2{border-radius:2rem;}
		.bg-g{background-image: linear-gradient(to bottom right, #12c1ca, #13999f);}
		.font-size-2{font-size:2rem;}
		.shadow-hover:hover{box-shadow:5px 5px 22px grey;}
		.mt--1{margin-top:-0.6rem;}
		.mt--2{margin-top:-1.5rem;}
		.border-1{border:1px solid #128388;}
		.border-radius-1{border-radius:1rem;}
		.cursor-pointer{cursor: pointer;}
		.imageView {transition: transform 0.3s ease-in-out; }
		.imageView:hover {transform: scale(5.5);}
		.miLvs{ padding-left:13px;padding-right:13px;border-radius:none;}
        .text-center{text-align:center;}
		.table >thead >tr >th:last-child.sorting{background-image: none!important;}
		table >thead >tr >th:last-child.sorting_asc{background-image: none!important;}
		table >thead >tr >th:last-child.sorting_desc{background-image: none!important;}

		</style>
