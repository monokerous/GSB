<html>

<head>
	<title>Select region</title>
	<link rel="stylesheet" href="<?php echo base_url("css/style.css"); ?>" />
	<meta charset="UTF-8">
</head>
<body>

<?php $this->load->view('include/header'); ?>

 <form method="post" action='<?php echo site_url('historiqueRapportVisiteurRegion/selectUneDate');?>' class="form-horizontal" id = "formMedicament">
         <fieldset>
                <legend>Selectionnez une région</legend>
                <label class="control-label">Région : </label>
              
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


 	<form method="post" action='<?php echo site_url('HistoriqueRapportVisiteurRegion/selectUnrapport/'.$item->RAP_DATE); ?>' class="form-horizontal" id = "formMedicament">
	<?php
	if ($regions && $queryDate != NULL){
		?>
		 <fieldset>
		 	 <legend>Selectionnez une Date </legend>
		 	 
		 	 <!-- SELECTIONNER UNE DATE DE DEBUT  -->
               <label class="control-label">Date : </label>
               
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
		</select> 
		
		<input class="btn" type="submit"   value="Rechercher" />
		</fieldset>
	</form>
	<?php
	}
	else{
       	?>
       	<font color="teal"><center>
       	<br><br>
       	<?php
       	echo  " aucune date disponible pour cette région !" ;
       	?>
       	</center></font >
       	<?php
       	}

?>
		
					
       