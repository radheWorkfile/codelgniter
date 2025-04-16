<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$return = array(
            'title' => 'Manage Income',
            'breadcrums' => 'Create Income',
            'targetListItem' => base_url('administrator/accounting/income/incomeList'),
            'layout' => 'dashboard.php',
        );
        $this->load->view('admin/base', $return);
	}


    public function login($getAction = NULL)
	{
		if ($getAction == 'process') {
			$this->form_validation->set_rules('login_id', 'Login id', 'trim|required|xss_clean');
			$this->form_validation->set_rules('loginPassword', "Password", 'trim|required|xss_clean');
			if ($this->form_validation->run() == TRUE) {
				$post = $this->input->post();
				$result = $this->login_model->member_login($post['login_id'], $post['loginPassword']);
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
			$this->load->view('website/signin', $data);
		}
	}


	    public function logout()
	    {
		    $this->session->sess_destroy();
		    $data = array('title' => 'Login Panel', 'targetLogin' => base_url('site/login/process'));
		    $this->load->view('website/signin', $data);
	    }




}
