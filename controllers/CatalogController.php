<?php

class CatalogController{

	public function actionIndex($page = 1){
		$categoryList = []; 
		$categoryList = Category::getCategory(); 

		$productList = []; 
		$productList = Product::getAllProduct($page); 

		$productCount = Product::getProductCountInCatalog(); 

		$pagination = new Pagination($productCount, $page, Product::SHOW_BY_DEFAULT, 'page-');

		require_once(ROOT.'/views/catalog/catalog.html'); 

	return true; 
	}

	public function actionCategory($categoryId, $page = 1){

		$categoryList = []; 
		$categoryList = Category::getCategory(); 

		$productList = []; 
		$productList = Product::getProductByCategoryId($categoryId, $page); 

		$productCount = Product::getProductCountInCategory($categoryId); 

		$pagination = new Pagination($productCount, $page, Product::SHOW_BY_DEFAULT, 'page-'); 

		require_once(ROOT.'/views/catalog/catalog.html'); 

	return true; 
	}
}
