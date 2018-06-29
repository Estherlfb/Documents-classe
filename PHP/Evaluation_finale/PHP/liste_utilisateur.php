<?php
session_start();
// if((isset($_SESSION['logged']))||($_SESSION['logged']!=true)){
//     header ('Location:Connexion.php');
// }else {
//     $_SESSION['pseudo'] = $pseudo; 
//     echo 'Bonjour '.$pseudo.'!';
// }

$bdd = new PDO('mysql:host=localhost;dbname=evaluation_finale', 'root', '');

if (empty($_SESSION['nom'])) {
    echo '<p style="color:#F60404;"> Vous devez vous connecter pour acceder à la page. <a href="Connexion.php"> Revenir à la connexion  </p> </a>  <br />';
}else{
    echo 'Coucou '.$_SESSION['nom'].' ! <br>';
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
    <h1> La liste des utilisateurs </h1>
    <header>
        <nav>  <!-- MENU -->
            <ul>
                <li> <a href="liste_articles.php"> La liste des articles </a> </li>
                <li> <a href="Calculette.php">La calculette </a> </li>
                <li> <a href="liste_utilisateur.php"> La liste des utilisateurs </a> </li>
            </ul>
        </nav>
    </header>

            <?php


                $requete= $bdd->prepare('SELECT id, nom, prenom FROM evaluation_utilisateurs'); // AFFICHER NOM PRENOM UTILISATEUR 
                $requete->execute();
                $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);

                // VALEUR 
                foreach ($resultats as $key => $value) {
                    echo "<a href=detail_utilisateur.php?idutilisateur=".$value['id'].">";
                    echo " ". $value['nom']; 
                    echo " ". $value['prenom']. "</br>";
                    echo "</a>";
                }

                echo 'Vous pouvez créer un utilisateur. <a href="creation_utilisateur.php"> Pour cela, cliquez ici. </a> <br>';
            ?>


    <a href="Deconnexion.php">
        <button type="button" class="btn_deconnexion">Déconnexion</button>
    </a>
    
</body>
</html>