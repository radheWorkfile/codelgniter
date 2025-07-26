<!-- target =>  data-bs-toggle="modal" data-bs-target="#exampleModal"  -->
<!-- Model Section start from  here by radhe -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal"><i class="fa fa-arrow-left"></i> Close</button>
        <button type="button" class="btn btn-outline-success"><i class="fas fa-save"></i> Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Model Section end -->



<!-- **********************************************  -->

 <a href="javascript:void(0)" data-id="<?php echo $e->project_block_id;?>" class="viewa_section"  data-toggle="modal"  data-target="#view_model" ><i class="fa fa-eye text-danger"></i></a>&emsp;
  $payment_satus = '<span class="btn bg-danger rounded-pill text-white"style="padding:0px 12px;font-size:12px;"> Un-paid </span>';


     <!-- Model section start from here by r@rk -->
  <div class="modal fade" id="view_model" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header position-relative">
          <button type="button" class="close position-absolute end-0 px-4" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> <i class="fa fa-home"></i> Booking Details </h4>
        </div>
        <div class="modal-body">
        <div id="property_details"></div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="fa fa-times"></i> Close </button>
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="fa fa-paper-plane"></i> Submit </button> -->
        </div>
      </div>
    </div>
  </div>
    <!-- Model section end here by r@rk -->

        <script>
    var base_url = "<?php echo base_url() ?>";
    $(document).on('click', ".viewa_section", function() {
        var id = $(this).data('id');  
        $.ajax({
            url: base_url + 'customer/property_details/'+id,
            type: 'post',
            data: {
                'id': id
            },
            success: function(data) {
                $("#property_details").html(data);
            }

        });
    });
    </script>


    public function property_details($block_id)
    {
       $cus_id = $this->session->customer_id;

        $customer = $this->db->select('id, userid, name, phone, email, adhar_no, pan_no,')->from('realestate_customer')->where('userid', $cus_id)->get()->row();

        $customer_id = $customer->id;

        $this->db->select('rb.*,rp.project_name,rp.status as pro_status')->from('realestate_project_block as rb');
        $this->db->where('rb.id', $block_id);
        $this->db->join('realestate_project as rp', 'rp.id=rb.project_id', 'left');
        $data['property'] = $this->db->get()->row();

        $paid_amounts_ids = $this->db->select('id,status,project_block_id')->from('realestate_payment')->where(array('project_block_id'=> $block_id,'status'=>2))->get()->result();

        $total_paid_amount = 0;
          foreach ($paid_amounts_ids as $pAmo) {
          $amount_row = $this->db->select('amount,status')->from('realestate_payment')->where(array('id' => $pAmo->id,'status' => '2'))->get()->row();
          $total_paid_amount += $amount_row->amount;
        }

        $data['amount'] = $this->db->select('gross_price,net_final_amount,net_amount')->from('realestate_customer_booking')->where('project_block_id',$block_id)->get()->row();

        $data['paid_amo'] = $total_paid_amount;

        $data['customer_id'] = $customer;

        $this->load->view('customer/booking/property_details', $data);

    }