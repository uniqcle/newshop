<?php

class DB{
	
	public static function getConnect(){

		$dsn = "mysql:host=localhost;"; 
		$opt = [

		]; 
		$pdo = new PDO($dsn, $user, $pass, $opt);
	return $pdo; 
	}
}