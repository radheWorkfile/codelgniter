<?php
 $isTeam=$this->common->get_data('mapped_team',array('status'=>'Active','head_id'=>$this->session->userdata('mim_id')),'*');
 $getCurrentLi=$this->router->fetch_class().$this->router->fetch_method();
 $getCurrentPranet=$this->router->fetch_class();
 $getCurModeLi=$getCurrentLi.$this->uri->segment(4);
 $theusrCat=$this->session->userdata('user_cate');
 ?>




<?php 
/* validation for ip using php section start form here.  */
$this->form_validation->set_rules('machineIpAddr','Machine IP Address','trim|required|xss_clean|callback_valid_ip');
    public function valid_ip($ip) {
		if (preg_match('/^192\.168\.1\.(25[0-5]|2[0-4][0-9]|1\d\d|[1-9]?\d)$/', $ip)) {
			return true; // Valid IP
		} else {
			$this->form_validation->set_message('valid_ip', 'The field must be in the format 192.168.1.xxx.');
			return false; // Invalid IP
		}
	}
/* validation for ip using php section end form here.  */
?>