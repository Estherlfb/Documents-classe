<?php

$bdd=new PDO('mysql:host=localhost;dbname=blog_php', 'root', '');


if(isset($_GET["ID"])){
    $resultat = $bdd->prepare("SELECT * FROM blog_1 WHERE ID=:ID");
    $resultat->bindParam(':ID', $_GET['ID']);
    $resultat->execute();
    $donnees=$resultat->fetchAll(PDO::FETCH_ASSOC);
    foreach ($donnees as $key => $value) {
     echo "Le titre est : ".$value["titre"].'</br>';
     echo "La date est : ".$value["date"].'</br>';
     echo "L'auteur est : ".$value["auteur"].'</br>';
     echo "Le texte est : ".$value["contenu"].'</br>';
    }
}

?>