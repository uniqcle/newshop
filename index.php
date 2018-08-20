<?php

//Front controller

//1. Общие настройки
ini_set('display_errors', 1); 
error_reporting(E_ALL); 

session_start(); 

//2. Подключение файлов
define('ROOT', __DIR__); 
include(ROOT.'/components/Autoload.php'); 

//4. Вызов метода класса Router
$router = new Router(); 
$router -> run(); 
 