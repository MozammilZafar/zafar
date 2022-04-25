<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller
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
        $this->basic->header(16,'View Services');
        $data['services']=$this->Query->select('*','services','','',['id'=>'desc']);
        $this->load->view('Admin/Services/Services',$data);
        $this->basic->footer();
    }
    public function edit_services($id)
    {  
        $this->basic->checklogin();
        $this->basic->header(16,'Edit Services');
        $data['services']=$this->Query->select('*','services',['id'=>$id],'row');
        $this->load->view('Admin/Services/Edit_Services',$data);
        $this->basic->footer();
    }
    public function update_services($id)
    {
         $image ='';
        if($_FILES['image']['name'] != '')
        {
            $file_name = 'image';
            $file_path = 'Services';
            $image = $this->basic->file_upload($file_path, $file_name);
        }else{
            $image =$this->input->post('old_image');
        }
        $array = array('title' => $this->input->post('title'),
                       'content' => $this->input->post('content'),
                       'image'=>$image,
                      );
        if ($this->Query->update('services',['id'=>$id],$array))
        {
            $this->session->set_flashdata('msg', 'Services Update Successfull');
            redirect(base_url('Admin/Services/'));
        }else{
            $this->session->set_flashdata('msg', 'Some Error occured ');
            redirect(base_url('Admin/Services/'));
        }
    }
}?>