<html> 
<head>
	<title>formulaire MEDICAMENT</title>
	<link rel="stylesheet" href="<?php echo base_url("css/style.css"); ?>" />
	<meta charset="UTF-8">
</head>

<?php $this->load->view('include/header'); ?>

<body>

<form method="post" action='' class="form-horizontal" id ="formMedicament">
         <fieldset>
                <legend>Médicaments</legend>
                <label class="control-label">Médicaments : </label>
              
            <select name="medicament">
      		<?php $selected = '';?>
                <?php foreach($query as $item) { ?>

					 <?php echo '<option value="'.$item->MED_NOMCOMMERCIAL.'" $selected>'.$item->MED_NOMCOMMERCIAL.'</option>';?>
				<?php } ?>
           
            </select>
            <input class="btn" type="submit" value="Rechercher" />
               </fieldset>
        </form>
            
            <?php 
            		/* On r�cup�re le praticiens dans  */
            if(isset($_POST['medicament'])){
            	/* On parcours tous les praticiens */
            foreach($query as $item) {
            	/* parcours pour le nom et le prenom et on compare avec le nom que l'on a trouver*/
                $medicament = $item->MED_NOMCOMMERCIAL;
                
                   if($medicament == $_POST['medicament']) { ?>
		                    <table>
                          <br><br><br>
                          <tr>
                          
                          <th>Dépot légal du Médicament</th>
                          <th>Nom Commercial du Médicament</th>
                          <th>Code du Médicament</th>
                          <th>Composition du Médicament</th>
                          <th>Effets du Médicaments</th>
                          <th>Contre indication à la prise du Médicament</th>
                          
                          
                          </tr>
                        
                      <tr>
                          <td><?php echo $item->MED_DEPOTLEGAL; ?></td>
                          <td><?php echo $item->MED_NOMCOMMERCIAL;?></td>
                          <td><?php echo $item->FAM_CODE;?></td>
                          <td><?php echo $item->MED_COMPOSITION;?></td>
                          <td><?php echo $item->MED_EFFETS;?></td>
                          <td><?php  echo $item->MED_CONTREINDIC;?></td>
                          </td>

                      </tr>

                <?php }
            }
       }?>	
         
   
</body>
</html>