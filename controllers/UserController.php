<?php

class UserController{

	public function actionRegister(){

			$name = ''; 
			$email = ''; 
			$password = ''; 
			$result = false; 

		if(isset($_POST['submit'])){



			$name = $_POST['name']; 
			$email = $_POST['email']; 
			$password = $_POST['password']; 

			$errors = false; 
			


		    /////// Проверка name, email, passwod //////
			if(!User::checkName($name)){
				$errors[] = 'Ваше имя должно быть больше 6 символов'; 
			}

			if(!User::checkEmail($email)){
				$errors[] = 'Email не подоходит';
			}

			if(!User::checkPassword($password)){
				$errors[] = 'Пароль должен быть больше 6 символов'; 
			}

			if(User::checkEmailExists($email)){
				$errors[] = 'Такой пароль уже существует'; 
			}

			if($errors == false){
				$result = User::register($name, $email, $password); 
			}

		}
		require_once(ROOT.'/views/user/register.html'); 
	return true; 
	}
}