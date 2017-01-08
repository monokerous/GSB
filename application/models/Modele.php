<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
   
   class Modele extends CI_Model{
	   
   		// PRATICIEN
	   function get_Praticien() {
	   	$sql = "SELECT * FROM praticien order by PRA_NOM ASC";
	   	$query = $this->db->query($sql);
	   	//Cette méthode renvoie le résultat de la requête sous la forme d'un tableau d'objets result();
	   	return $query->result();
	   }
	   
	   // MEDICAMENT
	   function get_Medicament()
	   {
	  	$sql = "SELECT * FROM medicament order by MED_DEPOTLEGAL";
	   	$query = $this->db->query($sql);
	   	return $query->result();
	   
	   }
   
 
   
   }
    
    ?>
     