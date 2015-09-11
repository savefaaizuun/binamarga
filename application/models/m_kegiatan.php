<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class M_kegiatan extends CI_Model {
        

        function getBidang1(){
            $sql = "SELECT
                    *
                    FROM
                    dbmp_kegiatan
                    INNER JOIN dbmp_user ON dbmp_kegiatan.user_id = dbmp_user.user_id where kategori=1";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;  
        }

        function getBidang2(){
            $sql = "SELECT
                    *
                    FROM
                    dbmp_kegiatan
                    INNER JOIN dbmp_user ON dbmp_kegiatan.user_id = dbmp_user.user_id where kategori=2";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;  
        }

        function getBidang3(){
            $sql = "SELECT
                    *
                    FROM
                    dbmp_kegiatan
                    INNER JOIN dbmp_user ON dbmp_kegiatan.user_id = dbmp_user.user_id where kategori=3";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;  
        }

        function getBidang4(){
            $sql = "SELECT
                    *
                    FROM
                    dbmp_kegiatan
                    INNER JOIN dbmp_user ON dbmp_kegiatan.user_id = dbmp_user.user_id where kategori=4";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;  
        }

        function getBidang5(){
            $sql = "SELECT
                    *
                    FROM
                    dbmp_kegiatan
                    INNER JOIN dbmp_user ON dbmp_kegiatan.user_id = dbmp_user.user_id where kategori=5";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;  
        }
        
        function getKegiatan($id){
            $query = $this->db->get_where('dbmp_kegiatan', array('kegiatan_id'=>$id));
            return $query;
        }

        

       

        function showArtikel(){
            $query = $this->db->query("SELECT * FROM dbmp_kegiatan ORDER BY create_at desc limit 3");
            return $query;
        }

        function get_all_artikel(){
        return $this->db->get('tbl_artikel');
    }


        function cek($kegiatan_id){
            $this->db->where("kegiatan_id",$kegiatan_id);
            $query=$this->db->get("dbmp_kegiatan");

            return $query;
        }

        function cekId($kode){
            $this->db->where("kegiatan_id",$kode);
            return $this->db->get("dbmp_kegiatan");
        }

        function update($id,$info){
            $this->db->where("kegiatan_id",$id);
            $this->db->update("dbmp_kegiatan",$info);
        }

        function simpan($info){
            $this->db->insert("dbmp_kegiatan",$info);
            return $this->db->insert_id();
        }

        function hapus($kegiatan_id){
        $this->db->where("kegiatan_id",$kegiatan_id);
        $this->db->delete("dbmp_kegiatan");
    }

}           
