<?php 

abstract class AdminBase{

	/*******************************************************
	// Проверка прав доступа администратора
	********************************************************/
	public static function checkAdmin(){

		$userId = User::checkLogged();

        // Получаем информацию о текущем пользователе
        $user = User::getUserById($userId);
        
        // Если роль текущего пользователя "admin", пускаем его в админпанель
        if ($user['role'] == 'admin') {
            return true;
        }
        // Иначе завершаем работу с сообщением об закрытом доступе
        die('Access denied');
	}


}