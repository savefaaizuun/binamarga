<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct(){
			parent::__construct();

			$this->load->model('m_slide');
			$this->load->model('m_artikel');
			$this->load->model('m_polling');
			$this->load->model('m_berita');
			$this->load->helper('dbmp');
		
		}

	public function index(){

            $data['title'] = "Home";
		$data['listSlide'] = $this->m_slide->getAllSlide();
            $data['artikel'] = $this->m_artikel->showArtikel();

            $pollingJalan_periode1 = $this->m_polling->CountPollingJlnPeriode1()->row_array();
            $pollingJalan_periode2 = $this->m_polling->CountPollingJlnPeriode2()->row_array();
            
            $jalan_periode1_a = $this->m_polling->CountJalanPeriode1_A()->row_array();
            $jalan_periode1_b = $this->m_polling->CountJalanPeriode1_B()->row_array();
            $jalan_periode1_c = $this->m_polling->CountJalanPeriode1_C()->row_array();
            $jalan_periode1_d = $this->m_polling->CountJalanPeriode1_D()->row_array();

            $jalan_periode2_a = $this->m_polling->CountJalanPeriode2_A()->row_array();
            $jalan_periode2_b = $this->m_polling->CountJalanPeriode2_B()->row_array();
            $jalan_periode2_c = $this->m_polling->CountJalanPeriode2_C()->row_array();
            $jalan_periode2_d = $this->m_polling->CountJalanPeriode2_D()->row_array();

            $pollingPju_periode1 = $this->m_polling->CountPollingPjuPeriode1()->row_array();
            $pollingPju_periode2 = $this->m_polling->CountPollingPjuPeriode2()->row_array();

            $pju_periode1_a = $this->m_polling->CountPjuPeriode1_A()->row_array();
            $pju_periode1_b = $this->m_polling->CountPjuPeriode1_B()->row_array();
            $pju_periode1_c = $this->m_polling->CountPjuPeriode1_C()->row_array();
            $pju_periode1_d = $this->m_polling->CountPjuPeriode1_D()->row_array();

            $pju_periode2_a = $this->m_polling->CountPjuPeriode2_A()->row_array();
            $pju_periode2_b = $this->m_polling->CountPjuPeriode2_B()->row_array();
            $pju_periode2_c = $this->m_polling->CountPjuPeriode2_C()->row_array();
            $pju_periode2_d = $this->m_polling->CountPjuPeriode2_D()->row_array();

            $pollingDrain_periode1 = $this->m_polling->CountPollingDrainPeriode1()->row_array();
            $pollingDrain_periode2 = $this->m_polling->CountPollingDrainPeriode2()->row_array();

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

            //Sungai
            $pollingSungai_periode1 = $this->m_polling->CountPollingSungaiPeriode1()->row_array();
            $pollingSungai_periode2 = $this->m_polling->CountPollingSungaiPeriode2()->row_array();

            //pilihan periode 1
            $sungai_periode1_a = $this->m_polling->CountSungaiPeriode1_A()->row_array();
            $sungai_periode1_b = $this->m_polling->CountsungaiPeriode1_B()->row_array();
            $sungai_periode1_c = $this->m_polling->CountsungaiPeriode1_C()->row_array();
            $sungai_periode1_d = $this->m_polling->CountsungaiPeriode1_D()->row_array();

            //pilihan periode 2
            $sungai_periode2_a = $this->m_polling->CountsungaiPeriode2_A()->row_array();
            $sungai_periode2_b = $this->m_polling->CountsungaiPeriode2_B()->row_array();
            $sungai_periode2_c = $this->m_polling->CountsungaiPeriode2_C()->row_array();
            $sungai_periode2_d = $this->m_polling->CountsungaiPeriode2_D()->row_array();
            
            $nilaia = 1;
            $nilaib = 2;
            $nilaic = 3;
            $nilaid = 4;
            
            $jumlah_jalan_periode2 = ($jalan_periode2_a['total']+$jalan_periode2_b['total']+$jalan_periode2_c['total']+$jalan_periode2_d['total']);
            $jumlah_pju_periode2 = ($pju_periode2_a['total']+$pju_periode2_b['total']+$pju_periode2_c['total']+$pju_periode2_d['total']);
            $jumlah_drain_periode2 = ($drain_periode2_a['total']+$drain_periode2_b['total']+$drain_periode2_c['total']+$drain_periode2_d['total']);
            $jumlah_sungai_periode2 = ($sungai_periode2_a['total']+$sungai_periode2_b['total']+$sungai_periode2_c['total']+$sungai_periode2_d['total']);
            
            $data['jawabanjalan_a'] = @($jalan_periode2_a['total']/$jumlah_jalan_periode2) * 100;
            $data['jawabanjalan_b'] = @($jalan_periode2_b['total']/$jumlah_jalan_periode2) * 100;
            $data['jawabanjalan_c'] = @($jalan_periode2_c['total']/$jumlah_jalan_periode2) * 100;
            $data['jawabanjalan_d'] = @($jalan_periode2_d['total']/$jumlah_jalan_periode2) * 100;

            $data['jawabanpju_a'] = @($pju_periode2_a['total']/$jumlah_pju_periode2) * 100;
            $data['jawabanpju_b'] = @($pju_periode2_b['total']/$jumlah_pju_periode2) * 100;
            $data['jawabanpju_c'] = @($pju_periode2_c['total']/$jumlah_pju_periode2) * 100;
            $data['jawabanpju_d'] = @($pju_periode2_d['total']/$jumlah_pju_periode2) * 100;

            $data['jawabandrain_a'] = @($drain_periode2_a['total']/$jumlah_drain_periode2) * 100;
            $data['jawabandrain_b'] = @($drain_periode2_b['total']/$jumlah_drain_periode2) * 100;
            $data['jawabandrain_c'] = @($drain_periode2_c['total']/$jumlah_drain_periode2) * 100;
            $data['jawabandrain_d'] = @($drain_periode2_d['total']/$jumlah_drain_periode2) * 100;

            $data['jawabansungai_a'] = @($sungai_periode2_a['total']/$jumlah_sungai_periode2) * 100;
            $data['jawabansungai_b'] = @($sungai_periode2_b['total']/$jumlah_sungai_periode2) * 100;
            $data['jawabansungai_c'] = @($sungai_periode2_c['total']/$jumlah_sungai_periode2) * 100;
            $data['jawabansungai_d'] = @($sungai_periode2_d['total']/$jumlah_sungai_periode2) * 100;

            $nilai_jalanperiode2_a = $jalan_periode2_a['total'] * $nilaia;
            $nilai_jalanperiode2_b = $jalan_periode2_b['total'] * $nilaib;
            $nilai_jalanperiode2_c = $jalan_periode2_c['total'] * $nilaic;
            $nilai_jalanperiode2_d = $jalan_periode2_d['total'] * $nilaid;

            $nilai_pjuperiode2_a = $pju_periode2_a['total'] * $nilaia;
            $nilai_pjuperiode2_b = $pju_periode2_b['total'] * $nilaib;
            $nilai_pjuperiode2_c = $pju_periode2_c['total'] * $nilaic;
            $nilai_pjuperiode2_d = $pju_periode2_d['total'] * $nilaid;

            $nilai_drainperiode2_a = $drain_periode2_a['total'] * $nilaia;
            $nilai_drainperiode2_b = $drain_periode2_b['total'] * $nilaib;
            $nilai_drainperiode2_c = $drain_periode2_c['total'] * $nilaic;
            $nilai_drainperiode2_d = $drain_periode2_d['total'] * $nilaid;

            $nilai_sungaiperiode2_a = $sungai_periode2_a['total'] * $nilaia;
            $nilai_sungaiperiode2_b = $sungai_periode2_b['total'] * $nilaib;
            $nilai_sungaiperiode2_c = $sungai_periode2_c['total'] * $nilaic;
            $nilai_sungaiperiode2_d = $sungai_periode2_d['total'] * $nilaid;

            $nilai_jalanperiode2 =  $nilai_jalanperiode2_a + $nilai_jalanperiode2_b + $nilai_jalanperiode2_c + $nilai_jalanperiode2_d;
            $nilai_pjuperiode2 =  $nilai_pjuperiode2_a + $nilai_pjuperiode2_b + $nilai_pjuperiode2_c + $nilai_pjuperiode2_d;
            $nilai_drainperiode2 =  $nilai_drainperiode2_a + $nilai_drainperiode2_b + $nilai_drainperiode2_c + $nilai_drainperiode2_d;
            $nilai_sungaiperiode2 =  $nilai_sungaiperiode2_a + $nilai_sungaiperiode2_b + $nilai_sungaiperiode2_c + $nilai_sungaiperiode2_d;
            
            $data['ikmjalan'] = @($nilai_jalanperiode2/$jumlah_jalan_periode2);
            $data['ikmpju'] = @($nilai_pjuperiode2/$jumlah_pju_periode2);
            $data['ikmdrain'] = @($nilai_drainperiode2/$jumlah_drain_periode2);
            $data['ikmsungai'] = @($nilai_sungaiperiode2/$jumlah_sungai_periode2);
            
            $data['persen_ikmjalan'] = ($data['ikmjalan']/4) * 100;
            $data['persen_ikmpju'] = ($data['ikmpju']/4) * 100;
            $data['persen_ikmdrain'] = ($data['ikmdrain']/4) * 100;
            $data['persen_ikmsungai'] = ($data['ikmsungai']/4) * 100;
           
		$this->load->template('home', $data);
	}

	function slide(){
		$id = $this->uri->segment(3);
		$data['title'] = "Slide";
		$data['slide'] = $this->m_slide->getSlide($id)->row_array();
	
      	$this->load->template('detail_slide', $data);
	}

	
	

}