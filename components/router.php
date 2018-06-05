<?php
/**************************************************
* Класс Router
***************************************************/
class Router{

	//Массив маршрутов
	public $routes; 

	//Заносимв в routes массив маршрутов при вызове
	public function __construct(){
		$routesPath = include(ROOT.'/config/routes.php'); 
		return $this -> routes = $routesPath; 
	}

	//Получаем текущую ссылку
	public function getURI(){
		return trim($_SERVER['REQUEST_URI'], '/'); 
	}

	public function run(){
		
		$uri = $this -> getURI(); 

		//Проходимся по всему маршруту
		foreach($this -> routes as $patternURI => $newRoute): 
			
			//Если есть $uri в маршрутах
			if(preg_match("~$patternURI$~", $uri)){
				//то заменяем на новую с названием action
				$internalLink = preg_replace("~$patternURI$~", $newRoute, $uri); 
				//Разбиваем на массив

				$segments = explode('/', $internalLink); 
				//Вычленяем имя Контроллера и имя экшна
 
				$nameController =  ucfirst(array_shift($segments)).'Controller'; 
				$actionName = 'action'.ucfirst(array_shift($segments)); 
				//Оставшиеся части заносим в массив
	
				$params = $segments; 
				//Узнаем имя файла контроллера
				$fileName = ROOT.'/controllers/'.$nameController.'.php';
				//Если он существует, то подключаем
				if(file_exists($fileName)){
					require_once($fileName); 
					//Инициализируем объект Контроллера и вызываем его вместе с параметрами
								
					$nameObject = new $nameController();
					$result = call_user_func_array(array($nameObject, $actionName), $params);  

					if($result != NULL){
						break; 
					}

				}

			}
		endforeach;  

	}
}
