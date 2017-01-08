<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('praticien.php');
class Welcome extends CI_Controller {

		//CONSTRUCTEUR PAR DEFAUT DE LA CLASSE Praticien

	public function __construct(){
		//on appel le constructeur de la classe m�re
		parent:: __construct();
	}
	/**
         * Cette méthode appelle la fonction du index du controller  index
         */
	public function index() {
            $practicien  = new Praticien();
            $practicien->index();
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */