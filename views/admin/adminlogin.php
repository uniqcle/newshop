<?php include(ROOT.'/views/layouts/header.html'); ?>
 
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4 padding-right">
                    
                       <div class = "signup-form">
                            <h2>Вход в админ панель</h2>

                            <form action = "#" method = "POST">
                                 
                                <input type = "email" name = "email" placeholder="demo@demo.ru" value = "">
                                <input type = "password" name = "password" placeholder="demo" value = "">
                                <input type = "submit" name = "submit" value = "Вход">
                                
                            </form>
                         
                       </div>
                  
                    </div>
                </div>
            </div>
        </section>

  
<?php include(ROOT.'/views/layouts/footer.html'); ?>