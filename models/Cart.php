<?php 
	class Cart
	{
		/*******************************************************
		// Add product items in $_SESSION
		********************************************************/
		public static function addProductToCart($id){

			$id = intval($id); 

			$productInCart = array(); 

			if (isset($_SESSION['products'])) {
				$productInCart = $_SESSION['products']; 
			}

			if (array_key_exists($id, $productInCart)) {
				$productInCart[$id]++; 
			} else {
				$productInCart[$id] = 1; 	
			}

			$_SESSION['products'] = $productInCart;

			return self::countItemsIncart(); 
		}

		/*******************************************************
		// Count product items in $_SESSION
		********************************************************/
		public static function countItemsInCart(){

			if(isset($_SESSION['products'])){
				$count = 0; 

				foreach ($_SESSION['products'] as $key => $product) {
					$count = $count + $product; 
				}

			return $count; 

			} else {

				return 0; 

			}

		}

		/*******************************************************
		// Получаем массив заказов
		********************************************************/
		public static function getProductInCart(){
			 
			 if(isset($_SESSION['products'])){
			 	return $_SESSION['products']; 
			}
			return false; 
		}

		/*******************************************************
		// Получаем массив заказов
		********************************************************/
		public static function totalPrice($products){

			$sum = 0;

			$productInCart = $_SESSION['products'];

			 foreach($products as $product):
			 	$sum = $sum + $productInCart[$product['id']] * $product['price']; 
			 endforeach; 

		return $sum; 
		}

		/*******************************************************
		// Очищаем корзину
		********************************************************/
		public static function clear(){
			if(isset($_SESSION['products'])){
				unset($_SESSION['products']); 
			}
		}

 

	}

 ?>