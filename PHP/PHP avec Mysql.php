<?php
    $nom = "Trucmachin";
    $prenom = "Michel";
    $email = "Michel.trucmachin@gmail.com";
    $age = 20;
    $classe = "DL18";

    // Connexion 
    $connexion = new PDO('mysql:host=localhost;dbname=adrar', 'root', '');

    // INSERT
    $requete = $connexion->prepare("INSERT INTO eleves(nom, prenom, email, age, classe) 
    VALUES(:nom, :prenom, :email, :age, :classe)");
    $requete->bindParam(':nom', $nom);
    $requete->bindParam(':prenom', $prenom);
    $requete->bindParam(':email', $email);
    $requete->bindParam(':age', $age);
    $requete->bindParam(':classe', $classe);
    $requete->execute();



    // SELECT
    $resultat = $connexion->query("SELECT * FROM eleves WHERE id=1");
    $donnees=$resultat->fetch(PDO::FETCH_ASSOC);
    foreach ($donnees as $key => $value) {
        echo $key;
        echo " => ";
        echo $value;
        echo "<br/>";
    }

    // UPDATE
    $sql = $connexion->prepare("UPDATE eleves SET nom='jean' WHERE id=2");
    $sql->execute();

    // DELETE
    $delete= $connexion->exec("DELETE FROM eleves WHERE id=2");
   
    // --- creer un utilisateur et verifier qu'il existe dans la BDD avec une reponse : OUI / NON ---
    // https://www.commentcamarche.net/forum/affich-19664701-verifier-si-un-pseudo-existe-sql-et-en-php
    // https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/tp-creer-un-espace-membres#/id/r-2178952
    // https://www.commentcamarche.net/forum/affich-19182768-php-verifier-si-un-membre-existe-ds-la-bdd
?>