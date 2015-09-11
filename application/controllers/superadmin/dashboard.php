<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
			parent::__construct();

            if(!$this->session->userdata('username')){
            redirect('superadmin/dashboard');
        }
		
		}

	function index(){
        $data['title']="Dashboard";
        $data['user_id'] = $this->session->userdata('user_id');
        $data['username'] = $this->session->userdata('username');
        $data['nama'] = $this->session->userdata('nama');
        $this->load->template_superadmin('superadmin/dashboard',$data);
    }

    function logout() {
        $this->session->unset_userdata('username');
        redirect('admin/login');
    }

}