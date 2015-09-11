<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Ci_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model('m_user');
			
            if($this->session->userdata('username')){
            redirect('administrator/dashboard');
        
        }
    }

	public function index() {
		$data['pageTitle'] = "Login";
		$this->load->view('login', $data);
	}

	public function login() {
		$data['pageTitle'] = "Login";
		$this->load->view('login', $data);
	}


    function proses(){
        
        $this->form_validation->set_rules('username','username','required|trim|xss_clean');
        $this->form_validation->set_rules('password','password','required|trim|xss_clean');
        
        if($this->form_validation->run()==false){
            $this->session->set_flashdata('message','Username dan password harus diisi');
            redirect('admin/login');
        }else{
            $username=$this->input->post('username');
            $password=md5($this->input->post('password'));

            $cek=$this->m_user->cek($username,$password);

            if ($cek->num_rows() == 1) {
            foreach ($cek->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Login';
                $sess_data['user_id'] = $sess->user_id;
                $sess_data['username'] = $sess->username;
                $sess_data['level'] = $sess->level;
                $sess_data['email'] = $sess->email;
                $sess_data['nama'] = $sess->nama;
                $this->session->set_userdata($sess_data);
                
            }
            if ($this->session->userdata('level') == 'super admin' ) {
                redirect('superadmin/dashboard');
            } elseif ($this->session->userdata('level') == 'admin') {
                redirect('administrator/dashboard');
            }
               
        } else{
                $this->session->set_flashdata('message','Username atau password salah');
                redirect('admin/login');
            }
        }
    }

    

    
    

}	