<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jalan extends CI_Controller {

    public function __construct(){
            parent::__construct();
            $this->load->model('m_register');
            $this->load->model('m_polling');
            $this->load->model('model_user');

        
        }

    public function index(){
    	$data['title'] = "Polling Jalan";
        $this->load->view('jalan/polling');
    }


    public function registrasi(){
        
        $data['title'] = "Registrasi";
        $this->load->template('jalan/registrasi',$data);
    }

    function verifykode() {
        
        $this->form_validation->set_rules('kode_verifikasi', 'Kode Verifikasi', 'trim|required|xss_clean|callback_check_database');

        if($this->form_validation->run() == FALSE) {
            $this->load->template('jalan/Verifikasi');
        }
        else {
            redirect('polling/jalan', 'refresh');
        }
    }

    function check_database() {
        $kode = $this->input->post('kode_verifikasi');
        $result = $this->model_user->login($kode);
    
        if($result) {
            $sess_array = array();
            foreach($result as $row) {
                $sess_array = array(
                'mobile' => $row->mobile,
                'kode_verifikasi' => $row->kode_verifikasi
                );
            $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
       }
       else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
       }
    }

    function send(){
        
        $data['title'] = "Verifikasi";
        $data['mobile'] = $this->input->post('mobile');

        $this->load->template('jalan/verifikasi',$data);
    }

    function verifikasi(){

        $this->form_validation->set_rules('mobile', 'No Handphone', 'required|numeric');

        if($this->form_validation->run()==true){

            $mobile=$this->input->post('mobile'); 
            $cekvote=$this->m_register->cekvotejalan($mobile); 
            
        if($cekvote->num_rows()>0){ 

            $no = $cekvote->row_array();

            redirect('jalan/edit/'.$no['polling_id']);

        } else {
            
            $today = date("Ymd");
            $msg=substr(md5($mobile+$today),"0","4");
            $user="nirasoft";
            $password="jsmksj316";
            $auth=MD5($user.$password.$mobile);
            $trxid="sms0000000001";
            $msg=urlencode($msg);

            $info=array(
            'mobile'=>$this->input->post('mobile'),
            'kode_verifikasi'=>$msg,
            );

            $this->m_register->addVoter($info);
            
            $data = 'username='.$user.'&mobile='.$mobile.'&message='.$msg.'&auth='.$auth.'&trxid='.$trxid;
            
            $curlHandle = curl_init('http://send2.smsmasking.co.id/sms/api_proxy/sendsms.php?'.$data);

            curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curlHandle, CURLOPT_HEADER, 0);
            $data = curl_exec($curlHandle);
            curl_close($curlHandle);
            
            $this->send();
        }
        } else {
            $data['message']="";
            $this->load->template('jalan/registrasi',$data);
        }
    }

    function edit($id){
       
        $data['title'] = "Edit Polling";

        $this->_set_rules();
        if($this->form_validation->run() == true){
            $polling_id = $this->input->post('polling_id');           
            
            $info=array(
                'mobile'=>$this->input->post('mobile'),
                'kategori'=>$this->input->post('kategori'),
                'no_1'=>$this->input->post('no_1'),
                'no_2'=>$this->input->post('no_2'),
                'no_3'=>$this->input->post('no_3'),
                'no_4'=>$this->input->post('no_4'),
                'no_5'=>$this->input->post('no_5'),
                'no_6'=>$this->input->post('no_6'),
                'no_7'=>$this->input->post('no_7'),
                'no_8'=>$this->input->post('no_8'),
                'no_9'=>$this->input->post('no_9'),
                'no_10'=>$this->input->post('no_10'),
                'no_11'=>$this->input->post('no_11'),
                'no_12'=>$this->input->post('no_12'),
                'no_13'=>$this->input->post('no_13'),
                'no_14'=>$this->input->post('no_14')
            );
            
            $this->m_polling->update($id , $info);
            
            $data['message_edit']="<div class='alert alert-success'>Data Berhasil diupdate</div>";
            
            redirect('polling/hasil_jalan', $data);
        }else{

            $data['title'] = "Polling Jalan";
            $data['soal_jalan'] = $this->m_polling->getKuisionerJalan();
            $data['jawaban'] = $this->m_polling->getJawaban();
            $data['jalan']=$this->m_polling->cekpolling($id)->row_array();
            $data['message']="";
            $this->load->template('jalan/edit',$data);
        }

    }

    function _set_rules(){

        $this->form_validation->set_rules('kategori', 'kategori', 'required|trim');
        $this->form_validation->set_rules('mobile', 'mobile', 'required|trim');
        $this->form_validation->set_rules('no_1', 'no_1', 'required|trim');
        $this->form_validation->set_rules('no_2', 'no_2', 'required|trim');
        $this->form_validation->set_rules('no_3', 'no_3', 'required|trim');
        $this->form_validation->set_rules('no_4', 'no_4', 'required|trim');
        $this->form_validation->set_rules('no_5', 'no_5', 'required|trim');
        $this->form_validation->set_rules('no_6', 'no_6', 'required|trim');
        $this->form_validation->set_rules('no_7', 'no_7', 'required|trim');
        $this->form_validation->set_rules('no_8', 'no_8', 'required|trim');
        $this->form_validation->set_rules('no_9', 'no_9', 'required|trim');
        $this->form_validation->set_rules('no_10', 'no_10', 'required|trim');
        $this->form_validation->set_rules('no_11', 'no_11', 'required|trim');
        $this->form_validation->set_rules('no_12', 'no_12', 'required|trim');
        $this->form_validation->set_rules('no_13', 'no_13', 'required|trim');
        $this->form_validation->set_rules('no_14', 'no_14', 'required|trim');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
    }


  
}