<?php
session_start();
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
    <h2> Vous souhaitez nous contacter? </h2>
    <form>
        <label> Email </label> 
        <input type="text"  name="email" placeholder="Email" class="form_input" required>  </br></br>

            <?php

                if(isset($_POST['email'])){ // ENVOI MAIL
                    $email=$_POST['email'];
                    // Le message
                    $message = "Suite à votre réponse";
                    $to=$email;
                    $subject="test";
                    $headers="from: < $email >\r\n";


                    // Envoi du mail
                    mail($to,$subject,$message,$headers);
                }
                ?>



        <label>Sujet</label>
        <input type="text"  name="sujet" placeholder="Sujet" class="form_input" required> </br></br>

        <label>Message</label>
        <input type="text"  name="message" placeholder="Message" class="form_input" required> </br></br>
        
        <button type="submit" class="btn_ok"> Envoi </button>
    </form>    
</body>
</html>