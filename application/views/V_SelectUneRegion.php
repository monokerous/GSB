<html>

<head>
	<title>Select region</title>
	<link rel="stylesheet" href="<?php echo base_url("css/style.css"); ?>" />
	<meta charset="UTF-8">
</head>
<body>
<?php $this->load->view('include/header'); ?>

 <form method="post" action='<?php echo site_url('nouveauRapportVisiteurRegion/nouveauRapport');?>' class="form-horizontal" id = "formMedicament">
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
<?php 
            		/* On r�cup�re le praticiens dans  */
            if($regions &&  $queryRapport != NULL){ ?>

            	<table>

	  					<tr>
				  		
				  		<th>Numero du Rapport</th>
				  		<th>Nom du Visiteur</th>
				  		<th>Numero du Praticien</th>
				  		<th>Nom du Praticien</th>
				  		<th>Date du Rapport</th>
				  		<th>Motif</th>
				  		<th>Code Medicaments</th>
				  		<th>Nom Medicaments</th>
				  		<th>Détail du rapport de visite</th>
				  		
					  	</tr>
					 <?php

            	/* On parcours tous les praticiens */
				foreach($queryRapport as $item) {
					/* parcours pour le nom et le prenom et on compare avec le nom que l'on a trouver*/
					?>
						
					<tr>
							<td><?php echo $item->RAP_NUM; ?></td>
							<td><?php echo $item->VIS_NOM;?></td>
							<td><?php echo $item->PRA_NUM;?></td>
							<td><?php echo $item->PRA_NOM;?></td>
							<td><?php echo $item->RAP_DATE;?></td>
							<td><?php  echo $item->RAP_MOTIF;?></td>
							<td><?php echo $item->MED_DEPOTLEGAL;?></td>
							<td><?php echo $item->MED_NOMCOMMERCIAL;?></td>
							<td>
							<a style="padding:6px 0 6px 0; font:bold 13px Arial; background:#666B85;color:#4BB5C1;border-radius:2px; width:70px;border:none;" href="<?php echo site_url('NouveauRapportVisiteurRegion/unRapportDeVisite/'.$item->RAP_NUM); ?>">rechercher</a>

							</td>

					</tr>
				
					<?php

				}
				?>
				
				
				<?php
       		}
       		else{
       			?>
       			<font color="teal"><center>
       			<br><br>
       			<?php
       			echo  " aucun rapport de visite pour cette région !" ;
       			?>
       			</center></font >
       			<?php
       		}
       ?>


</body>
 </html>
