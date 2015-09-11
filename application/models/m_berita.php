<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class M_berita extends CI_Model {
        

        function getAllBerita(){
            $sql = "SELECT
                    *
                    FROM
                    dbmp_berita
                    INNER JOIN dbmp_user ON dbmp_berita.user_id = dbmp_user.user_id";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;  
        }

        
        function getBerita($id){
            $query = $this->db->get_where('dbmp_berita', array('berita_id'=>$id));
            return $query;
        }

        function showBerita(){
            $query = $this->db->query("SELECT * FROM dbmp_berita ORDER BY create_at desc limit 3");
            return $query;
        }


        function cek($berita_id){
            $this->db->where("berita_id",$berita_id);
            $query=$this->db->get("dbmp_berita");

            return $query;
        }

        function cekId($kode){
            $this->db->where("berita_id",$kode);
            return $this->db->get("dbmp_berita");
        }

        function update($id,$info){
            $this->db->where("berita_id",$id);
            $this->db->update("dbmp_berita",$info);
        }

        function simpan($info){
            $this->db->insert("dbmp_berita",$info);
            return $this->db->insert_id();
        }

        function hapus($berita_id){
        $this->db->where("berita_id",$berita_id);
        $this->db->delete("dbmp_berita");
    }

}           
