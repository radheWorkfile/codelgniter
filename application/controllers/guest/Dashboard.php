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
            'layout' => 'dashboard.php',
        ]);
        $this->load->view('guest/base', $data);
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
