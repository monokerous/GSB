<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Praticien extends CI_Controller {

	//CONSTRUCTEUR PAR DEFAUT DE LA CLASSE Praticien

	public function __construct(){
            
		//on appel le constructeur de la classe m�re
		parent:: __construct();
		
	}
	
	public function index() {
                
		$this->load->model('Modele');
		$data['query'] = $this->Modele->get_praticien();
		$this->load->view('V_Praticiens.php', $data);
		 
	
		
	
	

	}
}

