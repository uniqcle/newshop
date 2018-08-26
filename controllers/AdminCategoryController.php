<?php
/*******************************************************
// 
********************************************************/
class AdminCategoryController
{
	/*******************************************************
	// actionIndex Отображение списка категорий в админке
	********************************************************/
	public function actionIndex(){

		require_once(ROOT.'/views/admin_category/index.php'); 
	return true; 
	}

	/*******************************************************
	// 
	********************************************************/
	public function actionCreate(){

		require_once(ROOT.'/views/admin_category/create.php'); 
	return true; 
	}
}
?>