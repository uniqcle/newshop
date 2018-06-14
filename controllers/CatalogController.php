<?php
require_once(ROOT.'/models/category.php'); 
require_once(ROOT.'/models/product.php');

class CatalogController{

	public function actionIndex($page = 1){
		$categoryList = []; 
		$categoryList = Category::getCategory(); 

		$productList = []; 
		$productList = Product::getAllProduct($page); 

		require_once(ROOT.'/views/catalog/catalog.html'); 

	return true; 
	}

	public function actionCategory($categoryId, $page = 1){

		$categoryList = []; 
		$categoryList = Category::getCategory(); 

		$productList = []; 
		$productList = Product::getProductByCategoryId($categoryId, $page); 

		require_once(ROOT.'/views/catalog/catalog.html'); 

	return true; 
	}
}
