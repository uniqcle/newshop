<?php

/*******************************************************
// 
********************************************************/
class AdminOrdersController extends AdminBase
{

	/*******************************************************
	// 
	********************************************************/
	public function actionIndex(){

		self::checkAdmin(); 

		$orderItems = Order::getOrderItems(); 

		require_once(ROOT.'/views/admin_orders/index.php'); 
	return true; 
	}

	/*******************************************************
	// 
	********************************************************/
	public function actionView($id){



		require_once(ROOT.'/views/admin_orders/view.php'); 
	return true; 
	}

	/*******************************************************
	// 
	********************************************************/
	public function actionUpdate(){

		require_once(ROOT.'/views/admin_orders/update.php'); 
	return true; 
	}

	/*******************************************************
	// 
	********************************************************/
	public function actionDelete($id){

		Order::getOrderById($id); 

		if(isset($_POST['submit'])){

		}
		require_once(ROOT.'/views/admin_orders/delete.php'); 

	return true; 
	}




}

?>