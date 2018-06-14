<?php
require_once(ROOT.'/models/Product.php'); 
require_once(ROOT.'/models/Category.php');


class SiteController{

	public function actionIndex($page= 1){

	    $categoryList = []; 
		$categoryList = Category::getCategory();

		$productList = []; 
		$productList = Product::getAllProduct($page); 

		require_once(ROOT.'/views/site/index.html');

	return true; 
	}
}
