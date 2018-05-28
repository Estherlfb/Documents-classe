<?php
                  session_start();
                  if(isset($_SESSION['logged'])){
                    if($_SESSION['logged']==true){
                        header ('Location:liste_articles.php');
                    }
                }
                  ?>
<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Connexion</title>
</head>
<body>
    <h1> Re-bonjour ! Merci de vous connecter </h1>
    <form action="Connexion_bon_ou_pas.php" method="POST" >

        <label> Email </label> 
        <input type="text"  name="email" placeholder="Email" class="form_input" required>  </br></br>

        <label>Mot de passe</label>
        <input type="password"  name="mdp" placeholder="Mot de passe" class="form_input" required> </br></br>

        <a href="Inscription.php" class="lien_inscription"> Inscris toi ! </a>

        <button type="submit" class="btn_ok"> Envoi </button>

 
    </form>

    <?php
    
            $bdd = new PDO('mysql:host=localhost;dbname=evaluation_finale', 'root', '');

             // Vérification deux Mots de passe identique sur l'inscription
             if(isset($_POST["confirm_mdp"]) && ($_POST["mdp"] != $_POST["confirm_mdp"]))
             {
               $erreur=1;
               header ("Location: Inscription.php?erreur=".$erreur);
             }elseif(isset($_POST['nom'])){ // On entre les valeurs 
                $stmt=$bdd->prepare("INSERT INTO evaluation(nom, prenom, mdp, email) 
                VALUES (:nom, :prenom, :mdp, :email)");
                $stmt->bindParam(':nom', $_POST['nom']);
                $stmt->bindParam(':prenom', $_POST['prenom']);
                $stmt->bindParam(':mdp', $_POST['mdp']); // (password_hash($_POST["mdp"],PASSWORD_DEFAULT)));
                $stmt->bindParam(':email', $_POST['email']);
                $stmt->execute();
                }

            // Marche pas    if(isset($_POST['nom'])) && (isset($_POST['prenom'])) && (isset($_POST['email'])) && (isset($_POST['mdp'])) && (isset($_POST['confirm_mdp'])){
            // Marche pas    if(!empty($_POST['nom']))&&(!empty($_POST['prenom']))&&(!empty($_POST['email']))&&(!empty($_POST['mdp']))&&(!empty($_POST['confirm_mdp'])){           

    ?>