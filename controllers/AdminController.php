<?php
/**
* Контроллер AdminController
* Стартовая страница админ.панели
**/

class AdminController extends AdminBase
{
	/*******************************************************
	// Action для стартовой страницы админ.панели
	********************************************************/
	public function actionIndex(){

 	$email = ''; 
 	$password = ''; 

 	if(isset($_POST['submit'])){

 		$email = $_POST['email']; 
 		$password = $_POST['password']; 

 		$errors = false; 

 		if(!User::checkExistedEmail($email)){
 			$errors[] = 'Пользователя с таким email не существует'; 
 		}

 		$userId = User::checkUserData($email, $password); 

 		$user = User::getUserById($userId); 

 		if($user['role'] == 'admin') {

 			User::auth($userId);

 			header('Location: /admin/cabinet/');

 		}  else {

 			$errors[] = 'Неправильные данные для входа на сайт'; 

 		}

 	}

    require_once(ROOT.'/views/admin/adminlogin.php'); 
 
		
	return true; 
	}

	/*******************************************************
	// Админ панель
	********************************************************/
	public function actionCabinet(){

		$userId = User::checkLogged();

 	    $user = User::getUserById($userId); 

 	    if(self::checkAdmin()){

 	    	require_once(ROOT.'/views/admin/index.php'); 

 	    } else {

 	    	header("Location: /admin/"); 

 	    }

	return true; 
	}

	/*******************************************************
	// Выход администратора с админ. панели
	********************************************************/
	public function actionLogout(){

    unset($_SESSION['userId']);
    header('Location: /admin/');	

    return true; 
	}
}

?>