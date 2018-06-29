<?php 
// ENVOYER LES DONNES D'UN FORMULAIRE DANS LA BASE DE DONNEES
$bdd = new PDO('mysql:host=localhost;dbname=adrar_test', 'root', '');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label> Nom : </label>
        <input type="text" name="prenom" placeholder="prenom"  > </br>
        <label> Prénom : </label>
        <input type="text" name="nom" placeholder="nom" > </br>
        <label> Email : </label>
        <input type="email" name="email" placeholder="email"> </br>
        <button type="submit"> Envoyer </button>
    </form>

<?php



if (isset($_POST['nom'])) {
    $reponse = $bdd->prepare("INSERT INTO client(nom, prenom, email) 
    VALUES (:nom, :prenom, :email)");

    $reponse->bindParam(':nom', $_POST['nom']);
    $reponse->bindParam(':prenom', $_POST['prenom']);
    $reponse->bindParam(':email', $_POST['email']);

    $reponse->execute();
}



?>

</body>
</html>