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
include 'array.php';

echo "<h3> La moyenne de consommation la plus elevee c'etais :</h3><br>";

$joursem=(array_count_values($joursemaine)); //nouvel array pour joursemaine
$tab=array(); // pour stocker la somme de cafe par jour
$tab['Lundi']=0;
$tab['Mardi']=0;
$tab['Mercredi']=0;
$tab['Jeudi']=0;
$tab['Vendredi']=0;
$i=0; // indice pour le tableau

		for ($i=0; $i<count($joursemaine); $i++) {   //on parcour le tableau de joursemaine
				$tab[$joursemaine[$i]]+=(int)$notasse[$i];// on calcule la somme par jour $i
		}
$plusgrandmoyenne=0; //variable plusgrandmoyenne
$jour=""; // variable jour
foreach ($tab as $k=>$v){   // pour $tab avec les indice $k  on a la valeur 
	if($tab[$k]/$joursem[$k]>$plusgrandmoyenne){ // si la valeur de la moyenne est plus grande que $plusgrandmoyenne
		$plusgrandmoyenne=$tab[$k]/$joursem[$k]; // calcule de la moyenne et qui sera sauvegarde dans la variable $plusgrandmoyenne
		$jour=$k; // jour qui correspondre a cet indice
	}
}
echo "<br><h3> $jour =".(number_format($plusgrandmoyenne,2))."</h3>";
?>
<br><br><a href="operations.html">Retour</a>
</div>
</body>
</html>


