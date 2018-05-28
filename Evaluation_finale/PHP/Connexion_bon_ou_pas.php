<?php
session_start();
if(isset($_SESSION['logged'])){
    if($_SESSION['logged']==true){
        header ('Location:liste_articles.php');
    }
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


<?php
                $bdd = new PDO('mysql:host=localhost;dbname=evaluation_finale', 'root', '');

                // Vérification Email + mdp identique à la bdd
                $email=$_POST['email'];
                $mdp=$_POST['mdp'];
                $requete=$bdd->prepare("SELECT*FROM evaluation WHERE email=:email");
                $requete->bindParam(':email', $email);
                $requete->execute();
                $utilisateur=$requete->fetch();
                

                if($utilisateur['mdp']==$mdp){
                    $_SESSION['nom']=$utilisateur['nom'];
                    $_SESSION['prenom']=$utilisateur['prenom'];
                    $_SESSION['email']=$utilisateur['email'];

                    // if($_SESSION['logged']==true){

                    echo 'Vous êtes bien connecté <a href="liste_articles.php"> Accès à la liste des articles </a>';
                }else {
                    echo 'Le mot de passe n\'est pas bon <a href="Connexion.php"> Cliquez pour réessayer </a>';
                }
            
            
                ?>

</body>
</html>