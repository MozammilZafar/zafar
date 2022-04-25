<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basic_Details extends CI_Controller
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
        $this->basic->header(2,'Basic Details');
        $data['basic_details']=$this->Query->select('*','basic_details','','row');
        $this->load->view('Admin/DashBoard/Basic',$data);
        $this->basic->footer();
    }
    public function edit_basic()
    {
        $this->basic->checklogin();
        $this->basic->header(2,'Edit Basic Details');
        $data['basic']=$this->Query->select('*','basic_details','','row');
        $this->load->view('Admin/Basic/Edit_Basic',$data);
        $this->basic->footer();
    }
    public function update_basic()
    {
        if($this->Query->update('basic_details',['id'=>$this->input->post('pk')],[$this->input->post('name')=>$this->input->post('value')]))
        {
            echo true;
        }else{
            echo false;
        }
    }
    public function update_logo()
    {
        if($_FILES['image']['name'] != '')
        {
            $file_name = 'image';
            $file_path = 'Logo';
            $image = $this->basic->file_upload($file_path, $file_name);
        }elseif($_FILES['image']['name'] == '')
        {
                $image = $this->input->post('oldImage');
        }else{
             $image = '';
        }
        if($this->Query->update('basic_details',['id'=>$this->input->post('id')],[$this->input->post('column')=>$image]))
        {
            echo base_url($image);
        }else{
            echo false;
        }
    }
    public function update_icon()
    {
        if($_FILES['image']['name'] != '')
        {
            $file_name = 'image';
            $file_path = 'Logo';
            $image = $this->basic->file_upload($file_path, $file_name);
        }elseif($_FILES['image']['name'] == '')
        {
                $image = $this->input->post('oldImage');
        }else{
             $image = '';
        }
        if($this->Query->update('basic_details',['id'=>$this->input->post('id')],[$this->input->post('column')=>$image]))
        {
            echo base_url($image);
        }else{
            echo false;
        }
    }
    public function personal()
    {
        $this->basic->header(22, 'View All Personal Loan Enquiry');
        $data['personal']=$this->Query->select('*','enquiry');
        $this->load->view('Admin/Basic/Personal',$data);
        $this->basic->footer();
    }
    public function single_personal($id)
    {
        $this->basic->header(22, 'View All Personal Loan Enquiry');
        $data['personal']=$this->Query->select('*','enquiry',['id'=>$id],'row');
        $this->load->view('Admin/Basic/Single_Personal',$data);
        $this->basic->footer();
    }
    public function update_personal($id)
    {
        $array = array('year'=>$this->input->post('year'),
                       'final_amount'=>$this->input->post('final_amount'),
                       'approve_date'=>$this->input->post('approve_date'),  
                      );
        $this->Query->update('enquiry',['id'=>$id],$array);
        redirect('Admin/Basic_Details/personal');
    }
    public function update_status($id,$status)
    {       
        if($status != '0')
    	{
	    	if($this->Query->update('enquiry',['id'=>$id],['status'=>$status]))
	        {
	        
	            redirect($this->agent->referrer());
	        }else{
	       
	            redirect($this->agent->referrer());
	        }
        }else{
           redirect($this->agent->referrer());
        }
    }
    public function delete_personal($id)
    {
        $this->Query->delete('enquiry',['id'=>$id]);
        redirect(base_url('Admin/Basic_Details/personal'));
    }
    public function download_pdf($id)
    {
        $data['info']=$this->Query->select('*','enquiry',['id'=>$id],'row');
        $this->load->view('Admin/Basic/PDF_download',$data);
    }
    public function delete_all()
    {
        $this->Query->delete('enquiry','',1);
        redirect(base_url('Admin/Basic_Details/personal'));
    }
}?>