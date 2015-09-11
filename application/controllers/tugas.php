<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tugas extends CI_Controller {

    public function __construct(){
            parent::__construct();
                    
        }

    public function index(){
    	$data['title'] = "Tugas dan Fungsi";
    	$data['page'] = "site";
    	$this->load->template('tugas', $data);
    }

}