<html> 
<head>
	<title>formulaire MEDICAMENT</title>
	<link rel="stylesheet" href="<?php echo base_url("css/style.css"); ?>" />
</head>

<header class="header-fixed">
	<div class="header-limiter">
		
	<h1><img src="<?php echo base_url('css/logoGSB.png'); ?>" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" /></h1>	
		

		<nav>
	
			<a href="#">Comptes-Rendus</a>
			<a href="#" >Visiteur</a>
			<a href="<?php echo site_url('praticien/index'); ?>" >Praticien</a>
                        
			<a href="<?php echo site_url('medicament/index'); ?>" class="selected">Medicaments</a>
			<a href="#">Quitter</a>

		</nav>
	</div>
</header>

<body>

<form method="post" action='' class="form-horizontal" id ="formMedicament">
         <fieldset>
                <legend>M�dicaments</legend>
                <label class="control-label">M�dicaments : </label>
              
            <select name="medicament">
      		<?php $selected = '';?>
                <?php foreach($query as $item) { ?>

					 <?php echo '<option value="'.$item->MED_NOMCOMMERCIAL.'" $selected>'.$item->MED_NOMCOMMERCIAL.'</option>';?>
				<?php } ?>
           
            </select>
            <input class="btn" type="submit" value="Rechercher" />
            
            
            <?php 
            		/* On recupère le medicament  */
            if(isset($_POST['medicament'])){
            	/* On parcours tous les medicaments */
            foreach($query as $item) {
            	/* parcours pour le nom et on compare avec le nom que l'on a trouver*/
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