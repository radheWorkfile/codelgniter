<?php  


function upload_image($path, $name)
{
    $config['upload_path']   = './uploads/' . $path; 
    $config['allowed_types'] = 'jpg|png|jpeg';      
    $config['max_size']      = 2048;               
    $this->load->library('upload', $config);
    if ($this->upload->do_upload($name)) {
    $upload_data = $this->upload->data();
    $image_path = "uploads/" . $path . '/' . $upload_data['file_name'];
    return array('text' => $image_path, 'icon' => 'success');
    } else {
    return array('text' => $this->upload->display_errors(), 'icon' => 'error');
    }
}

public function register()
{
    
    $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
    $this->form_validation->set_rules('father_name', "Father's name", 'trim|required|xss_clean');
    $this->form_validation->set_rules('gender', 'Gender', 'trim|required|xss_clean');
    $this->form_validation->set_rules('dob', 'Date of birth', 'trim|required|xss_clean');
    $this->form_validation->set_rules('mobile', 'Mobile number', 'trim|required|xss_clean|numeric|max_length[10]');
    $this->form_validation->set_rules('email', 'Email id', 'trim|required|xss_clean|valid_email');
    $this->form_validation->set_rules('sector', 'Working sector', 'trim|required|xss_clean');
    $this->form_validation->set_rules('industries', 'Working industry', 'trim|required|xss_clean');
    $this->form_validation->set_rules('registration_address', 'Address', 'trim|required|xss_clean');
    $this->form_validation->set_rules('state', 'State', 'trim|required|xss_clean');
    $this->form_validation->set_rules('district', 'District', 'trim|required|xss_clean');
    $this->form_validation->set_rules('zipcode', 'Zipcode', 'trim|required|xss_clean|numeric|max_length[8]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
    $this->form_validation->set_rules('con_password', 'Confirm Password', 'trim|required|xss_clean|matches[password]');
    
    if ($this->form_validation->run() == TRUE) {
        $value = $this->input->post();
        $getID = rand(100000000, 999999999) . rand(1000000, 9999999);
        $insertArr = array(
            'guest_id' => $getID,
            'name' => $value['name'],  
            'father_name' => $value['father_name'],
            'gender' => $value['gender'],
            'date_of_birth' => date('Y-m-d', strtotime($value['dob'])),
            'mobile_number' => $value['mobile'],
            'email_id' => $value['email'],
            'job_section' => $value['sector'],
            'industries' => $value['industries'],
            'business_type' => $value['business_type'],
            'current_working_city' => $value['city'],
            'busi_profile_name' => $value['buss_name'],
            'address' => $value['registration_address'],
            'state_id' => $value['state'],
            'district_id' => $value['district'],
            'zipcode' => $value['zipcode'],
            'password' => md5($value['password']),
            'show_password' => $value['password'],
            'create_date' => date('Y-m-d H:i:s')
        );
		
        if ($value['sector'] == 4) {
            $insertArr['company_district'] = $value['comDis'];
            $insertArr['company_address'] = $value['comAddress'];
        } elseif ($value['sector'] == 5) {
            $insertArr['study_qualificat'] = $value['studentHQul'];
            $insertArr['study_field'] = $value['field_of_study'];
            $insertArr['company_district'] = $value['comDis'];
            $insertArr['company_address'] = $value['comAddress'];
        } else {
            $insertArr['company_name'] = $value['companyName'];
            $insertArr['emp_designation'] = $value['empDesignation'];
            $insertArr['company_district'] = $value['comDis'];
            $insertArr['company_address'] = $value['comAddress'];
        }
        if ($this->common->save_data('guest_member', $insertArr)) {
			$msg=$this->regSuccMess($value['name'],$value['father_name'],$value['email'],$value['mobile']);
			$msg = array(' Thank You! you have successfully update your details');
			$data = array(
				'adClass' => 'tSuccess', 
				'msg' => $msg,
				'status' => 'success', 
				'icon' => '<i class="fa-regular fa-circle-check"></i>',
				'name' => $value['name'],
				'father_name' => $value['father_name'],
				'email' => $value['email'],
				'mobile' => $value['mobile'],
				'targetLoc'=>base_url('site/sign_up')
			);
		} else {
			$msg = array('Oops, there seems to be an error. Please refresh your page.');
			$data = array(
				'adClass' => 'tWarning', 
				'msg' => $msg,
				'status' => 'error', 
				'icon' => '<i class="fa-solid fa-circle-exclamation me-2"></i>'
			);
		}
    } else {
        $msg = array(
            'name' => form_error('name'),
            'father_name' => form_error('father_name'),
            'gender' => form_error('gender'),
            'dob' => form_error('dob'),
            'mobile' => form_error('mobile'),
            'email' => form_error('email'),
            'sector' => form_error('sector'),
            'industries' => form_error('industries'),
            'registration_address' => form_error('registration_address'),
            'state' => form_error('state'),
            'district' => form_error('district'),
            'zipcode' => form_error('zipcode'),
            'password' => form_error('password'),
            'con_password' => form_error('con_password')
        );
        $data = array('adClass' => 'tDanger', 'msg' => $msg, 'icon' => '<i class="fa-solid fa-circle-exclamation me-2"></i>');
    }
    echo json_encode($data);
}


public function regSuccMess($name,$fatherName,$email,$mobileNo){
    $name = $name;
    $fatherName = $fatherName;
    $email = $email;
    $mobile = $mobileNo;

    $message = 'Welcome to KCCI! Join us, and success will follow as you leverage this platform for growth and opportunity.';

	$company_name = "KCCI";
	$support_email = "radhe.camwel@gmail.com";
	$mobile = "87097*****";
	$mobile_2 = "87097*****";

    $to = "radhe.camwel@gmail.com"; 
    $subject = "Enquiry From " . $company_name;

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "From: " . $company_name . " <" . $support_email . ">\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";

    $full_message = "
    <html><head><title>Enquiry Data</title>
    </head><body>
	<table>
        <tr><td>Name</td><td>: $name</td></tr>
        <tr><td>Father</td><td>: $fatherName</td></tr>
        <tr><td>Email</td><td>: $email</td></tr>
        <tr><td>Mobile</td><td>: $mobile</td></tr>
        <tr><td>Message</td><td>: $message</td></tr>
    </table>
	</body></html>";

    $user_subject = "Thank You $name";
    $user_headers = "From: " . $support_email . "\r\n";
    $user_message = "Dear $name,\n\nThank you for contacting " . $company_name . ".\nWe have received your query and will get back to you soon.\n\nBest regards,\n" . $company_name;

    if (mail($to, $subject, $full_message, $headers)) {
		mail($email, $user_subject, $user_message, $user_headers);
		$response = "
		<h3>Dear <span style='color:#e70780;'>$name</span>,</h3>
		<blockquote>
			<p>Welcome to KCCI! Your registration is successful, and you are now part of a community that empowers success.</p>
			<p>We believe in your growth, and together, we will achieve great things. You’re now equipped to take full advantage of the opportunities KCCI offers.</p>
			<p>For quick inquiries, feel free to <span style='color:#e70780;'>Call Us</span> at:</p>
			<span><i class='fas fa-phone-alt px-2'></i>+91 " . $mobile . " / " . $mobile_2 . "</span></p>
			<p>Thank you for joining us! We look forward to seeing you thrive with KCCI.</p>
		</blockquote>";
	} else {
		$response = "
		<h3>Dear <span style='color:#e70780;'>$name</span>,</h3>
		<blockquote>
			<p>Something went wrong. It seems there was an issue while processing your registration.<br/>
			For quick inquiries, please don't hesitate to <span style='color:#e70780;'>Call Us</span> at:</p>
			<span><i class='fas fa-phone-alt px-2'></i>+91 " . $mobile . " / " . $mobile_2 . "</span>
			<p>Please try again, and we'll be happy to assist you!</p>
			<p>Thank you!</p>
		</blockquote>";
	}
	return $response;
   
}

	public function formhandler(){
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $mobile = $this->input->post('mobile');
    $message = $this->input->post('message');

	$company_name = "Ngo";
	$support_email = "radhekumar@gmail.com";
	$mobile = "+91 879711111";
	$mobile_2 = "+91 9999999999";

    $to = "NGO@example.com"; 
    $subject = "Enquiry From " . $company_name;

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "From: " . config_item('company_name') . " <" . $support_email . ">\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";

    $full_message = "
    <html>
    <head>
        <title>Enquiry Data</title>
    </head>
    <body>
        <table>
            <tr><td>Name</td><td>: $name</td></tr>
            <tr><td>Email</td><td>: $email</td></tr>
            <tr><td>Mobile</td><td>: $mobile</td></tr>
            <tr><td>Message</td><td>: $message</td></tr>
        </table>
    </body>
    </html>";

    $user_subject = "Thank You $name";
    $user_headers = "From: " . $support_email . "\r\n";
    $user_message = "Dear $name,\n\nThank you for contacting " . $company_name . ".\nWe have received your query and will get back to you soon.\n\nBest regards,\n" . $company_name;

    if (mail($to, $subject, $full_message, $headers)) {
        mail($email, $user_subject, $user_message, $user_headers);

        $response = "
        <h3>Dear <span style='color:#e70780;'>$name</span>,</h3>
        <blockquote>
            <p>We have received your query. We will contact you soon.<br/>
            For quick enquiries, <span style='color:#e70780;'>Call Us</span> at:
            <span><i class='fas fa-phone-alt px-2'></i>+91 " . $mobile . " / " . $mobile_2 . "</span></p>
            <p>Thank You!</p>
        </blockquote>";
    } else {
        $response = "
        <h3>Dear <span style='color:#e70780;'>$name</span>,</h3>
        <blockquote>
            <p>Something went wrong. It seems like the internet is not working well.<br/>
            For quick enquiries, <span style='color:#e70780;'>Call Us</span> at:
            <span><i class='fas fa-phone-alt px-2'></i>+91 " . $mobile . " / " . $mobile_2 . "</span></p>
            <p>Please try again!</p>
            <p>Thank You!</p>
        </blockquote>";
    }
    $data['response'] = $response;
	$this->load->view('front/thanku',$data);
}

public function login($getAction = NULL)
{
    if ($getAction == 'process') 
    {
        $this->form_validation->set_rules('login_id', 'Login id', 'trim|required|xss_clean');
        $this->form_validation->set_rules('loginPassword', "Password", 'trim|required|xss_clean');
        if ($this->form_validation->run() == TRUE) {
            $post = $this->input->post();
            $result = $this->login_model->member_login($post['login_id'], $post['loginPassword']);
            //$count = count($result);
            /*print_r($result);
            echo '<br>';
            echo $this->db->last_query();
        exit;*/
            if ($result) 
            {
                if($result->status=='Active') {
                    $system_configs = $this->login_model->system_config();
                    $this->setUserLog($result->email_id, 'member');
                    $sessiondata = array(
                        '_USER_AGENT' => $_SERVER['HTTP_USER_AGENT'],
                        '_USER_ACCEPT' => $_SERVER['HTTP_ACCEPT'],
                        '_USER_ACCEPT_ENCODING' => $_SERVER['HTTP_ACCEPT_ENCODING'],
                        '_USER_ACCEPT_LANG' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
                        '_USER_LOOSE_IP' => long2ip(ip2long($_SERVER['REMOTE_ADDR']) & ip2long("255.255.0.0")),
                        'REPO_SESSION' => TRUE,
                        'SESSION_START_TIME' => time(),
                        '_USER_LAST_ACTIVITY' => time(),
                        'mem_type' =>'mem',
                        'mem_id' => $result->id,
                        'mem_name' => $result->name,
                        'memCode' => $result->member_id,
                        'mem_email' => $result->email_id,
                        'mobile_number' => $result->mobile_number,
                        'address' => $result->address,
                        'busi_profile_name' => $result->busi_profile_name,
                        'photo' => $result->profile_image,
                        'company_name' => $system_configs[0]['company_name'],
                        'company_address' => $system_configs[0]['company_address'],
                        'company_url' => $system_configs[0]['company_url'],
                        'system_session_timeout' => $system_configs[0]['session_timeout'],
                        'system_inactive_timeout' => $system_configs[0]['inactive_timeout'],
                        'system_max_filesize' => $system_configs[0]['max_file_size'],
                        'system_allowed_file_types' => $system_configs[0]['allowed_file_types'],
                        'system_error_reporting' => $system_configs[0]['error_reporting'],
                        'is_logged_in' => true
                    );
                    $this->session->set_userdata($sessiondata);
                    if ($sessiondata['mem_id'] != '') { // && ($sessiondata['user_cate'] == 1)
                        //redirect(base_url('administrator/dashboard'), 'refresh');
                        $data = array('adClass' => 'softArena', 'targetLog' => base_url('member/dashboard'));
                    } /*elseif ($sessiondata['user_id'] != '' && ($sessiondata['user_cate'] == 2)) {
                        redirect('' . base_url() . 'entry/entry', 'refresh');
                    } elseif ($sessiondata['user_id'] != '' && ($sessiondata['user_cate'] == 3)) {
                        redirect('' . base_url() . 'kata/dashboard', 'refresh');
                    } elseif ($sessiondata['user_id'] != '' && ($sessiondata['user_cate'] == 4)) {
                        redirect('' . base_url() . 'accountant/dashboard', 'refresh');
                    } */ else {
                        //redirect(base_url('site/login?msg=invalid'));
                        $data = array('adClass' => 'softArena', 'targetLog' => base_url('site/login?msg=invalid'));
                    }
                } 
                else if($result->status=='guest') 
                {
                    $system_configs = $this->login_model->system_config();
                    $this->setUserLog($result->email_id, 'member');
                    $sessiondata = array(
                        '_USER_AGENT' => $_SERVER['HTTP_USER_AGENT'],
                        '_USER_ACCEPT' => $_SERVER['HTTP_ACCEPT'],
                        '_USER_ACCEPT_ENCODING' => $_SERVER['HTTP_ACCEPT_ENCODING'],
                        '_USER_ACCEPT_LANG' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
                        '_USER_LOOSE_IP' => long2ip(ip2long($_SERVER['REMOTE_ADDR']) & ip2long("255.255.0.0")),
                        'REPO_SESSION' => TRUE,
                        'SESSION_START_TIME' => time(),
                        '_USER_LAST_ACTIVITY' => time(),
                        'mem_type' =>'guest',
                        'id' => $result->id,
                        'name' => $result->name,
                        'member_id' => $result->member_id,
                        'email_id' => $result->email_id,
                        'status' => $result->mobile_number,
                        'photo' => $result->profile_image,
                        'company_name' => $system_configs[0]['company_name'],
                        'company_address' => $system_configs[0]['company_address'],
                        'company_url' => $system_configs[0]['company_url'],
                        'system_session_timeout' => $system_configs[0]['session_timeout'],
                        'system_inactive_timeout' => $system_configs[0]['inactive_timeout'],
                        'system_max_filesize' => $system_configs[0]['max_file_size'],
                        'system_allowed_file_types' => $system_configs[0]['allowed_file_types'],
                        'system_error_reporting' => $system_configs[0]['error_reporting'],
                        'is_logged_in' => true
                    );
                    // member_id
                    $this->session->set_userdata($sessiondata);
                    if ($sessiondata['member_id'] != '') { 
                        $data = array('adClass' => 'softArena', 'targetLog' => base_url('guest/dashboard'));
                    } else {
                        $data = array('adClass' => 'softArena', 'targetLog' => base_url('site/login?msg=invalid'));
                    }
                }
                else {
                    //redirect(base_url('site/login?msg=impassable'));
                    $data = array('adClass' => 'softArena', 'targetLog' => base_url('site/login?msg=impassable'));
                }
            } else {
                //redirect(base_url('site/login?msg=invalid'));
                $data = array('adClass' => 'softArena', 'targetLog' => base_url('site/login?msg=invalid'));
            }
        } else {
            $msg = array('login_id' => form_error('login_id'), 'loginPassword' => form_error('loginPassword'));
            $data = array('adClass' => 'tDanger', 'msg' => $msg, 'icon' => '<i class="fa-solid fa-circle-exclamation me-2"></i>');
        }
        echo json_encode($data);
    } else {
        $data = array('targetLogin' => base_url('site/login/process'));
        $this->load->view('front/sign_in', $data);
        //$this->load->view('front/dashboard');
    }
}

?>