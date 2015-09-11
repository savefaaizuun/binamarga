<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Renstra extends CI_Controller {

    public function __construct(){
            parent::__construct();
            
            $this->load->helper('url');
            
        
        }

    public function index(){
    	$data['title'] = "Renstra";
    	$data['page'] = "renstra";
    	
        $this->load->template('renstra', $data);
    }

    public function download(){ 
 
		$this->load->helper('download');
 
		$name = 'renstra.zip'; 
		$data = file_get_contents('http://localhost/binamarga/assets/uploads/renstra.zip', NULL); // filenya
 
		force_download($name,$data);
 
	}

}