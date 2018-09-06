<?php

/*******************************************************
// 
********************************************************/
class AdminOrdersController extends AdminBase
{

	/*******************************************************
	// Просмотр списка заказов
	********************************************************/
	public function actionIndex(){

		self::checkAdmin(); 

		$orderItems = Order::getOrderItems(); 

		require_once(ROOT.'/views/admin_orders/index.php'); 
	return true; 
	}

	/*******************************************************
	// Просмотр заказа в админке
	********************************************************/
	public function actionView($id){

		self::checkAdmin(); 

		$orderItem = Order::getOrderById($id); 

		$productsInOrder = json_decode($orderItem['products'], true); 

		$productIds = array_keys($productsInOrder); 

		$products = Product::getProductByIds($productIds); 

		require_once(ROOT.'/views/admin_orders/view.php'); 

	return true; 
	}

	/*******************************************************
	// Редактирование заказа в админке
	********************************************************/
	public function actionUpdate($id){

		self::checkAdmin(); 

		$orderItem = Order::getOrderById($id); 
 	
 		if(isset($_POST['submit'])){

 			$options['user_name'] = $_POST['name']; 
 			$options['user_phone'] = $_POST['phone']; 
 			$options['user_comment'] = $_POST['comment']; 
 			$options['save_date'] = $_POST['date']; 
 			$options['status'] = $_POST['status']; 

 			Order::updateOrder($options, $id); 

 			header("Location: /admin/orders"); 
 		}


		require_once(ROOT.'/views/admin_orders/update.php'); 
	return true; 
	}

	/*******************************************************
	// Удаление заказа из админки
	********************************************************/
	public function actionDelete($id){

 		$orderItem = Order::getOrderById($id); 

 		if(isset($_POST['submit'])){

 			Order::deleteOrder($id); 
 			header("Location: /admin/orders"); 
 		}

		require_once(ROOT.'/views/admin_orders/delete.php'); 

	return true; 
	}




}

?>