<?php


ini_set('display_errors', 'Off'); //efecto solo desde la línea

$a=22;

$b= $a + "1.3€";


$GLOBALS["b"]=4;
echo 'Valor de \$GLOBALS["b"] es '. $GLOBALS["b"]."<br/>";

echo "\$b es : $b";

$c=$b/0;



