<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        ($this->session->userdata('user_id') == '') ? redirect(base_url(), 'refresh') : ''; 
        $this->lgCat = $this->session->userdata['user_cate'];
        error_reporting(0);
    }


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

    public function profile()
    {
        $data = $this->db->select('*')->from('staff')->where('id',1)->get()->row();
        $return = array(
            'title' => 'Admin Panel',
            'isMember' => $data,
            'createAction' => base_url('administrator/dashboard/update_profile/'),
            'layout' => 'admin/profile.php',
            );
        $this->load->view('base', $return);
    }

    public function update_profile()
    {
        $this->form_validation->set_rules('frstName', 'First Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email_id', 'Email Id', 'trim|required|xss_clean|valid_email|is_unique[staff.email]');
        $this->form_validation->set_rules('mobileNu', 'Mobile No.', 'trim|required|xss_clean|numeric|max_length[10]');
        if ($this->form_validation->run() == TRUE) {
            $getRole = array('1' => 'statewise', '2' => 'districtwise', '3' => 'blockwise', '4' => 'panchayatwise', '5' => 'villagewise');
            $empLoc = $getRole[$post['empRole']];
            $post = $this->input->post();
            $insertArr = array(
                'father_name' => $post['frstName'],
                'email' => $post['email_id'],
                'contact_no' => $post['mobileNu'],
                'password' => md5($post['password']),
                'show_password' => $post['password'],
                'address' => $post['membrAddr'],
                'created_at' => date('Y-m-d'),
            );
            if ($this->common->update_data('staff', array('id' => 1), $insertArr)) {
                $msg = array(' Thank You! you have successfully update details');
                $data = array('addClas' => 'tSuccess', 'msg' => $msg, 'icon' => '<i class="fa-regular fa-circle-check"></i>', 'returnLoc' => base_url('administrator/member/' . $empLoc));
            } else {
                $msg = array('Oops it seems error.please refresh you page.');
                $data = array('addClas' => 'tWarning', 'msg' => $msg, 'icon' => '<i class="fa-solid fa-circle-exclamation me-2"></i>');
            }
        } else {
            $msg = array( 
                'frstName' => form_error('frstName'),
                 'email_id' => form_error('email_id'), 
                 'mobileNu' => form_error('mobileNu'), 
                 'empRole' => form_error('empRole'),
            );
            $data = array('addClas' => 'tst_danger', 'msg' => $msg, 'icon' => '<i class="pe-7s-sun bx-spin"></i>');
        }
        echo json_encode($data); 
    }
}
