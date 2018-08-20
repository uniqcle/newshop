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
	
}