.miBck a:hover{ background-color:#645bca; color:#fff;}.miBck{ font-weight:600;text-transform: uppercase; float:right;margin-right: 10px;}.miBck a{ border:1px solid #645bca;padding: 8px 12px 8px 12px;border-radius: 5px;color: #645bca;font-weight: bold;}
.miLst{ font-weight:600;text-transform: uppercase;}.miLst i{ background-color: #645bca;padding: 10px;margin-right: 10px;border-radius: 20px;color: #fff;font-weight: bold;}.miHeader{padding:20px 15px 15px 15px;border-bottom:1px solid #cccece;margin:0px -10px 0px -10px;border-top-left-radius:5px;border-top-right-radius:5px;background-color: #fff;}.cardTtl{border:1px solid #cccece;padding:0px 0px 5px 0px;margin-bottom: 6rem;border-radius: 5px;/*background-color: #fff;*/border-bottom-right-radius:10px !important;border-bottom-left-radius:10px !important;}.card{ border-top-left-radius:0px;border-top-right-radius:0px; margin-bottom:-5px}.miSecn{ background-color:#645bca;margin: -15px 0px 15px 0px;padding: 10px;font-weight: 900;border-bottom: 1px solid #483ebd; color:#fff;}.miSecn i{ background-color:#fff; padding:5px; color:#645bca;border-radius: 10px;font-size: 10px;}.msp{padding: 8px 0px 0px 10px;}.miSlwdth4w{ width:87.32%}#empRadd{ height:75px;}
<div class="modal fade" id="unitModelSec">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title" id="attUser">Unit Details</h6>
                <span aria-label="Close" class="btn-close" data-bs-dismiss="modal" style="margin-right:-5px; cursor:pointer;">
               		 <i class="si si-close"></i>
                </span>
            </div>
            <div class="modal-body">
            	<div id="loggedDate"><?php echo date('d-M-Y');?></div>
              	<table class="table text-nowrap text-md-nowrap table-striped table-bordered table-hover mg-b-0"  id="daily_log_list">
                  <thead class="ami_tHeader">
                    <tr>
                      <th>S No.</th>
                      <th>Unit Id</th>
                      <th>Unit</th>
                     </tr>
                  </thead>
                  <tbody id="log_history_list">
                    <tr>
                      <td id="1.">&nbsp;1.</td>
                      <td id="item_unit_id">&nbsp;</td>
                      <td id="item_unit">&nbsp;</td>
                     </tr>
                  </tbody>
                </table>
            <div id="traceMap"></div>    
            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-outline-dark" data-bs-dismiss="modal" type="button"> <i class="fe fe-arrow-left"></i> Back </button>
            </div>
        </div>
    </div>
</div>