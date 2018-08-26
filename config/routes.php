<?php

return array(

	//Страница продукта
	"product/([0-9]+)"                => "product/view/$1", 

	//Страница категорий и навигация по нему
	"category/([0-9]+)/page-([0-9]+)" => "catalog/category/$1/$2", 
	"category/([0-9]+)"               => "catalog/category/$1", 

	//Страница каталога и навигация по нему
	"catalog/page-([0-9]+)"           => "catalog/index/$1", 
	"catalog"                         => "catalog/index", 

	//Добавление товаров в корзину
	"cart/add/([0-9]+)"               => "cart/add/$1",
	"cart/addAjax/([0-9]+)"           => "cart/addAjax/$1",  

	//Оформление товаров в корзину
	"cart/checkout"                   => "cart/checkout", 

	//Удаление товара
	"cart/delete/([0-9]+)"            => "cart/delete/$1",

	//Корзина
	"cart"                            => "cart/index",

	//Регистрация и авторизация
	"user/register"                   => "user/register", 
	"user/login"                      => "user/login", 
	"user/logout"                     => "user/logout",

	//Личный кабинет пользователя
	"cabinet/edit"                    => "cabinet/edit", 
	"cabinet"                         => "cabinet/index",

	//Управление товарами
	"admin/product"                   => "adminProduct/index",
	"admin/product/create"            => "adminProduct/create",
	"admin/product/update/([0-9]+)"   => "adminProduct/update/$1", 
	"admin/product/delete/([0-9]+)"   => "adminProduct/delete/$1", 

	//Админ-панель
	"admin"                           => "admin/index", 

	//Главная страница и навигация по главной
	"page-([0-9]+)"                   => "site/index/$1",
	""                                => "site/index", 
); 