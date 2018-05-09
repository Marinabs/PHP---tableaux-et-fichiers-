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
$maxtasse = 0;
for($i=0; $i<$compt; $i++){
	if($notasse[$i]>$notasse[$maxtasse]){
		$maxtasse=$i;
	}
}
    echo "<h3>C'est <b>" .$personne[$maxtasse]."</b>.</h3>";
	//calcule le plus grande nombre et sa position 
?>
<br><br><a href="operations.html">Retour</a>
</div>
</body>
</html>


