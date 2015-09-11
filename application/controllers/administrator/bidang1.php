<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bidang1 extends CI_Controller {

	public function __construct(){
            parent::__construct();
            $this->load->model('m_kegiatan');
            
            if(!$this->session->userdata('username')){
            redirect('admin/login');
        }
        }

	function index(){
        $data['listBidang1']=$this->m_kegiatan->getBidang1()->result();
        $data['title']="Data Kegiatan";
               
        if($this->uri->segment(4)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(4)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
            $this->load->template_admin('admin/kegiatan/index1',$data);
    }

    function tambah(){
        $data['title']="Tambah Data Kegiatan";
        $data['user_id'] = $this->session->userdata('user_id');
        $this->form_validation->set_rules('judul', 'judul');
        $this->form_validation->set_rules('kategori', 'kategori');
        $this->form_validation->set_rules('isi', 'isi');
        $this->form_validation->set_rules('image', 'image');
        if($this->form_validation->run()==true){
            //$kegiatan=$this->input->post('kegiatan');
               //setting konfiguras upload image
                $config['upload_path'] = './assets/img/kegiatan/';
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
                    'judul'=>$this->input->post('judul'),
                    'kategori'=>$this->input->post('kategori'),
                    'isi'=>$this->input->post('isi'),
                    'user_id'=>$this->session->userdata('user_id'),
                    'image'=>$image
                );
                
                //print_r($info);
                $this->m_kegiatan->simpan($info);
                redirect('administrator/bidang1/index/add_success');
            } else{
            $data['message']="";
            $this->load->template_admin('admin/kegiatan/tambah1',$data);
        }
    }

    function edit($id){
        $data['title']="Edit Data Berita";
        $data['user_id'] = $this->session->userdata('user_id');
        $this->form_validation->set_rules('judul', 'judul');
        $this->form_validation->set_rules('kategori', 'kategori');
        $this->form_validation->set_rules('isi', 'isi');
        $this->form_validation->set_rules('image', 'image');
        if($this->form_validation->run()==true){
            $berita_id=$this->input->post('berita_id');
            //setting konfiguras upload image
            $config['upload_path'] = './assets/img/kegiatan/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '1000';
            $config['max_width']  = '2000';
            $config['max_height']  = '1024';
                    
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('image')){
                $image="";
            }else{
                $image=$this->upload->file_name;
            }
            
            $info=array(
                    'judul'=>$this->input->post('judul'),
                    'kategori'=>$this->input->post('kategori'),
                    'isi'=>$this->input->post('isi'),
                    'user_id'=>$this->session->userdata('user_id'),
                    'image'=>$image
                );
            //print_r($info);
            $this->m_kegiatan->update($id,$info);
            
            //tampilkan pesan
            $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";
            
            $data['kegiatan']=$this->m_kegiatan->cekId($id)->row_array();
            $this->load->template_admin('admin/kegiatan/edit1',$data);
        }else{
            $data['kegiatan']=$this->m_kegiatan->cekId($id)->row_array();
            $data['message']="";
            $this->load->template_admin('admin/kegiatan/edit1',$data);
        }
    }

    function hapus(){
        $kegiatan_id=$this->input->post('kegiatan_id');
        $detail=$this->m_kegiatan->cek($kegiatan_id)->result();
        $this->m_kegiatan->hapus($kegiatan_id);
    }

}