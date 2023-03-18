<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertForm extends CI_Controller {

	public function index()
	{
        $this->load->helper('url');
        $this->load->model('Form');
        $nom_entreprise=$this->input->post('nom_entreprise');
        $pass=$this->input->post('pass');
        $tel=$this->input->post('tel');
        $telecopie=$this->input->post('telecopie');
        $objet=$this->input->post('objet');
        $dirigeant=$this->input->post('dirigeant');
        $siege=$this->input->post('siege');
        $date_creation=$this->input->post('date_creation');
        $num_identification_fiscale=$this->input->post('num_identification_fiscale');
        $num_statistique=$this->input->post('num_statistique');
        $num_registre_commerce=$this->input->post('num_registre_commerce');
        // $status=$this->input->post('status');
        $date_debut_exercice=$this->input->post('date_debut_exercice');
        $devise_tenu_compte=$this->input->post('devise_tenu_compte');
        $devise_equivalence=$this->input->post('devise_equivalence');
        // $plan_comptable=$this->input->post('plan_comptable');


        if(!empty($_FILES['logo']['name'])){ 
            // Set preference 
            $config['upload_path'] = 'assets/file/img/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
            $config['max_size'] = '100000'; // max_size in kb 
            $config['file_name'] = uniqid(); 
            // Load upload library 
            $this->load->library('upload',$config); 

            // File upload
            if($this->upload->do_upload('logo')){ 
                // Get data about the file
                $uploadData = $this->upload->data(); 
                $filename = $uploadData['file_name']; 
                $data['response'] = 'Le fichier '.$filename.' a été téléchargé avec succès.'; 
                $extension = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
                $logo=$config['file_name'].".".$extension;
                $this->Form->insertForm($nom_entreprise,$pass,$tel,$telecopie,$objet,$logo,$dirigeant,$siege,$date_creation,$num_identification_fiscale,
                $num_statistique,$num_registre_commerce,$date_debut_exercice,$devise_tenu_compte,$devise_equivalence);
            }else{ 
                $data['response'] = 'Erreur lors du téléchargement du fichier: '.$this->upload->display_errors(); 
            } 
        }



		//	definition des donnees variables du template
		$data['title']='Gestion Compta';
		$data['description']='';
		$data['keywords']='';

		//	on charge la page dans le template
		$this->load->view('pages/login',$data);
	}		
    
    public function insertPCG()
    {
        $this->load->model('Form');

        $num=$this->input->post('num');
        $intitule=$this->input->post('intitule');

        $this->Form->insertPCG($this->session->userdata('online'),$num,$intitule);

        redirect('Pages/listPCG');
    }

    public function deletePCG()
    {
        $this->load->model('Form');

        $id=$this->input->post('id');

        $this->Form->deletePCG($this->session->userdata('online'),$id);

        redirect('Pages/listPCG');
    }

    public function updatePCG()
    {
        $this->load->model('Form');

        $id_pcg=$this->input->post('id_pcg');
        $num=$this->input->post('num');
        $intitule=$this->input->post('intitule');

        $this->Form->updatePCG($this->session->userdata('online'),$id_pcg,str_pad($num,5,"0",STR_PAD_RIGHT),$intitule);
        redirect('Pages/listPCG');
    }

    public function rechercher()
    {
        $this->load->model('Form');

        $mot=$this->input->post('mot');
        $list=$this->Form->recherchePCG($mot);

		//	definition des donnees variables du template
		$data['title']='Gestion Compta';
		$data['description']='';
		$data['keywords']='';
		$data['list']=$list;
		//	on charge la view qui contient le corps de la page
		$data['contents']='pages/resultSearch';

		//	on charge la page dans le template
		$this->load->view('template',$data);
    }
    

    public function insertJournal()
    {
        $this->load->model('Form');
        $num=$this->input->post('num');
        $debit=$this->input->post('debit');
        $credit=$this->input->post('credit');
        $date=$this->input->post('date');

        $this->Form->insertJournal($this->session->userdata('online'),$num,$debit,$credit,$date);
        redirect('Pages/listJournal');
    }

    public function insertDevisEquivalence()
    {
        $this->load->model('Form');

        $num=$this->input->post('dev');
        $intitule=$this->input->post('taux');
        $this->Form->insertDE($this->session->userdata('online'),$num,$intitule);
        redirect('Entreprise/Apropos');
    }
    
}
?>