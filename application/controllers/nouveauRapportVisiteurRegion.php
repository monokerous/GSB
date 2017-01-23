<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class NouveauRapportVisiteurRegion extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct(); 
	
	}
	
	function index() {
		$this->load->model('Modele');
		$this->load->view('V_RapportVisite.php');
		
	}
	

	function nouveauRapport()
	{
		$this->load->model('Modele');
		$data['query'] = $this->Modele->get_Rapport();
		$data['nomVisiteur'] = $this->Modele->get_Nom_Visiteur();
		$data['NumNomPraticien'] = $this->Modele->get_Praticien();		
		$data['Medicaments'] = $this->Modele->get_Medicament();
		$this->load->view('V_NouveauRapportVisiteRegion.php',$data);
	}
	

	
}