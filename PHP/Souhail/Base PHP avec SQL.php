<form action="#" method="POST">
	<input type="text" name="nom" placeholder="nom">
	<input type="text" name="prenom" placeholder="prenom">
	<input type="text" name="email" placeholder="email">
	<button type="submit">Valider</button>
</form>


<?php 

//On se connecte à la base de donnée
	$dbh = new PDO('mysql:host=localhost;dbname=adrar_cour', 'root', 'root');

//On vérifie si les variables existent
if((isset($_POST["nom"]))&&(isset($_POST["prenom"]))&&(isset($_POST["email"]))){
	$nom=$_POST["nom"];
	$prenom=$_POST["prenom"];	
	$email=$_POST["email"];
	

	//On prepare la requete
	$requet=$dbh->prepare('INSERT INTO users (nom, prenom, email)VALUES(:nom, :prenom, :email)');
	//On balance nos paramètres dans la requete
	$requet->bindParam(':nom', $nom);
	$requet->bindParam(':prenom', $prenom);
	$requet->bindParam(':email', $email);

	//On execute
	$requet->execute();
}

//Deuxieme partie 

$requet2=$dbh->prepare("SELECT nom, prenom FROM users");
$requet2->execute();
$resultat=$requet2->fetchAll(PDO::FETCH_ASSOC);

//Afficher la liste des resultats de la requete précédente.
/*
echo "FOR : ";


for ($i=0; $i < sizeof($resultat); $i++) { 
	echo $resultat[$i]["nom"]." ".$resultat[$i]["prenom"]."</br>";
}
*/
//echo "FOREACH : ";

foreach ($resultat as $key => $value) {
	echo $value["nom"]." ".$value["prenom"]."</br>";
}
/*
echo "WHILE : ";

$i = 0;
while ($i < sizeof($resultat)) {
	echo $resultat[$i]["nom"]." ".$resultat[$i]["prenom"]."</br>";
	$i++;
}
*/














?>






