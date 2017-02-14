<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<title>PDF Created</title>

	<style type="text/css">


		body {
			background-color: #fff;
			margin: 40px;
			font-family: Lucida Grande, Verdana, Sans-serif;
			font-size: 14px;
			color: #4F5155;
		}

		a {
			color: #003399;
		 	background-color: transparent;
		 	font-weight: normal;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 16px;
			font-weight: bold;
			margin: 24px 0 2px 0;
			padding: 5px 0 6px 0;
		}



		code {
			font-family: Monaco, Verdana, Sans-serif;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		</style>
	</head>

<body>


<h1><?php  echo $title; ?> de <?php echo $rapportVisitePDF->VIS_NOM?> </h1>
<div align="right">

<?php
if (!empty($rapportVisitePDF)){

echo "Date du rapport : ";
echo $rapportVisitePDF->RAP_DATE.'</p>';
}
?>
</div>
<p>Numéro de rapport: <?php echo $rapportVisitePDF->RAP_NUM;?></p>
<code>

<?php
 echo $message.'<br>';
 echo "Numéro du praticien : ";
 echo $rapportVisitePDF->PRA_NUM.'<br>';
 echo "Motif du rapport : ";
 echo $rapportVisitePDF->RAP_MOTIF.'<br>';
 echo "Bilan du rapport : ";
 echo $rapportVisitePDF->RAP_BILAN.'<br>';
?>
	

</code>
<h1></h1>
Jeanne Bertoux
</body>

</html>