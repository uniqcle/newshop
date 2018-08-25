<?php

class SiteController{

	public function actionIndex($page= 1){

	    $categoryList = []; 
		$categoryList = Category::getCategory();

		$productList = []; 
		$productList = Product::getLastProduct($page); 

		//Кол-во продуктов. Необходим для класса Pagination
		$productCount = Product::getProductCountInCatalog(); 

		//Слайды
		$sliderProducts = Product::getRecommendedProducts();

		//Класс Pagination для формирования навигации
		$pagination = new Pagination($productCount, $page, Product::SHOW_BY_DEFAULT, 'page-');

		require_once(ROOT.'/views/site/index.html');

	return true; 
	}
}
