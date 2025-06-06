<?php 

	public function register() 
	{

		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email id', 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('phone', 'Mobile number', 'trim|required|xss_clean|numeric|max_length[10]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		if ($this->form_validation->run() == TRUE) {
			$value = $this->input->post();
			$getID = rand(100000, 99999) . rand(100000, 99999);
			$insertArr = array(
				'guest_id' => $getID,
				'name' => $value['name'],
				'email_id' => $value['email'],
				'mobile_number' => $value['phone'],
				'password' => md5($value['password']),
				'show_password' => $value['password'],
				'create_date' => date('Y-m-d H:i:s'),
			);
			if ($this->common->save_data('guest_member', $insertArr)) {

				$getSuccMess = $this->RegSuccessMess($value['name'],$value['phone'],$value['email'],$value['password']);
				$msg = array('Thank you! Your registration successfully completed.');
				$data = array('getSuccMess' => $getSuccMess, 'adClass' => 'tSuccess', 'msg' => $msg, 'icon' => '<i class="fa-regular fa-circle-check"></i>','targetLoc'=>base_url('site/sign_up'));

			} else {
				$msg = array('Oops it seems error.please refresh you page.');
				$data = array('adClass' => 'tWarning', 'msg' => $msg, 'icon' => '<i class="fa-solid fa-circle-exclamation me-2"></i>');
			}
		} else {
			$msg = array(
				'name' => form_error('name'),
				'phone' => form_error('phone'),
				'email' => form_error('email'),
				'password' => form_error('password'),
			);
			$data = array('adClass' => 'tDanger', 'msg' => $msg, 'icon' => '<i class="fa-solid fa-circle-exclamation me-2"></i>');
		}
		echo json_encode($data);
	}




	public function RegSuccessMess($userName, $userMobile, $userEmail, $userPassword){

		$name = $userName;$email = $userEmail;  $mobile = $userMobile; $message = $userPassword; 
	
		$company_name = config_item('companyName');
		$support_email = config_item('email');
		$mobile_1 =  config_item('mobile_number_1');
		$mobile_2 = config_item('mobile_number_2');
	
		$to = config_item('email');
		$subject = "Enquiry From " . $company_name;
	
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "From: " . $company_name . " <" . $support_email . ">\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	
		$full_message = "
		<html>
		<head><title>Registration Successfully.</title></head>
		<body>
			<table>
				<tr><td>Name</td><td>: $name</td></tr>
				<tr><td>Email</td><td>: $email</td></tr>
				<tr><td>Mobile</td><td>: $mobile</td></tr>
				<tr><td>Message</td><td>: $message</td></tr>
			</table>
		</body></html>";
	
		$user_subject = "Thank You $name";
		$user_headers = "From: " . $support_email . "\r\n";
		$user_message = "Dear $name,\n\nThank you for registering with " . $company_name . ".\nWe have received your registration and will get back to you soon.\n\nBest regards,\n" . $company_name;
		if (mail($to, $subject, $full_message, $headers)) {
			mail($email, $user_subject, $user_message, $user_headers);
	
			$response = "
			<h3>Dear <span style='color:#e70780;'>$name</span>,</h3>
			<blockquote>
				<p>We have received your registration. We will contact you soon.<br/>
				For quick enquiries, <span style='color:#e70780;'>Call Us</span> at:
				<span><i class='fas fa-phone-alt px-2'></i>+91 " . $mobile_1 . " / " . $mobile_2 . "</span></p>
				<p>Thank You!</p>
			</blockquote>";
		} else {
			$response = "
			<h3>Dear <span style='color:#e70780;'>$name</span>,</h3>
			<blockquote>
				<p>Something went wrong. It seems like the internet is not working well.<br/>
				For quick enquiries, <span style='color:#e70780;'>Call Us</span> at:
				<span><i class='fas fa-phone-alt px-2'></i>+91 " . $mobile_1 . " / " . $mobile_2 . "</span></p>
				<p>Please try again!</p>
				<p>Thank You!</p>
			</blockquote>";
		}
	
		return $response;
	}

?>