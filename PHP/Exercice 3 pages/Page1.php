<?php session_start(); ?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="Page2.php" method="POST">
        <label>Nom</label>
        <input type="text"  name="nom" placeholder="Nom">
 
        <label>Prénom</label>
        <input type="text"  name="prenom" placeholder="Prénom">

        <label> Age </label> 
        <input type="number"  name="age" placeholder="Age"> 

        <label> Sexe </label> 
        <select name="sexe" id="sexe">
            <option value="homme"> Homme </option>
            <option value="femme"> Femme </option>
        </select>

        <button type="submit"> Envoi </button>
        </form>

       

</body>
</html>