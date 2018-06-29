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
    <table method="POST">
        <tr>
            <td> Nom </td>
            <td> Prénom </td>
            <td> Age </td>
            <td> Sexe </td>
        </tr>  
        <tr>
            <td> Passion </td>
            <td> Profession </td>
            <td> Compétences </td>
            <td> Description </td>
        </tr> 
    </table>  
            
    <button type="submit"> Envoi </button>
    
    <?php
        if(isset($_POST['passion'])){
        $_SESSION['passion'] = $_POST['passion'];
        $_SESSION['profession'] = $_POST['profession'];
        $_SESSION['competences'] = $_POST['competences'];
        $_SESSION['description'] = $_POST['description'];
        }
        ?>

    <?php
    echo $_SESSION['nom'];
    ?>

</body>
</html>