<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class M_visi extends CI_Model {
        
        function getAllVisi(){
            $query = $this->db->get('dbmp_visi');
            return $query;  
        }
        
        function getvisi($id){
            $query = $this->db->get_where('dbmp_visi', array('visi_id'=>$id));
            return $query->row();
        }

        function cek($visi_id){
            $this->db->where("visi_id",$visi_id);
            $query=$this->db->get("dbmp_visi");

            return $query;
        }

        function cekId($kode){
            $this->db->where("visi_id",$kode);
            return $this->db->get("dbmp_visi");
        }

        function update($id,$info){
            $this->db->where("visi_id",$id);
            $this->db->update("dbmp_visi",$info);
        }
    
        function simpan($info){
            $this->db->insert("dbmp_visi",$info);
        }

       
        function hapus($visi_id){
        $this->db->where("visi_id",$visi_id);
        $this->db->delete("dbmp_visi");
    }
 }           
