<?php 
    $total_paid_amount = 0;
            foreach ($paid_amounts_ids as $pAmo) {
            $amount_row = $this->db->select('amount')->from('realestate_payment')->where(array('id' => $pAmo->id,'status' => '2'))->get()->row();
            $total_paid_amount += $amount_row->amount;
        }
?>