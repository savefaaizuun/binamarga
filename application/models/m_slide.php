<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class M_slide extends CI_Model {
        
 
        function getAllSlide(){
            $query = $this->db->get('dbmp_slide');
            return $query;  
        }
        
        function getSlide($id){
            $query = $this->db->get_where('dbmp_slide', array('slide_id'=>$id));
            return $query;
        }

        function cek($slide_id){
            $this->db->where("slide_id",$slide_id);
            $query=$this->db->get("dbmp_slide");

            return $query;
        }

        function getSlide1(){

            $sql = "SELECT * FROM dbmp_slide WHERE slide_id=1";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result; 
            
        }

        function getSlide2(){

            $sql = "SELECT * FROM dbmp_slide WHERE slide_id=2";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result; 
            
        }

        function getSlide3(){

            $sql = "SELECT * FROM dbmp_slide WHERE slide_id=3";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result; 
            
        }

        function cekId($kode){
            $this->db->where("slide_id",$kode);
            return $this->db->get("dbmp_slide");
        }

        function update($id,$info){
            $this->db->where("slide_id",$id);
            $this->db->update("dbmp_slide",$info);
        }

        function simpan($info){
            $this->db->insert("dbmp_slide",$info);
            return $this->db->insert_id();
        }
        
        function hapus($slide_id){
        $this->db->where("slide_id",$slide_id);
        $this->db->delete("dbmp_slide");
    }

}           
