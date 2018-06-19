<?php

return array(

	//Страница продукта
	"product/([0-9]+)" => "product/view/$1", 

	//Страница категорий и навигация по нему
	"category/([0-9]+)/page-([0-9]+)" => "catalog/category/$1/$2", 
	"category/([0-9]+)" => "catalog/category/$1", 

	//Страница каталога и навигация по нему
	"catalog/page-([0-9]+)" => "catalog/index/$1", 
	"catalog" => "catalog/index", 

	//
	'user/register' => 'user/register', 

	//Главная страница и навигация по главной
	"page-([0-9]+)" => "site/index/$1",
	"" => "site/index", 



); 