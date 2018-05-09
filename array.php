<?php
if (!$fic=fopen("programmeurs.txt","r")){
	echo "Unable to open file!";
	exit;
}

$ligne=fgets($fic);
$compt=0;
$personne=array();
$joursemaine=array();
$notasse=array();


	while(!feof($fic)){
		$TabDonnees=explode (";",$ligne);
		$compt++;
		$personne[]=$TabDonnees[0];
		$joursemaine[]=$TabDonnees[1];
		$notasse[]=$TabDonnees[2];
		$ligne=fgets($fic);
		}
	fclose($fic);
?>