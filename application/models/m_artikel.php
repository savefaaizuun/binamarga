<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class M_artikel extends CI_Model {
        

        function getAllArtikel(){
           $sql = "SELECT
                    *
                    FROM
                    dbmp_article
                    INNER JOIN dbmp_user ON dbmp_article.user_id = dbmp_user.user_id";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;  
        }
        
        function getArtikel($id){
            $query = $this->db->get_where('dbmp_article', array('article_id'=>$id));
            return $query;
        }

       

        function showArtikel(){
            $query = $this->db->query("SELECT * FROM dbmp_article ORDER BY create_at desc limit 3");
            return $query;
        }

        function get_all_artikel(){
        return $this->db->get('tbl_artikel');
    }


        function cek($article_id){
            $this->db->where("article_id",$article_id);
            $query=$this->db->get("dbmp_article");

            return $query;
        }

        function cekId($kode){
            $this->db->where("article_id",$kode);
            return $this->db->get("dbmp_article");
        }

        function update($id,$info){
            $this->db->where("article_id",$id);
            $this->db->update("dbmp_article",$info);
        }

        function simpan($info){
            $this->db->insert("dbmp_article",$info);
            return $this->db->insert_id();
        }

        function hapus($article_id){
        $this->db->where("article_id",$article_id);
        $this->db->delete("dbmp_article");
    }

}           
