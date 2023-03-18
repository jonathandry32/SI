<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index(){
		$this->load->model('Indexdevis');
		//	definition des donnees variables du template
		$data['title']='Gestion Compta';
		$data['description']='';
		$data['keywords']='';
		$data['devis']=$this->Indexdevis->getDevis();

		//	on charge la page dans le template
		if($this->session->userdata('online')){
			$data['title']='Gestion Compta';
			$data['description']='';
			$data['keywords']='';

			//	on charge la view qui contient le corps de la page
			$data['contents']='pages/insertPCG';

			//	on charge la page dans le template
			$this->load->view('template',$data);
		}
		else{
			$this->load->view('pages/login',$data);

		}
	}

		public function check()
		{
			$user=$this->input->post('name');
			$mdp=$this->input->post('mdp');
			$this->load->model('Mlogin');
			if($this->Mlogin->check($user,$mdp)==true)
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
			else
			{
				redirect('Login');
			}
		}

	public function sign(){
		$this->load->model('Indexdevis');
		$data['title']='Gestion Compta';
		$data['description']='';
		$data['keywords']='';
		$data['devis']=$this->Indexdevis->getDevis();
		$this->load->view('pages/signin',$data);
	}

	public function logout(){
		$this->session->unset_userdata('online');
		redirect('login');
	}
}
