<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller
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
        $this->basic->header(13,'View About');
        $data['about']=$this->Query->select('*','about','','row');
        $this->load->view('Admin/About/About',$data);
        $this->basic->footer();
    }
    public function edit_about($id)
    {  
        $this->basic->checklogin();
        $this->basic->header(13,'Edit About');
        $data['about']=$this->Query->select('*','about',['id'=>$id],'row');
        $this->load->view('Admin/About/Edit_About',$data);
        $this->basic->footer();
    }
    public function update_about($id)
    {
        $image ='';
        if($_FILES['image']['name'] != '')
        {
            $file_name = 'image';
             $file_path = 'About';
            $image = $this->basic->file_upload($file_path, $file_name);
        }else{
            $image =$this->input->post('old_image');
        }
        $array = ['content' => $this->input->post('content'),
                  'image'=>$image
                 ];
        if ($this->Query->update('about',['id'=>$id],$array))
        {
            $this->session->set_flashdata('msg', 'About Update Successfull');
            redirect(base_url('Admin/About/'));
        }else{
            $this->session->set_flashdata('msg', 'Some Error occured ');
            redirect(base_url('Admin/About/'));
        }
    }
}?>