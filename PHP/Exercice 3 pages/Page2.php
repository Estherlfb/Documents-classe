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
    <form action="Page3.php" method="POST">

        <label>Passion</label>
        <input type="text"  name="passion" placeholder="Passion"> </br>
 
        <label>Profession</label>
        <input type="text"  name="profession" placeholder="Profession"> </br>

        <legend> Vos compétences : </legend>

        <div class="competences" name="competences">
        <input type="checkbox" id="Développement" name="developpement"> 
        <label> Développement </label> </br>

        <input type="checkbox" id="Reseau" name="reseau">
        <label> Réseau </label>  </br>

        <input type="checkbox" id="gestion" name="gestion"> 
        <label> Gestion </label> </br>

        <input type="checkbox" id="comptabilité" name="comptabilité"> 
        <label> Comptabilité </label> </br>
        </div>

        <textarea type="text" name="description"> </textarea>

        <button type="submit"> Envoi </button>
        </form>

 <?php
        if(isset($_POST['nom'])){
        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['prenom'] = $_POST['prenom'];
        $_SESSION['age'] = $_POST['age'];
        $_SESSION['sexe'] = $_POST['sexe'];
        }
        ?>
        
</body>
</html>