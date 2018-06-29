<?php 
	if((isset($_GET['idarticle']))&&(!empty($_GET['idarticle']))){

		$idarticle = $_GET['idarticle'];

		$dbh = new PDO('mysql:host=localhost;dbname=adrar_cour', 'root', 'root');

		$requete = $dbh->prepare('SELECT * FROM articles WHERE id = :idarticle');
		$requete->bindParam(':idarticle', $idarticle);
		$requete->execute();
		$MonArticle = $requete->fetch(PDO::FETCH_ASSOC);

		echo '<h1>'.$MonArticle['titre'].'</h1>';
		echo '<h2>'.$MonArticle['date'].'</h2>';
		echo '<h3>'.$MonArticle['auteur'].'</h3>';
		echo '<p>'.$MonArticle['contenu'].'</p>';


		$newdate = date('j-M-Y', strtotime($MonArticle['date']));   

		echo 'Ma bonne date : '.$newdate;
	}else{
		//gestion des erreurs
	}
?>