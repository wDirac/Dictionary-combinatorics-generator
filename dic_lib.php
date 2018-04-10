<?php

function write($fname, $fdata, $fmode = 'wb'){

	$file = fopen($fname, $fmode);
	fwrite($file, $fdata);
	fclose($file);
	
}

function read($fname, $ret_type=0, $data_len=0){
	$contentAndSize = [];
	$f_size = filesize($fname);

	$file = fopen($fname, 'rb');
	$content = fread($file, $data_len <= 0 ? $f_size : $data_len);
	fclose($file);

	if($ret_type === 0){
		return $content;
	}elseif($ret_type === 1){
		return $f_size;
	}elseif($ret_type === 2){
		$contentAndSize[0] = $content;
		$contentAndSize[1] = $f_size;

		return $contentAndSize;
	}
}

function hex_string_gen($individual_string_len, $symbols){

	$gen_symbols = ['0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f'];

	if($symbols != $gen_symbols && is_array($symbols) && (count_t($symbols) >= 1)){

		$gen_symbols = $symbols;
	}

	if(is_array($individual_string_len) && (count_t($individual_string_len) === 2)){

		if(is_int($individual_string_len[0]) && is_int($individual_string_len[1])){

			$individual_string_len = mt_rand($individual_string_len[0],$individual_string_len[1]);
		}
	}

	$ret = [];

	for($a = 0; $a < $individual_string_len; $a++){

		$ret[$a] = $gen_symbols[mt_rand(0, count_t($gen_symbols) - 1)];
	}
    
    $ret[count_t($ret)] = "\n";
	$ret = implode('', $ret);

	return $ret;
}

function final_strings_array_gen($strings_number, $individual_string_len, $symbols, $check){
	$final_array = [];

	for($a = 0; $a < $strings_number; $a++){
        
		$current = hex_string_gen($individual_string_len, $symbols);

		if($check === 0){
			
			$final_array[$a] = $current;
			continue;
		}

		if(!in_array_t($current, $final_array)){
			$final_array[$a] = $current;
		}else{

			$a--;
			continue;
		}

	}

	$final_array = implode('', $final_array);

	return $final_array;
}

function in_array_t($needle, $target, $mode = false){ // funcion default activada

	return in_array($needle, $target, $mode);

	$r = false;

	for($a = 0; $a < count_t($target) - 0; $a++){ // - 0  sobra, es debido a un test anterior
		if(!$mode ? $needle == $target[$a] : $needle === $target[$a]){
			$r = true;
		}
	}

	return $r;
}

function count_t($a){ // funcion default activada

	return count($a);

	for($c = 0, $b = 0; $b < 1; $c++){

		if(!isset($a[$c])){
			return $c;
		}
	}
}

?>
