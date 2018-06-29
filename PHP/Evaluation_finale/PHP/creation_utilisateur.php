<?php
session_start(); 
// if((isset($_SESSION['logged']))||($_SESSION['logged']!=true)){
//      header ('Location:Connexion.php');
// }else {
//     $_SESSION['pseudo'] = $pseudo; 
//     echo 'Bonjour '.$pseudo.'!';
// }

$bdd = new PDO('mysql:host=localhost;dbname=evaluation_finale', 'root', '');

if (empty($_SESSION['nom'])) {
    echo '<p style="color:#F60404;"> Vous devez vous connecter pour acceder à la page. <a href="Connexion.php"> Revenir à la connexion  </p> </a>  <br />';
}else{
    echo 'Coucou '.$_SESSION['nom'].' !';
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
</head>
<body>
    <h1> Création d'un utilisateur </h1>
    <header>
        <nav>  <!-- MENU -->
            <ul>
                <li> <a href="liste_articles.php"> La liste des articles </a> </li>
                <li> <a href="Calculette.php">La calculette </a> </li>
                <li> <a href="liste_utilisateur.php"> La liste des utilisateurs </a> </li>
            </ul>
        </nav>
    </header>
    <form method="POST">
        <label>Nom</label>
        <input type="text"  name="nom" placeholder="Nom" class="form_input" required> </br></br>

        <label>Prénom</label>
        <input type="text"  name="prenom" placeholder="Prénom" class="form_input" required> </br></br>
        
        <label> Email </label> 
        <input type="email"  name="email" placeholder="Email" class="form_input" required>  </br></br>
 
        <label>Mot de passe</label>
        <input type="password"  name="mdp" placeholder="Mot de passe" class="form_input" required> </br></br>

        <label>Confirmation mot de passe</label>
        <input type="password"  name="confirm_mdp" placeholder="Confirmation mot de passe" class="form_input" required> </br></br>

        <button type="submit" class="btn_ok"> Envoi </button>
    </form>


            <?php

                    // Vérification deux Mots de passe identique sur la création
                if(isset($_POST["confirm_mdp"]) && ($_POST["mdp"] != $_POST["confirm_mdp"]))
                {
                $erreur=1;
                header ("Location: Inscription.php?erreur=".$erreur);
                } 

                    if((isset($_POST['nom']))&&(isset($_POST['prenom']))&&(isset($_POST['email']))&&(isset($_POST['mdp']))){ // INSERTION DES DONNEES DU NOUVEL UTILISATEUR
                    $nom = $_POST['nom'];
                    $prenom = $_POST['prenom'];
                    $email = $_POST['email'];
                    $mdp = $_POST['mdp'];
                

                 if((!empty($nom))&&(!empty($prenom))&&(!empty($email))&&(!empty($mdp))){  //ON ENTRE LES VALEURS
                    $requete=$bdd->prepare('INSERT INTO evaluation_utilisateurs (nom, prenom, email, mdp) VALUES (:nom, :prenom, :email, :mdp)');
                    $requete->bindParam(':nom', $nom);
                    $requete->bindParam(':prenom', $prenom);
                    $requete->bindParam(':email', $email);
                    $requete->bindParam(':mdp', $mdp);
                    $requete->execute();

                echo 'L\'utilisateur a bien été créé!';
                }
            }


            ?>

    <a href="Deconnexion.php">
        <button type="button" class="btn_deconnexion" >Déconnexion</button>
    </a>

</body>
</head>    




