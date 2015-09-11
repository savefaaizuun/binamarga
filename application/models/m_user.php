<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class M_user extends CI_Model {
        
        
        function cek($username,$password){
            $this->db->where("username",$username);
            $this->db->where("password",$password);
            return $this->db->get("dbmp_user");
        }

        function getAllUser(){
            $query = $this->db->get('dbmp_user');
            return $query;  
        }
        
        
        function getUser($id){
            $query = $this->db->get_where('dbmp_user', array('user_id'=>$id));
            return $query->row();
        }


        function getuser1(){
            $query = $this->db->query("SELECT * FROM dbmp_user WHERE user_id='1'");
            return $query;
        }

       function cekUsername($user){
            $this->db->where("username",$user);
            return $this->db->get("dbmp_user");
        }

        function cekId($kode){
            $this->db->where("user_id",$kode);
            return $this->db->get("dbmp_user");
        }

        function update($id,$info){
            $this->db->where("user_id",$id);
            $this->db->update("dbmp_user",$info);
        }

        function simpan($info){
            $this->db->insert("dbmp_user",$info);
            return $this->db->insert_id();
        }
    
    
        function hapus($user_id){
        $this->db->where("user_id",$user_id);
        $this->db->delete("dbmp_user");
    }

}           
