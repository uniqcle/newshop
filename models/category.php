<?php 

class Category{

	/***********************************************************
	// Метод получения категорий. 
	***********************************************************/
	public static function getCategory(){

		$pdo = DB::getConnect(); 

		$sql = "SELECT * FROM category WHERE status = 1 ORDER BY sort_order"; 

		$stmt = $pdo -> query($sql); 

		$categoryList = []; 

		$i = 0; 

		while($row = $stmt -> fetch()){
			$categoryList[$i]['id'] = $row['id']; 
			$categoryList[$i]['name'] = $row['name'];
			$categoryList[$i]['sort_order'] = $row['sort_order'];
			$categoryList[$i]['status'] = $row['status'];
		$i++; 
		}

	return $categoryList; 
	}
}