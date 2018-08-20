<?php 

class UserController{
/*******************************************************
// Контроллер регистрации
********************************************************/
	public function actionRegister()
	{

		$name = ''; 
		$email = ''; 
		$password = ''; 
		$regResult = false; 
		

		if(isset($_POST['submit'])){
			$name = $_POST['name']; 
			$email = $_POST['email']; 
			$password = $_POST['password']; 
			$errors = false; 

			if(!User::checkName($name)){
				$errors[] = 'Имя должно быть больше 6 символов'; 
			}

			if(!User::checkEmail($email)){
				$errors[] = 'Проверьте эл. почту'; 
			}

			if(!User::checkPassword($password)){
				$errors[] = 'Проверьте правильность пароля'; 
			}

			if(User::checkExistedEmail($email)){
				$errors[] = 'Такой пользователь уже существует'; 
			}

			if($errors == false){
				$regResult = User::register($name, $email, $password); 
			}
		}

		require_once(ROOT.'/views/user/register.html');
	return true;
	}

/*******************************************************
// онтроллер авторизации
********************************************************/
  public function actionLogin(){

  	$email = ''; 
  	$password = ''; 

		if(isset($_POST['submit'])){
			$email = $_POST['email'];
			$password = $_POST['password']; 
			$errors = false; 

			if(!User::checkEmail($email)){
				$errors[] = 'Проверьте эл. почту'; 
			}

			if(!User::checkPassword($password)){
				$errors[] = 'Проверьте правильность пароля'; 
			}

			$userId = User::checkUserData($email, $password);

			//Если данные неправильные - выдаем ошибку
			if(!$userId){
				$errors[] = 'Неправильные данные для входа на сайт'; 
			}
			//Если данные правильные - записываем в сессию
			else {
				User::auth($userId);
				header('Location: /cabinet/');
			}
		}

		require_once(ROOT.'/views/user/login.html');
	return true;
	}

/*******************************************************
// Контроллер выхода пользователя
********************************************************/
  public function actionLogout(){

  	unset($_SESSION['userId']);
    header('Location: /');	
  }
}

 