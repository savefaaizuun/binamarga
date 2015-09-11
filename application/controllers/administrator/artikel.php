<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct(){
            parent::__construct();
            $this->load->model('m_artikel');
            
            if(!$this->session->userdata('username')){
            redirect('admin/login');
        }
        }

	function index(){
        $data['listArtikel']=$this->m_artikel->getAllArtikel()->result();
        $data['title']="Data Artikel";
               
        if($this->uri->segment(4)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(4)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
            $this->load->template_admin('admin/artikel/index',$data);
    }

    function tambah(){
        $data['title']="Tambah Data artikel";
        $data['user_id'] = $this->session->userdata('user_id');
        $this->form_validation->set_rules('title_article', 'title_article');
        $this->form_validation->set_rules('article', 'article');
        $this->form_validation->set_rules('image', 'image');
        if($this->form_validation->run()==true){
            $article_id=$this->input->post('article_id');
               //setting konfiguras upload image
                $config['upload_path'] = './assets/img/artikel/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '1000';
				$config['max_width']  = '2000';
				$config['max_height']  = '1024';
		                
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('image')){
                    $image="";
                }else{
                    $image=$this->upload->file_name;
                }
                
                $info=array(
                    'title_article'=>$this->input->post('title_article'),
                    'article'=>$this->input->post('article'),
                    'user_id'=>$this->session->userdata('user_id'),
                    'image'=>$image
                );
                $this->m_artikel->simpan($info);
                redirect('administrator/artikel/index/add_success');
            } else{
            $data['message']="";
            $this->load->template_admin('admin/artikel/tambah',$data);
        }
    }

    



}