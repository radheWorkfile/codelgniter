<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        ($this->session->userdata('user_id') == '') ? redirect(base_url(), 'refresh') : ''; 
        $this->lgCat = $this->session->userdata('user_cate');
        $this->load->model(array('Common_model' => 'common'));

        error_reporting(0);
    }




    public function index($action = NULL, $getId = NULL)
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
            'created_at'    =>  date('Y-m-d'),
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

        }elseif($action === 'edit_emp'){
            $whereCon = json_decode(base64_decode(urldecode($getId)));
            $emp_info = $this->db->select('id,name,email,fname,mobile,address,dob,status,created_at')->from('employee')->where('id',$whereCon->id)->get()->row();
             $data = array(
                'title' => 'Edit Employee',
                'workingPro' => 'Edit Employee',
                'emp_info' => $emp_info,
                'targetItem' => base_url('admin/employee/index/update_emp'), 
                'breadcrumb' => 'Manage Employee',
                'layout' => 'employee/edit_emp.php',
            );
            $this->load->view('admin/base', $data);
           }elseif($action === 'update_emp'){
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
            'created_at'    =>  date('Y-m-d'),
            );

             $this->db->where('id',$inp['emp_id'])->update('employee', $employee);
             $msgText = 'Thank you! You have updated successfully';
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

         }elseif($action === 'view_emp'){
            
             $whereCon = json_decode(base64_decode(urldecode($getId)));
            $emp_info = $this->db->select('id,name,email,fname,mobile,address,dob,status,created_at')->from('employee')->where('id',$whereCon->id)->get()->row();
             $data = array(
                'title' => 'View Details',
                'edit_details' => base_url('admin/employee/index/edit_emp/' . urlencode(base64_encode(json_encode(array('action' => 'editDetails', 'id' => $getId))))),
                'workingPro' => 'View Details',
                'emp_info' => $emp_info,
                'breadcrumb' => 'View Employee',
                'layout' => 'employee/view_emp.php',
            );
            $this->load->view('admin/base', $data);
           
          }elseif($action === 'certificate'){
            $whereCon = json_decode(base64_decode(urldecode($getId)));
            $getIDCardDetails = $this->common->getRowData('employee', 'id', $whereCon->id);
            $data['getIDCardDetails'] = $getIDCardDetails;
            $data['title'] = 'Employee Certificate';
            $this->load->view('admin/employee/certificate', $data);
          }else {
            $data = array(
                'title' => 'Employee List',
                'workingPro' => 'Add Employee',
                'breadcrumb' => 'Manage Employee',
                'targetItem' => base_url('admin/employee/index/create'), 
                'targetLIstItem' => base_url('admin/employee/showLIst'), 
                'actBakc' => base_url('admin/employee'), 
                'layout' => 'employee/create.php',
            );
            $this->load->view('admin/base', $data);
        }
    }


    public function showLIst()
    {
        $post_data = $this->input->post();
                $return['data'] = array();
                $i = $post_data['start'] + 1;
                $record = $this->common->showLIst_model($post_data);
                 $emp_id = 1001;
                foreach ($record as $row) {
                   
$login_branch = base_url('admin/employee/view_emp/' . urlencode(base64_encode(json_encode(array('action' => 'editDetails', 'id' => $row->id)))));



$viewURL = base_url('admin/employee/index/view_emp/' . urlencode(base64_encode(json_encode([
    'action' => 'editDetails',
    'id' => $row->id
]))));

$editURL = base_url('admin/employee/index/edit_emp/' . urlencode(base64_encode(json_encode([
    'action' => 'editDetails',
    'id' => $row->id
]))));



$id_card = '<a href="javascript:void(0);" class="btn btn-warning btn-sm mx-1 shadow btn-xs sharp actPIdCard" onclick="print_id_card(this, ' . $row->id . ')" title="Print ID Card"> 
    <i class="fas fa-id-card text-white"></i>
</a>';

$certificate = '<a href="javascript:void(0);" class="btn btn-success btn-sm mx-1 shadow btn-xs sharp actPCertificate" onclick="print_certificate(this, ' . $row->id . ')" title="Print Certificate"> 
    <i class="fas fa-certificate text-white"></i> 
</a>';


$isDel = '<a href="javascript:void(0);" 
    class="btn btn-danger btn-sm mx-1 shadow btn-xs sharp open-delete-modal" 
    data-id="'. $row->id .'" 
    data-table="employee"
    data-url="' . base_url('admin/employee/accessPerRemove') . '" 
    data-bs-toggle="modal" 
    data-bs-target="#actPdelete" 
    title="Delete Record">
    <i class="fas fa-trash text-white delete-icon"></i>
    <i class="fas fa-sync-alt text-white refresh-icon d-none actProtate"></i>
</a>';



$actionBtn = '
<div class="d-flex justify-content-center align-items-center flex-nowrap">
    <a href="' . $login_branch . '" class="btn btn-dark btn-sm mx-1 shadow btn-xs sharp" title="Login"><i class="fas fa-power-off text-white"></i></a>
    ' . $id_card . '
    ' . $certificate . '
     <a href="javascript:void(0);" class="btn btn-success btn-sm mx-1 shadow btn-xs sharp" onclick="rotateAndRedirectView(this, \'' . $viewURL . '\')" title="View">
        <i class="fas fa-eye text-white"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-primary btn-sm mx-1 shadow btn-xs sharp" onclick="rotateAndRedirectEdit(this, \'' . $editURL . '\')" title="Edit">
        <i class="fas fa-edit text-white"></i>
    </a>
    ' . $isDel . '
</div>';




                    $status_aaa = ($row->status == 1) ? 
                   '<a href="javascript:void(0);" class="btn btn-success btn-sm mx-1 shadow btn-xs sharp" data-toggle="modal" data-target="#actPstatus" onclick="openStatusModal('. $row->id .')" title="Print ID Card"><i class="fas fa-power-off text-white"></i> Active </a>':
                   '<a href="javascript:void(0);" class="btn btn-danger btn-sm mx-1 shadow btn-xs sharp" data-toggle="modal" data-target="#actPstatus" onclick="openStatusModal('. $row->id .')" title="Print ID Card"><i class="fas fa-power-off text-white"></i> Deactive</a>';

      

        $status = ($row->status == 1) ?
        '<a href="javascript:void(0);" onclick="return rotateAndRedirect(this, \'' . base_url('admin/employee_1111/status/' . $row->id) . '\', \'' . base_url('admin/employee/changeStatus') . '\')" class="btn btn-success btn-sm mx-1 shadow btn-xs sharp" title="Change Status">
        <i class="fas fa-power-off text-white"></i> Active
        </a>' :
        '<a href="javascript:void(0);" onclick="return rotateAndRedirect(this, \'' . base_url('admin/employee_1111/status/' . $row->id) . '\', \'' . base_url('admin/employee/changeStatus') . '\')" class="btn btn-danger btn-sm mx-1 shadow btn-xs sharp" title="Change Status">
        <i class="fas fa-power-off text-white"></i> Deactive
        </a>';






                    $shortText = (mb_strlen($row->e_text) > 20) ? mb_substr($row->e_text, 0, 20) . '...' : $row->e_text;
                    $image= '<span><img src="' . base_url($row->e_images) . '" alt="" style="height:2rem; border:1px solid #f2a6a6; border-radius:10%;"></span>';

                    $amount = $row->amount ? '<span class="success">₹ ' . $row->amount . '</span>' : '<span class="text-danger">N/A</span>';
                    $image= '<span><img src="' . base_url($row->image) . '" class="imageView" alt="" style="height:2rem; border:1px solid #f2a6a6; border-radius:10%;"></span>';
                    $return['data'][] = array(
                          $i,
                          'EMP'.$emp_id++ ,
                          $row->name,
                          $row->fname,
                          $row->mobile,
                          $row->email,
                          $status,
                          $actionBtn
                    );
                    $i++;
                }
        
                $return['recordsTotal'] = $this->common->total_count();
                $return['recordsFiltered'] = $this->common->total_filter_count($post_data);
                echo json_encode($return);
    }


public function accessPerRemove() {
    $id = $this->input->post('id');
    $table = $this->input->post('table');
    $permission = $this->input->post('permission');

    $allowed_tables = ['employee', 'guest', 'members'];

    if (!$id || !$table || !in_array($table, $allowed_tables)) {
        echo json_encode(['status' => 'error', 'msg' => 'Invalid request']);
        return;
    }

    $record = $this->db->select('id, name')->from($table)->where('id', $id)->get()->row();

    if (!$record) {
        echo json_encode(['status' => 'error', 'msg' => 'Record not found']);
        return;
    }

    if ($permission === 'yes') {
        $this->db->where('id', $id)->delete($table);
        echo json_encode(['status' => 'success', 'data' => $record]);
    } else {
        echo json_encode(['status' => 'error', 'msg' => 'Permission denied. Try again later.']);
    }
}






public function certificate()
{
    if ($this->input->is_ajax_request()) {
        $getId = $this->input->post();
        $data['pribound'] = $this->common->showLIst_model($getId['id']);
        $this->load->view('admin/employee/certificate', $data);
    }
}  

public function id_card()
{
    if ($this->input->is_ajax_request()) {
        $getId = $this->input->post();
        $data['pribound'] = $this->common->showLIst_model($getId['id']);
        $this->load->view('admin/employee/id_card', $data);
    }
}
 







 
public function changeStatus()
{
    $data = $this->input->post();
    $this->db->where('id', $data['id']);
    $query = $this->db->get('employee');
    $row = $query->row();

    if ($row) {
        $newStatus = ($row->status == 1) ? 0 : 1;
        $this->db->where('id', $data['id']);
        $this->db->update('employee', ['status' => $newStatus]);

        echo json_encode([
            'status' => 'success',
            'newStatus' => $newStatus
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Employee not found'
        ]);
    }
}






	 



}
