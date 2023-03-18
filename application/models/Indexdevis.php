<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Indexdevis extends CI_Model {
        public function __construct()
        {
            parent::__construct();
        }
        
        public function getDevis()
        {   
            $sql="select*from devis";
            $query=$this->db->query($sql);
            $results = $query->result_array();
            return $results;
        }

        public function getPCG()
        {
            $sql="select*from PCG where id_entreprise=".$this->session->userdata('online')."";
            $query=$this->db->query($sql);
            $results = $query->result_array();
            return $results;
        }

        public function getJournal()
        {
            $sql="select*from journal where id_entreprise=".$this->session->userdata('online')."";
            $query=$this->db->query($sql);
            $results = $query->result_array();
            return $results;
        }


        public function getDE()
        {
            $sql="select * from devis";
            $query=$this->db->query($sql);
            $results = $query->result_array();
            return $results;
        }
        
    }
?>