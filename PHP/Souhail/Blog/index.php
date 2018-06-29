
<form action="#" method="POST">
	<input type="text" name="titre" placeholder="titre"><br/><br/>
	<input type="date" name="date" placeholder="date"><br/><br/>
	<input type="text" name="auteur" placeholder="auteur"><br/><br/>
	<textarea name="contenu" placeholder="contenu"></textarea><br/><br/>
	<button type="submit">Valider l'article</button>
</form>

<?php 
	$dbh = new PDO('mysql:host=localhost;dbname=adrar_cour', 'root', 'root');

	if((isset($_POST['titre']))&&(isset($_POST['date']))&&(isset($_POST['auteur']))&&(isset($_POST['contenu']))){
		$titre = $_POST['titre'];
		$date = $_POST['date'];
		$auteur = $_POST['auteur'];
		$contenu = $_POST['contenu'];

		//BONUS 
		if((!empty($titre))&&(!empty($date))&&(!empty($auteur))&&(!empty($contenu))){
			$requete = $dbh->prepare('INSERT INTO articles (titre, date, auteur, contenu) VALUES (:titre, :date, :auteur, :contenu)');
			$requete->bindParam(':titre', $titre);
			$requete->bindParam(':date', $date);
			$requete->bindParam(':auteur', $auteur);
			$requete->bindParam(':contenu', $contenu);
			$requete->execute();
		} else {
			//gestion des erreurs
		}
	}

	$requete_2 = $dbh->prepare('SELECT id, titre, date FROM articles');
	$requete_2->execute();
	$resultats = $requete_2->fetchAll(PDO::FETCH_ASSOC);

	foreach ($resultats as $key => $value) {
		echo "<a href=article.php?idarticle=".$value['id'].">";
		echo "<h2>".$value['titre']."</h2>"; 
		echo "</a>";
		echo "<h3>".$value['date']."</h3>";
		echo "<hr>";
	}







?>