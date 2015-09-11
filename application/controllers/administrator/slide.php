<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slide extends CI_Controller {

	public function __construct(){
            parent::__construct();
            $this->load->model('m_slide');
            
            if(!$this->session->userdata('username')){
            redirect('admin/login');
        }
        
        }

	function index(){
        $data['listSlide']=$this->m_slide->getAllSlide()->result();
        $data['title']="Data Slide";
               
        if($this->uri->segment(3)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(3)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
            $this->load->template_admin('admin/slide/index',$data);
    }

    function slide1(){
        $data['slide1']=$this->m_slide->getSlide1()->result();
        $data['title']="Data Slide";
               
        if($this->uri->segment(3)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(3)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
        //print_r($data['listSlide']);
            $this->load->template_admin('admin/slide/slide1',$data);
    }

    function slide2(){
        $data['slide2']=$this->m_slide->getSlide2()->result();
        $data['title']="Data Slide";
               
        if($this->uri->segment(3)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(3)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
        //print_r($data['listSlide']);
            $this->load->template_admin('admin/slide/slide2',$data);
    }

    function slide3(){
        $data['slide3']=$this->m_slide->getSlide3()->result();
        $data['title']="Data Slide";
               
        if($this->uri->segment(3)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(3)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
        //print_r($data['listSlide']);
            $this->load->template_admin('admin/slide/slide3',$data);
    }

    function tambah(){
        $data['title']="Tambah Data Slide";
        $this->form_validation->set_rules('title_slide', 'title_slide');
        $this->form_validation->set_rules('link', 'link');
        $this->form_validation->set_rules('image', 'image');
        if($this->form_validation->run()==true){
            $slide_id=$this->input->post('slide_id');
               //setting konfiguras upload image
                $config['upload_path'] = './assets/img/slide/';
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
                    'title_slide'=>$this->input->post('title_slide'),
                    'link'=>$this->input->post('link'),
                    'image'=>$image
                );
                $this->m_slide->simpan($info);
                redirect('administrator/slide/index/add_success');
            } else{
            $data['message']="";
            $this->load->template_admin('admin/slide/tambah',$data);
        }
    }

    function edit($id){
        $data['title']="Edit Data Slide";
        $this->form_validation->set_rules('title_slide', 'title_slide');
        $this->form_validation->set_rules('link', 'link');
        $this->form_validation->set_rules('image', 'image');
        if($this->form_validation->run()==true){
            $slide_id=$this->input->post('slide_id');
            //setting konfiguras upload image
            $config['upload_path'] = './assets/img/slide/';
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
                    'title_slide'=>$this->input->post('title_slide'),
                    'link'=>$this->input->post('link'),
                    'image'=>$image
                );//update data angggota
            $this->m_slide->update($id,$info);
            
            //tampilkan pesan
            $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";
            
            //tampilkan data anggota 
            $data['slide']=$this->m_slide->cekId($id)->row_array();
           	$this->load->template_admin('admin/slide/edit',$data);
        }else{
            $data['slide']=$this->m_slide->cekId($id)->row_array();
            $data['message']="";
            $this->load->template_admin('admin/slide/edit',$data);
        }
    }
    
    function hapus(){
        $slide_id=$this->input->post('slide_id');
        $detail=$this->m_slide->cek($slide_id)->result();
        $this->m_slide->hapus($slide_id);
    }



}