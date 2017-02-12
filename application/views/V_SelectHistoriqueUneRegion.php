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

	<?php
	if ($regions && $queryDate != NULL){
		?>
		<table>
			<?php
			foreach ($queryDate as $item){
				?>
				<tr>
					<td>
						<a href="<?php echo site_url('historiqueRapportVisiteurRegion/selectUnrapport/'.$item->RAP_NUM); ?>" style="padding:6px 0 6px 0; font:bold 13px Arial; background:#666B85;color:#4BB5C1;border-radius:2px; width:70px;border:none;" ><?php echo $item->RAP_DATE; ?></a>
					</td>
				</tr>
				<?php
			}
			?>
		</table>
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
		
					
       