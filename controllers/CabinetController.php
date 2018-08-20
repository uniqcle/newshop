<?php 

class CabinetController
{

public function actionIndex(){

	
 	$userId = User::checkLogged();

 	$user = User::getUserById($userId); 

	require_once(ROOT.'/views/cabinet/index.html');
return true;
}




public function actionEdit(){

	$userId = User::checkLogged();

	$user = User::getUserById($userId); 

	$name = $user['name'];
	$email = $user['email'];
	$password = $user['password'];   

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$password = $_POST['password'];
		$errors = false; 

		if(!User::checkName($name)){
				$errors[] = 'Имя должно быть больше 6 символов'; 
			}

			if(!User::checkPassword($password)){
				$errors[] = 'Проверьте правильность пароля'; 
			}

		if($errors == false){
			$editResult = User::editUser($userId, $name, $password); 
		}


	}

require_once(ROOT.'/views/cabinet/edit.html'); 
return true; 
}
}

 