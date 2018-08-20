<?php

class Product
{

	const SHOW_BY_DEFAULT = 6; 

	/*******************************************************
	// Get All Products
	********************************************************/
	public static function getAllProduct($page=1){

		$page = intval($page); 

		$offset = ($page - 1) * self::SHOW_BY_DEFAULT; 

		$pdo = DB::getConnect(); 

		$sql = "SELECT * FROM product WHERE status = 1 LIMIT ". self::SHOW_BY_DEFAULT." OFFSET ".$offset; 

		$stmt = $pdo -> query($sql); 

		$productList = [];

		$i = 0; 

		while($row = $stmt -> fetch()):

			$productList[$i]['id'] = $row['id'];
			$productList[$i]['name'] = $row['name'];
			$productList[$i]['category_id'] = $row['category_id'];
			$productList[$i]['code'] = $row['code'];
			$productList[$i]['price'] = $row['price'];
			$productList[$i]['availability'] = $row['availability'];
			$productList[$i]['brand'] = $row['brand'];
			$productList[$i]['image'] = $row['image'];
			$productList[$i]['description'] = $row['description'];
			$productList[$i]['is_new'] = $row['is_new'];
			$productList[$i]['is_recommended'] = $row['is_recommended']; 
			$productList[$i]['status'] = $row['status'];

			$i++; 
		endwhile; 

	return $productList; 
	}


	/*******************************************************
	// Get Last Products
	********************************************************/
	public static function getLastProduct($page = 1){

		$pdo = DB::getConnect(); 

		$offset = ($page - 1) * self::SHOW_BY_DEFAULT; 

		$sql = "SELECT * FROM product WHERE status = 1 ORDER BY id DESC LIMIT ".self::SHOW_BY_DEFAULT." OFFSET ".$offset; 

		$stmt = $pdo -> query($sql); 

		$i = 0; 
		$lastProduct = []; 

		while($row = $stmt -> fetch()){

			$lastProduct[$i]['id'] = $row['id'];
			$lastProduct[$i]['name'] = $row['name'];
			$lastProduct[$i]['category_id'] = $row['category_id'];
			$lastProduct[$i]['code'] = $row['code'];
			$lastProduct[$i]['price'] = $row['price'];
			$lastProduct[$i]['availability'] = $row['availability'];
			$lastProduct[$i]['brand'] = $row['brand'];
			$lastProduct[$i]['image'] = $row['image'];
			$lastProduct[$i]['description'] = $row['description'];
			$lastProduct[$i]['is_new'] = $row['is_new'];
			$lastProduct[$i]['is_recommended'] = $row['is_recommended']; 
			$lastProduct[$i]['status'] = $row['status'];
		$i++; 
		}
	return $lastProduct; 
	}

	/*******************************************************
	// Get Product by Category ID
	********************************************************/
	public static function getProductByCategoryId($categoryId, $page = 1){

		if($categoryId){
			$page = intval($page); 
			$offset = ($page - 1) * self::SHOW_BY_DEFAULT; 

			$count = self::SHOW_BY_DEFAULT; 

			$pdo = DB::getConnect(); 

			$sql = "SELECT * FROM product WHERE status = 1 AND category_id = :categoryId LIMIT :countLimit OFFSET :offset"; 

			$stmt = $pdo -> prepare($sql);

			$stmt -> execute(array('categoryId' => $categoryId, 'countLimit' => $count, 'offset' => $offset ));  

			$productList = []; 
			$i = 0; 
			while($row = $stmt -> fetch()){

			$productList[$i]['id'] = $row['id'];
			$productList[$i]['name'] = $row['name'];
			$productList[$i]['category_id'] = $row['category_id'];
			$productList[$i]['code'] = $row['code'];
			$productList[$i]['price'] = $row['price'];
			$productList[$i]['availability'] = $row['availability'];
			$productList[$i]['brand'] = $row['brand'];
			$productList[$i]['image'] = $row['image'];
			$productList[$i]['description'] = $row['description'];
			$productList[$i]['is_new'] = $row['is_new'];
			$productList[$i]['is_recommended'] = $row['is_recommended']; 
			$productList[$i]['status'] = $row['status'];

			$i ++; 
			}

		}

	return $productList; 
	}

	/*******************************************************
	// Get Product by ID
	********************************************************/	
	public static function getProductById($id){

		$pdo = DB::getConnect(); 

		$sql = "SELECT * FROM product WHERE id = $id"; 

		$stmt = $pdo -> query($sql); 

		while($row = $stmt -> fetch()):
			$productItem['id'] = $row['id'];
			$productItem['name'] = $row['name'];
			$productItem['category_id'] = $row['category_id'];
			$productItem['code'] = $row['code'];
			$productItem['price'] = $row['price'];
			$productItem['availability'] = $row['availability'];
			$productItem['brand'] = $row['brand'];
			$productItem['image'] = $row['image'];
			$productItem['description'] = $row['description'];
			$productItem['is_new'] = $row['is_new'];
			$productItem['is_recommended'] = $row['is_recommended']; 
			$productItem['status'] = $row['status'];
		endwhile; 

	return $productItem; 
	}

	/*******************************************************
	// Get Product Count in Catalog
	********************************************************/	
	public static function getProductCountInCatalog(){

		$pdo = DB::getConnect(); 

		$sql = "SELECT COUNT(id) as count FROM product WHERE status = 1"; 

		$stmt = $pdo -> query($sql);

		$productCount = $stmt -> fetch();

	return $productCount['count']; 

	}



	/*******************************************************
	// Get Product Count in Category
	********************************************************/	
	public static function getProductCountInCategory($categoryId){

		$pdo = DB::getConnect(); 

		$sql = "SELECT COUNT(id) AS count FROM product WHERE status = 1 AND category_id = ".$categoryId; 

		$stmt = $pdo -> query($sql); 

		$countProduct = $stmt -> fetch(); 

	return $countProduct['count']; 
	}

	/*******************************************************
	// Get product items by Id's
	********************************************************/
	public static function getProductByIds($productIds){

		$productIds = implode(',', $productIds);

		$product = []; 

		$pdo = DB::getConnect(); 

		$sql = "SELECT * FROM product WHERE status = 1 AND id IN ($productIds)"; 

		$stmt = $pdo -> query($sql); 

		$i = 0; 
		while ($row = $stmt -> fetch()) {
		 	$product[$i]['id'] = $row['id']; 
		 	$product[$i]['name'] = $row['name'];
		 	$product[$i]['code'] = $row['code'];
		 	$product[$i]['price'] = $row['price'];
		 $i++; 
		 } 
	return $product; 
	}

}