
<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="blog.php" method="POST">
        <label>Titre</label>
        <input type="text"  name="titre" placeholder="Titre" required> </br>
 
        <label>Date</label>
        <input type="date"  name="date" placeholder="Date" required> </br>

        <label> Auteur </label> 
        <input type="text"  name="auteur" placeholder="Auteur" required>  </br>

        <label> Contenu </label> 
        <input type="textarea"  name="contenu" placeholder="Contenu" required> </br>
        
        <button type="submit"> Envoi </button>
    </form>

    <?php
        require('Blog avec fonctions.php');

        $bdd=new PDO('mysql:host=localhost;dbname=blog_php', 'root', '');
        if(isset($_POST['titre'])){
            insert($_POST['titre'], $_POST['date'], $_POST['auteur'], $_POST['contenu']);
        }


        if(isset($bdd)){
            listearticle();
        }
  
    ?>            
    
</body>
</html>