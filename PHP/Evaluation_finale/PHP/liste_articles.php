<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Liste des articles</title>
</head>
<body>
    <h1> La liste des articles </h1>
    <header>
        <nav>    <!-- MENU -->
            <ul>
                <li> <a href="liste_articles.php"> La liste des articles </a> </li>
                <li> <a href="Calculette.php">La calculette </a> </li>
                <li> <a href="liste_utilisateur.php"> La liste des utilisateurs </a> </li>
            </ul>
        </nav>
    </header>

                <?php
                $bdd = new PDO('mysql:host=localhost;dbname=evaluation_finale', 'root', '');

                    $requete= $bdd->prepare('SELECT id, titre, date FROM evaluation_article'); // AFFICHER TITRE DATE ARTICLES
                    $requete->execute();
                    $resultats = $requete->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($resultats as $key => $value) {
                        echo "<a href=detail_article.php?idarticle=".$value['id'].">";
                        echo " ". $value['titre']. "</br>"; 
                        echo " ". $value['date']. "</br>";
                        echo "</a>";

                    }
                    
                    echo 'Vous pouvez créer un article. <a class="visite" href="creation_article.php"> Pour cela, cliquez ici. </a> <br>';
                    echo 'Vous pouvez créer un utilisateur. <a class="visite" href="creation_utilisateur.php"> Pour cela, cliquez ici. </a> <br>';
                    echo 'Vous pouvez consulter les utilisateurs. <a class="visite" href="liste_utilisateur.php"> Pour cela, cliquez ici. </a> <br>';
                    
                ?>

    <a href="Deconnexion.php">
        <button type="button" class="btn_deconnexion">Déconnexion</button>
    </a>

</body>
</html>

