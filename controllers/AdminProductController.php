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
	// actionCreate() Добавление товара в админке
	********************************************************/
	public function actionCreate(){

		self::checkAdmin();

		$categoryList = []; 

		//Списко категорий для выпадающего списка
		$categoryList = Category::getCategoryForAdmin(); 

		if(isset($_POST['submit'])){

			$options['name']           = $_POST['name'];
			$options['code']           = $_POST['code'];  
			$options['price']          = $_POST['price'];
			$options['category_id']    = $_POST['category_id'];  
			$options['brand']          = $_POST['brand']; 
			$options['availability']   = $_POST['availability']; 
			$options['is_new']         = $_POST['is_new']; 
			$options['is_recommended'] = $_POST['is_recommended']; 
			$options['description']    = $_POST['description'];
			$options['status']         = $_POST['status'];

 		$errors = false; 

			//Валидация полей. В данном случае только 1 поле
			if(!isset($options['name']) || empty($options['name'])){
				$errors[] = "Заполните поле 'Название товара'";
			} 

			$id = Product::createProductForAdmin($options); 

			header("Location: /admin/product"); 		


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