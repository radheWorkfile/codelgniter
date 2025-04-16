<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        ($this->session->userdata('member_id') == '') ? redirect(base_url(), 'refresh') : ''; //$this->session->userdata('user_id') != '')
        $this->logID = $this->session->userdata['member_id'];
        error_reporting(0);
    }
  


    public function index()
    {
        $sessionData = $this->session->userdata();
        $guestData = $this->db->select("*")->from("guest_member")->where('guest_id', $sessionData['member_id'])->get()->row_array();
        $data = array_merge($sessionData, $guestData, [
            'title' => 'Dashboard',
            'breadcrums' => 'Dashboard Member',
            'MemberDet' => $guestData,
            'guest' => 'Yes',
        ]);
        $this->load->view('base_member', $data);
    }

    public function id_card_download()
    {
        $this->load->view('front/id_card_download');
    }

    public function LogedMemDonation()  
	{    
		$uploaded_image = $this->upload_image('donation', 'reciept_Img');
		if($uploaded_image['icon'] === 'success') {
		$item = array(
		'image'                 => 	$uploaded_image['text'],         
		'name'                  => 	$this->input->post('name'), 
		'create_user_type_id'   => 	$this->input->post('logMemId'), 
		'f_name'                => 	$this->input->post('f_name'), 
		'mobile_no'             => 	$this->input->post('mobile_no'), 
		'email' 	            => 	$this->input->post('email'), 
		'subject'               =>  $this->input->post('subject'), 
		'amount'                =>  $this->input->post('donAmount'),
		'address'               =>  $this->input->post('address'), 
		'message'               =>  $this->input->post('message')
		);
		if ($this->db->insert('donate', $item)) {
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
