<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

    public function __construct(){
            parent::__construct();

            $this->load->model('m_slide');
            $this->load->model('m_kegiatan');
            $this->load->model('m_berita');
        
        }

    public function index(){
    	$data['title'] = "Kegiatan";
    	$data['listSlide'] = $this->m_slide->getAllSlide();
    	$data['page'] = "kegiatan";
        $this->load->template('kegiatan/index', $data);
    }


    function listbidang1(){
        $data['title'] = "Kegiatan";
        $data['listBidang']=$this->m_kegiatan->getBidang1();
        $data['berita'] = $this->m_berita->showBerita();
        $this->load->template('kegiatan/bidang1', $data);
    }

    function bidang1(){
        
        $id = $this->uri->segment(3);
        $data['title'] = "Kegiatan";
        
        $data['listSlide'] = $this->m_slide->getAllSlide();
        $data['listBidang1'] = $this->m_kegiatan->getBidang1();
        
        $data['kegiatan'] = $this->m_kegiatan->getKegiatan($id)->row_array();
        
        $data['berita'] = $this->m_berita->showBerita();
        
        $this->load->template('kegiatan/detail_kegiatan', $data);

    }

    function listbidang2(){
        $data['title'] = "Kegiatan";
        $data['listBidang']=$this->m_kegiatan->getBidang2();
        $data['berita'] = $this->m_berita->showBerita();
        $this->load->template('kegiatan/bidang2', $data);
        
    }

    function bidang2(){
        
        $id = $this->uri->segment(3);
        $data['title'] = "Kegiatan";
        $data['kegiatan'] = $this->m_kegiatan->getKegiatan($id)->row_array();
        $data['berita'] = $this->m_berita->showBerita();
        
        $this->load->template('kegiatan/detail_kegiatan', $data);

    }

    function listbidang3(){
        $data['title'] = "Kegiatan";
        $data['listBidang']=$this->m_kegiatan->getBidang3();
        $data['berita'] = $this->m_berita->showBerita();
        $this->load->template('kegiatan/bidang3', $data);
        
    }

    function bidang3(){
        
        $id = $this->uri->segment(3);
        $data['title'] = "Kegiatan";
        $data['kegiatan'] = $this->m_kegiatan->getKegiatan($id)->row_array();
        $data['berita'] = $this->m_berita->showBerita();
        
        $this->load->template('kegiatan/detail_kegiatan', $data);

    }

    function listbidang4(){
        $data['title'] = "Kegiatan";
        $data['listBidang']=$this->m_kegiatan->getBidang4();
        $data['berita'] = $this->m_berita->showBerita();
        $this->load->template('kegiatan/bidang4', $data);
        
    }

    function bidang4(){
        
        $id = $this->uri->segment(3);
        $data['title'] = "Kegiatan";
        $data['kegiatan'] = $this->m_kegiatan->getKegiatan($id)->row_array();
        $data['berita'] = $this->m_berita->showBerita();
        
        $this->load->template('kegiatan/detail_kegiatan', $data);

    }

    function listbidang5(){
        $data['title'] = "Kegiatan";
        $data['listBidang']=$this->m_kegiatan->getBidang5();
        $data['berita'] = $this->m_berita->showBerita();
        $this->load->template('kegiatan/bidang5', $data);
        
    }

    function bidang5(){
        
        $id = $this->uri->segment(3);
        $data['title'] = "Kegiatan";        
        $data['kegiatan'] = $this->m_kegiatan->getKegiatan($id)->row_array();
        $data['berita'] = $this->m_berita->showBerita();
        
        $this->load->template('kegiatan/detail_kegiatan', $data);

    }

}