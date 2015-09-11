<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends CI_Controller {

    public function __construct(){
            parent::__construct();
            $this->load->model('m_slide');
            $this->load->model('m_berita');
            $this->load->model('m_artikel');
            $this->load->helper('dbmp_helper');
        }

    public function index(){
        
        $id = $this->uri->segment(3);
        $data['title'] = "Artikel";
        
        $data['listSlide'] = $this->m_slide->getAllSlide();
        $data['list_artikel'] = $this->m_artikel->getAllArtikel();
        
        $data['artikel'] = $this->m_artikel->getArtikel($id)->row_array();
        $artikel = $this->m_artikel->getArtikel($id)->row_array();
        $hari = format_hari($artikel['create_at']);
        $data['hari'] = hari($hari);
        $data['tgl'] = tanggal($artikel['create_at']);
        $data['berita'] = $this->m_berita->showBerita();
        
        $this->load->template('detail_artikel', $data);

    }

    function listartikel(){
        $data['title'] = "List Artikel";
        $data['list_artikel'] = $this->m_artikel->getAllArtikel();
        $this->load->template('list_artikel', $data);
    }


}