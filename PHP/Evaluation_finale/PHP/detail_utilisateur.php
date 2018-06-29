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
    echo 'Coucou '.$_SESSION['nom'].' !';
}


if((isset($_GET['idutilisateur']))&&(!empty($_GET['idutilisateur']))){ // AFFICHER TOUT DE L'UTILISATEUR 

    $idutilisateur = $_GET['idutilisateur'];


    $requete = $bdd->prepare('SELECT * FROM evaluation_utilisateurs WHERE id = :idutilisateur');
    $requete->bindParam(':idutilisateur', $idutilisateur);
    $requete->execute();
    $detail = $requete->fetch(PDO::FETCH_ASSOC);


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
    <h1> Détail de l'utilisateur <?php echo $detail['nom']; ?> </h1>  
    <header>  
        <nav>  <!-- MENU -->
            <ul>
                <li> <a href="liste_articles.php"> La liste des articles </a> </li>
                <li> <a href="Calculette.php">La calculette </a> </li>
                <li> <a href="liste_utilisateur.php"> La liste des utilisateurs </a> </li>
            </ul>
        </nav>
    </header>
    <form action="liste_utilisateur.php" method="GET">

            <?php

                // VALEUR UTILISATEUR
                echo "Le Nom est : ".$detail['nom'].'</br>';
                echo "Le Prénom est : ".$detail['prenom'].'</br>';
                echo "L'email est : ".$detail['email'].'</br>';
            }
            ?>    
        <button type="submit" name="delete" class="btn_delete" value="value1"> Supprimer l'utilisateur 

            <?php

            if((isset($_GET['idutilisateur']))&&(!empty($_GET['idutilisateur']))){ // SUPPRIMER UTILISATEUR
  
                // if((isset($_POST["value1"]))&&(!$_POST["value1"])){
                    $idutilisateur = $_GET['idutilisateur'];
                    // $value = $_POST["value1"];
                    // if(isset($value)){
                    // if($value==1){
                        $supp= $bdd->prepare("DELETE FROM evaluation_utilisateurs WHERE id=:idutilisateur");
                        $supp->bindParam(':idutilisateur', $idutilisateur);
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

