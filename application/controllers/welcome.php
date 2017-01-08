<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

		//CONSTRUCTEUR PAR DEFAUT DE LA CLASSE Praticien

	public function __construct(){
		//on appel le constructeur de la classe mère
		parent:: __construct();
		
	}
	
	public function index() {
		
		$this->load->model('Modele');
		$data['query'] = $this->Modele->get_Praticien();
		$this->load->view('V_Praticiens', $data);
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */