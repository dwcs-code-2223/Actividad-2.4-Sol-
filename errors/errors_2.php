<?php


$a=22;

$b= $a + "1.3€";
echo "\$b es : $b";

$c=$b/0;

$GLOBALS["c"]=4;
echo 'Valor de \$GLOBALS["c"] es '. $GLOBALS["c"];


