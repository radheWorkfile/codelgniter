<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        ($this->session->userdata('user_id') == '') ? redirect(base_url(), 'refresh') : ''; 
        $this->lgCat = $this->session->userdata['user_cate'];
        error_reporting(0);
    }




    public function index($action = NULL)
    {
        if ($action === 'create') {
            $this->form_validation->set_rules('name',   'Name',       'trim|required|xss_clean');
            $this->form_validation->set_rules('fname',  'Father Name','trim|required|xss_clean');
            $this->form_validation->set_rules('mobile', 'Mobile',     'trim|required|xss_clean');
            $this->form_validation->set_rules('email',  'Email',      'trim|required|xss_clean');
            $this->form_validation->set_rules('dob',    'Date of Birth','trim|required|xss_clean');
            $this->form_validation->set_rules('address','Address',    'trim|required|xss_clean');

            if ($this->form_validation->run() == TRUE) {
            $inp = $this->input->post();

            $employee = array(
            'name'       =>     $inp['name'],
            'fname'      =>     $inp['fname'],
            'mobile'     =>     $inp['mobile'],
            'email'      =>     $inp['email'],
            'dob'        =>     $inp['dob'],
            'address'    =>     $inp['address'],
            );

             $this->db->insert('employee', $employee);
             $msgText = 'Thank you! You have successfully created new';
             $data = array( 'addClas' => 'tst_success','msg' => $msgText,'icon' => '<i class="ti-check-box"></i>','emp' => $employee );
             } else {
             $msg = array(
             'name' => form_error('name'),
             'fname' => form_error('fname'),
             'mobile' => form_error('mobile'),
             'email' => form_error('email'),
             'dob' => form_error('dob'),
             'address' => form_error('address'),
             ); $data = array( 'addClas' => 'tst_danger','msg' => $msg,'icon' => '<i class="pe-7s-sun bx-spin"></i>');
             } echo json_encode($data);

        } else {
            $data = array(
                'title' => 'Create Employee',
                'actPfList' => array('showList,showForm'),
                'targetItem' => 'targetItem',
                'createAction' => base_url('admin/employee/index/create'), 
                'breadecrumb' => 'Create Employee',
                'layout' => 'employee/create.php',
            );
            $this->load->view('admin/base', $data);
        }
    }
    

	 



}
