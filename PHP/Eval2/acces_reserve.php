<?php

$bdd = new PDO('mysql:host=localhost;dbname=form_connexion', 'root', '');










 //  Récupération de l'utilisateur et de son pass hashé
 $req = $bdd->prepare('SELECT nom, mdp FROM connexion WHERE email = :email');
 $req->bindParam(':email', $_POST['email']);
 $req->execute();
 $resultat = $req->fetch();

 // Comparaison du pass envoyé via le formulaire avec la base
 $isPasswordCorrect = password_verify($_POST['mdp'], $resultat['mdp']);

 if($_POST['mdp'] != $resultat['mdp']){
     echo 'Mauvais mot de passe';
 }

 if($isPasswordCorrect){
     header('Location:acces_reserve.php');
 }else{
    header('Location:Connexion.php');
 }



    ?>