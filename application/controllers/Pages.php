<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		//	definition des donnees variables du template
		$data['title']='Gestion Compta';
		$data['description']='';
		$data['keywords']='';

		//	on charge la view qui contient le corps de la page
		$data['contents']='pages/insertPCG';

		//	on charge la page dans le template
		$this->load->view('template',$data);
	}		
	
	public function insertPCG()
	{
		//	definition des donnees variables du template
		$data['title']='Gestion Compta';
		$data['description']='';
		$data['keywords']='';

		//	on charge la view qui contient le corps de la page
		$data['contents']='pages/insertPCG';

		//	on charge la page dans le template
		$this->load->view('template',$data);
	}	

	public function listPCG()
	{
		$this->load->model('Indexdevis');
		//	definition des donnees variables du template
		$data['title']='Gestion Compta';
		$data['description']='';
		$data['keywords']='';
		$data['list']=$this->Indexdevis->getPCG();
		//	on charge la view qui contient le corps de la page
		$data['contents']='pages/listPCG';

		//	on charge la page dans le template
		$this->load->view('template',$data);
	}	

	public function updatePCG()
	{
		$id_pcg=$this->input->post('id_pcg');
		$num=$this->input->post('num');
		$intitule=$this->input->post('intitule');

		//	definition des donnees variables du template
		$data['title']='Gestion Compta';
		$data['description']='';
		$data['keywords']='';
		$data['id_pcg']=$id_pcg;
		$data['num']=$num;
		$data['intitule']=$intitule;
	
		//	on charge la view qui contient le corps de la page
		$data['contents']='pages/updatePCG';
	
		//	on charge la page dans le template
		$this->load->view('template',$data);
	}

	public function insertJournal()
	{
		//	definition des donnees variables du template
		$data['title']='Gestion Compta';
		$data['description']='';
		$data['keywords']='';

		//	on charge la view qui contient le corps de la page
		$data['contents']='pages/insertJournal';

		//	on charge la page dans le template
		$this->load->view('template',$data);
	}	

	public function listJournal()
	{
		$this->load->model('Indexdevis');
		//	definition des donnees variables du template
		$data['title']='Gestion Compta';
		$data['description']='';
		$data['keywords']='';
		$data['list']=$this->Indexdevis->getJournal();
		//	on charge la view qui contient le corps de la page
		$data['contents']='pages/listJournal';

		//	on charge la page dans le template
		$this->load->view('template',$data);
	}	
	
	public function insertDevisEquivalence()
	{
		//	definition des donnees variables du template
		$data['title']='Gestion Compta';
		$data['description']='';
		$data['keywords']='';

		//	on charge la view qui contient le corps de la page
		$data['list']=$this->Indexdevis->getDE();
		$data['contents']='pages/insertDevisEquivalence';
		//	on charge la page dans le template
		$this->load->view('template',$data);
	}	

}
?>