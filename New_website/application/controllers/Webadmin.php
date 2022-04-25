<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webadmin extends CI_Controller
{
    public function __construct()
    {
         parent::__construct();
         $this->load->library('basic');
         $this->basic->loader();
         $this->basic->checklogin();
    }
    
    public function index()
    {
        $this->basic->checklogin();
        $this->basic->header(1,'Dashboard');
        $data['basic_details']=$this->Query->select('*','basic_details','','row');
        $this->load->view('Admin/DashBoard/DashBoard');
        $this->basic->footer();
    }
    public function logout()
    {
         $this->basic->logout();
    }    
}
?>