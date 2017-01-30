<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class NouveauRapportVisiteurRegion extends CI_Controller
{
	private $_data_defaut = array();
	function __construct()
	{
		parent::__construct();
        $this->load->model('Modele');
        $this->_data_defaut['regions'] =  $this->input->post('regions', NULL);
        $this->_data_defaut['query'] = $this->Modele->get_Region();

	}
	
	function index() {
        $data = $this->_data_defaut;
		$data['queryRapport'] = $this->Modele->get_Rapport();
		$this->load->view('V_UnRapportVisite.php',$data);
		
	}
	

	function nouveauRapport(){
        $data = $this->_data_defaut;
		$data['queryRapport'] = $this->Modele->getRapportRegion($data['regions']);
		$this->load->view('V_SelectUneRegion.php',$data);
	}

	function selectUneRegion(){
        $data = $this->_data_defaut;
        $this->load->view('V_SelectUneRegion.php', $data);
	}

	function unRapportDeVisite(){
		$data = $this->_data_defaut;
		$data = $this->input->get_post('listeRapport');
	//	$data= $this->input->post('listeRapport'); 
	//	$data['queryRapport'] = $this->Modele->get_Rapport();	
		$this->load->view('V_UnRapportVisite',$data);
	}
	
	

	
}