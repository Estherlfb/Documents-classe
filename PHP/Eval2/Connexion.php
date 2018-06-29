<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="acces_reserve.php" method="POST">

         <label> Email </label> 
        <input type="text"  name="email" placeholder="Email" required>  </br></br>

        <label>Mot de passe</label>
        <input type="password"  name="mdp" placeholder="Mot de passe" required> </br></br>
        
        <button type="submit"> Envoi </button>
    </form>

    <?php
            $bdd = new PDO('mysql:host=localhost;dbname=form_connexion', 'root', '');


                // Vérification Mot de passe identique Inscription
                if(isset($_POST["mdp2"]) && ($_POST["mdp"] != $_POST["mdp2"]))
                {
                  $erreur=1;
                  header ("Location: Inscription.php?erreur=".$erreur);
                }else{ 
                }


                if(isset($_POST['email']) && ($email!=NULL))
                    {
                        $erreurmail=3;
                        header ("Location: Inscription.php?erreurmail=".$erreurmail);
                    }elseif (isset($_POST['email'])) 
                    { 
                       $stmt=$bdd->prepare("INSERT INTO connexion(nom, mdp, email) 
                       VALUES (:nom, :mdp, :email)");
                       $stmt->bindParam(':nom', $_POST['nom']);
                       $stmt->bindParam(':mdp', (password_hash($_POST["mdp"],PASSWORD_DEFAULT)));
                       $stmt->bindParam(':email', $_POST['email']);
                       $stmt->execute();
                    }

                
                

                //  if ($resultat=!){
                //      echo 'Mauvais identifiant ou mot de passe !';
                //      header ("Location: register.php?isPasswordCorrect=".$isPasswordCorrect);
                //  }

                

    ?>