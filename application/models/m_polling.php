<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class M_polling extends CI_Model {
        
        
        function cek($voter_id){

        $this->db->where('voter_id',$voter_id);
        $query=$this->db->get('dbmp_voter');
        
        return $query;
        }

        function cekpolling($id){
        $this->db->where('polling_id',$id);
        $query=$this->db->get('dbmp_polling');
        
        return $query;
    }

        function getAllPolling(){
            $query = $this->db->get('dbmp_polling');
            return $query;  
        }

        function getKuisionerJalan(){

            $sql = "SELECT * FROM dbmp_kuisioner WHERE kategori_id=1";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;      
        }

        function getKuisionerPju(){

            $sql = "SELECT * FROM dbmp_kuisioner WHERE kategori_id=2";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;      
        }

        function getKuisionerDrain(){

            $sql = "SELECT * FROM dbmp_kuisioner WHERE kategori_id=3";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;      
        }

        function getKuisionerSungai(){

            $sql = "SELECT * FROM dbmp_kuisioner WHERE kategori_id=4";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;      
        }

        
        function getJawaban(){

            $sql = "SELECT * FROM dbmp_jawaban";
            $result = $this->db->query($sql);
            $this->firephp->log($this->db->last_query());
            return $result;      
        }

        function simpan($info){
            $this->db->insert("dbmp_polling",$info);
            return $this->db->insert_id();
        }

        function update($id,$info){
            $this->db->where("polling_id",$id);
            $this->db->update("dbmp_polling",$info);
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

       

        function getCountPolling(){
            $query = "SELECT COUNT(polling_id) as polling FROM dbmp_polling";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountPollingJlnPeriode1(){
            $query = "SELECT COUNT(kategori) as polling FROM dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountPollingJlnPeriode2(){
            $query = "SELECT COUNT(kategori) as polling FROM dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountPollingPjuPeriode1(){
            $query = "SELECT COUNT(kategori) as polling FROM dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountPollingPjuPeriode2(){
            $query = "SELECT COUNT(kategori) as polling FROM dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountPollingDrainPeriode1(){
            $query = "SELECT COUNT(kategori) as polling FROM dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountPollingDrainPeriode2(){
            $query = "SELECT COUNT(kategori) as polling FROM dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountPollingSungaiPeriode1(){
            $query = "SELECT COUNT(kategori) as polling FROM dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountPollingSungaiPeriode2(){
            $query = "SELECT COUNT(kategori) as polling FROM dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountJalanPeriode1_A(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              
            ) src
            where value = 1";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountJalanPeriode1_B(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              
            ) src
            where value = 2";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountJalanPeriode1_C(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              
            ) src
            where value = 3";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountJalanPeriode1_D(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              
            ) src
            where value = 4";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        //jalan periode 2

        function CountJalanPeriode2_A(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              
            ) src
            where value = 1";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }


        function CountJalanPeriode2_B(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              
            ) src
            where value = 2";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

            function CountJalanPeriode2_C(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              
            ) src
            where value = 3";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

            function CountJalanPeriode2_D(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=1 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              
            ) src
            where value = 4";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }


        function CountPjuPeriode1_A(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              
            ) src
            where value = 1";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountPjuPeriode1_B(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              
            ) src
            where value = 2";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountPjuPeriode1_C(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              
            ) src
            where value = 3";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountPjuPeriode1_D(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              
            ) src
            where value = 4";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountPjuPeriode2_A(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              
            ) src
            where value = 1";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountPjuPeriode2_B(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              
            ) src
            where value = 2";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountPjuPeriode2_C(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              
            ) src
            where value = 3";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountPjuPeriode2_D(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=2 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              
            ) src
            where value = 4";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }


        function CountDrainPeriode1_A(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              
            ) src
            where value = 1";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountDrainPeriode1_B(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              
            ) src
            where value = 2";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountDrainPeriode1_C(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              
            ) src
            where value = 3";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountDrainPeriode1_D(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              
            ) src
            where value = 4";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountDrainPeriode2_A(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              
            ) src
            where value = 1";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountDrainPeriode2_B(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              
            ) src
            where value = 2";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountDrainPeriode2_C(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              
            ) src
            where value = 3";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountDrainPeriode2_D(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=3 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              
            ) src
            where value = 4";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        
        function CountSungaiPeriode1_A(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              
            ) src
            where value = 1";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountSungaiPeriode1_B(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              
            ) src
            where value = 2";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountSungaiPeriode1_C(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              
            ) src
            where value = 3";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountSungaiPeriode1_D(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 1 AND MONTH(create_at) <= 6
              
            ) src
            where value = 4";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountSungaiPeriode2_A(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              
            ) src
            where value = 1";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

        function CountSungaiPeriode2_B(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              
            ) src
            where value = 2";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }    

        function CountSungaiPeriode2_C(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              
            ) src
            where value = 3";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }    

        function CountSungaiPeriode2_D(){
            $query = "SELECT COUNT(*) total
            FROM
            (
              SELECT polling_id, mobile, 'no_1' col, no_1 AS VALUE
              FROM dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              UNION ALL
              SELECT polling_id, mobile, 'no_2' col, no_2 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_3' col, no_3 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_4' col, no_4 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_5' col, no_5 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_6' col, no_6 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_7' col, no_7 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_8' col, no_8 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_9' col, no_9 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_10' col, no_10 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_11' col, no_11 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_12' col, no_12 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_13' col, no_13 AS VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
                UNION ALL
              SELECT polling_id, mobile, 'no_14' col, no_14 as VALUE
              from dbmp_polling WHERE kategori=4 AND MONTH(create_at) >= 7 AND MONTH(create_at) <= 12
              
            ) src
            where value = 4";
            $result = $this->db->query($query);
            //$result = mysql_query($query) or die(mysql_error());
            return $result;
        }

}           
