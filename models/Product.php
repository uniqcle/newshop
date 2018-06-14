<?php

class Product{

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



}