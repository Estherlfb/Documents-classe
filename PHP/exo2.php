<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="exo3.php">
        <input type="text" name="prenom" placeholder="prenom"  >
        <input type="text" name="nom" placeholder="nom" > 
        <input type="email" name="email" placeholder="email">
        <button type="submit"> Envoyer </button>
    </form>
    <p>

        Mon Prenom : <?php if(isset($_POST['prenom'])){
            echo $_POST['prenom'];
            } ?> <br/>
        Mon Nom : <?php if(isset($_POST['nom'])){
            echo $_POST['nom']; 
            }?> <br/>
        Mon email : <?php if(isset($_POST['email'])){
            echo $email = $_POST['email']; 
            }?> <br/>
    </p>    

    <?php
// Le message
$message = "coucou";
$to="esther.lefebvre31@gmail.com";
$subject="test";
$headers="from: < $email >\r\n";


// Envoi du mail
mail($to,$subject,$message,$headers);
?>


</body>
</html>