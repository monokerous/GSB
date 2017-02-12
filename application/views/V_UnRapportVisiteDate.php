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

		
			echo $rapport->RAP_DATE.'<br>';
			echo $rapport->PRA_NUM.'<br>';
			
		?>
	</div>
</body>
</html>