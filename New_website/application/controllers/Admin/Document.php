<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Document extends CI_Controller
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
        $this->basic->header(17,'View About');
        $data['about']=$this->Query->select('*','document','','row');
        $this->load->view('Admin/Document/Document',$data);
        $this->basic->footer();
    }
    public function edit_document($id)
    {  
        $this->basic->checklogin();
        $this->basic->header(17,'Edit About');
        $data['about']=$this->Query->select('*','document',['id'=>$id],'row');
        $this->load->view('Admin/Document/Edit_Document',$data);
        $this->basic->footer();
    }
    public function update_document($id)
    {
        $image ='';
        if($_FILES['image']['name'] != '')
        {
            $file_name = 'image';
            $file_path = 'Document';
            $image = $this->basic->file_upload($file_path, $file_name);
        }else{
            $image =$this->input->post('old_image');
        }
        $array = [
                'heading' => $this->input->post('heading'),
                'content' => $this->input->post('content'),
                  'image'=>$image
                 ];
        if ($this->Query->update('document',['id'=>$id],$array))
        {
            $this->session->set_flashdata('msg', 'Document Update Successfull');
            redirect(base_url('Admin/Document/'));
        }else{
            $this->session->set_flashdata('msg', 'Some Error occured ');
            redirect(base_url('Admin/Document/'));
        }
    }
}?>