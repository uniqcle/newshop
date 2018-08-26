<?php

/*******************************************************
// 
********************************************************/
class AdminOrdersController
{
	/*******************************************************
	// 
	********************************************************/
	public function actionIndex(){

		require_once(ROOT.'/views/admin_orders/index.php'); 
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
	public function actionView(){

		require_once(ROOT.'/views/admin_orders/view.php'); 
	return true; 
	}


}

?>