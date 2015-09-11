<?php 
Class Model_user extends CI_Model {
        function login($kode) {
            $this -> db -> select('voter_id, mobile, kode_verifikasi'); 
            $this -> db -> from('dbmp_voter'); //nama tabel pada database
            //$this -> db -> where('mobile', $mobile);
            $this -> db -> where('kode_verifikasi', $kode);
            $this -> db -> limit(1); //menandakan data ditemukan atau sama dengan satu
            $query = $this -> db -> get();

            if($query -> num_rows() == 1) {
                return $query->result();
            }
            else {
                return false;
            }
        }
    }
     