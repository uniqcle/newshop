<?php 
    class CartController
    {

        /*******************************************************
        // Controller actionAdd() Добавление товара в корзину синхронным методом
        ********************************************************/
        public function actionAdd($id){

            Cart::addProductToCart($id); 

            $refer = $_SERVER['HTTP_REFERER'];
            header("Location: $refer");  

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

            //Выводит список категорий
            $categoryList = Category::getCategory(); 
            //Выводит массив товаров, кот. в $_SESSION
            $productsInCart = Cart::getProductInCart(); 
            //Получаем id's товаров
            $productIds = array_keys($productsInCart);
            //по id's получаем полную инфо. о товаре
            $products = Product::getProductByIds($productIds);
            //Подбиваем общий итог
            $totalPrice = Cart::totalPrice($products); 
 
            require_once(ROOT.'/views/cart/index.html'); 
        return true; 
        }

        /*******************************************************
        // Controller actionCheckout(). Оформление заказа
        ********************************************************/
        


} 

 ?>