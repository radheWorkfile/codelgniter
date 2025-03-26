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
}
