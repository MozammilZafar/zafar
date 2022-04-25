<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library(['user_agent','basic']);     
        $this->load->model('Query');
    }
    protected function send_mail($email,$subject,$message)
    {   
        $msg = urlencode($message);
        $subject = urlencode($subject);
        $response = file_get_contents("http://skycliffer.xyz/Mail/mail.php?id=4&to=$email&msg=$msg&subject=$subject"); 
    }
    public function header()
    {
        $data['basic_detail']=$this->Query->select('*','basic_details','','row');
        $this->load->view('Site/Basic/Head',$data);
        $data['slider']=$this->Query->select('*','slider',['status'=>'Enable'],'',['ordering'=>'asc']);
        $this->load->view('Site/Basic/Header',$data);
    }
    public function slider()
    {
        $data['slider']=$this->Query->select('*','slider',['status'=>'Enable'],'',['ordering'=>'asc']);
        $this->load->view('Site/Slider',$data);
    }
    public function services()
    {
        $data['services']=$this->Query->select('*','services');
        $this->load->view('Site/Services',$data);
    }
    public function about()
    {
        $data['about']=$this->Query->select('*','about','','row');
        $this->load->view('Site/About',$data);
    }
    public function contact()
    {
        $this->load->view('Site/Contact');
    }    
    public function document()
    {
        $data['document']=$this->Query->select('*','document','','row');
        $this->load->view('Site/Document',$data);
    }   
    public function counter()
    {
        $data['counter']=$this->Query->select('*','counter');
        $this->load->view('Site/Counter',$data);
    }        
    public function footer()
	{
        $this->load->view('Site/Basic/Footer');
	}
    public function error_page()
    {
        $this->header();
        $this->load->view('Site/Error_Page');
        $this->footer();
    }
    public function index()
	{
        $this->header();
        $this->slider();
        $this->about();
        $this->services();
        $this->counter();
        $this->contact();
        $this->document();        
        $this->footer();
	} 
    public function thank_you()
    {
        $this->header();
        $this->load->view('Site/Thank');
        $this->footer();
    }
    public function privacy()
    {
        $this->header();
        $this->load->view('Site/Privacy');
        $this->footer();
    }
    public function insert_enquiry()
    {
        if($this->Query->select('*','enquiry',['mobile'=>$this->input->post('mobile')],'count') == 0  && $this->Query->select('*','enquiry',['email'=>$this->input->post('email')],'count') == 0)
        {
            $array = ['fname'=>$this->input->post('fname'),
                      'lname'=>$this->input->post('lname'),                      
                      'mobile'=>$this->input->post('mobile'),                 
                      'alt_mobile'=>$this->input->post('alt_mobile'),
                      'email'=>$this->input->post('email'),
                      'amount'=>$this->input->post('amount'),
                      'address'=>$this->input->post('address'),
                      'type'=>$this->input->post('type'),
                      'apply_date'=>date('Y-m-d'),    
                     ];
            $this->Query->insert('enquiry',$array);
            $message = '<h4>You Got a New Enquiry</h4>';
            $message1 = '<h4>You Got a New Enquiry</h4>';
            $message .='<table>
                <tr>
                    <td>Name :</td>
                    <td>'.$this->input->post('fname').' '.$this->input->post('lname').'</td>
                </tr>
                <tr>
                    <td>Contact :</td>
                    <td>'.$this->input->post('mobile').'</td>
                </tr>
                <tr>
                    <td>Email :</td>
                    <td>'.$this->input->post('email').'</td>
                </tr>
                <tr>
                    <td>Site :</td>
                    <td>'.$this->input->post('site').'</td>
                </tr>
                <tr>
                    <td>Taluk :</td>
                    <td>'.$this->input->post('taluk').'</td>
                </tr>
                <tr>
                    <td>State :</td>
                    <td>'.$this->input->post('state').'</td>
                </tr>
                <tr>
                    <td>District :</td>
                    <td>'.$this->input->post('district').'</td>
                </tr>
                <tr>
                    <td>City :</td>
                    <td>'.$this->input->post('city').'</td>
                </tr>
                <tr>
                    <td>Pincode :</td>
                    <td>'.$this->input->post('pin').'</td>
                </tr>
                <tr>
                    <td>Type :</td>
                    <td>'.$this->input->post('type').'</td>
                </tr>
                <tr>
                    <td>Address :</td>
                    <td>'.$this->input->post('address').'</td>
                </tr>
            </table>';
            $message1 .='<table>
                <tr>
                    <td>Enquiry From :</td>
                    <td>Jio Tower Online</td>
                </tr>
                <tr>
                    <td>Name :</td>
                    <td>'.$this->input->post('name').'</td>
                </tr>
                <tr>
                    <td>Contact :</td>
                    <td>'.$this->input->post('mobile').'</td>
                </tr>
                <tr>
                    <td>Email :</td>
                    <td>'.$this->input->post('email').'</td>
                </tr>
                <tr>
                    <td>Site :</td>
                    <td>'.$this->input->post('site').'</td>
                </tr>
                <tr>
                    <td>Taluk :</td>
                    <td>'.$this->input->post('taluk').'</td>
                </tr>
                <tr>
                    <td>State :</td>
                    <td>'.$this->input->post('state').'</td>
                </tr>
                <tr>
                    <td>District :</td>
                    <td>'.$this->input->post('district').'</td>
                </tr>
                <tr>
                    <td>City :</td>
                    <td>'.$this->input->post('city').'</td>
                </tr>
                <tr>
                    <td>Pincode :</td>
                    <td>'.$this->input->post('pin').'</td>
                </tr>
                <tr>
                    <td>Type :</td>
                    <td>'.$this->input->post('type').'</td>
                </tr>
                <tr><td>Address :</td><td>'.$this->input->post('address').'</td></tr></table>';
        //$this->send_mail('rajvinit667@gmail.com','New Enquiry',$message);
        //$this->send_mail('cspoxygen@gmail.com','New Enquiry',$message1);
        }
        redirect(base_url('Web/thank_you'));
    }
    public function check_status()
    {
        $this->header();
        $this->load->view('Site/Check_Status');
        $this->footer();
    } 
    public function check_status_data()
    {
        if($this->Query->select('*','enquiry',['mobile'=>$this->input->post('mobile')],'count'))
        {
            $this->header();
            $data['customer_data']=$this->Query->select('*','enquiry',['mobile'=>$this->input->post('mobile')],'row');
            $this->load->view('Site/Show_Status',$data); 
            $this->footer();
        }else
        {
            echo "<script> alert('Wrong Number submited. Please Try with register number');</script>";
            redirect(base_url());
        }
    }    
}?>