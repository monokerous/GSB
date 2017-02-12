<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
   
   class Modele extends CI_Model{
	   
   		// PRATICIEN
	   function get_Praticien() {
	   	$sql = "SELECT * FROM praticien order by PRA_NOM ASC";
	   	$query = $this->db->query($sql);
	   	//Cette mï¿½thode renvoie le rï¿½sultat de la requï¿½te sous la forme d'un tableau d'objets result();
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
		* Cette mÃ©thode retourne tous les rÃ©gions
		* @return array
		*/
	   public function get_Region(){

	   	$sql = "SELECT * FROM region";
	   	$query = $this->db->query($sql);
	   	return $query->result();

	   }

	   /**
		* Cette mÃ©thode retourne des rapport par rÃ©gion
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
		* Cette mÃ©thode retourne un rapport par son numÃ©ro
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

		   if ($query->num_rows() > 0) { //si la requete retourne plusieur rÃ©sultat
			   $rapport = $query->row();
		   }
			return $rapport;
	   }

	   // HISTORIQUE DES RAPPORT PAR REGION
   
	   /**
	    * fonction qui selectionne les dates de visite de la région
	    */
	   
	   public function getDate($reg_code = NULL){
	   	$sql = 'SELECT RAP_DATE, VIS_NOM, RAP_NUM
	   			FROM rapport_visite, visiteur, travailler
	   			WHERE rapport_visite.VIS_MATRICULE = visiteur.VIS_MATRICULE
	   			AND visiteur.VIS_MATRICULE=travailler.VIS_MATRICULE
	   			AND travailler.REG_CODE = ?
	   			ORDER BY RAP_DATE';
	   	$query = $this->db->query($sql, array($reg_code));
	   	return $query->result();
	   }

	   /**
		* Cette méthode pemet de recherchert un rapport par rapport à sa date
		* @param string $idRapport
		* @return null|array
		*/
	 public function getUnRapport($idRapport){

	 	 $rapport = null;
		   $sql = 'SELECT * 
		   		   FROM rapport_visite, visiteur
		   		   WHERE rapport_visite.VIS_MATRICULE = visiteur.VIS_MATRICULE
		   		   AND rapport_visite.RAP_NUM=?';

		   $query = $this->db->query($sql, array($idRapport));

		   if ($query->num_rows() > 0) { //si la requete retourne plusieur rÃ©sultat
			   $rapport = $query->row();
		   }
			return $rapport;
	   }

	 
   }
    
    ?>
     