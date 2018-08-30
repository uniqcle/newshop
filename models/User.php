<?php 

class User
{

	//Метод проверки имени
	public static function checkName($name){
		if(strlen($name) > 6){
			return true;
		}
	return false; 
	}

	//Метод проверки почты
	public static function checkEmail($email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			return true; 
		}
	return false; 
	}

	//Метод проверки почты
	public static function checkPassword($password){
		if(strlen($password) <= 6){
			return false; 
		}
	return true; 
	}
/*******************************************************
// Метод проверки на существования пользователя
********************************************************/
	public static function checkExistedEmail($email){
		$pdo = DB::getConnect(); 

		$sql = "SELECT * FROM user WHERE email = :email"; 

		$stmt = $pdo -> prepare($sql);

		$stmt -> execute(array("email" => $email));

		$sqlResult = $stmt -> fetch(); 

		if($sqlResult){
			return true; 
		} 

	return false; 
	}
/*******************************************************
// Регистрация пользователя
********************************************************/
	public static function register($name, $email, $password){
		$pdo = DB::getConnect(); 

		$sql = "INSERT INTO user (name, email, password) VALUES (:name, :email, :password)"; 

		$stmt = $pdo -> prepare($sql); 

		$regResult = $stmt -> execute(["name" => $name, "email" => $email, "password" => $password]);

		if($regResult){
			return true; 
		}

	return false; 
	}
/*******************************************************
// Запрос id пользователя по email, password
********************************************************/
	public static function checkUserData($email, $password){

		$pdo = DB::getConnect(); 

		$sql = "SELECT id FROM user WHERE email = :email AND password = :password"; 

		$stmt = $pdo -> prepare($sql); 

		$stmt -> execute(array("email" => $email, "password" => $password));

		$resultId = $stmt -> fetch();

		if($resultId){
			return $resultId['id'];
		}
		else return false; 
	}

/*******************************************************
// Авторизация пользователя
********************************************************/
	public static function auth($userId){
		
		$_SESSION['userId'] = $userId;
	}

/*******************************************************
// Проверк авторизации. 
********************************************************/
	public static function checkLogged(){

		if(isset($_SESSION['userId'])){
			return $_SESSION['userId']; 
		}

	header('Location:/user/login'); 
	}

/*******************************************************
// Проверка гость польватель или авторизированный?
********************************************************/
    public static function isGuest(){
    	if(isset($_SESSION['userId'])){
    		return false; 
    	}
    return true; 
    }

/*******************************************************
// Получение данных пользователя по Id
********************************************************/
    public static function getUserById($userId){

    	$pdo = DB::getConnect(); 

    	$sql = "SELECT * FROM user WHERE id = :id"; 

    	$stmt = $pdo -> prepare($sql); 

    	$stmt -> execute(array("id" => $userId));

    	$user = $stmt -> fetch(); 

    return $user; 
    }

/*******************************************************
// Редактирование данных пользвателя
********************************************************/
    public static function editUser($userId, $name, $password){
    	$pdo = DB::getConnect(); 

    	$sql = "UPDATE user	SET name = :name, password = :password WHERE id = :id";

    	$stmt = $pdo -> prepare($sql); 

    	$result = $stmt -> execute(array(
    		"id" => $userId, 
    		"name" => $name, 
    		"password" => $password
    	));

    return $result; 		 
	 
    }


	
 }
