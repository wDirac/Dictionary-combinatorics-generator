<?php
require_once('lib.php');
ini_set('memory_limit', '-1');



//se genera una cantidad X de cadenas de longitud individual X o de longitud aleatoria entre el rango (X, Y) en base X, posteriormente todas son comprobadas si se desea
//para asegurarse de que no hay repeticion ninguna


// final_strings_array_gen() parametro 1 = cantidad de cadenas, parametro 2 =longitud de cada cadena individual, o rango de tipo (X, Y) parametro 3 = base simbolica
// parametro 4 = check, si verificar a exactitud coincidencias

// ejemplo: func(256 cantidad cadenas, 50 logintud individual definida o rango aleatorio [30, 70], [] simbolos si vacio base default, 1 comprobacion exacta no repeticion)

$f_name = 'test.txt';

$number = 5000;
$ind_long = 30;
$symbols = ['0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f','A','B','C', 'D', 'E', 'F', 'Z', 'y', 'Y', 'X'];
$check = 1;

$data = final_strings_array_gen($number, $ind_long, $symbols, $check);


write($f_name, $data);

?>
