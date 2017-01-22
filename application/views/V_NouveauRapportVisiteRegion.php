<html> 
<head>
	<title>Nouveau rapport par Region </title>
	<link rel="stylesheet" href="<?php echo base_url("css/style.css"); ?>" />
	<meta charset="UTF-8">
</head>

<header class="header-fixed">
	<div class="header-limiter">
		
	<h1><img src="<?php echo base_url('css/logoGSB.png'); ?>" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" /></h1>	
		

		<nav>
	
			<a href="#">Comptes-Rendus</a>
			<a href="<?php echo site_url('nouveauRapportVisiteurRegion/nouveauRapport'); ?>" class="selected">Visiteur</a>
			<a href="<?php echo site_url('praticien/index'); ?>" >Praticien</a>
                        
			<a href="<?php echo site_url('medicament/index'); ?>">Medicaments</a>
			<a href="#">Quitter</a>

		</nav>
	</div>
</header>

<body>

		
	<h3>Nouveau rapports par régions</h3>


  <h3><?php echo count($query); ?> Rapports : </h3>
  
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
	//Affichage des contacts
	foreach ($query as $rapport) { ?>
		<tr>
			<td><?php echo $rapport->RAP_NUM; ?></td>
			<td><?php echo $rapport->VIS_NOM; ?></td>
			<td></td>
			<td></td>
			<td><?php echo $rapport->RAP_DATE?></td>
			<td><?php  echo $rapport->RAP_MOTIF?></td>
			<td><?php echo $rapport->MED_NOMCOMMERCIAL;?></td>
			<td><?php echo $rapport->FAM_CODE;?></td>
			<td> <input class="bouton" type="submit" value="Rechercher" /></td>

		</tr>
<?php
	}
?>
</table>


  
</body>
</html>