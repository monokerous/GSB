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
        redirect('/NouveauRapportVisiteurRegion/selectUneRegion', 'refresh');
        /*$data = $this->_data_defaut;
		$data['queryRapport'] = $this->Modele->get_Rapport();
		$this->load->view('V_UnRapportVisite.php',$data);*/
		
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

    /**
     * Cette méthode permet de voir un rapport précis
     */
	function unRapportDeVisite(){
        $this->load->model('Modele');
		$data = array();
		$rapport = $this->Modele->getOneRapport(intval($this->input->get_post('listeRapport')));
        if(is_null($rapport)){
            redirect('/NouveauRapportVisiteurRegion/index', 'refresh');
        }
        $data["rapport"] = $rapport;
		$this->load->view('V_UnRapportVisite',$data);
	}
	
	

	
}