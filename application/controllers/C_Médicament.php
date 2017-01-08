<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Médicament extends CI_Controller {
	
	public function __construct(){
		parent::__construct();

	}
	
	public function index(){
		
		$this->load->model('Modele');
		$data['query'] = $this->Modele->get_Medicament();
		$this->load->view('V_Medicaments.php', $data);
		

	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */