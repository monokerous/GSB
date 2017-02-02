<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class HistoriqueRapportVisiteurRegion extends CI_Controller
{
	// tableau de données
	private $_data_defaut = array();
	function __construct()
	{
		parent::__construct();
        $this->load->model('Modele');
        $this->_data_defaut['regions'] =  $this->input->post('regions', NULL);
        $this->_data_defaut['query'] = $this->Modele->get_Region();

	}
	
	function index() {
        redirect('/historiqueRapportVisiteurRegion/selectUneRegion', 'refresh');
        /*$data = $this->_data_defaut;
		$data['queryRapport'] = $this->Modele->get_Rapport();
		$this->load->view('V_UnRapportVisite.php',$data);*/
		
	}
	

	function selectUneRegion(){
        $data = $this->_data_defaut;
        $this->load->view('V_SelectHistoriqueUneRegion.php', $data);
	}
	

	function selectUneDate(){
		$data = $this->_data_defaut;
		$data['queryDate'] = $this->Modele->getDate($data['regions']);
		$this->load->view('V_SelectHistoriqueUneRegion.php',$data);
	}
	
}