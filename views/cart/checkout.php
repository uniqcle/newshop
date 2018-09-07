<?php include(ROOT.'/views/layouts/header.html'); ?>
 

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Каталог</h2>
                            <?php include(ROOT.'/views/layouts/category.html'); ?>
                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Корзина</h2>
<?php
if($result){
    echo 'Заказ успешно оформлен. Мы вам перезвоним. '; 
} else {  

    if(isset($errors) && is_array($errors)){
        foreach($errors as $error): 
            echo $error.'<br>'; 
        endforeach; 
    }
?>

<?php 
//echo 'Вы выбрали <strong>'.$countItems.'</strong> товар(ов) на сумму <strong>'.$totalPrice.'</strong>'.PHP_EOL; 
echo '<br/>'.'<br/>'; 
?>
                        <form action="#" method = "POST" class = "form">
                            <div class = "form-group">
                                Ваше имя и отчество: </br>
                                 <input type="text" name="name" id = "name" value="<?php echo $userName; ?>" placeholder = "Иван Иванович"  class = "form-control"/></br>
                            </div>
                            <div class = "form-group">
                                Ваш телефон: </br>
                                <input type="text" name="phone" id = "phone" value="" placeholder = "8-912-345-67-89" class = "form-control"/>
                            </div>  
                             <div class = "form-group">
                               Комментарий к заказу: </br>
                               <textarea name="comment" id="" cols="20" rows="5"></textarea></br>
                            </div>  


                        <div id = "checkout">
                            <input type = "submit" name = "submit" class = "btn btn-default btn-checkout" value = "Оформить"/>
                            
                        </div>
                            

                        </form>

    <?
}

?>


 

                        </div>
                            
                        </div>                      
  
                    </div>
                </div>
            </div>
        </section>
<?php include(ROOT.'/views/layouts/footer.html'); ?>