<html> 
<head>
	<title>Select region</title>
	<link rel="stylesheet" href="<?php echo base_url("css/style.css"); ?>" />
	<meta charset="UTF-8">
</head>

<header class="header-fixed">
	<div class="header-limiter">
		
            <h1><img src="<?php echo base_url('css/logoGSB.png'); ?>" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" /></h1>	
		

		<nav>
	
			<a href="#">Comptes-Rendus</a>
			<a href=<?php echo site_url('nouveauRapportVisiteurRegion/selectUneRegion'); ?> class="selected">Visiteur</a>
			<a href="<?php echo site_url('praticien/index'); ?>" >Praticien</a>
                        
			<a href="<?php echo site_url('medicament/index'); ?>">Medicaments</a>
			<a href="#">Quitter</a>

		</nav>
	</div>
</header>

 <form method="post" action='nouveauRapportVisiteurRegion/nouveauRapport' class="form-horizontal" id = "formMedicament">
         <fieldset>
                <legend>Selectionnez une région</legend>
                <label class="control-label">Région : </label>
              
            <select name="regions">
      		<?php $selected = '';?>
                <?php foreach($query as $item) { ?>

                    <?php echo '<option value="'.$item->REG_NOM.'" $selected>'. $item->REG_NOM.'</option>';?>

				<?php } ?>
           
            </select>
            <input class="btn" type="submit" value="Rechercher" />

<?php 
            		/* On r�cup�re le praticiens dans  */
            if(isset($_POST['regions'])){
            	/* On parcours tous les praticiens */
            foreach($query as $item) {
            	/* parcours pour le nom et le prenom et on compare avec le nom que l'on a trouver*/
                $region = $item->REG_NOM;
                	
                   if( $_POST['regions']) { ?>
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
 </html>