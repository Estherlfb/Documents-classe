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
    echo '<p style="color:#F60404;"> Vous devez vous connecter pour acceder à la page. <a href="Connexion.php"> Revenir à la connexion  </p> </a> <br />';
}else{
    echo 'Coucou '.$_SESSION['nom'].' !';
}

if((isset($_GET['idarticle']))&&(!empty($_GET['idarticle']))){

    $idarticle = $_GET['idarticle'];


    $requete = $bdd->prepare('SELECT * FROM evaluation_article WHERE id = :idarticle'); // AFFICHER TOUT DE L'UTILISATEUR
    $requete->bindParam(':idarticle', $idarticle);
    $requete->execute();
    $detail = $requete->fetch(PDO::FETCH_ASSOC);


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <title>détail d'article</title>
</head>
<body>
    <h1> Détail de l'article <?php echo $detail['titre']; ?> </h1>   
    <header>
        <nav>  <!-- MENU -->
            <ul>
                <li> <a href="liste_articles.php"> La liste des articles </a> </li>
                <li> <a href="Calculette.php">La calculette </a> </li>
                <li> <a href="liste_utilisateur.php"> La liste des utilisateurs </a> </li>
            </ul>
        </nav>
    </header>
    <form action="liste_articles.php" method="GET">
            <?php
                // VALEUR ARTICLE
                echo "Le titre est : ".$detail['titre'].'</br>';
                echo "Le sous-titre est : ".$detail['sous_titre'].'</br>';
                echo "La date est : ".$detail['date'].'</br>';
                echo "L'auteur est : ".$detail['auteur'].'</br>';
                echo '<p>'."Le titre est : ".$detail['contenu'].'</p>';
            }
            ?>    

        <button type="submit" name="delete" class="btn_delete"> Supprimer l'article 

        <?php

        if((isset($_GET['idarticle']))&&(!empty($_GET['idarticle']))){ // SUPPRIMER ARTICLE 

            $idarticle = $_GET['idarticle'];
        
            $supp= $bdd->prepare("DELETE FROM evaluation_article WHERE id=:idarticle");
            $supp->bindParam(':idarticle', $idarticle);
            $supp->execute();
            $detail = $supp->fetch(PDO::FETCH_ASSOC);
        }
        ?>
        </button>
    </form>
    <a href="Deconnexion.php">
        <button type="button" class="btn_deconnexion">Déconnexion</button>
    </a>
 
     
</body>
</html>