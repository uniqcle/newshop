<?php 

class User{

	//Проверка имени файла
	public static function checkName($name){
		if(strlen($name) >= 2){
			return true; 
		}
		return false; 
	}

	//Проверка почты
	public static function checkEmail($email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			return true; 
		}
		return false; 

	}

	//Проверка пароля
	public static function checkPassword($password){
		if(strlen($password) >=6){
			return true; 
		}
		return false; 

	}

	//Проверка на существование email
	public static function checkEmailExists($email){

		$pdo = DB::getConnect(); 

		$sql = "SELECT COUNT(*) FROM user WHERE email = :email"; 

		$stmt = $pdo -> prepare($sql); 

		$stmt -> execute(["email" => $email]); 

		$result = $stmt -> fetchColumn(); 

		if($result){
			return true; 
		}
		return false; 
	}


	public static function register($name, $email, $password){
		$pdo = DB::getConnect(); 
		$sql = "INSERT INTO user (name, email, password) VALUES(:name, :email, :password)"; 
		$stmt = $pdo -> prepare($sql); 
		$result = $stmt -> execute(["name" => $name, "email" => $email, "password" => $password]); 

		if($result){
			return true; 
		}
		return false; 
	}
}