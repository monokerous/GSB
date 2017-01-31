<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class HistoriqueRapportVisiteurRegion extends CI_Controller
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
        redirect('/NouveauRapportVisiteurRegion/selectUneRegion', 'refresh');
        /*$data = $this->_data_defaut;
		$data['queryRapport'] = $this->Modele->get_Rapport();
		$this->load->view('V_UnRapportVisite.php',$data);*/
		
	}
	

	function selectUneRegion(){
        $data = $this->_data_defaut;
        $this->load->view('V_SelectHistoriqueUneRegion.php', $data);
	}
	
}