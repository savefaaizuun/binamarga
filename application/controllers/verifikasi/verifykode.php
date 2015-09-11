<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class VerifyKode extends CI_Controller {
        function __construct() {
            parent::__construct();
            $this->load->model('model_user','',TRUE); //nantinya diteruskan di user.php pada folder models
        }
    function index() {
        //Aksi untuk melakukan validasi
        $this->load->library('form_validation');

        //$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|xss_clean');
        $this->form_validation->set_rules('kode_verifikasi', 'Kode Verifikasi', 'trim|required|xss_clean|callback_check_database');

        if($this->form_validation->run() == FALSE) {
            //Jika validasi gagal user akan diarahkan kembali ke halaman login
            $this->load->template('jalan/Verifikasi');
        }
        else {
            //Jika berhasil user akan di arahkan ke private area
            redirect('polling', 'refresh');
        }
    }

    function check_database() {
        //validasi field terhadap database
        $kode = $this->input->post('kode_verifikasi');
        //query ke database
        $result = $this->model_user->login($kode);
    
        if($result) {
            $sess_array = array();
            foreach($result as $row) {
                $sess_array = array(
                'mobile' => $row->mobile,
                'kode_verifikasi' => $row->kode_verifikasi
                );
            $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
       }
       else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
       }
    }
    }
    ?>