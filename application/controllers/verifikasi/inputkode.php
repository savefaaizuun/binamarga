<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Inputkode extends CI_Controller {
        function __construct() {
            parent::__construct();
        }
        function index() {
            if($this->session->userdata('logged_in')) {
                redirect('home', 'refresh');
            }
            else {
                $this->load->helper(array('form'));
                $this->load->template('jalan/verifikasi');
            }
        }
    }
    ?>