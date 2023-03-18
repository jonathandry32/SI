<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entreprise extends CI_Controller {


    public function Apropos(){
        $data['title']='Gestion Compta';
        $data['description']='';
        $data['keywords']='';

        //	on charge la view qui contient le corps de la page
        $data['contents']='pages/APropos';

        //	on charge la page dans le template
        $data['de'] = $this->Entreprise_model->getde();
        $data['informations'] = $this->Entreprise_model->getInformation();
        $data['devisTenuCompte']= $this->Entreprise_model->getDevisName($data['informations']['devise_tenu_compte']);
        $this->load->view('template',$data);
    }

    public function AproposModification(){
        $data['title']='Gestion Compta';
        $data['description']='';
        $data['keywords']='';

        //	on charge la view qui contient le corps de la page
        $data['contents']='pages/AproposModification';

        //	on charge la page dans le template
        $data['informations'] = $this->Entreprise_model->getInformation();
        $data['devisTenuCompte']= $this->Entreprise_model->getDevisName($data['informations']['devise_tenu_compte']);
        $data['devisEquivalence']= $this->Entreprise_model->getDevisName($data['informations']['devise_equivalence']);
        $this->load->view('template',$data);
    }

    public function update(){
        $this->Entreprise_model->update();
    }
}