<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

    private $limit=8;

    public function __construct(){
            parent::__construct();
            $this->load->model('m_galeri');
        
        }

    public function index($offset=0,$order_column='id',$order_type='asc'){

        if(empty($offset)) $offset=0;
        if(empty($order_column)) $order_column='id';
        if(empty($order_type)) $order_type='asc';

        $data['listJalan']=$this->m_galeri->getAllJalan($this->limit,$offset,$order_column,$order_type)->result();

    	$data['title'] = "Gallery";
    	$data['listJalan4'] = $this->m_galeri->getFotoJalan4();

        $config['base_url']=site_url('gallery/index/');
        $config['total_rows']=$this->m_galeri->jumlahjalan();
        $config['per_page']=$this->limit;
        $config['uri_segment']=3;
        $this->pagination->initialize($config);
        $data['pagination']=$this->pagination->create_links();
         
        $this->load->template('gallery/index', $data);
        
    }

    public function pju($offset=0,$order_column='id',$order_type='asc'){

        if(empty($offset)) $offset=0;
        if(empty($order_column)) $order_column='id';
        if(empty($order_type)) $order_type='asc';

        $data['listPju']=$this->m_galeri->getAllPju($this->limit,$offset,$order_column,$order_type)->result();

        $data['title'] = "Gallery";
        $data['listPju4'] = $this->m_galeri->getFotoPju4();

        $config['base_url']=site_url('gallery/pju/');
        $config['total_rows']=$this->m_galeri->jumlahjalan();
        $config['per_page']=$this->limit;
        $config['uri_segment']=3;
        $this->pagination->initialize($config);
        $data['pagination']=$this->pagination->create_links();
        
        $this->load->template('gallery/pju', $data);
    }

    public function drainase($offset=0,$order_column='id',$order_type='asc'){

        if(empty($offset)) $offset=0;
        if(empty($order_column)) $order_column='id';
        if(empty($order_type)) $order_type='asc';

        $data['listDrainase']=$this->m_galeri->getAllDrain($this->limit,$offset,$order_column,$order_type)->result();

        $data['title'] = "Gallery";
        $data['listDrainase4'] = $this->m_galeri->getFotoDrainase4();

        $config['base_url']=site_url('gallery/drainase/');
        $config['total_rows']=$this->m_galeri->jumlahdrain();
        $config['per_page']=$this->limit;
        $config['uri_segment']=3;
        $this->pagination->initialize($config);
        $data['pagination']=$this->pagination->create_links();
        
        $this->load->template('gallery/drainase', $data);
    }

    public function sungai($offset=0,$order_column='id',$order_type='asc'){

        if(empty($offset)) $offset=0;
        if(empty($order_column)) $order_column='id';
        if(empty($order_type)) $order_type='asc';

        $data['listSungai']=$this->m_galeri->getAllSungai($this->limit,$offset,$order_column,$order_type)->result();

        $data['title'] = "Gallery";
        $data['listSungai4'] = $this->m_galeri->getFotoSungai4();

        $config['base_url']=site_url('gallery/sungai/');
        $config['total_rows']=$this->m_galeri->jumlahsungai();
        $config['per_page']=$this->limit;
        $config['uri_segment']=3;
        $this->pagination->initialize($config);
        $data['pagination']=$this->pagination->create_links();
        
        $this->load->template('gallery/sungai', $data);
    }

}