<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlanComptable extends CI_Controller {


    public function readCsvFile(){
        if(isset($_FILES['plan']) && $_FILES['plan']['error'] == 0) {
         $filename = $_FILES['plan']['tmp_name'];
            // if(pathinfo($filename, PATHINFO_EXTENSION) == 'txt') {
            //     // Le fichier est bien un fichier .txt
            //     // Traitement du fichier
            // } else {
            //     // Le fichier n'est pas un fichier .txt
            //     echo "Le fichier doit être un fichier .txt";
            // }
            $this->PlanComptable_model->readCsvFile($filename);
        }
        
    }

    public function exporter(){
        $filename = $this->input->post("filename")."".".txt";
        $chemin = 'D:/SI_export/'.''.$filename;
        $this->PlanComptable_model->exporter($chemin);

        redirect(base_url('Pages/'));

    }

    public function readCsvJFile(){
        if(isset($_FILES['plan']) && $_FILES['plan']['error'] == 0) {
         $filename = $_FILES['plan']['tmp_name'];
            // if(pathinfo($filename, PATHINFO_EXTENSION) == 'txt') {
            //     // Le fichier est bien un fichier .txt
            //     // Traitement du fichier
            // } else {
            //     // Le fichier n'est pas un fichier .txt
            //     echo "Le fichier doit être un fichier .txt";
            // }
            $this->PlanComptable_model->readCsvJFile($filename);
        }   
    }

    public function Jexporter(){
        $filename = $this->input->post("filename")."".".txt";
        $chemin = 'D:/SI_export/J'.''.$filename;
        $this->PlanComptable_model->Jexporter($chemin);
        redirect(base_url('Pages/'));
    }

}