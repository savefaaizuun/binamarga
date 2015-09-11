<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class M_misi extends CI_Model {
        
 
        function getAllMisi(){
            $query = $this->db->get('dbmp_misi');
            return $query;  
        }
        
        
        function getMisi($id){
            $query = $this->db->get_where('dbmp_misi', array('misi_id'=>$id));
            return $query->row();
        }

        function cek($misi_id){
            $this->db->where("misi_id",$misi_id);
            $query=$this->db->get("dbmp_misi");

            return $query;
        }

        function getMisi1(){
            $query = $this->db->query("SELECT * FROM dbmp_misi WHERE misi_id='1'");
            return $query;
        }

       

        function cekId($kode){
            $this->db->where("misi_id",$kode);
            return $this->db->get("dbmp_misi");
        }

        function update($id,$info){
            $this->db->where("misi_id",$id);
            $this->db->update("dbmp_misi",$info);
        }

        function simpan($info){
            $this->db->insert("dbmp_misi",$info);
            return $this->db->insert_id();
        }
    
    
        function hapus($misi_id){
        $this->db->where("misi_id",$misi_id);
        $this->db->delete("dbmp_misi");
    }

}           
