<?php
	
	class M_verifikasi extends CI_Model {
		
		function __construct()
		{
			parent::__construct();
		}
		
		function login($kode)
		{
       
			$this -> db -> select('voter_id, mobile, kode_verifikasi');
			$this -> db -> from('dbmp_voter');
			$this -> db -> where('kode_verifikasi', $kode);
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 1)
			{
				
				$result = $query->result();
				
				return $result;
			}
			else
			{
				return false;
			}
		}
		
	}
?>