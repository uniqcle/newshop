<?php 

function __autoload($className){

	$array_paths = [
		'/components/', 
		'/models/'
	]; 

	foreach($array_paths as $path):
		
		$fileName = ROOT.$path.$className.'.php'; 

		if(is_file($fileName)){
			require_once($fileName); 
		}
	endforeach; 
}