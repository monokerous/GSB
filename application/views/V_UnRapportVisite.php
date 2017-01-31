<html> 
<head>
	<title>Un rapport par région</title>
	<link rel="stylesheet" href="<?php echo base_url("css/style.css"); ?>" />
	<meta charset="UTF-8">

</head>

<header class="header-fixed">
	<div class="header-limiter">
		
	<h1><img src="<?php echo base_url('css/logoGSB.png'); ?>" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" /></h1>	
		

		<nav>
	
			<a href=<?php echo site_url('nouveauRapportVisiteurRegion/selectUneRegion'); ?> >Nouveau rapport visite par région</a>
			<a href="<?php echo site_url('praticien/index'); ?>" >Historique des rapports par région</a>
                        
			<a href="<?php echo site_url('medicament/index'); ?>">Medicaments</a>
			<a href="#">Quitter</a>

		</nav>
	</div>
</header>
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