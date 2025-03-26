<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Message extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        if ($this->login->check_session() == false) {
            redirect(site_url('site/admin'));
        }
        $this->load->library('pagination');
    }

    public function index()
    {
        $this->form_validation->set_rules('message', 'Enter Message', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['memberList'] = $this->db->select('id, name, phone')->from('member')->get()->result_array();
            $data['title']      = 'Update Message';
            $data['breadcrumb'] = 'Update Message';
            $data['layout']     = 'message/create_message.php';
            $this->load->view('admin/base', $data);
        }  else {
           
            $value = $this->input->post();
            $insert_data = array();  
            foreach ($value['multipleMem'] as $memberId) {
                $insert_data[] = array(
                    'mem_id' => $memberId,           
                    'message' => $value['message'],           
                    'created_at' => date('Y-m-d'),  
                    'status' => 1,                    
                );
                
            }
            if ($this->db->insert_batch('message', $insert_data)) {
                $this->session->set_flashdata('common_flash', '<div class="alert alert-success">Messages sent successfully to selected members.</div>');
                redirect('message');
            } else {
                $this->session->set_flashdata('common_flash', '<div class="alert alert-danger">Oops! Something went wrong. Please try again.</div>');
                redirect('message');
            }
            
            }
            
    }
    

   
}
