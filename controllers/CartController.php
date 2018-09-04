<?php 
    class CartController{

        /*******************************************************
        // Controller actionAdd() Добавление товара в корзину синхронным методом
        ********************************************************/
        public function actionAdd($id){

            Cart::addProductToCart($id); 

            $refer = $_SERVER['HTTP_REFERER'];
           
            header("Location:$refer");  

        return true;  
        }

        /*******************************************************
        // Controller actionAddAjax() Добавление товара в корзину ассинхронным методом
        ********************************************************/
        public function actionAddAjax($id){

            echo Cart::addProductToCart($id);

        return true;  
        }

        /*******************************************************
        // Controller actionIndex() Отображение всех товаров в корзине
        ********************************************************/
        public function actionIndex(){

            $fullCart = false; 

            //Выводит список категорий
            $categoryList = Category::getCategory(); 
            //Выводит массив товаров, кот. в $_SESSION
            $productsInCart = Cart::getProductInCart(); 

            if($productsInCart){
            $fullCart = true; 

            //Получаем id's товаров
            $productIds = array_keys($productsInCart);
            //по id's получаем полную инфо. о товаре
            $products = Product::getProductByIds($productIds);
            //Подбиваем общий итог
            $totalPrice = Cart::totalPrice($products); 
            }
 
            require_once(ROOT.'/views/cart/index.html'); 
        return true; 
        }

        /*******************************************************
        // Controller actionCheckout(). Оформление заказа
        ********************************************************/
        public function actionCheckout(){
            //Выводит список категорий
            $categoryList = []; 
            $categoryList = Category::getCategory(); 

            //Статус успешного оформления заказа
            $result = false; 

            $userName = ''; 

            //Форма отправлена?
            if(isset($_POST['submit'])){ //Форма отправлена? - ДА
                $userName    = $_POST['name']; 
                $userPhone   = $_POST['phone']; 
                $userComment = $_POST['comment']; 

                $errors = false; 
                
                //Валидация форм
                if(!User::checkName($userName)){
                    $errors[] = 'Имя пользьвателя меньше 6 символов'; 
                }

                //Если ошибок нет. Сохраняем пользователя и заказ в Orders
                if($errors == false){

                    if(User::isGuest()){ //Пользователь залогинен? - Да
                       $userId = false;  
                    } else {
                        $userId = User::checkLogged(); 
                    }
                    //Получаем данные о заказе
                    $productInCart = Cart::getProductInCart(); 
                   
                    $countItems = Cart::countItemsInCart(); 
                    //$totalPrice = Cart::totalPrice($products); 
                    //Сохраняем заказ
                    $result = Order::save($userName, $userPhone, $userComment, $userId, $productInCart); 

                    if($result){
                        $to = 'uniqcle@yandex.ru'; 
                        $subject = 'New Order'; 
                        $message = '/admin/orders'; 
                        mail($to, $subject, $message); 
                    }
                    //Очищаем корзину
                    Cart::clear();

                }


            } else { //Форма отправлена? - НЕТ
                $productsInCart = Cart::getProductInCart(); 
               
                //В корзине есть товары?
                if($productsInCart){  //В корзине есть товары? - Да
                    //Подводим предварительный итог (кол-во, сумма)
                    $productIds = array_keys($productsInCart);
                    $products   = Product::getProductByIds($productIds); 
                    $countItems = Cart::countItemsInCart(); 
                    $totalPrice = Cart::totalPrice($products); 

                        //Пользователь залогинен? 
                        if(!User::isGuest()){ //Пользователь залогинен? - Да
                            //Получаем данные пользователя (id, name)
                            $userId   = User::checkLogged(); 
                            $user     = User::getUserById($userId); 
                            $userName = $user['name']; 

                        } else { //Пользователь залогинен? - нет
                            //ничего не делаем
                        }

                } else { //В корзине есть товары? - Нет
                    header("Location: /"); 
                }

                

            }
        require_once(ROOT.'/views/cart/checkout.php'); 
        return true; 
        }
/*******************************************************
// actionDelete Удаление товара из корзины
********************************************************/
public function actionDelete($id){

    Cart::deleteProduct($id); 

    header("Location: /cart"); 
 
}

} 

 ?>