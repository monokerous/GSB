<html> 
<head>
	<title>Un rapport par région</title>
	<link rel="stylesheet" href="<?php echo base_url("css/style.css"); ?>" />
	<meta charset="UTF-8">

</head>

<?php $this->load->view('include/header'); ?>


<body>
	<h3>rapport N° <?php echo $rapport->RAP_NUM ; ?> de <?php echo $rapport->VIS_NOM ?></h3>


<p></p>
	<div>
		<?php

		
			//echo $rapport->RAP_DATE.'<br>';
			echo $rapport->PRA_NUM.'<br>';
			//echo $rapport->PRA_COEFNOTORIETE.'<br>';		
			echo '<pre>'.$rapport->RAP_MOTIF.'</pre>';
			//echo $rapport->RAP_BILAN.'<br>';
			//echo $rapport->MED_DEPOTLEGAL.'<br>';

		?>
	</div>
</body>