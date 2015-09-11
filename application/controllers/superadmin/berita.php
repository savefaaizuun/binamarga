<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct(){
            parent::__construct();
            $this->load->model('m_berita');
            
            if(!$this->session->userdata('username')){
            redirect('admin/login');
        }
        }

	function index(){
        $data['listBerita']=$this->m_berita->getAllBerita()->result();
        $data['title']="Data Berita";
               
        if($this->uri->segment(4)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(4)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
            $this->load->template_superadmin('superadmin/berita/index',$data);
    }

    function tambah(){
        $data['title']="Tambah Data Berita";
        $data['user_id'] = $this->session->userdata('user_id');
        $this->form_validation->set_rules('judul_berita', 'judul_berita');
        $this->form_validation->set_rules('isi_berita', 'isi_berita');
        $this->form_validation->set_rules('image', 'image');
        $this->form_validation->set_rules('link', 'link');
        if($this->form_validation->run()==true){
            $berita_id=$this->input->post('berita_id');
               //setting konfiguras upload image
                $config['upload_path'] = './assets/img/berita/';
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
                    'judul_berita'=>$this->input->post('judul_berita'),
                    'isi_berita'=>$this->input->post('isi_berita'),
                    'user_id'=>$this->session->userdata('user_id'),
                    'link'=>$this->input->post('link'),
                    'image'=>$image
                );
                $this->m_berita->simpan($info);
                redirect('administrator/berita/index/add_success');
            } else{
            $data['message']="";
            $this->load->template_superadmin('superadmin/berita/tambah',$data);
        }
    }

    function edit($id){
        $data['title']="Edit Data Berita";
        $data['user_id'] = $this->session->userdata('user_id');
        $this->form_validation->set_rules('judul_berita', 'judul_berita');
        $this->form_validation->set_rules('isi_berita', 'isi_berita');
        $this->form_validation->set_rules('image', 'image');
        $this->form_validation->set_rules('link', 'link');
        if($this->form_validation->run()==true){
            $berita_id=$this->input->post('berita_id');
            //setting konfiguras upload image
            $config['upload_path'] = './assets/img/berita/';
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
                    'judul_berita'=>$this->input->post('judul_berita'),
                    'isi_berita'=>$this->input->post('isi_berita'),
                    'user_id'=>$this->session->userdata('user_id'),
                    'link'=>$this->input->post('link'),
                    'image'=>$image
                );
            $this->m_berita->update($id,$info);
            
            //tampilkan pesan
            $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";
            
            //tampilkan data anggota 
            $data['berita']=$this->m_berita->cekId($id)->row_array();
           	$this->load->template_superadmin('superadmin/berita/edit',$data);
        }else{
            $data['berita']=$this->m_berita->cekId($id)->row_array();
            $data['message']="";
            $this->load->template_superadmin('superadmin/berita/edit',$data);
        }
    }
    
    function hapus(){
        $berita_id=$this->input->post('berita_id');
        $detail=$this->m_berita->cek($berita_id)->result();
        $this->m_berita->hapus($berita_id);
    }



}