<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PlanComptable_model extends CI_Model
{
    public function readCsvFile($filename)
    {
        //ouverture du fichier
        $file = fopen($filename, "r");
        //lire la premieres ligne ,1000 longueur max du mot entre les separateurs
        $headers = fgetcsv($file, 1000, ",");
        //lire le contenus
        while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
            $numeroDeCompte = $data[0];
            $intitule = $data[1];

            $this->Form->insertPCG($this->session->userdata('online'), $numeroDeCompte, $intitule);
        }
        //fermeture du fichier
        fclose($file);
    }

    public function exporter($filename)
    {
        $this->PlanComptable_model->writeCsvFile($filename);
    }


    public function writeCsvFile($filename)
    {
        $file = fopen($filename, "w") or die("impossible");
        $pcgs = $this->PlanComptable_model->getPcg();
        $line = 'numero,intitule';
        fwrite($file, $line);
        fwrite($file, "\n");
        foreach ($pcgs as $pcg) {
            $line = $pcg['num'] . ',' . $pcg['intitule'] . '';
            fwrite($file, $line);
            fwrite($file, "\n");
        }

        // fermer le fichier
        fclose($file);
    }

    public function getPcg()
    {
        $data = array();
        $sql = "SELECT * from Pcg order by num asc ";
        $query = $this->db->query($sql);
        foreach ($query->result_array() as $row) {
            $data[] = $row;
        }
        return $data;
    }

    public function readCsvJFile($filename)
    {
        //ouverture du fichier
        $file = fopen($filename, "r");
        //lire la premieres ligne ,1000 longueur max du mot entre les separateurs
        $headers = fgetcsv($file, 1000, ",");
        //lire le contenus
        while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
            $numeroDeCompte = $data[0];
            $debit = $data[1];
            $credit = $data[2];
            $date = $data[3];
            $this->Form->insertJournal($this->session->userdata('online'), $numeroDeCompte, $debit, $credit, $date);
        }
        //fermeture du fichier
        fclose($file);
    }

    public function Jexporter($filename)
    {
        $this->PlanComptable_model->writeCsvJFile($filename);
    }

    public function writeCsvJFile($filename)
    {
        $file = fopen($filename, "w") or die("impossible");
        $pcgs = $this->PlanComptable_model->getJournal();
        $line = 'numero,debit,credit,date';
        fwrite($file, $line);
        fwrite($file, "\n");
        foreach ($pcgs as $pcg) {
            $line = $pcg['num_compte'] . ',' . $pcg['debit'] . ',' . $pcg['credit'] . ',' . $pcg['daty'] . '';
            fwrite($file, $line);
            fwrite($file, "\n");
        }
        // fermer le fichier
        fclose($file);
    }

    public function getJournal()
    {
        $data = array();
        $sql = "SELECT * from journal order by num_compte asc ";
        $query = $this->db->query($sql);
        foreach ($query->result_array() as $row) {
            $data[] = $row;
        }
        return $data;
    }

    
}
