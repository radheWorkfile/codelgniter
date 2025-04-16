<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        ($this->session->userdata('mem_id') == '') ? redirect(base_url(), 'refresh') : ''; //$this->session->userdata('user_id') != '')
        $this->logID = $this->session->userdata['mem_id'];
        error_reporting(0);
    }

    public function index($type = null)
    {   
        if($type === 'register'){ 
            $this->form_validation->set_rules('newNname', 'Name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('newEmail', 'Email id', 'trim|required|xss_clean|valid_email');
            $this->form_validation->set_rules('newMobile', 'Mobile number', 'trim|required|xss_clean|numeric|max_length[10]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
            if ($this->form_validation->run() == TRUE) {
                $value = $this->input->post();
                $getID = rand(100000, 99999) . rand(100000, 99999);
                $insertArr = array(
                    'guest_id' => $getID,
                    'name' => $value['newNname'],
                    'email_id' => $value['newEmail'],
                    'mobile_number' => $value['newMobile'],
                    'password' => md5($value['password']),
                    'show_password' => $value['password'],
                    'create_date' => date('Y-m-d H:i:s'),
                    'created_by_user_type_id' => $value['oldLogMemId'],
                );
                if ($this->common->save_data('guest_member', $insertArr)) {
                    $msg = array(' Thank You! you have successfully update your details');
                    $data = array('adClass' => 'tSuccess', 'msg' => $msg, 'icon' => '<i class="fa-regular fa-circle-check"></i>');
                    redirect(base_url('site/sign_up'));
                } else {
                    $msg = array('Oops it seems error.please refresh you page.');
                    $data = array('adClass' => 'tWarning', 'msg' => $msg, 'icon' => '<i class="fa-solid fa-circle-exclamation me-2"></i>');
                }
            }elseif($type === 'cusFeedback'){
                $data = $this->input->post();
                print_r($data);die;

            } else {
                $msg = array(
                    'name' => form_error('name'),
                    'mobile' => form_error('mobile'),
                    'email' => form_error('email'),
                    'password' => form_error('password'),
                );
                $data = array('adClass' => 'tDanger', 'msg' => $msg, 'icon' => '<i class="fa-solid fa-circle-exclamation me-2"></i>');
            }
            echo json_encode($data);

        }else{
            $sessionData = $this->session->userdata();
            $donationList = $this->db->select('*')->from('donate')->where(array('create_user_type_id' => $sessionData['mem_id']))->order_by('id', 'DESC')->get()->result_array();
            $ticketListing = $this->db->select('*')->from('ticket')->where(array('mem_id' => $sessionData['mem_id']))->order_by('id', 'ASC')->get()->result_array();
            $memberData = $this->db->select("*")->from("manage_member")->where('id', $sessionData['mem_id'])->get()->row_array();
            $donationAmount = $this->common->sum_all('amount', 'donate', array('create_user_type_id' => $sessionData['mem_id']));
            $todayDonationAmo = $this->common->sum_all('amount', 'donate', array('create_user_type_id' => $sessionData['mem_id'], 'created_at' => date('Y-m-d')));
            $lastTicId = $this->db->select('*')->from('ticket')->order_by('id', 'DESC') ->limit(1)->get()->row(); 
            $mem_id = $lastTicId->mem_id?$lastTicId->mem_id:'1';
            $lastTicMess = $this->db->select('*')->from('ticket_suggestions')->get()->result_array(); 
            $project = $this->db->select('*')->from('category_project')->where('status',1)->order_by('id','DESC')->get()->result_array(); 
            $program = $this->db->select('*')->from('category_program')->where('status',1)->order_by('id','DESC')->get()->result_array(); 
            $data = [
                'title' => 'Dashboard',
                'breadcrums'        => 'Dashboard Member',
                'MemberDet'         => $memberData,
                'doListMan'         => $donationList,
                'totalDoAmo'        => $donationAmount,
                'message'           => $lastTicMess,
                'ticketListing'     => $ticketListing,
                'todayDonAmo'       => $todayDonationAmo,
                'project'           => $project,
                'program'           => $program,
                'newRegisteration' => base_url('member/dashboard/index/register'),
            ];
            $this->load->view('base_member', $data);
        }
    }


    public function create_feedback(){
        $value = $this->input->post();
        if (isset($value['feedMemId'], $value['user_name'], $value['user_mob'], $value['user_feedback'], $value['user_suggestion'])) {
        $data = array(
        'name'                      => $value['user_name'],
        'mobile'                    => $value['user_mob'], 
        'feedback'                  => $value['user_feedback'],
        'discription'               => $value['user_suggestion'],  
        'create_at'                 => date('Y-m-d'),
        'created_by_user_type_id'   => $value['feedMemId'],
        );
        if ($this->common->save_data('feedback', $data)) {
           redirect(site_url('member/dashboard/index/create_feedback'));
        } else {  return false; }
        } else { return 'Required fields are missing.'; }
    }
    
    public function id_card_download()
    {
        $this->load->view('front/id_card_download');
    }

    public function LogedMemDonation()  
	{    
		$uploaded_image = $this->upload_image('donation', 'previewImage');
        $getID = 'DAMO'.rand(100000, 999999);
		if($uploaded_image['icon'] === 'success') {
		$item = array(
		'image'                 => 	$uploaded_image['text'],         
        'donation_id'           =>  $getID,
		'name'                  => 	$this->input->post('name'), 
		'create_user_type_id'   => 	$this->input->post('logMemId'), 
		'mobile_no'             => 	$this->input->post('mobile_no'), 
		'email' 	            => 	$this->input->post('emailId'), 
		'amount'                =>  $this->input->post('donAmount'),
		'message'               =>  $this->input->post('message'),
		'created_at'            =>  date('Y-m-d'),
		'status'                =>  1,
		);
		//if ($this->db->insert('donate', $item)) 
        if ($this->common->save_data('donate', $item)){
		echo json_encode(array('status' => 'success', 'message' => 'Created successfully!'));
		return;
		} else {
		echo json_encode(array('status' => 'error', 'message' => 'Please try again later.'));
		return;
		}
		} else {
		echo json_encode(array('status' => 'error', 'message' => $uploaded_image['text']));
		return;
		}
	}

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

  
}
