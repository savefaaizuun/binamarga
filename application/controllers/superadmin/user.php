<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends Ci_Controller {

    public function __construct(){
            parent::__construct();
            $this->load->model('m_user');

            if(!$this->session->userdata('username')){
            redirect('admin/login');
        }

        }


    function index(){
                
        $data['listUser']=$this->m_user->getAllUser()->result();
        $data['title']="Data User";
        
        if($this->uri->segment(4)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(4)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
            $this->load->template_superadmin('superadmin/user/index',$data);
    }

   function tambah(){
        $data['title']="Tambah User";
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $user=$this->input->post('username');
            $cek=$this->m_user->cekUsername($user);
            if($cek->num_rows()>0){
                $data['message']="<div class='alert alert-danger'>Username sudah digunakan</div>";
                $this->load->template_superadmin('superadmin/user/tambah',$data);
            }else{
                $info=array(
                    'username'=>$this->input->post('username'),
                    'password'=>md5($this->input->post('password')),
                    'email'=>$this->input->post('email'),
                    'nama'=>$this->input->post('nama'),
                    'level'=>$this->input->post('level')
            
                );
                $this->m_user->simpan($info);
                redirect('superadmin/user/index/add_success');
            }
        }else{
            $data['message']="";
            $this->load->template_superadmin('superadmin/user/tambah',$data);
        }
    }


    function edit($id){
        $data['title']="Edit Misi";
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $user_id=$this->input->post('user_id');
           
            $info=array(
                'username'=>$this->input->post('username'),
                'password'=>md5($this->input->post('password')),
                'email'=>$this->input->post('email'),
                'nama'=>$this->input->post('nama')
            );
            $this->m_user->update($id,$info);
            
            $data['user']=$this->m_user->cekId($id)->row_array();
            $data['message']="<div class='alert alert-success'>Data berhasil diupdate</div>";
            $this->load->template_superadmin('superadmin/user/edit',$data);
        }else{
            $data['message']="";
            $data['user']=$this->m_user->cekId($id)->row_array();
            $this->load->template_superadmin('superadmin/user/edit',$data);;
        }
    }


    function hapus(){
        $user_id=$this->input->post('user_id');
        $detail=$this->m_user->cek($user_id)->result();
        $this->m_user->hapus($user_id);
    }

    function _set_rules(){
        $this->form_validation->set_rules('username','username','required|trim');
        $this->form_validation->set_rules('password','password','required|trim');
        $this->form_validation->set_rules('email','email','required|trim');
        $this->form_validation->set_rules('nama','nama','required|trim');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
    }

    
}
