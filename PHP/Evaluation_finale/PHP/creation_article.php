<?php
session_start(); 
// print_r($_SESSION);
// if((isset($_SESSION['logged']))||($_SESSION['logged']!=true))
// {
//     header ('Location:Connexion.php');
// }else {
    // if(isset($_SESSION['nom'])){
    //     $_SESSION['nom']=$utilisateur['nom'];
    //     echo 'Bonjour '.$utilisateur['nom'].'!';
    // }
    // print_r($_SESSION);

    $bdd = new PDO('mysql:host=localhost;dbname=evaluation_finale', 'root', '');

    if (empty($_SESSION['nom'])) {
        echo '<p style="color:#F60404;"> Vous devez vous connecter pour acceder à la page. <a href="Connexion.php"> Revenir à la connexion  </p> </a> <br />';
    }else{
        echo 'Coucou '.$_SESSION['nom'].' !';;
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Création article</title>
</head>
<body>
    <h1> La création d'un article </h1>
    <header>
        <nav>   <!-- MENU -->
            <ul>
                <li> <a href="liste_articles.php"> La liste des articles </a> </li>
                <li> <a href="Calculette.php">La calculette </a> </li>
                <li> <a href="liste_utilisateur.php"> La liste des utilisateurs </a> </li>
            </ul>
        </nav>
    </header>

    <form action="#" method="POST">
        <label>Titre</label>
        <input type="text" name="titre" placeholder="titre" class="form_input" ><br/><br/>

        <label>Sous-Titre</label>
        <input type="text" name="sous_titre" placeholder="Sous-Titre" class="form_input" ><br/><br/>

        <label>Date</label>
        <input type="date" name="date" placeholder="Date" class="form_input" ><br/><br/>

        <label>Auteur</label>
        <textarea type="text" name="auteur" placeholder="Auteur" class="form_input" id="op"></textarea><br/><br/>

        <label>Contenu</label>
        <textarea type="text" name="contenu" placeholder="Contenu" class="form_input" id="op"></textarea><br/><br/>

        <button type="submit" class="btn_ok">Valider l'article</button>
    </form>


        <?php
                    
                        // INSERTION DES ARTICLES 
                    if((isset($_POST['titre']))&&(isset($_POST['sous_titre']))&&(isset($_POST['date']))&&(isset($_POST['auteur']))&&(isset($_POST['contenu']))){
                    $titre = $_POST['titre'];
                    $soustitre = $_POST['sous_titre'];
                    $date = $_POST['date'];
                    $auteur = $_POST['auteur'];
                    $contenu = $_POST['contenu'];
                    

                if((!empty($titre))&&(!empty($soustitre))&&(!empty($date))&&(!empty($auteur))&&(!empty($contenu))){
                    $requete=$bdd->prepare('INSERT INTO evaluation_article (titre, sous_titre, date, auteur, contenu) VALUES (:titre, :sous_titre, :date, :auteur, :contenu)');
                    $requete->bindParam(':titre', $titre);
                    $requete->bindParam(':sous_titre', $soustitre);
                    $requete->bindParam(':date', $date);
                    $requete->bindParam(':auteur', $auteur);
                    $requete->bindParam(':contenu', $contenu);
                    $requete->execute();

                    echo 'Votre article a bien été enregistré dans notre base de données!';
                    }
                }

        ?>

    <a href="Deconnexion.php">
        <button type="button" class="btn_deconnexion">Déconnexion</button>
    </a>

</body>
</head>    




