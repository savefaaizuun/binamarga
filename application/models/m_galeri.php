<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class M_galeri extends CI_Model {
        
        
        function getAllJalan($limit=4,$offset=0,$order_column='',$order_type='asc'){
            if(empty($order_column) || empty($order_type))
                $this->db->order_by('id','asc');
            else
                $this->db->order_by($order_column,$order_type);
            return $this->db->get('dbmp_galeri',$limit,$offset);
        }

        function jumlahjalan(){
            
            return $this->db->count_all('dbmp_galeri');
        }

        function getAllPju($limit=4,$offset=0,$order_column='',$order_type='asc'){
            if(empty($order_column) || empty($order_type))
                $this->db->order_by('id','asc');
            else
                $this->db->order_by($order_column,$order_type);
            return $this->db->get('dbmp_galeri_pju',$limit,$offset);
        }

        function jumlahpju(){
            
            return $this->db->count_all('dbmp_galeri_pju');
        }

        function getAllDrain($limit=4,$offset=0,$order_column='',$order_type='asc'){
            if(empty($order_column) || empty($order_type))
                $this->db->order_by('id','asc');
            else
                $this->db->order_by($order_column,$order_type);
            return $this->db->get('dbmp_galeri_drainase',$limit,$offset);
        }

        function jumlahdrain(){
            
            return $this->db->count_all('dbmp_galeri_drainase');
        }

        function getAllSungai($limit=4,$offset=0,$order_column='',$order_type='asc'){
            if(empty($order_column) || empty($order_type))
                $this->db->order_by('id','asc');
            else
                $this->db->order_by($order_column,$order_type);
            return $this->db->get('dbmp_galeri_sungai',$limit,$offset);
        }

        function jumlahsungai(){
            
            return $this->db->count_all('dbmp_galeri_sungai');
        }

        function getFotoJalan(){

            $query = $this->db->get('dbmp_galeri');
            return $query;      
        }

        function getFotoPju(){

            $query = $this->db->get('dbmp_galeri_pju');
            return $query;      
        }

        function getFotoDrainase(){

            $query = $this->db->get('dbmp_galeri_drainase');
            return $query;      
        }

        function getFotoSungai(){

            $query = $this->db->get('dbmp_galeri_sungai');
            return $query;      
        }

        function getFotoJalan4(){
            $query = $this->db->query("SELECT * FROM dbmp_galeri ORDER BY create_at desc limit 4");
            return $query;
        }

        function getFotoPju4(){
            $query = $this->db->query("SELECT * FROM dbmp_galeri_pju ORDER BY create_at desc limit 4");
            return $query;
        }

        function getFotoDrainase4(){
            $query = $this->db->query("SELECT * FROM dbmp_galeri_drainase ORDER BY create_at desc limit 4");
            return $query;
        }

        function getFotoSungai4(){
            $query = $this->db->query("SELECT * FROM dbmp_galeri_sungai ORDER BY create_at desc limit 4");
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
