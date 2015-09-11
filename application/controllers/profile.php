<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct(){
            parent::__construct();
            $this->load->model('m_visi');
            $this->load->model('m_misi');
        	$this->load->model('m_slide');
        }

    public function index(){

    }

    public function visi(){
        $data['title'] = "Visi";
        $data['page'] = "site";
        $data['listSlide'] = $this->m_slide->getAllSlide();
        $data['listVisi'] = $this->m_visi->getAllVisi();

        $this->load->template('profile/visi', $data);
    }

    public function misi(){
        $data['title'] = "Misi";
        $data['page'] = "site";
        $data['listSlide'] = $this->m_slide->getAllSlide();
        $data['listMisi'] = $this->m_misi->getAllMisi();
        
        $this->load->template('profile/misi', $data);
    }

    public function tugas(){
        $data['title'] = "Tugas & Fungsi";
        $data['page'] = "site";
        $data['listSlide'] = $this->m_slide->getAllSlide();
    
        $this->load->template('profile/tugas', $data);
    }

}