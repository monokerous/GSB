<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {

	/**
         * CONSTRUCTEUR PAR DEFAUT DE LA CLASSE Praticien
         */
	public function __construct(){
                
		//on appel le constructeur de la classe m�re
		parent:: __construct();
                
	}
	/**
         * Cette méthode appelle la méthode du index du controller Praticien
         */
	public function index(){ 
            
            redirect('/praticien/index', 'refresh');
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */