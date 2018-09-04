<?php
class Order
{
	/*******************************************************
	// Сохранение заказа в БД
	********************************************************/
	public static function save($userName, $userPhone, $userComment, $userId, $productInCart){
		
		$pdo = DB::getConnect(); 

		$sql = "INSERT INTO product_order (user_name, user_phone, user_comment, user_id, products) VALUES (:user_name, :user_phone, :user_comment, :user_id, :products)"; 

		$products = json_encode($productInCart); 

		$stmt = $pdo -> prepare($sql);

		$result = $stmt -> execute(array(
			"user_name" => $userName,
			"user_phone" => $userPhone,
			"user_comment" => $userComment,
			"user_id" => $userId,
			"products" => $products
		));  

		if($result){
			return true; 
		} else return false; 
	}
	/*******************************************************
	// 
	********************************************************/
	public static function getOrderItems(){

		$pdo = DB::getConnect(); 
		
		$sql = "SELECT * FROM product_order"; 

		$stmt = $pdo -> query($sql); 

		$orderItem = []; 

		$i = 0; 

		while($row = $stmt -> fetch()){

			$orderItem[$i]['id']           = $row['id']; 
			$orderItem[$i]['user_name']    = $row['user_name']; 
			$orderItem[$i]['user_phone']   = $row['user_phone'];
			$orderItem[$i]['user_comment'] = $row['user_comment'];
			$orderItem[$i]['user_id']      = $row['user_id'];
			$orderItem[$i]['save_date']    = $row['save_date'];
			$orderItem[$i]['products']     = $row['products'];
			$orderItem[$i]['status']       = $row['status'];

			$i++; 
		}
	return $orderItem; 
	}

	/*******************************************************
	// Получение списка статусов
	********************************************************/
	public static function getStatusOrder($status){

		switch($status){
			case 0: {
				echo 'Новый заказ'; 
				break; 
			}
			case 1: {
				echo 'В обработке'; 
				break;
			}
			case 2: {
				echo 'Доставляется'; 
				break; 
			}
			case 3: {
				echo 'Закрыт'; 
				break; 
			}
			default: {
				echo 'Некорректный'; 
			}

		}
	}
}