<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller
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
        $this->basic->header(12,'View Slider');
        $data['slider_data']=$this->Query->select('*','slider','','',['ordering'=>'asc']);
        $this->load->view('Admin/Slider/Slider',$data);
        $this->basic->footer();
    }
    public function add_slider()
    {
        $this->basic->checklogin();
        $this->basic->header(11,'Add Slider');
        $this->load->view('Admin/Slider/Add_Slider'); 
        $this->basic->footer();
    }
    public function insert_slider()
    {
        $image ='';
        if($_FILES['image']['name'] != '')
        {
            $file_name = 'image';
            $file_path = 'Slider';
            $image = $this->basic->file_upload($file_path, $file_name);
        }
        $array = array('status' => $this->input->post('status'),
                       'ordering' => $this->input->post('ordering'),
                       'image'=>$image,
                      );
        $this->Query->insert('slider',$array);
        $this->session->set_flashdata('msg','Slider added Succesfully');
        redirect(base_url('Admin/Slider/add_slider'));
    }
    public function edit_slider($id)
    {  
        $this->basic->checklogin();
        $this->basic->header(12,'Edit Slider');
        $data['slider_data']=$this->Query->select('*','slider',['id'=>$id],'row');
        $this->load->view('Admin/Slider/Edit_Slider',$data);
        $this->basic->footer();
    }
    public function update_slider($id)
    {
        $image ='';
        if($_FILES['image']['name'] != '')
        {
            $file_name = 'image';
            $file_path = 'Slider';
            $image = $this->basic->file_upload($file_path, $file_name);
        }else{
            $image =$this->input->post('old_image');
        }
        $array = array('status' => $this->input->post('status'),
                       'ordering' => $this->input->post('ordering'),
                       'image'=>$image,
                      );
        if ($this->Query->update('slider',['id'=>$id],$array))
        {
            $this->session->set_flashdata('msg', 'Slider Update Successfull');
            redirect(base_url('Admin/Slider/'));
        }else{
            $this->session->set_flashdata('msg', 'Some Error occured ');
            redirect(base_url('Admin/Slider/'));
        }
    }
    public function delete_slider($id)
    {
        $this->Query->delete('slider',['id'=>$id]);
        redirect(base_url('Admin/Slider/'));
    }
}?>