<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Visi extends CI_Controller {

    public function __construct(){
            parent::__construct();
            $this->load->model('m_visi');
        	$this->load->model('m_slide');
        }

    public function index(){
    	$data['title'] = "Visi";
    	$data['page'] = "site";
    	$data['listSlide'] = $this->m_slide->getAllSlide();
    	$data['listVisi'] = $this->m_visi->getAllVisi();
        $this->load->template('visi', $data);
    }

}