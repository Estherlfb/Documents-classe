<?php
session_start();
// if((isset($_SESSION['logged']))||($_SESSION['logged']!=true))
// {
//     header ('Location:Connexion.php');
// }else {
//     $_SESSION['pseudo'] = $pseudo; 
//     echo 'Bonjour '.$pseudo.'!';
// }

$bdd = new PDO('mysql:host=localhost;dbname=evaluation_finale', 'root', '');

if (empty($_SESSION['nom'])) {
    echo '<p style="color:#F60404;"> Vous devez vous connecter pour acceder à la page. <a href="Connexion.php"> Revenir à la connexion  </p> </a>  <br />';
}else{
    echo 'Coucou '.$_SESSION['nom'].' ! <br>';
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
</head>
<body>
    <h1> La Calculette magique </h1>
<header>
    <nav>  <!-- MENU -->
        <ul>
            <li> <a href="liste_articles.php"> La liste des articles </a> </li>
            <li> <a href="Calculette.php">La calculette </a> </li>
            <li> <a href="liste_utilisateur.php"> La liste des utilisateurs </a> </li>
        </ul>
    </nav>
</header>

    <section>
        <form method="POST">
            <label>Nombre 1</label>
            <input type="number"  name="ch1" placeholder="Chiffre 1" class="form_input" required> </br></br>

            <label>Nombre 2</label>
            <input type="number"  name="ch2" placeholder="Chiffre 2" class="form_input" required> </br></br>

            <label> Opération </label>
            <select name="op" class="form_input" id="op">
                <option value="Addition">Addition</option> 
                <option value="Soustraction" selected>Soustraction</option>
                <option value="Multiplication">Multiplication</option>
                <option value="Division">Division</option>
            </select> </br>
            <button type="submit" class="btn_ok"> Valider </button> </br>
    </section>      


                <?php
                    
                    // CALCUL CALCULETTE
                    if (isset($_POST['ch1']) AND isset($_POST['op']) AND isset($_POST['ch2']))
                    {
                        $ch1=$_POST['ch1'];
                        $op=$_POST['op'];
                        $ch2=$_POST['ch2'];
                    
                    
                    if ($op=="Addition") {
                        $resultat = $ch1+$ch2;
                        echo 'Le resultat est : '.$resultat;
                    } elseif ($op=="Soustraction") {
                        $resultat = $ch1-$ch2;
                        echo 'Le resultat est : '.$resultat;
                    } elseif ($op=="Multiplication") {
                        $resultat = $ch1*$ch2;
                        echo 'Le resultat est : '.$resultat;
                    } else {
                        $resultat = $ch1/$ch2;
                        echo 'Le resultat est : '.$resultat;
                    }
                }
                ?>

    <a href="Deconnexion.php">
        <button type="button" class="btn_deconnexion">Déconnexion</button>
    </a>

</body>
</html>
