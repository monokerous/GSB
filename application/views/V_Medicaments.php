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
            
            
            <?php 
            		/* On r�cup�re le praticiens dans  */
            if(isset($_POST['medicament'])){
            	/* On parcours tous les praticiens */
            foreach($query as $item) {
            	/* parcours pour le nom et le prenom et on compare avec le nom que l'on a trouver*/
                $medicament = $item->MED_NOMCOMMERCIAL;
                
                   if($medicament == $_POST['medicament']) { ?>
		                
		                <p>
			            <label class="titre">DEPOT LEGAL :</label><label  name="MED_DEPOTLEGAL"  ><?php echo $item->MED_DEPOTLEGAL ?></label></p>
			            <p>
			            <label class="titre">NOM COMMERCIAL:</label><label name="MED_NOMCOMMERCIAL" ><?php echo $item->MED_NOMCOMMERCIAL ?></label></p>
			            <p>
			            <label class="titre">CODE :</label><label name="FAM_CODE" ><?php echo $item->FAM_CODE ?></label></p>
			            <p>
			            <label class="titre">COMPOSITION :</label><label  name="MED_COMPOSITION" ><?php echo $item->MED_COMPOSITION ?></label></p>
			            <p>
			            <label class="titre">EFFETS :</label><label  name="MED_EFFETS" ><?php echo $item->MED_EFFETS ?></label></p>
			            <p>
			            <label class="titre">CONTRE INDICATION :</label><label  name="MED_CONTREINDIC"  ><?php echo $item->MED_CONTREINDIC ?></label></p>
			            
		 
                       		
		              		
                <?php }
            }
       }?>	
            </fieldset>
        </form>
   
</body>
</html>