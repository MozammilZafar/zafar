<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basic {

    var $CI;

    public function __construct($params = array()) {
        $this->CI = & get_instance();
        $this->CI->load->helper('url');
        $this->CI->config->item('base_url');
        $this->CI->load->database();
        $this->CI->load->model('Query');
        date_default_timezone_set('Asia/Kolkata');
    }

    public function loader() {
		$this->CI->load->library(array('session', 'user_agent'));
        $this->CI->load->helper(array('url', 'form', 'file'));
        $this->CI->load->model('Query');
    }

    function checklogin() {
        $this->CI->load->library('session');
        if ($this->CI->session->userdata('admin_user') == NULL && $this->CI->session->userdata('admin_type') == NULL) {
            redirect(base_url('Login'));
        }
    }

    function logout() {
        $this->CI->load->library('session');
        $this->CI->session->unset_userdata('admin_user');
        $this->CI->session->unset_userdata('admin_type');
        redirect(base_url('Login'));
    }

    function header($page = 1, $pagename = "") {
        
        for ($i = 1; $i <= 100; $i++) {
            if ($i == $page) {
                $data['p' . $i] = 'class="active"';
            } else {
                $data['p' . $i] = '';
            }
        }
        $data['basic_details'] = $this->CI->Query->select('*','basic_details','','row');
        //$data['msg'] = $this->CI->session->flashdata('msg');
        $this->CI->load->view('Admin/Basic/head', $data);
        $this->CI->load->view('Admin/Basic/sidebar', $data);
        $this->CI->load->view('Admin/Basic/header', $data);
    }

    function footer() {
        $data['basic_details'] = $this->CI->Query->select('*','basic_details','','row');
        $this->CI->load->view('Admin/Basic/footer',$data);
    }


    function clean($string) {
        $string1 = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
        return htmlentities($string1,ENT_QUOTES,"UTF-8");
//        return preg_replace('/[^A-Za-z0-9\-]/', '', $string1); // Removes special chars.
    }
    public function file_upload($file_path,$file_name)
    {
        $new_name ='';
        $new_name = mt_rand(111111,999999).$file_name;
        $config['file_name'] = $new_name;
        $config['upload_path']   = 'assets/Images/'.$file_path;
        $config['allowed_types']  = '*';
        $this->CI->load->library('upload', $config);
       $this->CI->upload->initialize($config);
        if ( ! $this->CI->upload->do_upload($file_name))
        {
            $error = $this->CI->upload->display_errors();
            $new_name ='';
            return $error;
            exit;
        }
        else
        {
            $upload_data=$this->CI->upload->data();
            $new_name ='';
            return  $config['upload_path'].'/'.$upload_data['file_name'];
        }

    }
    protected function do_pagination($url,$segment,$total,$per_page=20)
    {
        $config = array();
        $config["base_url"] = $url;
        $config["total_rows"] = $total;
        $config["per_page"] = $per_page;
        $config["uri_segment"] = $segment;
        $config['reuse_query_string'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination pagination-separate">';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class=" page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');
        $this->pagination->initialize($config);
        return $page = ($this->uri->segment($segment)) ? $this->uri->segment($segment) : 0;
        
    }

}
