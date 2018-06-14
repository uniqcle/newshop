<?php

# Класс DB База данных

class DB{

	/***********************************************************
	// Метод подключения к БД. 
	***********************************************************/
	public static function getConnect(){
		
		$dbParams = include(ROOT.'/config/db.php');

    	$dsn = "mysql:host={$dbParams['host']};dbname={$dbParams['db']};charset={$dbParams['charset']}";
 
		$opt = [
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        	PDO::ATTR_EMULATE_PREPARES   => false,
		]; 

		$pdo = new PDO($dsn, $dbParams['user'], $dbParams['pass'], $opt);

	return $pdo;  
	}

	
}

