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

<form method="post" action='' class="form-horizontal">
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
            		/* On rï¿½cupï¿½re le praticiens dans  */
            if(isset($_POST['medicament'])){
            	/* On parcours tous les praticiens */
            foreach($query as $item) {
            	/* parcours pour le nom et le prenom et on compare avec le nom que l'on a trouver*/
                $medicament = $item->MED_NOMCOMMERCIAL;
                
                   if($medicament == $_POST['medicament']) { ?>
		                <form id="formPraticien"> 
		                <br>
			            <label class="titre">DEPOT LEGAL :</label><label  name="MED_DEPOTLEGAL"  ><?php echo $item->MED_DEPOTLEGAL ?></label>
			            <br>
			            <label class="titre">NOM COMMERCIAL:</label><label name="MED_NOMCOMMERCIAL" ><?php echo $item->MED_NOMCOMMERCIAL ?></label>
			            <br>
			            <label class="titre">CODE :</label><label name="FAM_CODE" ><?php echo $item->FAM_CODE ?></label>
			            <br>
			            <label class="titre">COMPOSITION :</label><label  name="MED_COMPOSITION" ><?php echo $item->MED_COMPOSITION ?></label>
			            <br>
			            <label class="titre">EFFETS :</label><label  name="MED_EFFETS" ><?php echo $item->MED_EFFETS ?></label>
			            <br>
			            <label class="titre">CONTRE INDICATION :</label><label  name="MED_CONTREINDIC"  ><?php echo $item->MED_CONTREINDIC ?></label>
			            <br>
		 
                       		
		                </form>		
                <?php }
            }
       }?>	
            </fieldset>
        </form>
   
</body>
</html>