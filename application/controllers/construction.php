<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Construction extends CI_Controller {

	public function __construct(){
			parent::__construct();
		
		}

	public function index(){
		$data['title'] = "Under Construction";
    	//$data['page'] = "";
		$this->load->template('contruction', $data);
	}

}