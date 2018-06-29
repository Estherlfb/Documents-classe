<?php

include "vendor/autoload.php";

use phphelp\StringHelper;

$str = new StringHelper("MaChaîne");

echo $str->upper() . "<br>";
echo $str->lower() . "<br>";
echo $str->cut(0, 2) . "<br>"; // Start (0), Length(2)
echo $str->count() . "<br>";
