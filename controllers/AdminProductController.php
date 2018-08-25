<?php
class AdminProductController
{

	public function actionIndex(){


		require_once(ROOT.'/views/admin_product/index.php'); 
	return true; 
	}

	public function actionCreate(){

		$categoryList = []; 

		$categoryList = Category::getCategory(); 

		require_once(ROOT.'/views/admin_product/create.php'); 
	return true; 
	}

 
}


?>