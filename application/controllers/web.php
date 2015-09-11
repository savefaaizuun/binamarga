<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct(){
			parent::__construct();

			$this->load->model('m_slide');
			$this->load->model('m_artikel');
			$this->load->model('m_polling');
            $this->load->helper('dbmp_helper');
		
		}

	public function index(){
		$data['title'] = "Home";
        $id = 2;
		//$data['page'] = "site";
        $artikel = $this->m_artikel->getArtikel($id)->row_array();
        //$data = '2015-08-20';
        $data['tgl'] = tanggal($artikel['create_at']);
        //echo format_tanggal($data);
        //$this->load->view('test', $data);
        $hari = format_hari($artikel['create_at']);

        $hari2 = hari($hari);
        echo $hari2;
    }

}