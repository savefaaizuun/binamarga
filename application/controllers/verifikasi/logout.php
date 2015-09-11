<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    session_start(); //Memanggil fungsi session Codeigniter
    class Logout extends CI_Controller { 
        function __construct() {
            parent::__construct();
        }
    
        function index() {
            $this->session->unset_userdata('logged_in');
            session_destroy();
            redirect('site', 'refresh');
        }
    
        
        }
    ?>