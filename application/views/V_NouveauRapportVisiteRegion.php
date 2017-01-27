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
  <form action="<?php echo site_url('nouveauRapportVisiteurRegion/index'); ?>" method="post" name = "listeRapport">
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
	foreach ($query as $unRapport) { ?>
		<tr>
			<td><?php echo $unRapport->RAP_NUM; ?></td>
			<td><?php echo $unRapport->VIS_NOM;?></td>
			<td><?php echo $unRapport->PRA_NUM;?></td>
			<td><?php echo $unRapport->PRA_NOM;?></td>
			<td><?php echo $unRapport->RAP_DATE;?></td>
			<td><?php  echo $unRapport->RAP_MOTIF;?></td>
			<td><?php echo $unRapport->FAM_CODE;?></td>
			<td><?php echo $unRapport->MED_NOMCOMMERCIAL;?></td>
			<td><input class="bouton" type="submit" value="Rechercher" /> </td>


		</tr>
<?php
	}
?>

<input type="hidden"  value="<?php echo $unRapport->RAP_NUM; echo $unRapport->VIS_NOM; echo $unRapport->PRA_NUM; echo $unRapport->PRA_NOM;echo $unRapport->RAP_DATE; echo $unRapport->RAP_MOTIF; echo $unRapport->FAM_CODE; echo $unRapport->MED_NOMCOMMERCIAL; ?>">
</form>
</table>

</body>
</html>
