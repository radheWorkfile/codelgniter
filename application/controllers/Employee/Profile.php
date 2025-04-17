<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		($this->session->userdata('mem_id') == '') ? redirect(base_url(), 'refresh') : '';
		$this->logID = $this->session->userdata['mem_id'];
		error_reporting(0);
	}
	public function index()
	{
		echo "Hello Profile";die;
	}



}
