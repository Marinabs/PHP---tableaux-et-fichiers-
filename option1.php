<!DOCTYPE html>
<html lang="fr">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script> <!-- https://fontawesome.com/get-started -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body{
  }
  
  #container{
  width: 1200px;
  margin: 0 auto;
  }
  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
  }
  .container-fluid {
      padding: 60px 50px;
  }

  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
  
  </style>
</head>
<body id="container">

<div class="jumbotron">
  <h1>Developpement Company of WEB-COFFEE</h1> 
  <p>We drink coffee</p> 
</div>


<!-- Container (Coffee Section) -->
<div class="container-fluid ">
  
<?php
if (!$fic=fopen("programmeurs.txt","r")){
	echo "Unable to open file!";
	exit;
}

//Tout est OK
	$rep="<caption><h1>CONTENU</h1></caption>";
	$rep.="<table border=1 width=450px>";
	$rep.="<tr style='background-color:#ffddcc; font-size:20px; height:45px;'><th style='text-align:center;'>PRENOM</th><th style='text-align:center;'>JOUR</th><th style='text-align:center;'>TASSE DE CAFE</th></tr>";
	//Traitement des données
	$ligne=fgets($fic);
	while(!feof($fic)){
		$tabDonnees=explode(";",$ligne);
		$rep.="<tr style='font-size:15px; height:25px'><td style='padding-left:15px;'>".$tabDonnees[0]."</td>";
		$rep.="<td style='padding-left:15px;'>".$tabDonnees[1]."</td>";
		$rep.="<td style='padding-left:15px;'>".$tabDonnees[2]."</td></tr>";
		$ligne=fgets($fic);
	}
	fclose($fic);
	$rep.="</table>";
	echo $rep;

?>

<br><br><a href="operations.html">Retour </a>
</div>
</body>
</html>


