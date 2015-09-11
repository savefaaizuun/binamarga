<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class M_kuisioner extends CI_Model {
        
        
        function cek($voter_id){

        $this->db->where('voter_id',$voter_id);
        $query=$this->db->get('dbmp_voter');
        
        return $query;
        }

        function getAllPolling(){
            $sql = "SELECT
                    *
                    FROM
                    dbmp_polling
                    INNER JOIN dbmp_question ON dbmp_polling.question_id = dbmp_question.question_id";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;      
        }

        function getPollingId($id){
            $sql = "SELECT
                    *
                    FROM
                    dbmp_polling
                    INNER JOIN dbmp_question ON dbmp_polling.question_id = dbmp_question.question_id WHERE polling_id=$id";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;      
        }

        function getAllKuisioner(){

            $query = $this->db->get('tabel_kuisioner');
            return $query;  

        }

        function getKuisionerJalan(){

            $sql = "SELECT * FROM tabel_kuisioner WHERE kategori_id=1";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;      
        }

        function getKuisionerJalanid($id){

            $sql = "SELECT * FROM tabel_kuisioner WHERE kuisioner_id= $id AND kategori_id=1";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;      
        }

        function getJawaban(){

            $sql = "SELECT * FROM tabel_jawaban";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;      
        }

        function getQuestionPjuid($id){

            $sql = "SELECT * FROM dbmp_question WHERE question_id= $id AND category_id=2";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;      
        }

        function getQuestionDrainid($id){

            $sql = "SELECT * FROM dbmp_question WHERE question_id= $id AND category_id=3";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;      
        }

        function getQuestionSungaiid($id){

            $sql = "SELECT * FROM dbmp_question WHERE question_id= $id AND category_id=4";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;      
        }

      
        function getAnswer($cat_answer_id){

            //$cat_answer_id = $this->uri->segment(3);
            $sql = "SELECT * FROM dbmp_answer WHERE cat_answer_id=".$cat_answer_id;
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;      
        }

        function getAllVoter(){
            $sql = "SELECT
                    *
                    FROM
                    dbmp_voter";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;      
        }

        function getVoterId($voter_id){

            //$cat_answer_id = $this->uri->segment(3);
            $sql = "SELECT * FROM dbmp_voter WHERE voter_id=".$voter_id;
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;      
        }

        public function addVote($data){

            $this->db->insert('dbmp_polling', $data);
            
        }

        function getJalanAvg(){

            $query = "SELECT AVG(answer_id) FROM dbmp_polling INNER JOIN dbmp_question ON dbmp_polling.question_id = dbmp_question.question_id WHERE category_id=1";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
            

            //$cat_answer_id = $this->uri->segment(3);
            /*$sql = "SELECT AVG(answer_id) FROM dbmp_polling";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;  */    
        }

        function getPjuAvg(){
            $query = "SELECT AVG(answer_id) FROM dbmp_polling INNER JOIN dbmp_question ON dbmp_polling.question_id = dbmp_question.question_id WHERE category_id=2";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function getDrainAvg(){
            $query = "SELECT AVG(answer_id) FROM dbmp_polling INNER JOIN dbmp_question ON dbmp_polling.question_id = dbmp_question.question_id WHERE category_id=3";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }
        function getSungaiAvg(){
            $query = "SELECT AVG(answer_id) FROM dbmp_polling INNER JOIN dbmp_question ON dbmp_polling.question_id = dbmp_question.question_id WHERE category_id=4";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

}           
