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
	
			<a href="#">Comptes-Rendus</a>
			<a href="<?php echo site_url('nouveauRapportVisiteurRegion/nouveauRapport'); ?>" class="selected">Visiteur</a>
			<a href="<?php echo site_url('praticien/index'); ?>" >Praticien</a>
                        
			<a href="<?php echo site_url('medicament/index'); ?>">Medicaments</a>
			<a href="#">Quitter</a>

		</nav>
	</div>
</header>
<body>
	<h3>Un rapport :</h3>


<p></p>
		
	<?php 
	if (isset($_POST['listeRapport'])) { 
		foreach ($queryRapport as $item) {
		?>

			<label class="titre">NUMERO :</label><label  name="RAP_NUM"  ><?php echo $item->RAP_NUM ?></label>
		<br>
		<label class="titre">DATE VISITE :</label><label  name="RAP_DATE"  ><?php echo $item->RAP_DATE ?></label>
		<br>
		<label class="titre">PRATICIEN :</label><label name="PRA_NUM" ><?php echo $item->PRA_NUM ?></label>
		<br>
		<label class="titre">COEFFICIENT :</label><label name="PRA_COEFNOTORIETE" ><?php echo $item->PRA_COEFNOTORIETE ?></label>
		<br>
		<label class="titre">REMPLACANT :</label><input type="checkbox" class="zone" checked="false" onClick="selectionne(true,this.checked,'PRA_REMPLACANT');"/><select name="PRA_REMPLACANT" disabled="disabled" class="zone" ></select>
		<br>
		<label class="titre">DATE :</label><label  name="RAP_DATE"  ><?php echo $item->RAP_DATE ?></label>
		<br>
		<label class="titre">MOTIF :</label><label  name="RAP_MOTIF" ><?php echo $item->RAP_MOTIF ?></label>
		<br>
		<label class="titre">BILAN :</label><label  name="RAP_BILAN" ><?php echo $item->RAP_BILAN ?></label>
		<br>
		<label class="titre" ><h3> Eléments présentés </h3></label>
		<br>
		<label class="titre" >PRODUIT 1 : </label><select name="PROD1" class="zone"></select>
		<br>
		<label class="titre" >PRODUIT 2 : </label><select name="PROD2" class="zone"></select>
		<br>
		<label class="titre">DOCUMENTATION OFFERTE :</label><input name="RAP_DOC" type="checkbox" class="zone" checked="false" />
		<br>
		<label class="titre"><h3>Echanitllons</h3></label>
		<br>
		<div class="titre" id="lignes">
		<br>
		<label class="titre" >Produit : </label>
		<br>
		<select name="PRA_ECH1" class="zone"><option>Produits</option></select><input type="text" name="PRA_QTE1" size="2" class="zone"/>
		<br>
		<input type="button" id="but1" value="+" onclick="ajoutLigne(1);" class="zone" />
		<br>			
		</div>
		<br>
		<label class="titre">SAISIE DEFINITIVE :</label><input name="RAP_LOCK" type="checkbox" class="zone" checked="false" />
		<br>
		<label class="titre"></label><div class="zone"><input type="reset" value="Annuler"></input><input type="submit"></input>
		<br><br>

 <?php }
 }
  ?> 


	
</body>