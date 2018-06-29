<?php

function insert ($titre, $date, $auteur, $contenu){
    $bdd=new PDO('mysql:host=localhost;dbname=blog_php', 'root', '');
    $req=$bdd->prepare("INSERT INTO blog_1(titre, date, auteur, contenu) 
            VALUES (:titre, :date, :auteur, :contenu)");
            $req->bindParam(':titre', $titre);
            $req->bindParam(':date', $date);
            $req->bindParam(':auteur', $auteur);
            $req->bindParam(':contenu', $contenu);
            $req->execute();
}

function listearticle(){
    $bdd=new PDO('mysql:host=localhost;dbname=blog_php', 'root', '');
    $resultat = $bdd->prepare("SELECT ID, titre, date FROM blog_1");
            $resultat->execute();
            $donnees=$resultat->fetchAll(PDO::FETCH_ASSOC);
            foreach ($donnees as $key => $value) {
                echo $value['date'].'<a href="article.php?ID='.$value['ID'].'">'.$value["titre"].'</a><br>';
            }
}