    <!-- 1 => call base file  -->
    <!-- 2 => on hover image view  -->
    <!-- 3 => password increase one by one  -->


    <!-- full screen image on click by this class="actPrk" -->
    <style>
    .actPbrk { position: relative; display: inline-block; overflow: hidden; cursor: zoom-in; }
    .actPbrk img { transition: transform 0.3s ease; display: block; max-width: 100%; height: auto; }
    .actPbrk::after { content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.2); opacity: 0; transition: opacity 0.3s ease; z-index: 1; }
    .actPbrk:hover img { transform: scale(1.1); z-index: 2; }
    .actPbrk:hover::after { opacity: 1; }
    </style>
    <!-- -----------  full screen image on click -------- -->

    <!-- $getCurrentLi=$this->router->fetch_class().$this->router->fetch_method(); -->
    <li class="nav-sub-item <?php if($getCurrentLi=='inventoryproducts'){echo 'active';}?>">
    <a class="nav-sub-link <?php if($getCurrentLi=='inventoryproducts'){echo'active';}?>" href="<?php echo base_url('admin/inventory/products');?>">
    Products
    </a>
    </li>


    <?php if (!empty($layout) && trim($layout) !== ""){require_once($layout);} else { ?><?php } ?>
    public function page($actn){
    $layout['layout'] = "website/".$actn.".php";
    $this->load->view('base', $layout);
    }


    <?php $this->session->set_flashdata('flash-error','<div class="alert alert-danger">Successfully added....</div>');?>
    <?php echo $this->session->flashdata('flash-error');?>          
    $this->form_validation->set_rules('bioMtric', 'Bio Metric ID', 'trim|required|xss_clean|numeric|max_length[8] OR valid_email|match['password']|min_length[5]|max_length[12]|is_unique[users.email]');
    <?php echo form_error('email');?>


     success: function(data) 
     {
     if (data.icon == 'errorText') {
     if (data.text.email != "") {
     $("#errEmail").html(data.text.email).fadeIn().delay(3000).fadeOut();
     }
     if (data.text.mobile != "") {
     $("#errMobile").html(data.text.mobile).fadeIn().delay(3000).fadeOut();
     }
     } else if (data.icon == 'error') {
     $("#heading").hide();
     $("#getMass").html(data.text).show();
     } else {
     $("#heading").hide();
     $("#getMass").html(data.text).show();
     }


    <!-- *********************************************************************** -->
    <?php 
  // <!-- ---------- call base file --------------------------- -->
    
  if (!empty($layout) && trim($layout) !== "") { require_once($layout); } else { echo '<h1>Radhe Kumar</h1>'; } 

  $shortDescription = (mb_strlen($row->discription) > 15) ? mb_substr($row->discription, 0, 15) . '...': $row->discription;
  
  // ----------------------------- on hover image view ---------------------------
  .imageView {transition: transform 0.3s ease-in-out;cursor: pointer;}.imageView:hover {transform: scale(5.5);}
  $image= '<span><img src="' . base_url($row->banner) . '" alt="" class="imageView" style="height:2rem; border:1px solid #f2a6a6; border-radius:10%;"></span>';
  
  //------------------------------ password increase one by one ----------------------------
  $lastTicket = $this->db->select('id, ticket_id')->from('ticket')->order_by('id', 'DESC')->limit(1)->get()->row();
  if (!empty($lastTicket)) {
    $ticketId = 'TIC' . str_pad((int)substr($lastTicket->ticket_id, 3) + 1, 4, '0');
  } else {
    $ticketId = 'TIC1001';
  }
    

  ?>


    <!-- *********************************************************************** -->

