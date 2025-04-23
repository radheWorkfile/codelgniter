<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        ($this->session->userdata('user_id') == '') ? redirect(base_url(), 'refresh') : ''; 
        $this->logID = $this->session->userdata['user_id'];
        error_reporting(0);
    }

    public function index()
    {
        $return = array(
            'title' => 'Employee Dashboard',
            'breadcrums' => 'Employee Dashboard',
            'targetListItem' => base_url('administrator/accounting/income/incomeList'),
            'layout' => 'dashboard.php',
        );
        $this->load->view('employee/base', $return);
    }

   

     
    

  
}
