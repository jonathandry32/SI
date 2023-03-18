<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Entreprise extends CI_Model{
	public function insert($nom,$activite,$dirigeant,$tel,$telecopie,$psw,$siege,$execution,$nif,$stat,$rdc,$devis_tc,$creation,$debut){
		$query=	$this->db->query(sprintf("insert into entreprise(nom,activite,dirigeant,tel,telecopie,psw,siege,execution,nif,stat,rdc,devis_tc,creation,debut) values('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",$nom,$activite,$dirigeant,$tel,$telecopie,$psw,$siege,$execution,$nif,$stat,$rdc,$devis_tc,$creation,$debut));
	}
}