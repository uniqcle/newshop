<?php

class ProductController{

	public function actionView($id){
		require_once(ROOT.'/views/product/product-details.html'); 
	return true; 
	}

	
}