<?php 
    if($this->session->has_userdata('connected')){
        $this->load->view("templates/header");	
        $this->load->view($contents); 
        $this->load->view("templates/footer");	
    }
    else{
        redirect('login');
    }
?>