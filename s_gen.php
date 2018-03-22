<?php
require_once('lib.php');

$gen_symbols = ['0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f','A','B','C', 'D', 'E', 'F', 'Z', 'y', 'Y', 'X'];

//se genera una cantidad X de cadenas de longitud individual X en base X, posteriormente todas son comprobadas si se desea
//para asegurarse de que no hay repeticion ningun

// final_strings_array_gen() parametro 1 = cantidad de cadenas, parametro 2 =longitud de cada cadena individual parametro 3 = base symbolica
// parametro 4 = check, si verificar a exactitud coincidencias



function main($file_name, $n, $individual_string_len, $symbols, $check){

    write($file_name, final_strings_array_gen($n, $individual_string_len, $symbols, $check));

	return true;
}

if(main('test.txt', 1000/* cantidad cadenas*/, 120/*logintud individual*/, [] /*simbolos*/, 0 /* check strings */)){
	echo 'Todo ok';
	exit();
}else{
	echo 'Tenemos un problema';
	die();
}
?>