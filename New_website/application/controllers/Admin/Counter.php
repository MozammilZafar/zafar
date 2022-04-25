<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Counter extends CI_Controller
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
        $this->basic->header(20,'View Counter');
        $data['counter']=$this->Query->select('*','counter','','',['id'=>'desc']);
        $this->load->view('Admin/Counter/Counter',$data);
        $this->basic->footer();
    }
    public function edit_counter($id)
    {  
        $this->basic->checklogin();
        $this->basic->header(20,'Edit E-Papaer');
        $data['counter']=$this->Query->select('*','counter',['id'=>$id],'row');
        $this->load->view('Admin/Counter/Edit_Counter',$data);
        $this->basic->footer();
    }
    public function update_counter($id)
    {
        $array = ['title' => $this->input->post('title'),
                  'count' => $this->input->post('counter')
                 ];
        if ($this->Query->update('counter',['id'=>$id],$array))
        {
            $this->session->set_flashdata('msg', 'Counter Update Successfull');
            redirect(base_url('Admin/Counter/'));
        }else{
            $this->session->set_flashdata('msg', 'Some Error occured ');
            redirect(base_url('Admin/Counter/'));
        }
    }
}?>