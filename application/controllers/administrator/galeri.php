<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galeri extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        
        /* Standard Libraries */
        $this->load->database();
        /* ------------------ */
        
        $this->load->helper('url'); //Just for the examples, this is not required thought for the library
        
        $this->load->library('image_CRUD');
    }
    
    function galeri($data = null )
    {
        $this->load->template_admin('admin/galeri/index.php',$data);   
    }
    
    function index()
    {
        $this->galeri((object)array('data' => '$title' , 'js_files' => array() , 'css_files' => array()));
    }   
    
    function jalan()
    {
        $image_crud = new image_CRUD();
        
        $image_crud->set_primary_key_field('id');
        $image_crud->set_url_field('url');
        $image_crud->set_table('dbmp_galeri')
            ->set_image_path('assets/uploads');
            
        $data = $image_crud->render();
        
        $this->galeri($data);
    }

    function pju()
    {
        $image_crud = new image_CRUD();
        
        $image_crud->set_primary_key_field('id');
        $image_crud->set_url_field('url');
        $image_crud->set_table('dbmp_galeri_pju')
            ->set_image_path('assets/uploads');
            
        $data = $image_crud->render();
        
        $this->galeri($data);
    }

    function drainase()
    {
        $image_crud = new image_CRUD();
        
        $image_crud->set_primary_key_field('id');
        $image_crud->set_url_field('url');
        $image_crud->set_table('dbmp_galeri_drainase')
            ->set_image_path('assets/uploads');
            
        $data = $image_crud->render();
        
        $this->galeri($data);
    }

    function sungai()
    {
        $image_crud = new image_CRUD();
        
        $image_crud->set_primary_key_field('id');
        $image_crud->set_url_field('url');
        $image_crud->set_table('dbmp_galeri_sungai')
            ->set_image_path('assets/uploads');
            
        $data = $image_crud->render();
        
        $this->galeri($data);
    }
    
    function simple_photo_gallery()
    {
        $image_crud = new image_CRUD();
        
        $image_crud->unset_upload();
        $image_crud->unset_delete();
        
        $image_crud->set_primary_key_field('id');
        $image_crud->set_url_field('url');
        $image_crud->set_table('dbmp_galeri')
        ->set_image_path('assets/uploads');
        
        $output = $image_crud->render();
        
        $this->galeri($output);        
    }
}