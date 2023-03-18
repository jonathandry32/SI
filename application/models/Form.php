<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }
    
    public function insertForm($nom_entreprise,$pass,$tel,$telecopie,$objet,$logo,
    $dirigeant,$siege,$date_creation,$num_identification_fiscale,
    $num_statistique,$num_registre_commerce,$date_debut_exercice,$devise_tenu_compte,$devise_equivalence)
    {
        $requete=array('nom_entreprise'=>$nom_entreprise,'pass'=>$pass,'tel'=>$tel,'telecopie'=>$telecopie,'objet'=>$objet,'logo'=>$logo,'dirigeant'=>$dirigeant,
        'siege'=>$siege,'date_creation'=>$date_creation,'num_identification_fiscale'=>$num_identification_fiscale,
        'num_statistique'=>$num_statistique,'num_registre_commerce'=>$num_registre_commerce,
        'date_debut_exercice'=>$date_debut_exercice,'devise_tenu_compte'=>$devise_tenu_compte,
        'devise_equivalence'=>$devise_equivalence);
        $this->db->insert('entreprise',$requete);
    }

    public function insertPCG($id_entreprise,$num,$intitule)
    {
        $requete=array("id_entreprise"=>$id_entreprise,"num"=>str_pad($num,5,"0",STR_PAD_RIGHT),"intitule"=>$intitule);
        $this->db->insert('pcg',$requete);
    }

    public function deletePCG($id_entreprise,$id_pcg)
    {
        $this->db->where('id_entreprise',$id_entreprise);
        $this->db->where('id_pcg',$id_pcg);
        $this->db->delete('pcg');
    }

    public function updatePCG($id_entreprise,$id_pcg,$num,$intitule)
    {
        $data=array(
            'num'=>$num,
            'intitule'=>$intitule
        );
        $this->db->where('id_entreprise',$id_entreprise);
        $this->db->where('id_pcg',$id_pcg);
        $this->db->update('pcg',$data);
    }

     public function recherchePCG($keyword)
    {
        $this->db->select('*');
        $this->db->from("pcg");
        if(is_numeric($keyword))
        {
            $this->db->like('num', $keyword, 'after');
        }
        else
        {
            $this->db->like('intitule', $keyword);
        }
        $this->db->where('id_entreprise',$this->session->userdata('online'));
        $this->db->order_by('num', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }


    public function insertJournal($id_entreprise,$num,$debit,$credit,$date)
    {
        $requete=array("id_entreprise"=>$id_entreprise,"num_compte"=>str_pad($num,5,"0",STR_PAD_RIGHT),"debit"=>$debit,"credit"=>$credit,"daty"=>$date);
        $this->db->insert('journal',$requete);
    }

    public function insertDE($id_entreprise,$id_devis,$taux)
    {
        $requete=array("id_entreprise"=>$id_entreprise,"id_devis"=>$id_devis,"taux"=>$taux);
        $this->db->insert('devis_equival',$requete);
    }






}
