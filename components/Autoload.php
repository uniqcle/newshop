<?php 

function __autoload($className){

	$arrayPaths = [
		'/models/', 
		'/components/'
	]; 

	foreach($arrayPaths as $Item):
		$path = ROOT.$Item.$className.'.php';

		if(is_file($path)){
			require_once($path); 
		} 

	endforeach; 
}