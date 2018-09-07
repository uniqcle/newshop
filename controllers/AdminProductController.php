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

			//Если запись добавлена
				if($id){
		 
				//Проверяем загрузился ли файл.
				if(is_uploaded_file($_FILES['image']['tmp_name'])){
					//Перемещаем
					move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/uploads/images/products/{$id}.jpg" ); 
				}
			} 

			header("Location: /admin/product"); 		
		}

		require_once(ROOT.'/views/admin_product/create.php'); 
		return true; 
	}

	/*******************************************************
	// 
	********************************************************/
	public function actionUpdate($id){
		self::checkAdmin();

		$categoryList = []; 

		//Списко категорий для выпадающего списка
		$categoryList = Category::getCategoryForAdmin(); 

			//Вывод информации о товаре
			$product = Product::getProductById($id); 
			
			//Если форма отправлена
			if(isset($_POST['submit'])){

			$options['name']           = $_POST['name']; 
			$options['category_id']    = $_POST['category_id'];
			$options['code']           = $_POST['code'];
			$options['price']          = $_POST['price'];
			$options['availability']   = $_POST['availability'];
			$options['brand']          = $_POST['brand'];
			$options['description']    = $_POST['description'];
			$options['is_new']         = $_POST['is_new'];
			$options['is_recommended'] = $_POST['is_recommended'];
			$options['status']         = $_POST['status'];


			if(Product::updateProductForAdmin($id, $options)){
				//Если запись сохранена
				//Проверим загрузился ли файл через форму
				if(is_uploaded_file($_FILES['image']['tmp_name'])){

				//Если загрузился, то сохраняем в нужную папку и даем имя новое
				move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/uploads/images/products/{$id}.jpg" ); 

				}
			}
			header("Location: /admin/product"); 

			}

    	require_once(ROOT.'/views/admin_product/update.php'); 
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