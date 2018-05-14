<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php

$tab['site_web']=$_POST['Site_web'];
$tab['Identifiant']=$_POST['Identifiant'];
$tab['mdp']=$_POST['mdp'];
$tab['confirm_mdp']=$_POST['confirm_mdp'];
$tab['CMS']=$_POST['CMS'];
$tab['Statut']=$_POST['Statut'];
$tab['description']=$_POST['descritpion'];

// $site=$_POST['Site_web'];
// $identifiant=$_POST['Identifiant'];
// $mdp=$_POST['mdp'];
// $confirm_mdp=$_POST['confirm_mdp'];
// $cms=$_POST['CMS'];
// $statut=$_POST['Statut'];
//$description=$_POST['descritpion'];


// si pas bon
if (isset($_POST["confirm_mdp"]) AND ($_POST["mdp"]) != ($_POST["confirm_mdp"]))
{
    header("Location: timer.php"); 
} 
 

foreach ($tab as $key => $value) {
    echo $key." = ";
    echo $value. "</br>";
}

?>

</body>
</html>
