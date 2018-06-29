<?php
function modulo($chiffre1, $chiffre2){
    $reste = $chiffre1 % $chiffre2;
    if($reste == 0){
        echo $chiffre1." est modulo de ".$chiffre2;
    }else{
        echo "nique toi";
    }
}