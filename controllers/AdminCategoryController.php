<?php
/*******************************************************
// 
********************************************************/
class AdminCategoryController extends AdminBase
{
	/*******************************************************
	// actionIndex Отображение списка категорий в админке
	********************************************************/
	public function actionIndex(){

		self::checkAdmin(); 

		$categoryList = Category::getCategoryForAdmin(); 

		require_once(ROOT.'/views/admin_category/index.php'); 
	return true; 
	}

	/*******************************************************
	// Создание новой категории
	********************************************************/
	public function actionCreate(){

		self::checkAdmin();

		if(isset($_POST['submit'])){

			$options['name']       = $_POST['name']; 
			$options['sort_order'] = $_POST['sort_order'];
			$options['status']     = $_POST['status'];

			Category::createCategoryForAdmin($options); 

		header('Location: /admin/category'); 
		}

		require_once(ROOT.'/views/admin_category/create.php'); 
	return true; 
	}

	/*******************************************************
	// Контроллер редактирования данных
	********************************************************/
	public function actionUpdate($id){

		self::checkAdmin(); 

		$category = Category::getCategoryItemForAdmin($id); 

		require_once(ROOT.'/views/admin_category/update.php'); 

	return true; 
	}

	/*******************************************************
	// Контроллер удаления категории
	********************************************************/
	public function actionDelete($id){

		self::checkAdmin(); 

		if(isset($_POST['submit'])){

			Category::deleteCateogoryInAdmin($id); 

			header("Location: /admin/category"); 
		}

	$category = Category::getCategoryItemForAdmin($id); 

	require_once(ROOT.'/views/admin_category/delete.php'); 

	return true; 
		
	}
}
?>