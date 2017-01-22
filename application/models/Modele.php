<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
   
   class Modele extends CI_Model{
	   
   		// PRATICIEN
	   function get_Praticien() {
	   	$sql = "SELECT * FROM praticien order by PRA_NOM ASC";
	   	$query = $this->db->query($sql);
	   	//Cette m�thode renvoie le r�sultat de la requ�te sous la forme d'un tableau d'objets result();
	   	return $query->result();
	   }
	   
	   function get_Num_Nom_Praticien(){
	   	$sql = "SELECT PRA_NUM, PRA_NOM FROM praticien";
	   	$query = $this->db->query($sql);
	   	return $query->result();
	   }
	   
	   // MEDICAMENT
	   function get_Medicament()
	   {
	  	$sql = "SELECT * FROM medicament order by MED_DEPOTLEGAL";
	   	$query = $this->db->query($sql);
	   	return $query->result();
	   
	   }
	   
	   //NOUVEAU RAPPORT PAR REGION
	   function get_Num_Rapport()
	   {
	   	$sql = "SELECT RAP_NUM FROM rapport_visite";
	   	$query = $this->db->query($sql);
	   	return $query->result();
	   }
	   function get_Rapport(){
	   	$sql = "SELECT * FROM rapport_visite ORDER BY RAP_DATE DESC ";
	   	$query = $this->db->query($sql);
	   	return $query->result();
	   }
	   
	   function get_Nom_Visiteur(){
	   	$sql = "SELECT VIS_NOM FROM visiteur";
	   	$query = $this->db->query($sql);
	   	return $query->result();
	   }
   
   }
    
    ?>
     