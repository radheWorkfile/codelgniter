<?php
defined('BASEPATH') OR exit('Can we play bubu together ?');
    # Basic Setting Details
    $config['owner_name'] = "Rashmi Kant Singh";
    $config['company_name'] = "Real time Attendance System";
	$config['software'] = "Attendance Management System";
    $config['mobile_number'] = "9162167324";
    $config['email'] = "info@geswa.com";
    $config['address'] = "Bhagwat Nagar Patna";
    $config['logo_dark'] = "uploads/company/Logo.png";
    $config['logo_sm'] = "uploads/company/White-Logo.png";
    $config['logo_light'] = "uploads/company/whiteLogo_123.png";
    $config['logo_sm_light'] = "uploads/company/Favicon.png";
	
	$config['license_key'] = "677b0e74a4147b2fe56a75b66b9e2236";//9D2O-T13X-5A0W-39WQ-0JN8
	$config['is_valid'] = "validate";
	$config['is_expiry'] ="MTc1ODgyNDk5OQ==";//md5(base64_encode('25-09-2024 23:59:59'))//     MTY5NTY2NjU5OQ==
	$config['is_check'] =strtotime(date('d-m-Y H:i:s'));
	//md5(base64_encode('amit'));
    $config['get_state'] = "63";
    $config['district'] = "88";
    $config['zipCode'] = "800007";
    $config['cRegistration'] = "BR0193458997";
    $config['cPanNu'] = "BKMPK4221L";
    $config['cGstNu'] = "10BKMPK4221L";
    $config['compUrl'] = "http://test.camwel.org/attendance/";