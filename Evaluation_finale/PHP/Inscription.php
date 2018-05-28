<?php
session_start();
?>


<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Inscription</title>
</head>
<body>
    <h1> Bienvenue sur notre site. Veuillez vous inscrire </h1>
    <form action="Connexion.php" method="POST">
        <label>Nom</label>
        <input type="text"  name="nom" placeholder="Nom" class="form_input" required> </br></br>

        <label>Prénom</label>
        <input type="text"  name="prenom" placeholder="Prénom" class="form_input" required> </br></br>
        
        <label> Email </label> 
        <input type="email"  name="email" placeholder="Email" class="form_input"  required>  </br></br>
 
        <label>Mot de passe</label>
        <input type="password"  name="mdp" placeholder="Mot de passe" class="form_input" required> </br></br>

        <label>Confirmation mot de passe</label>
        <input type="password"  name="confirm_mdp" placeholder="Confirmation mot de passe" class="form_input" required> </br></br>

        <a href="Connexion.php" class="lien_inscription"> Déjà inscris ? </a>

        <button type="submit" class="btn_ok"> Envoi </button>
    </form>

            <?php

                    $bdd = new PDO('mysql:host=localhost;dbname=evaluation_finale', 'root', '');

                    

                    // ERREUR MDP
                    if(isset($_GET["erreur"])){
                        if($_GET["erreur"]==1){
                        echo '<p style="color:#F60404;"> Les deux mots de passe sont différents. </p>'; 
                        }
                    }
                    // ERREUR EMAIL
                    if(isset($_GET["erreurmail"])){
                        if($_GET["erreurmail"]==2){
                        echo '<p style="color:#F60404;"> L\'email n\'existe pas dans la base de données. </p>'; 
                        }
                    }

            ?>