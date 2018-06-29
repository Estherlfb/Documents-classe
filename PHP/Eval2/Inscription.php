<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="Connexion.php" method="POST">
        <label>Nom</label>
        <input type="text"  name="nom" placeholder="Nom" required> </br></br>
 
        <label>Mot de passe</label>
        <input type="password"  name="mdp" placeholder="Mot de passe" required> </br></br>

        <label>Confirmation mot de passe</label>
        <input type="password"  name="mdp2" placeholder="Confirmation mot de passe" required> </br></br>

        <label> Email </label> 
        <input type="text"  name="email" placeholder="Email" required>  </br></br>
        
        <button type="submit"> Envoi </button>
    </form>

 
<?php

    if(isset($_GET["erreur"])){
        if($_GET["erreur"]==1){
        echo '<p style="color:#F60404;"> Les deux mots de passe sont différents. </p>'; 
        }
    }

      if(isset($_GET["erreurmail"])){
        if($_GET["erreurmail"]==3){
          echo '<p style="color:#F60404;"> L\'email existe déjà. </p>'; 
        }
      }
                    ?>