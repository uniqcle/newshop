<?php 

class Category
{

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
			$categoryList[$i]['id']         = $row['id']; 
			$categoryList[$i]['name']       = $row['name'];
			$categoryList[$i]['sort_order'] = $row['sort_order'];
			$categoryList[$i]['status']     = $row['status'];
		$i++; 
		}

	return $categoryList; 
	}

	/***********************************************************
	// Метод получения категорий для админ.панели
	***********************************************************/
	public static function getCategoryForAdmin(){

		$pdo = DB::getConnect(); 

		$sql = "SELECT * FROM category ORDER BY sort_order"; 

		$stmt = $pdo -> query($sql); 

		$categoryList = []; 

		$i = 0; 

		while($row = $stmt -> fetch()){
			$categoryList[$i]['id']         = $row['id']; 
			$categoryList[$i]['name']       = $row['name'];
			$categoryList[$i]['sort_order'] = $row['sort_order'];
			$categoryList[$i]['status']     = $row['status'];
		$i++; 
		}

	return $categoryList; 
	}

	/*******************************************************
	// Показываетили статус категории (скрыта или отображается)
	********************************************************/
	public static function statusCategory($status){
		if($status == 1){
			return 'Отображается'; 
		} else {
			return 'Скрыта'; 
		}
	}

	/*******************************************************
	// Создаем новую категорию
	********************************************************/
	public static function createCategoryForAdmin($options){

		$pdo = DB::getConnect(); 

		$sql = "INSERT INTO category (name, sort_order, status) VALUES (:name, :sort_order, :status)"; 

		$stmt = $pdo -> prepare($sql); 

		$result = $stmt -> execute(array(

			"name"       => $options['name'],
			"sort_order" => $options['sort_order'],
			"status"     => $options['status']  

		)); 

		if($result){
			return true; 
		} else return false; 

	}

	/*******************************************************
	// Получаем категорию по ее id
	********************************************************/
	public static function getCategoryItemForAdmin($id){

		$pdo = DB::getConnect(); 

		$sql = "SELECT * FROM category WHERE id = $id"; 

		$stmt = $pdo -> query($sql); 

		$categoryItem = []; 

		while($row = $stmt -> fetch()){

			$categoryItem['name'] = $row['name']; 
			$categoryItem['sort_order'] = $row['sort_order']; 
			$categoryItem['status'] = $row['status']; 

		}
	return $categoryItem; 
	}

	/*******************************************************
	// Удаление категории
	********************************************************/
	public static function deleteCateogoryInAdmin($id){
		$pdo = DB::getConnect(); 

		$sql = "DELETE FROM category WHERE id = :id"; 

		$stmt = $pdo -> prepare($sql);

		$result = $stmt -> execute(array("id" => $id)); 

		return $result; 
	}
}