<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

echo "Soy B<BR/>";
//include "../C.php"; //Se interpretará como desde A

//Para resolver los include anidados, ayúdate de las constantes mágicas __FILE__ o __DIR__:
echo "__FILE__: ".__FILE__."<BR/>"; //__FILE__  Si se usa dentro de un include, devolverá el nombre del fichero incluido. 


include dirname(__FILE__)."/../C.php";

//include __DIR__."/../C.php";