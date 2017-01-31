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
	   	$sql = "SELECT * FROM rapport_visite, visiteur, offrir, medicament, praticien WHERE "
                        . "praticien.PRA_NUM=rapport_visite.PRA_NUM "
                        . "AND visiteur.VIS_MATRICULE = rapport_visite.VIS_MATRICULE "
                        . "AND medicament.MED_DEPOTLEGAL = offrir.MED_DEPOTLEGAL "

                       
                        . "ORDER BY RAP_DATE DESC ";
	   	$query = $this->db->query($sql);
	   	return $query->result();
	   }
	   
	   function get_Nom_Visiteur(){
	   	$sql = "SELECT VIS_NOM FROM visiteur";
	   	$query = $this->db->query($sql);
	   	return $query->result();
	   }

	   /**
		* Cette méthode retourne tous les régions
		* @return array
		*/
	   public function get_Region(){

	   	$sql = "SELECT * FROM region";
	   	$query = $this->db->query($sql);
	   	return $query->result();

	   }

	   /**
		* Cette méthode retourne des rapport par région
		* @param null|string $reg_code
		* @return array
		*/
	   public function getRapportRegion($reg_code = NULL){

	   		$sql = 'SELECT VIS_NOM, rapport_visite.RAP_NUM, RAP_DATE, RAP_MOTIF, praticien.PRA_NUM, PRA_NOM,  PRA_COEFNOTORIETE, TYP_CODE, RAP_MOTIF, TRA_ROLE,medicament.MED_DEPOTLEGAL,MED_NOMCOMMERCIAL
					FROM region, travailler, visiteur, rapport_visite, praticien, offrir,medicament
					WHERE region.REG_CODE=travailler.REG_CODE
					AND travailler.VIS_MATRICULE=visiteur.VIS_MATRICULE
					AND rapport_visite.VIS_MATRICULE=visiteur.VIS_MATRICULE
					AND rapport_visite.PRA_NUM = praticien.PRA_NUM
					AND medicament.MED_DEPOTLEGAL = offrir.MED_DEPOTLEGAL 
					AND region.REG_CODE = ?
					ORDER BY RAP_DATE DESC';
		   $query = $this->db->query($sql, array($reg_code));
		   return $query->result();
	   }

	   /**
		* Cette méthode retourne un rapport par son numéro
		* @param int $num
		* @return array|null
		*/
	   public function getOneRapport($num){
		   $rapport = null;
		   $sql = 'SELECT * 
		   		   FROM rapport_visite, visiteur
		   		   WHERE rapport_visite.VIS_MATRICULE = visiteur.VIS_MATRICULE
		   		   AND rapport_visite.RAP_NUM=?';

		   $query = $this->db->query($sql, array($num));

		   if ($query->num_rows() > 0) { //si la requete retourne plusieur résultat
			   $rapport = $query->row();
		   }
			return $rapport;
	   }

	   // HISTORIQUE DES RAPPORT PAR REGION
   
   }
    
    ?>
     