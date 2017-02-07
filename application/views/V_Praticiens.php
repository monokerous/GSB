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
            </form>
              </fieldset>
 
            <br><br><br>
            <?php 
            		/* On r�cup�re le praticiens dans  */
            if(isset($_POST['practiciens'])){
            	/* On parcours tous les praticiens */
            foreach($query as $item) {
            	/* parcours pour le nom et le prenom et on compare avec le nom que l'on a trouver*/
                $practicien = $item->PRA_NOM.' '.$item->PRA_PRENOM;
                	
                   if($practicien == $_POST['practiciens']) { ?>
		                	<table>

	  					<tr>
				  		
				  		<th>Numero du Praticien</th>
				  		<th>Nom du Praticien</th>
				  		<th>Prenom du Praticien</th>
				  		<th>Adresse du Praticien</th>
				  		<th>Code postal du Praticien</th>
				  		<th>Ville du Praticien</th>
				  		<th>Coefficient Nortoriété</th>
				  		<th>Type code Praticien</th>
				  		
					  	</tr>
						
					<tr>
							<td><?php echo $item->PRA_NUM; ?></td>
							<td><?php echo $item->PRA_NOM;?></td>
							<td><?php echo $item->PRA_PRENOM;?></td>
							<td><?php echo $item->PRA_ADRESSE;?></td>
							<td><?php echo $item->PRA_CP;?></td>
							<td><?php  echo $item->PRA_VILLE;?></td>
							<td><?php echo $item->PRA_COEFNOTORIETE;?></td>
							<td><?php echo $item->TYP_CODE;?></td>
							
							

							</td>

					</tr>
		 
		              </table>  	
                <?php }
            }
       }?>	
          
        
</body>
</html>