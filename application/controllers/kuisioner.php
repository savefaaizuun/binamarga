<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kuisioner extends CI_Controller {

    public function __construct(){
            parent::__construct();
            $this->load->model('m_kuisioner');
            //$this->load->model('m_kategori');
            $this->load->model('m_polling');

        
        }

    public function index(){
    	$data['title'] = "Polling Jalan";
        $this->load->view('jalan/kuisioner');
    }

    public function jalan2(){
    	$data['title'] = "Polling Jalan";
    	$data['soal_jalan'] = $this->m_kuisioner->getKuisionerJalan();
        $data['jawaban'] = $this->m_kuisioner->getJawaban();

        //proses hitung jawaban A untuk kategori jalan
            $jumlah_polling = $this->m_polling->getCountPollingJln()->row_array();
            $no_1a = $this->m_polling->getJalanNo_1a()->row_array();
            $no_2a = $this->m_polling->getJalanNo_2a()->row_array();
            $no_3a = $this->m_polling->getJalanNo_3a()->row_array();
            $no_4a = $this->m_polling->getJalanNo_4a()->row_array();
            $no_5a = $this->m_polling->getJalanNo_5a()->row_array();
            $no_6a = $this->m_polling->getJalanNo_6a()->row_array();
            $no_7a = $this->m_polling->getJalanNo_7a()->row_array();
            $no_8a = $this->m_polling->getJalanNo_8a()->row_array();
            $no_9a = $this->m_polling->getJalanNo_9a()->row_array();
            $no_10a = $this->m_polling->getJalanNo_10a()->row_array();
            $no_11a = $this->m_polling->getJalanNo_11a()->row_array();
            $no_12a = $this->m_polling->getJalanNo_12a()->row_array();
            $no_13a = $this->m_polling->getJalanNo_13a()->row_array();
            $no_14a = $this->m_polling->getJalanNo_14a()->row_array();

            //proses hitung jawaban B untuk kategori jalan
            $no_1b = $this->m_polling->getJalanNo_1b()->row_array();
            $no_2b = $this->m_polling->getJalanNo_2b()->row_array();
            $no_3b = $this->m_polling->getJalanNo_3b()->row_array();
            $no_4b = $this->m_polling->getJalanNo_4b()->row_array();
            $no_5b = $this->m_polling->getJalanNo_5b()->row_array();
            $no_6b = $this->m_polling->getJalanNo_6b()->row_array();
            $no_7b = $this->m_polling->getJalanNo_7b()->row_array();
            $no_8b = $this->m_polling->getJalanNo_8b()->row_array();
            $no_9b = $this->m_polling->getJalanNo_9b()->row_array();
            $no_10b = $this->m_polling->getJalanNo_10b()->row_array();
            $no_11b = $this->m_polling->getJalanNo_11b()->row_array();
            $no_12b = $this->m_polling->getJalanNo_12b()->row_array();
            $no_13b = $this->m_polling->getJalanNo_13b()->row_array();
            $no_14b = $this->m_polling->getJalanNo_14b()->row_array();

            //proses hitung jawaban C untuk kategori jalan
            $no_1c = $this->m_polling->getJalanNo_1c()->row_array();
            $no_2c = $this->m_polling->getJalanNo_2c()->row_array();
            $no_3c = $this->m_polling->getJalanNo_3c()->row_array();
            $no_4c = $this->m_polling->getJalanNo_4c()->row_array();
            $no_5c = $this->m_polling->getJalanNo_5c()->row_array();
            $no_6c = $this->m_polling->getJalanNo_6c()->row_array();
            $no_7c = $this->m_polling->getJalanNo_7c()->row_array();
            $no_8c = $this->m_polling->getJalanNo_8c()->row_array();
            $no_9c = $this->m_polling->getJalanNo_9c()->row_array();
            $no_10c = $this->m_polling->getJalanNo_10c()->row_array();
            $no_11c = $this->m_polling->getJalanNo_11c()->row_array();
            $no_12c = $this->m_polling->getJalanNo_12c()->row_array();
            $no_13c = $this->m_polling->getJalanNo_13c()->row_array();
            $no_14c = $this->m_polling->getJalanNo_14c()->row_array();

            //proses hitung jawaban D untuk kategori jalan
            $no_1d = $this->m_polling->getJalanNo_1d()->row_array();
            $no_2d = $this->m_polling->getJalanNo_2d()->row_array();
            $no_3d = $this->m_polling->getJalanNo_3d()->row_array();
            $no_4d = $this->m_polling->getJalanNo_4d()->row_array();
            $no_5d = $this->m_polling->getJalanNo_5d()->row_array();
            $no_6d = $this->m_polling->getJalanNo_6d()->row_array();
            $no_7d = $this->m_polling->getJalanNo_7d()->row_array();
            $no_8d = $this->m_polling->getJalanNo_8d()->row_array();
            $no_9d = $this->m_polling->getJalanNo_9d()->row_array();
            $no_10d = $this->m_polling->getJalanNo_10d()->row_array();
            $no_11d = $this->m_polling->getJalanNo_11d()->row_array();
            $no_12d = $this->m_polling->getJalanNo_12d()->row_array();
            $no_13d = $this->m_polling->getJalanNo_13d()->row_array();
            $no_14d = $this->m_polling->getJalanNo_14d()->row_array();


            $jumlahjawaban_a = $no_1a['no_1'] + $no_2a['no_2'] + $no_3a['no_3'] + $no_4a['no_4'] + $no_5a['no_5'] + $no_6a['no_6'] + $no_7a['no_7'] + 
                             $no_8a['no_8'] + $no_9a['no_9'] + $no_10a['no_10'] + $no_11a['no_11'] + $no_12a['no_12'] + $no_13a['no_13'] + $no_14a['no_14'];

            $jumlahjawaban_b = $no_1b['no_1'] + $no_2b['no_2'] + $no_3b['no_3'] + $no_4b['no_4'] + $no_5b['no_5'] + $no_6b['no_6'] + $no_7b['no_7'] + 
                             $no_8b['no_8'] + $no_9b['no_9'] + $no_10b['no_10'] + $no_11b['no_11'] + $no_12b['no_12'] + $no_13b['no_13'] + $no_14b['no_14'];

            $jumlahjawaban_c = $no_1c['no_1'] + $no_2c['no_2'] + $no_3c['no_3'] + $no_4c['no_4'] + $no_5c['no_5'] + $no_6c['no_6'] + $no_7c['no_7'] + 
                             $no_8c['no_8'] + $no_9c['no_9'] + $no_10c['no_10'] + $no_11c['no_11'] + $no_12c['no_12'] + $no_13c['no_13'] + $no_14c['no_14'];

            $jumlahjawaban_d = $no_1d['no_1'] + $no_2d['no_2'] + $no_3d['no_3'] + $no_4d['no_4'] + $no_5d['no_5'] + $no_6d['no_6'] + $no_7d['no_7'] + 
                             $no_8d['no_8'] + $no_9d['no_9'] + $no_10d['no_10'] + $no_11d['no_11'] + $no_12d['no_12'] + $no_13d['no_13'] + $no_14d['no_14'];
            
            $totaljawaban = $jumlah_polling['polling']*14;
            $data['jawaban_a'] = ($jumlahjawaban_a/$totaljawaban) * 100;
            $data['jawaban_b'] = ($jumlahjawaban_b/$totaljawaban) * 100;
            $data['jawaban_c'] = ($jumlahjawaban_c/$totaljawaban) * 100;
            $data['jawaban_d'] = ($jumlahjawaban_d/$totaljawaban) * 100;
            $nilaia = 1;
            $nilaib = 2;
            $nilaic = 3;
            $nilaid = 4;

            $totalnilaia = $nilaia*$jumlahjawaban_a;
            $totalnilaib = $nilaib*$jumlahjawaban_b;
            $totalnilaic = $nilaic*$jumlahjawaban_c;
            $totalnilaid = $nilaid*$jumlahjawaban_d;

            echo "jumlah pemilih a alias 1 = " .$jumlahjawaban_a;
            echo "<br>";
            echo "jumlah pemilih b alias 2 = " .$jumlahjawaban_b;
            echo "<br>";
            echo "jumlah pemilih c alias 3 = " .$jumlahjawaban_c;
            echo "<br>";
            echo "jumlah pemilih d alias 4 = " .$jumlahjawaban_d;
            echo "<br>";
            echo "jumlah nilai a alias 1 = " .$totalnilaia;
            echo "<br>";
            echo "jumlah nilai b alias 2 = " .$totalnilaib;
            echo "<br>";
            echo "jumlah nilai c alias 3 = " .$totalnilaic;
            echo "<br>";
            echo "jumlah nilai d alias 4 = " .$totalnilaid;
            echo "<br>";

            $jumlah_vote = $jumlahjawaban_a+$jumlahjawaban_b+$jumlahjawaban_c+$jumlahjawaban_d;
            echo "total pemilih ".$jumlah_vote;
            echo "<br>";
            $total_nilai = $totalnilaia+$totalnilaib+$totalnilaic+$totalnilaid;
            echo "total nilai ".$total_nilai;
            echo "<br>";
            echo "jumlah polling " .$jumlah_polling['polling'];
            echo "<br>";
            $ikm = $total_nilai/$jumlah_vote;
            echo "IKM = " .$ikm;
            echo "<br>";
            $persen_jalan = ($ikm/4) * 100;
            echo "IKM Jalan = " .$persen_jalan;
        //$this->load->view('polling/index', $data);
    }

    public function jalan(){
        $data['title'] = "Polling Jalan";
        $data['soal_jalan'] = $this->m_kuisioner->getKuisionerJalan();
        $data['jawaban'] = $this->m_kuisioner->getJawaban();

        //proses hitung jawaban A untuk kategori jalan
            $jumlah_polling = $this->m_polling->getCountPollingJln()->row_array();
            $no_1a = $this->m_polling->getJalanNo_1a()->row_array();
            $no_2a = $this->m_polling->getJalanNo_2a()->row_array();
            $no_3a = $this->m_polling->getJalanNo_3a()->row_array();
            $no_4a = $this->m_polling->getJalanNo_4a()->row_array();
            $no_5a = $this->m_polling->getJalanNo_5a()->row_array();
            $no_6a = $this->m_polling->getJalanNo_6a()->row_array();
            $no_7a = $this->m_polling->getJalanNo_7a()->row_array();
            $no_8a = $this->m_polling->getJalanNo_8a()->row_array();
            $no_9a = $this->m_polling->getJalanNo_9a()->row_array();
            $no_10a = $this->m_polling->getJalanNo_10a()->row_array();
            $no_11a = $this->m_polling->getJalanNo_11a()->row_array();
            $no_12a = $this->m_polling->getJalanNo_12a()->row_array();
            $no_13a = $this->m_polling->getJalanNo_13a()->row_array();
            $no_14a = $this->m_polling->getJalanNo_14a()->row_array();

            //proses hitung jawaban B untuk kategori jalan
            $no_1b = $this->m_polling->getJalanNo_1b()->row_array();
            $no_2b = $this->m_polling->getJalanNo_2b()->row_array();
            $no_3b = $this->m_polling->getJalanNo_3b()->row_array();
            $no_4b = $this->m_polling->getJalanNo_4b()->row_array();
            $no_5b = $this->m_polling->getJalanNo_5b()->row_array();
            $no_6b = $this->m_polling->getJalanNo_6b()->row_array();
            $no_7b = $this->m_polling->getJalanNo_7b()->row_array();
            $no_8b = $this->m_polling->getJalanNo_8b()->row_array();
            $no_9b = $this->m_polling->getJalanNo_9b()->row_array();
            $no_10b = $this->m_polling->getJalanNo_10b()->row_array();
            $no_11b = $this->m_polling->getJalanNo_11b()->row_array();
            $no_12b = $this->m_polling->getJalanNo_12b()->row_array();
            $no_13b = $this->m_polling->getJalanNo_13b()->row_array();
            $no_14b = $this->m_polling->getJalanNo_14b()->row_array();

            //proses hitung jawaban C untuk kategori jalan
            $no_1c = $this->m_polling->getJalanNo_1c()->row_array();
            $no_2c = $this->m_polling->getJalanNo_2c()->row_array();
            $no_3c = $this->m_polling->getJalanNo_3c()->row_array();
            $no_4c = $this->m_polling->getJalanNo_4c()->row_array();
            $no_5c = $this->m_polling->getJalanNo_5c()->row_array();
            $no_6c = $this->m_polling->getJalanNo_6c()->row_array();
            $no_7c = $this->m_polling->getJalanNo_7c()->row_array();
            $no_8c = $this->m_polling->getJalanNo_8c()->row_array();
            $no_9c = $this->m_polling->getJalanNo_9c()->row_array();
            $no_10c = $this->m_polling->getJalanNo_10c()->row_array();
            $no_11c = $this->m_polling->getJalanNo_11c()->row_array();
            $no_12c = $this->m_polling->getJalanNo_12c()->row_array();
            $no_13c = $this->m_polling->getJalanNo_13c()->row_array();
            $no_14c = $this->m_polling->getJalanNo_14c()->row_array();

            //proses hitung jawaban D untuk kategori jalan
            $no_1d = $this->m_polling->getJalanNo_1d()->row_array();
            $no_2d = $this->m_polling->getJalanNo_2d()->row_array();
            $no_3d = $this->m_polling->getJalanNo_3d()->row_array();
            $no_4d = $this->m_polling->getJalanNo_4d()->row_array();
            $no_5d = $this->m_polling->getJalanNo_5d()->row_array();
            $no_6d = $this->m_polling->getJalanNo_6d()->row_array();
            $no_7d = $this->m_polling->getJalanNo_7d()->row_array();
            $no_8d = $this->m_polling->getJalanNo_8d()->row_array();
            $no_9d = $this->m_polling->getJalanNo_9d()->row_array();
            $no_10d = $this->m_polling->getJalanNo_10d()->row_array();
            $no_11d = $this->m_polling->getJalanNo_11d()->row_array();
            $no_12d = $this->m_polling->getJalanNo_12d()->row_array();
            $no_13d = $this->m_polling->getJalanNo_13d()->row_array();
            $no_14d = $this->m_polling->getJalanNo_14d()->row_array();


            $jumlahjawaban_a = $no_1a['no_1'] + $no_2a['no_2'] + $no_3a['no_3'] + $no_4a['no_4'] + $no_5a['no_5'] + $no_6a['no_6'] + $no_7a['no_7'] + 
                             $no_8a['no_8'] + $no_9a['no_9'] + $no_10a['no_10'] + $no_11a['no_11'] + $no_12a['no_12'] + $no_13a['no_13'] + $no_14a['no_14'];

            $jumlahjawaban_b = $no_1b['no_1'] + $no_2b['no_2'] + $no_3b['no_3'] + $no_4b['no_4'] + $no_5b['no_5'] + $no_6b['no_6'] + $no_7b['no_7'] + 
                             $no_8b['no_8'] + $no_9b['no_9'] + $no_10b['no_10'] + $no_11b['no_11'] + $no_12b['no_12'] + $no_13b['no_13'] + $no_14b['no_14'];

            $jumlahjawaban_c = $no_1c['no_1'] + $no_2c['no_2'] + $no_3c['no_3'] + $no_4c['no_4'] + $no_5c['no_5'] + $no_6c['no_6'] + $no_7c['no_7'] + 
                             $no_8c['no_8'] + $no_9c['no_9'] + $no_10c['no_10'] + $no_11c['no_11'] + $no_12c['no_12'] + $no_13c['no_13'] + $no_14c['no_14'];

            $jumlahjawaban_d = $no_1d['no_1'] + $no_2d['no_2'] + $no_3d['no_3'] + $no_4d['no_4'] + $no_5d['no_5'] + $no_6d['no_6'] + $no_7d['no_7'] + 
                             $no_8d['no_8'] + $no_9d['no_9'] + $no_10d['no_10'] + $no_11d['no_11'] + $no_12d['no_12'] + $no_13d['no_13'] + $no_14d['no_14'];
            
            $totaljawaban = $jumlah_polling['polling']*14;
            $data['jawaban_a'] = ($jumlahjawaban_a/$totaljawaban) * 100;
            $data['jawaban_b'] = ($jumlahjawaban_b/$totaljawaban) * 100;
            $data['jawaban_c'] = ($jumlahjawaban_c/$totaljawaban) * 100;
            $data['jawaban_d'] = ($jumlahjawaban_d/$totaljawaban) * 100;
            $nilaia = 1;
            $nilaib = 2;
            $nilaic = 3;
            $nilaid = 4;

            $totalnilaia = $nilaia*$jumlahjawaban_a;
            $totalnilaib = $nilaib*$jumlahjawaban_b;
            $totalnilaic = $nilaic*$jumlahjawaban_c;
            $totalnilaid = $nilaid*$jumlahjawaban_d;

            $jumlah_vote = $jumlahjawaban_a+$jumlahjawaban_b+$jumlahjawaban_c+$jumlahjawaban_d;
            $total_nilai = $totalnilaia+$totalnilaib+$totalnilaic+$totalnilaid;
            $ikm = $total_nilai/$jumlah_vote;
            $data['persen_jalan'] = ($ikm/4) * 100;
            
            $this->load->view('polling/index', $data);
    }

    function votejalan(){
        //$data['title']="Tambah Data Misi";
        $this->form_validation->set_rules('kategori', 'kategori');
        $this->form_validation->set_rules('no_1', 'no_1');
        $this->form_validation->set_rules('no_2', 'no_2');
        $this->form_validation->set_rules('no_3', 'no_3');
        $this->form_validation->set_rules('no_4', 'no_4');
        $this->form_validation->set_rules('no_5', 'no_5');
        $this->form_validation->set_rules('no_6', 'no_6');
        $this->form_validation->set_rules('no_7', 'no_7');
        $this->form_validation->set_rules('no_8', 'no_8');
        $this->form_validation->set_rules('no_9', 'no_9');
        $this->form_validation->set_rules('no_10', 'no_10');
        $this->form_validation->set_rules('no_11', 'no_11');
        $this->form_validation->set_rules('no_12', 'no_12');
        $this->form_validation->set_rules('no_13', 'no_13');
        $this->form_validation->set_rules('no_14', 'no_14');
        if($this->form_validation->run()==true){
            $polling_id=$this->input->post('polling_id');
                            
                $info=array(
                'kategori'=>$this->input->post('kategori'),
                'mobile'=>$this->input->post('mobile'),
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
                $this->m_polling->simpan($info);
                redirect('kuisioner/jalan');
            } else{
            echo "gagal polling";
        }
    }

    public function jawaban(){
        $data['title'] = "Polling Jalan";
        $jawaban = $this->m_kuisioner->getJawaban();
        if ($jawaban->num_rows() > 0)
        {
           $row = $jawaban->row_array();

           echo $row['kuisioner_id'];
           echo $row['jawaban_a'];
           echo $row['jawaban_b'];
           echo $row['jawaban_c'];
           echo $row['jawaban_d'];
        } 
    }
}