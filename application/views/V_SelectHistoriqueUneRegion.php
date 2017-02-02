<html>

<head>
	<title>Select region</title>
	<link rel="stylesheet" href="<?php echo base_url("css/style.css"); ?>" />
	<meta charset="UTF-8">
</head>
<body>
<header class="header-fixed">
	<div class="header-limiter">
		
            <h1><img src="<?php echo base_url('css/logoGSB.png'); ?>" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" /></h1>	
		

		<nav>
	
		
			<a href=<?php echo site_url('nouveauRapportVisiteurRegion/selectUneRegion'); ?> >Nouveau rapport visite par rÃ©gion</a>
			<a href="<?php echo site_url('historiqueRapportVisiteurRegion/selectUneRegion'); ?>" class="selected">Historique des rapports par rÃ©gion</a>
                        
			<a href="<?php echo site_url('medicament/index'); ?>">Medicaments</a>
			<a href="#">Quitter</a>

		</nav>
	</div>
</header>

 <form method="post" action='<?php echo site_url('historiqueRapportVisiteurRegion/selectUneDate');?>' class="form-horizontal" id = "formMedicament">
         <fieldset>
                <legend>Selectionnez une rÃ©gion</legend>
                <label class="control-label">RÃ©gion : </label>
              
            <select name="regions">
                <?php foreach($query as $item) { ?>
					<?php
						$selected = '';
						if($regions==$item->REG_CODE){
							$selected = 'selected';
						}
					?>
                    <?php echo '<option value="'.$item->REG_CODE.'" '.$selected.'>'. $item->REG_NOM.'</option>';?>

				<?php } ?>
           
            </select>
            <input class="btn" type="submit" value="Rechercher" />
		 </fieldset>
 </form>
 
<?php 

	if ($regions){
		?>
		 <fieldset>
		 	 <legend>Selectionnez une Date </legend>
		 	 
		 	 <!-- SELECTIONNER UNE DATE DE DEBUT  -->
               <label class="control-label">Date Debut: </label>
               
         <select name="dates">
		<?php 
		foreach ($queryDate as $item){
			
			$selected = '';
			if($dates==$item->RAP_DATE){
				$selected2 = 'selected';
			}
			
		 echo '<option>'.$item->RAP_DATE.'</option>';
			//echo $item->RAP_DATE. ' - '. $item->VIS_NOM.'<br>';
		}
		?>
		
		<!--  SELECTIONNER UNE DATE DE FIN -->
		<!--  TROUVER LE MOYEN DE FAIRE 01-01 au 31-12 (il faut afficher les rapports pour toutes les années ?) -->
		<label class="control-label">Date Fin: </label>
		<?php 
		
		foreach ($queryDate as $item){
				
			$selected = '';
			if($dates==$item->RAP_DATE){
				$selected3 = 'selected';
			}
			
			echo '<option>'.$item->RAP_DATE.'</option>';
		}
		?>
		</select> 
		<input class="btn" type="submit" value="Rechercher" />
		</fieldset>
		    
		<?php } ?>
		
					
       