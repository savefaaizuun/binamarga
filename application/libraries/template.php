<?php
class Template{
    protected $_CI;
    function __construct(){
        $this->_CI=&get_instance();
    }
    
    function display($template,$data=null){
        $data['_content']=$this->_CI->load->view($template,$data,true);
        $data['_header']=$this->_CI->load->view('template_admin/header',$data,true);
        $data['_sidebar']=$this->_CI->load->view('template_admin/sidebar',$data,true);
        $data['_footer']=$this->_CI->load->view('template_admin/footer',$data,true);
        $this->_CI->load->view('template.php',$data);
    }
}