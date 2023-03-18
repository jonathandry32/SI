<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }
    public function check($user,$mdp)
    {
        $array = array('nom_entreprise' => $user, 'pass' => $mdp);
        $this->db->where($array);
        $query = $this->db->get('entreprise');
        $results = $query->result_array();
        foreach($results as $result)
        {
            $this->session->set_userdata('online',$result['id_entreprise']);
            $this->session->set_userdata('name',$result['nom_entreprise']);
            return true;
        }
        return false;
    }
}
