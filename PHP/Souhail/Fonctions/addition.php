<?php 
function addition($parametre1, $parametre2){
	$chiffre1 = $parametre1;
	$chiffre2 = $parametre2;
	$resultat = $chiffre1 + $chiffre2;
	return $resultat;
}

function multiplication($parametre1, $parametre2){
	$chiffre1 = $parametre1;
	$chiffre2 = $parametre2;
	$resultat = $chiffre1 * $chiffre2;
	return $resultat;
}

function division($parametre1, $parametre2){
	$chiffre1 = $parametre1;
	$chiffre2 = $parametre2;
	$resultat = $chiffre1 / $chiffre2;
	return $resultat;
}

function soustraction($parametre1, $parametre2){
	$chiffre1 = $parametre1;
	$chiffre2 = $parametre2;
	$resultat = $chiffre1 - $chiffre2;
	return $resultat;


}

function retour($toto){
	for ($i=0; $i < $toto; $i++) { 
		echo '<br>';
	}
}

function retoursimple(){
	return '<br/>';
}




?>