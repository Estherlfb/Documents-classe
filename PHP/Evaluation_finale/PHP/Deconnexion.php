<?php
session_start();

if(isset($_SESSION['logged'])||($_SESSION['logged']!=true)){
    header('Location:Connexion.php');
}else{
    session_unset();
    session_destroy();
}
?>

