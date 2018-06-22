<?php

include "Mail.php";

$mail = new Mail("sender@email1.fr", "receiver@email2.fr");

echo $mail -> send(); // On appelle la fonction send

