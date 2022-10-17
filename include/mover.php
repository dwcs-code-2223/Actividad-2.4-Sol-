<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
function mover_temp(string $origen, string $destino):bool{
    if(is_uploaded_file($origen)){
       return move_uploaded_file($origen, $destino);
    }
    else{
        return false;
    }
}
