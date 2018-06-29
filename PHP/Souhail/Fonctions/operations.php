<?php 
	require('addition.php');

	$masomme = addition(9, 9);
	echo 'Resultat : '.$masomme;
	echo retoursimple();
	retour(1);

	$mamulti = multiplication($masomme, 10); 
	echo 'Resultat : '.$mamulti;
	echo retoursimple();
	retour(1);

	$madivision = division($mamulti, 2);
	echo 'Resultat : '.$madivision;
	echo retoursimple();
	retour(1);

	$masoustraction = soustraction($madivision, 10);
	echo 'Resultat : '.$masoustraction;
	echo retoursimple();
	retour(1);

?>