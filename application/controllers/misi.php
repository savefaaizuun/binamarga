<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Misi extends CI_Controller {

    public function __construct(){
            parent::__construct();
            $this->load->model('m_misi');
            $this->load->model('m_slide');
        
        }

    public function index(){
    	$data['title'] = "Misi";
        $data['page'] = "site";
    	$data['listMisi'] = $this->m_misi->getAllMisi();
    	$data['listSlide'] = $this->m_slide->getAllSlide();
        $this->load->template('misi', $data);
    }

}