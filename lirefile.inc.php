<?php

function lirefile(){

if (!$fic=fopen("programmeurs.txt","r")){
	echo "Unable to open file!";
	exit;
}

else{
	while(!feof($fic)){
		if ($ligne=fgets($fic))
			$tableau[]=explode (";",$ligne);
	}
	fclose($fic);
}
	return $tableau;
}

?>