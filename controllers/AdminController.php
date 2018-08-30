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
        // Проверка доступа
        if(isset($_POST['submit'])){

        	$email = $_POST['email'];
        	$password = $_POST['password'];  

        	$userId = User::checkUserData($email, $password); 

        	$_SESSION['userId'] = $userId; 

        	header("Location:/admin/cabinet"); 
        }

        // Подключаем вид
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