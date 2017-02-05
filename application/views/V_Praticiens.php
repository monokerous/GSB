<html> 
<head>
	<title>formulaire PRATICIEN</title>
	<link rel="stylesheet" href="<?php echo base_url("css/style.css"); ?>" />
	<meta charset="UTF-8">
</head>

<?php $this->load->view('include/header'); ?>

 <form method="post" action='' class="form-horizontal" id = "formMedicament">
         <fieldset>
                <legend>Praticiens</legend>
                <label class="control-label">Practiens : </label>
              
            <select name="practiciens">
      		<?php $selected = '';?>
                <?php foreach($query as $item) { ?>

                    <?php echo '<option value="'.$item->PRA_NOM.' '.$item->PRA_PRENOM.'" $selected>'. $item->PRA_NOM.' '.$item->PRA_PRENOM .'</option>';?>

				<?php } ?>
           
            </select>
            <input class="btn" type="submit" value="Rechercher" />
            
            
            <?php 
            		/* On r�cup�re le praticiens dans  */
            if(isset($_POST['practiciens'])){
            	/* On parcours tous les praticiens */
            foreach($query as $item) {
            	/* parcours pour le nom et le prenom et on compare avec le nom que l'on a trouver*/
                $practicien = $item->PRA_NOM.' '.$item->PRA_PRENOM;
                	
                   if($practicien == $_POST['practiciens']) { ?>
		                <form id="formMedicament"> 
		                
		 
                      		<p></p>
		                	<br>
			                <label class="titre">NUMERO :</label><label  name="PRA_NUM"  ><?php echo $item->PRA_NUM ?></label>
			                <br>
			                <label class="titre">NOM :</label><label name="PRA_NOM" ><?php echo $item->PRA_NOM ?></label>
			                <br>
			                <label class="titre">PRENOM :</label><label name="PRA_PRENOM" ><?php echo $item->PRA_PRENOM ?></label>
			                <br>
			                <label class="titre">ADRESSE :</label><label  name="PRA_ADRESSE"  ><?php echo $item->PRA_ADRESSE ?></label>
			                <br>
			                <label class="titre">CODE POSTAL :</label><label  name="PRA_CP" ><?php echo $item->PRA_CP ?></label>
			                <br>
			                <label class="titre">VILLE :</label><label name="PRA_VILLE"><?php echo $item->PRA_VILLE?></label>
			                <br>
			                <label class="titre">COEFF. NOTORIETE :</label><label  name="PRA_COEFNOTORIETE"  ><?php echo $item->PRA_COEFNOTORIETE ?></label>
			                <br>
			                <label class="titre">TYPE CODE :</label><label  name="TYP_CODE" ><?php echo $item->TYP_CODE ?></label>
			                <br>
			               
		                </form>		
                <?php }
            }
       }?>	
            </fieldset>
        </form>
 
</body>
</html>