<?php

class ProductController{

/**********************************************************
// Product by ID
***********************************************************/
public function actionView($id){

	$categoryList = []; 
	$categoryList = Category::getCategory(); 

	$productItem = []; 
	$productItem = Product::getProductById($id); 

	require_once(ROOT.'/views/product/product-details.html'); 

return true; 
}

}
