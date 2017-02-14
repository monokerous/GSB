<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class PDF extends CI_Controller {



	public function index($id = 0)

    {

	    
		// Charger la bibliothèque
	    $this->load->library('html2pdf');    	    
		// Définir le dossier pour enregistrer le PDF
	    $this->html2pdf->folder('./application/views/');
	   // Définit le nom de fichier à enregistrer / télécharger comme
	    $this->html2pdf->filename('test.pdf');

	 	// Définit les valeurs par défaut du papier
	    $this->html2pdf->paper('a4', 'portrait');

	    $this->load->model('Modele');

	    $data = array(
	    	'title' => 'Rapport de visite',
	    	'message' => 'Rapport de visite'
	    );

	    $rapportVisite = $this->Modele->getPDFRapportVisite($id);
        $data["rapportVisitePDF"] = $rapportVisite;

	    $this->html2pdf->html($this->load->view('V_pdf', $data, true));
	    if($this->html2pdf->create('save')) {	
			// Le fichier PDF a bien été enregistré ou téléchargé
	    	echo 'PDF sauvegarder';
	    }   

    } 

}

/* End of file pdf.php */
/* Location: ./application/controllers/pdf.php */