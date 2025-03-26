<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	
	public function index()
	{
		$return = array(
            'title' => 'Employee Management',
            'breadcrums' => 'Create Employee',
            'targetListItem' => base_url('admin/employee'),
            'layout' => 'employee/create.php',
        );
        $this->load->view('admin/base', $return);
	}



}
