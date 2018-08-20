<?php 

function __autoload($nameClass){

	$classArray = [
		"/components/", 
		"/models/"
	]; 

	foreach($classArray as $item):
		$path = ROOT.$item.$nameClass.'.php'; 

		if(is_file($path)){
			require_once $path; 
		}
	endforeach; 
}