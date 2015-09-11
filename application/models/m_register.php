<?php
	
	class M_register extends CI_Model {
		
		function __construct()
		{
			parent::__construct();
		}

		function addVoter($info){
       		$this->db->insert('dbmp_voter', $info);
            $info['id_user'] = $this->db->insert_id();
            
            return $info['id_user'];
        }

		function cek($mobile){
	        $this->db->where('mobile',$mobile);
	        $query=$this->db->get('dbmp_voter');
	        
	        return $query;
	    }

	    function cekvotejalan($mobile){

	        $sql = "SELECT * FROM dbmp_polling WHERE mobile=$mobile AND kategori=1";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result; 
	        
	    }

	    function cekvotepju($mobile){

	        $sql = "SELECT * FROM dbmp_polling WHERE mobile=$mobile AND kategori=2";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result; 
	        
	    }

	    function cekvotedrain($mobile){

	        $sql = "SELECT * FROM dbmp_polling WHERE mobile=$mobile AND kategori=3";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result; 
	        
	    }

	    function cekvotesungai($mobile){

	        $sql = "SELECT * FROM dbmp_polling WHERE mobile=$mobile AND kategori=4";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result; 
	        
	    }


		
		function add_account($data)
		{
            $this->load->database();
			$this->db->insert('dbmp_voter',$data);
			
			return  mysql_insert_id();
		}
		
		function changeActiveState($key)
		{
			$this->load->database();
			$data = array(
               'active' => 1
            );

			$this->db->where('md5(voter_id)', $key);
			$this->db->update('dbmp_voter', $data);

			return true;
		}
	}
?>