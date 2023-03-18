<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Entreprise_model extends CI_Model
{


    public function getInformation()
    {
        $data = array();
        $sql = "SELECT * from Entreprise where id_entreprise = %s ";
        $idEntreprise = $this->session->userdata('online');
        $sql = sprintf($sql,$idEntreprise);
        $query = $this->db->query($sql);
        $data = $query->row_array();
        return $data;
    }

    public function getDevisName($idDevis)
    {
        $sql = "SELECT * from devis where id_devis = %s";
        $sql = sprintf($sql,$idDevis);
        $query = $this->db->query($sql);
        $data = $query->row_array();
        return $data['nom'];
    }

    public function getde()
    {
        $sql = "SELECT * from devis_equival join devis on devis_equival.id_devis=devis.id_devis where id_entreprise = %s";
        $sql = sprintf($sql,$this->session->userdata('online'));
        $query = $this->db->query($sql);
        $data = $query->result_array();
        return $data;
    }

    public function update(){

    }
    
}
