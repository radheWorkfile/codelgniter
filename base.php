    <!-- 1 => call base file  -->
    <!-- 2 => on hover image view  -->
    <!-- 3 => password increase one by one  -->

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

