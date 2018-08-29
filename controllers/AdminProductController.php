<?php
class AdminProductController extends AdminBase
{
	/*******************************************************
	// actionIndex() получение общего списка товаров
	********************************************************/
	public function actionIndex(){

		self::checkAdmin(); 
		//Получаем весь список товаров
		$productList = Product::getProductsForAdmin(); 

		require_once(ROOT.'/views/admin_product/index.php'); 
		return true; 
	}

	/*******************************************************
	// Добавление товара
	********************************************************/
	public function actionCreate(){

		$categoryList = []; 

		$categoryList = Category::getCategoryForAdmin(); 

		if(isset($_POST['submit'])){

			

		}

		require_once(ROOT.'/views/admin_product/create.php'); 
		return true; 
	}

	/*******************************************************
	// Удаление товара из админки
	********************************************************/
	public function actionDelete($id){

		self::checkAdmin(); 

		if(isset($_POST['submit'])){

			Product::deleteProductById($id); 

			header("Location: /admin/product"); 

		}

		$productItem = Product::getProductById($id); 

		require_once(ROOT.'/views/admin_product/delete.php'); 

	return true; 

	}

}


?>