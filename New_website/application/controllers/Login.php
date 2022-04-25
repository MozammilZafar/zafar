<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->library('basic');
        $this->basic->loader();
    }
    function checklogin() 
    {
        if ($this->session->userdata('admin_user') != NULL && $this->session->userdata('admin_type') != NULL) 
        {
            redirect(base_url('Dashboard'));
        }
    }
    public function index() 
    {
        $this->checklogin();
        $data['msg'] = $this->session->flashdata('error');
        $data['basic_details'] = $this->Query->select('*','basic_details','','row');
        $this->load->view('Admin/Login/Login', $data);
    }
    public function verifylogin() 
    {
        $admin = $this->Query->select('*','admin',['username'=>$this->input->post('username'),'password'=>$this->input->post('password')],'count');
        if ($admin)
        {
            $chk = $this->Query->select('*','admin',['username'=>$this->input->post('username'),'password'=>$this->input->post('password')],'row');
            $this->session->set_userdata('admin_user', $chk->id);
            $this->session->set_userdata('admin_type', 'Admin');
            redirect(base_url('Webadmin'));
        } else{
            $this->session->set_flashdata('msg','Username or Password doesnot match');
            $this->session->unset_userdata('admin_user');
            $this->session->unset_userdata('admin_type');
            redirect($this->agent->referrer());
        }
    }
}
?>