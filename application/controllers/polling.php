<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Polling extends Ci_Controller {

    public function __construct(){
            parent::__construct();
            $this->load->model('m_polling');
            $this->load->model('m_register');
            $this->load->model('m_verifikasi');


        }

    public function index()
    {
        
        if($this->session->userdata('logged_in')) {
                $session_data = $this->session->userdata('logged_in');
                $data['mobile'] = $session_data['mobile'];
                $data['kode'] = $session_data['kode_verifikasi'];
                $this->load->view('polling/index', $data);
        }else{
            redirect('verifikasi/login','refresh');   
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

    function jalan(){

        if ($this->session->userdata('logged_in')) {
            $session = $this->session->userdata('logged_in');

            $data['mobile'] = $session['mobile'];
            $data['title'] = "Polling Jalan";
            $data['soal_jalan'] = $this->m_polling->getKuisionerJalan();
            $data['jawaban'] = $this->m_polling->getJawaban();

        $this->load->template('jalan/kuisioner', $data);

        }
        
    }

    function votejalan(){
        
        $this->_set_rules();

        if($this->form_validation->run()==true){

            $post = $this->input->post();
                                        
                $info=array(
                'kategori'=>$post['kategori'],
                'mobile'=>$post['mobile'],
                'no_1'=>$post['no_1'],
                'no_2'=>$post['no_2'],
                'no_3'=>$post['no_3'],
                'no_4'=>$post['no_4'],
                'no_5'=>$post['no_5'],
                'no_6'=>$post['no_6'],
                'no_7'=>$post['no_7'],
                'no_8'=>$post['no_8'],
                'no_9'=>$post['no_9'],
                'no_10'=>$post['no_10'],
                'no_11'=>$post['no_11'],
                'no_12'=>$post['no_12'],
                'no_13'=>$post['no_13'],
                'no_14'=>$post['no_14']
            );
                $this->m_polling->simpan($info);
                redirect('polling/hasil_jalan');
            } else{

            if ($this->session->userdata('logged_in')) {
                $session = $this->session->userdata('logged_in');

                $data['mobile'] = $session['mobile'];
                $data['title'] = "Polling Jalan";
                $data['soal_jalan'] = $this->m_polling->getKuisionerJalan();
                $data['jawaban'] = $this->m_polling->getJawaban();

                $this->load->template('jalan/kuisioner', $data);

            }
        }
    }

    function pju(){
        if ($this->session->userdata('logged_in')) {
            $session = $this->session->userdata('logged_in');

            $data['mobile'] = $session['mobile'];
            $data['title'] = "Polling PJU";
            $data['soal_pju'] = $this->m_polling->getKuisionerPju();
            $data['jawaban'] = $this->m_polling->getJawaban();

            $this->load->template('pju/kuisioner', $data);

        }
    }

    function votepju(){
        //$data['title']="Tambah Data Misi";
        $this->_set_rules();

        if($this->form_validation->run()==true){

            $post = $this->input->post();
                            
                $info=array(
                'kategori'=>$post['kategori'],
                'mobile'=>$post['mobile'],
                'no_1'=>$post['no_1'],
                'no_2'=>$post['no_2'],
                'no_3'=>$post['no_3'],
                'no_4'=>$post['no_4'],
                'no_5'=>$post['no_5'],
                'no_6'=>$post['no_6'],
                'no_7'=>$post['no_7'],
                'no_8'=>$post['no_8'],
                'no_9'=>$post['no_9'],
                'no_10'=>$post['no_10'],
                'no_11'=>$post['no_11'],
                'no_12'=>$post['no_12'],
                'no_13'=>$post['no_13'],
                'no_14'=>$post['no_14']
            );
                $this->m_polling->simpan($info);
                redirect('polling/hasil_pju');
            } else{
            
           if ($this->session->userdata('logged_in')) {
            $session = $this->session->userdata('logged_in');

            $data['mobile'] = $session['mobile'];
            $data['title'] = "Polling PJU";
            $data['soal_pju'] = $this->m_polling->getKuisionerPju();
            $data['jawaban'] = $this->m_polling->getJawaban();

            $this->load->template('pju/kuisioner', $data);

            }
        }
    }

    function drainase(){

        if ($this->session->userdata('logged_in')) {
            $session = $this->session->userdata('logged_in');

            $data['mobile'] = $session['mobile'];
            $data['title'] = "Polling Drainase";
            $data['soal_drainase'] = $this->m_polling->getKuisionerDrain();
            $data['jawaban'] = $this->m_polling->getJawaban();
            
            $this->load->template('drainase/kuisioner', $data);

        } 
    }

    function votedrainase(){
        
        $this->_set_rules();

        if($this->form_validation->run()==true){

            $post = $this->input->post();

                $info=array(
                'mobile'=>$post['mobile'],
                'kategori'=>$post['kategori'],
                'no_1'=>$post['no_1'],
                'no_2'=>$post['no_2'],
                'no_3'=>$post['no_3'],
                'no_4'=>$post['no_4'],
                'no_5'=>$post['no_5'],
                'no_6'=>$post['no_6'],
                'no_7'=>$post['no_7'],
                'no_8'=>$post['no_8'],
                'no_9'=>$post['no_9'],
                'no_10'=>$post['no_10'],
                'no_11'=>$post['no_11'],
                'no_12'=>$post['no_12'],
                'no_13'=>$post['no_13'],
                'no_14'=>$post['no_14']
            );
                $this->m_polling->simpan($info);
                redirect('polling/hasil_drainase');
            } else{

            if ($this->session->userdata('logged_in')) {
                $session = $this->session->userdata('logged_in');

                $data['mobile'] = $session['mobile'];
                $data['title'] = "Polling Drainase";
                $data['soal_drainase'] = $this->m_polling->getKuisionerDrain();
                $data['jawaban'] = $this->m_polling->getJawaban();
                
                $this->load->template('drainase/kuisioner', $data);

            } 
        }
    }

    function sungai(){

        if ($this->session->userdata('logged_in')) {
            $session = $this->session->userdata('logged_in');

            $data['mobile'] = $session['mobile'];
            $data['title'] = "Polling Sungai";
            $data['soal_sungai'] = $this->m_polling->getKuisionerSungai();
            $data['jawaban'] = $this->m_polling->getJawaban();
            
            $this->load->template('sungai/kuisioner', $data);

        }
    }

    function votesungai(){
        
        $this->_set_rules();
        
        if($this->form_validation->run()==true){

            $post = $this->input->post();

                $info=array(
                'mobile'=>$post['mobile'],
                'kategori'=>$post['kategori'],
                'no_1'=>$post['no_1'],
                'no_2'=>$post['no_2'],
                'no_3'=>$post['no_3'],
                'no_4'=>$post['no_4'],
                'no_5'=>$post['no_5'],
                'no_6'=>$post['no_6'],
                'no_7'=>$post['no_7'],
                'no_8'=>$post['no_8'],
                'no_9'=>$post['no_9'],
                'no_10'=>$post['no_10'],
                'no_11'=>$post['no_11'],
                'no_12'=>$post['no_12'],
                'no_13'=>$post['no_13'],
                'no_14'=>$post['no_14']
            );
                $this->m_polling->simpan($info);
                redirect('polling/hasil_sungai');
            } else{
            
            if ($this->session->userdata('logged_in')) {
                $session = $this->session->userdata('logged_in');

                $data['mobile'] = $session['mobile'];
                $data['title'] = "Polling Sungai";
                $data['soal_sungai'] = $this->m_polling->getKuisionerSungai();
                $data['jawaban'] = $this->m_polling->getJawaban();
                
                $this->load->template('sungai/kuisioner', $data);

            }
        }
    }


    /*function hasil_jalanbackup(){
            $data['title'] = "Hasil Polling Jalan";

            $pollingJalan_periode1 = $this->m_polling->CountPollingJlnPeriode1()->row_array();
            $jalan_periode1_a = $this->m_polling->CountJalanPeriode1_A()->row_array();
            $jalan_periode1_b = $this->m_polling->CountJalanPeriode1_B()->row_array();
            $jalan_periode1_c = $this->m_polling->CountJalanPeriode1_C()->row_array();
            $jalan_periode1_d = $this->m_polling->CountJalanPeriode1_D()->row_array();

            echo "Jumlah vote 1 alias A = " .$jalan_periode1_a['total'];
            echo "<br>";
            echo "Jumlah vote 2 alias B = " .$jalan_periode1_b['total'];
            echo "<br>";
            echo "Jumlah vote 3 alias C = " .$jalan_periode1_c['total'];
            echo "<br>";
            echo "Jumlah vote 3 alias D = " .$jalan_periode1_d['total'];
            echo "<br>";
            $jumlah_jalan_periode1 = ($jalan_periode1_a['total']+$jalan_periode1_b['total']+$jalan_periode1_c['total']+$jalan_periode1_d['total']);
            echo "Jumlah vote A B C D = " .$jumlah_jalan_periode1;

            echo "<br>";
            echo "<br>";
            $data['jawabanjalanperiode_a'] = @($jalan_periode1_a['total']/$jumlah_jalan_periode1) * 100;
            $data['jawabanjalanperiode_b'] = @($jalan_periode1_b['total']/$jumlah_jalan_periode1) * 100;
            $data['jawabanjalanperiode_c'] = @($jalan_periode1_c['total']/$jumlah_jalan_periode1) * 100;
            $data['jawabanjalanperiode_d'] = @($jalan_periode1_d['total']/$jumlah_jalan_periode1) * 100;

            echo "Jumlah % A = " .$data['jawabanjalanperiode_a'];
            echo "<br>";
            echo "Jumlah % B = " .$data['jawabanjalanperiode_b'];
            echo "<br>";
            echo "Jumlah % C = " .$data['jawabanjalanperiode_c'];
            echo "<br>";
            echo "Jumlah % D = " .$data['jawabanjalanperiode_d'];
            echo "<br>";

            $nilaia = 1;
            $nilaib = 2;
            $nilaic = 3;
            $nilaid = 4;


            echo "<br>";
            $nilai_jalanperiode1_a = $jalan_periode1_a['total'] * $nilaia;
            $nilai_jalanperiode1_b = $jalan_periode1_b['total'] * $nilaib;
            $nilai_jalanperiode1_c = $jalan_periode1_c['total'] * $nilaic;
            $nilai_jalanperiode1_d = $jalan_periode1_d['total'] * $nilaid;

            echo "Nilai A = " .$nilai_jalanperiode1_a;
            echo "<br>";
            echo "Nilai B = " .$nilai_jalanperiode1_b;
            echo "<br>";
            echo "Nilai C = " .$nilai_jalanperiode1_c;
            echo "<br>";
            echo "Nilai D = " .$nilai_jalanperiode1_d;
            echo "<br>";
            $nilai_jalanperiode1 =  $nilai_jalanperiode1_a + $nilai_jalanperiode1_b + $nilai_jalanperiode1_c + $nilai_jalanperiode1_d;
            echo "Total Nilai = " .$nilai_jalanperiode1;
            echo "<br>";
            echo "Nilai Max = " .$jumlah_jalan_periode1 * $nilaid;
            echo "<br>";
            $ikm = @($nilai_jalanperiode1/$jumlah_jalan_periode1);
            echo "IKM jalan Periode 1 = " .$ikm;
            echo "<br>";
            $persen_ikmjalan_periode1 = ($ikm/4) * 100;
            echo "% IKM jalan Periode 1 = " .$persen_ikmjalan_periode1;

        }*/

        function hasil_jalan(){
            $data['title'] = "Hasil Polling Jalan";

            //proses hitung jawaban A untuk kategori jalan
            //$jumlah_polling = $this->m_polling->getCountPollingJln()->row_array();
            //Jalan
            $pollingJalan_periode1 = $this->m_polling->CountPollingJlnPeriode1()->row_array();
            $pollingJalan_periode2 = $this->m_polling->CountPollingJlnPeriode2()->row_array();
            $pollingJalan_periode3 = $this->m_polling->CountPollingJlnPeriode3()->row_array();

            //pilihan periode 1
            $jalan_periode1_a = $this->m_polling->CountJalanPeriode1_A()->row_array();
            $jalan_periode1_b = $this->m_polling->CountJalanPeriode1_B()->row_array();
            $jalan_periode1_c = $this->m_polling->CountJalanPeriode1_C()->row_array();
            $jalan_periode1_d = $this->m_polling->CountJalanPeriode1_D()->row_array();

            //pilihan periode 2
            $jalan_periode2_a = $this->m_polling->CountJalanPeriode2_A()->row_array();
            $jalan_periode2_b = $this->m_polling->CountJalanPeriode2_B()->row_array();
            $jalan_periode2_c = $this->m_polling->CountJalanPeriode2_C()->row_array();
            $jalan_periode2_d = $this->m_polling->CountJalanPeriode2_D()->row_array();
            
            //pilihan periode 3
            $jalan_periode3_a = $this->m_polling->CountJalanPeriode3_A()->row_array();
            $jalan_periode3_b = $this->m_polling->CountJalanPeriode3_B()->row_array();
            $jalan_periode3_c = $this->m_polling->CountJalanPeriode3_C()->row_array();
            $jalan_periode3_d = $this->m_polling->CountJalanPeriode3_D()->row_array();


            //$jumlah_jalan_periode1 = $pollingJalan_periode1['polling']* 14;

            //echo "Jumlah Polling Jalan Periode 1 = " .$jumlah_jalan_periode1;
            /*echo "Jumlah vote 1 alias A = " .$jalan_periode2_a['total'];
            echo "<br>";
            echo "Jumlah vote 2 alias B = " .$jalan_periode2_b['total'];
            echo "<br>";
            echo "Jumlah vote 3 alias C = " .$jalan_periode2_c['total'];
            echo "<br>";
            echo "Jumlah vote 3 alias D = " .$jalan_periode2_d['total'];
            echo "<br>";*/
            $jumlah_jalan_periode3 = ($jalan_periode3_a['total']+$jalan_periode3_b['total']+$jalan_periode3_c['total']+$jalan_periode3_d['total']);
            //echo "Jumlah vote A B C D = " .$jumlah_jalan_periode3;

            //echo "<br>";
            //echo "<br>";
            $data['jawabanjalan_a'] = @($jalan_periode3_a['total']/$jumlah_jalan_periode3) * 100;
            $data['jawabanjalan_b'] = @($jalan_periode3_b['total']/$jumlah_jalan_periode3) * 100;
            $data['jawabanjalan_c'] = @($jalan_periode3_c['total']/$jumlah_jalan_periode3) * 100;
            $data['jawabanjalan_d'] = @($jalan_periode3_d['total']/$jumlah_jalan_periode3) * 100;

            /*echo "Jumlah % A = " .$data['jawabanjalanperiode3_a'];
            echo "<br>";
            echo "Jumlah % B = " .$data['jawabanjalanperiode3_b'];
            echo "<br>";
            echo "Jumlah % C = " .$data['jawabanjalanperiode3_c'];
            echo "<br>";
            echo "Jumlah % D = " .$data['jawabanjalanperiode3_d'];
            echo "<br>";*/

            $nilaia = 1;
            $nilaib = 2;
            $nilaic = 3;
            $nilaid = 4;


            //echo "<br>";
            $nilai_jalanperiode3_a = $jalan_periode3_a['total'] * $nilaia;
            $nilai_jalanperiode3_b = $jalan_periode3_b['total'] * $nilaib;
            $nilai_jalanperiode3_c = $jalan_periode3_c['total'] * $nilaic;
            $nilai_jalanperiode3_d = $jalan_periode3_d['total'] * $nilaid;

            /*echo "Nilai A = " .$nilai_jalanperiode3_a;
            echo "<br>";
            echo "Nilai B = " .$nilai_jalanperiode3_b;
            echo "<br>";
            echo "Nilai C = " .$nilai_jalanperiode3_c;
            echo "<br>";
            echo "Nilai D = " .$nilai_jalanperiode3_d;
            echo "<br>";*/
            $nilai_jalanperiode3 =  $nilai_jalanperiode3_a + $nilai_jalanperiode3_b + $nilai_jalanperiode3_c + $nilai_jalanperiode3_d;
            /*echo "Total Nilai = " .$nilai_jalanperiode3;
            echo "<br>";
            echo "Nilai Max = " .$jumlah_jalan_periode3 * $nilaid;
            echo "<br>";*/
            $ikmjalanperiode3 = @($nilai_jalanperiode3/$jumlah_jalan_periode3);
            //echo "IKM jalan Periode 2 = " .$ikmjalanperiode3;
            //echo "<br>";
            $persen_ikmjalan_periode3 = ($ikmjalanperiode3/4) * 100;
            //echo "% IKM jalan Periode 2 = " .$persen_ikmjalan_periode2;

            $this->load->template('polling/hasil_jalan',$data);

        }

        function hasil_pju(){
            $data['title'] = "Hasil Polling PJU";

            $pollingPju_periode1 = $this->m_polling->CountPollingPjuPeriode1()->row_array();
            $pollingPju_periode2 = $this->m_polling->CountPollingPjuPeriode2()->row_array();
            $pollingPju_periode3 = $this->m_polling->CountPollingPjuPeriode3()->row_array();

            //pilihan periode 1
            $pju_periode1_a = $this->m_polling->CountPjuPeriode1_A()->row_array();
            $pju_periode1_b = $this->m_polling->CountPjuPeriode1_B()->row_array();
            $pju_periode1_c = $this->m_polling->CountPjuPeriode1_C()->row_array();
            $pju_periode1_d = $this->m_polling->CountPjuPeriode1_D()->row_array();

            //pilihan periode 2
            $pju_periode2_a = $this->m_polling->CountPjuPeriode2_A()->row_array();
            $pju_periode2_b = $this->m_polling->CountPjuPeriode2_B()->row_array();
            $pju_periode2_c = $this->m_polling->CountPjuPeriode2_C()->row_array();
            $pju_periode2_d = $this->m_polling->CountPjuPeriode2_D()->row_array();
            
            //pilihan periode 3
            $pju_periode3_a = $this->m_polling->CountPjuPeriode3_A()->row_array();
            $pju_periode3_b = $this->m_polling->CountPjuPeriode3_B()->row_array();
            $pju_periode3_c = $this->m_polling->CountPjuPeriode3_C()->row_array();
            $pju_periode3_d = $this->m_polling->CountPjuPeriode3_D()->row_array();


            $jumlah_pju_periode3 = ($pju_periode3_a['total']+$pju_periode3_b['total']+$pju_periode3_c['total']+$pju_periode3_d['total']);
            
            $data['jawabanpju_a'] = @($pju_periode3_a['total']/$jumlah_pju_periode3) * 100;
            $data['jawabanpju_b'] = @($pju_periode3_b['total']/$jumlah_pju_periode3) * 100;
            $data['jawabanpju_c'] = @($pju_periode3_c['total']/$jumlah_pju_periode3) * 100;
            $data['jawabanpju_d'] = @($pju_periode3_d['total']/$jumlah_pju_periode2) * 100;
            
            $this->load->template('polling/hasil_pju',$data);

        }

    function hasil_drainase(){

        $data['title'] = "Hasil Polling Jalan";

            $pollingDrain_periode1 = $this->m_polling->CountPollingDrainPeriode1()->row_array();
            $pollingDrain_periode2 = $this->m_polling->CountPollingDrainPeriode2()->row_array();
            $pollingDrain_periode3 = $this->m_polling->CountPollingDrainPeriode3()->row_array();

            //pilihan periode 1
            $drain_periode1_a = $this->m_polling->CountDrainPeriode1_A()->row_array();
            $drain_periode1_b = $this->m_polling->CountDrainPeriode1_B()->row_array();
            $drain_periode1_c = $this->m_polling->CountDrainPeriode1_C()->row_array();
            $drain_periode1_d = $this->m_polling->CountDrainPeriode1_D()->row_array();

            //pilihan periode 2
            $drain_periode2_a = $this->m_polling->CountDrainPeriode2_A()->row_array();
            $drain_periode2_b = $this->m_polling->CountDrainPeriode2_B()->row_array();
            $drain_periode2_c = $this->m_polling->CountDrainPeriode2_C()->row_array();
            $drain_periode2_d = $this->m_polling->CountDrainPeriode2_D()->row_array();
            
            //pilihan periode 3
            $drain_periode3_a = $this->m_polling->CountDrainPeriode3_A()->row_array();
            $drain_periode3_b = $this->m_polling->CountDrainPeriode3_B()->row_array();
            $drain_periode3_c = $this->m_polling->CountDrainPeriode3_C()->row_array();
            $drain_periode3_d = $this->m_polling->CountDrainPeriode3_D()->row_array();

            $jumlah_drain_periode2 = ($drain_periode2_a['total']+$drain_periode2_b['total']+$drain_periode2_c['total']+$drain_periode2_d['total']);
            $jumlah_drain_periode3 = ($drain_periode3_a['total']+$drain_periode3_b['total']+$drain_periode3_c['total']+$drain_periode3_d['total']);
            
            $data['jawabandrain_a'] = @($drain_periode3_a['total']/$jumlah_drain_periode3) * 100;
            $data['jawabandrain_b'] = @($drain_periode3_b['total']/$jumlah_drain_periode3) * 100;
            $data['jawabandrain_c'] = @($drain_periode3_c['total']/$jumlah_drain_periode3) * 100;
            $data['jawabandrain_d'] = @($drain_periode3_d['total']/$jumlah_drain_periode3) * 100;

            $this->load->template('polling/hasil_drainase',$data);

        }

    function hasil_sungai(){
            
            $data['title'] = "Hasil Polling Sungai";
            //proses hitung jawaban A untuk kategori Sungai
            $pollingSungai_periode1 = $this->m_polling->CountPollingSungaiPeriode1()->row_array();
            $pollingSungai_periode2 = $this->m_polling->CountPollingSungaiPeriode2()->row_array();
            $pollingSungai_periode3 = $this->m_polling->CountPollingSungaiPeriode3()->row_array();

            //pilihan periode 1
            $sungai_periode1_a = $this->m_polling->CountSungaiPeriode1_A()->row_array();
            $sungai_periode1_b = $this->m_polling->CountSungaiPeriode1_B()->row_array();
            $sungai_periode1_c = $this->m_polling->CountSungaiPeriode1_C()->row_array();
            $sungai_periode1_d = $this->m_polling->CountSungaiPeriode1_D()->row_array();

            //pilihan periode 2
            $sungai_periode2_a = $this->m_polling->CountSungaiPeriode2_A()->row_array();
            $sungai_periode2_b = $this->m_polling->CountSungaiPeriode2_B()->row_array();
            $sungai_periode2_c = $this->m_polling->CountSungaiPeriode2_C()->row_array();
            $sungai_periode2_d = $this->m_polling->CountSungaiPeriode2_D()->row_array();
            
            //pilihan periode 3
            $sungai_periode3_a = $this->m_polling->CountSungaiPeriode3_A()->row_array();
            $sungai_periode3_b = $this->m_polling->CountSungaiPeriode3_B()->row_array();
            $sungai_periode3_c = $this->m_polling->CountSungaiPeriode3_C()->row_array();
            $sungai_periode3_d = $this->m_polling->CountSungaiPeriode3_D()->row_array();

            $jumlah_sungai_periode2 = ($sungai_periode2_a['total']+$sungai_periode2_b['total']+$sungai_periode2_c['total']+$sungai_periode2_d['total']);
            $jumlah_sungai_periode3 = ($sungai_periode3_a['total']+$sungai_periode3_b['total']+$sungai_periode3_c['total']+$sungai_periode3_d['total']);

            $data['jawabansungai_a'] = @($sungai_periode3_a['total']/$jumlah_sungai_periode3) * 100;
            $data['jawabansungai_b'] = @($sungai_periode3_b['total']/$jumlah_sungai_periode3) * 100;
            $data['jawabansungai_c'] = @($sungai_periode3_c['total']/$jumlah_sungai_periode3) * 100;
            $data['jawabansungai_d'] = @($sungai_periode3_d['total']/$jumlah_sungai_periode3) * 100;

            $this->load->template('polling/hasil_sungai',$data);
        }

        function logout() {
            $this->session->unset_userdata('logged_in');
            //session_destroy();
            redirect('site', 'refresh');
        } 
 
    
}    