<?php 
require_once(ROOT.'/views/layouts/header_admin.php'); 
?>

<section>
  <div class="container">
    <!-- Хлебные крошки --> 
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin/cabinet">Админ.панель</a></li>
        <li class="breadcrumb-item"><a href="/admin/product">Управление заказом</a></li>
        <li class="breadcrumb-item active" aria-current="page">Удаление</li>
      </ol>
    </nav>
    
    <div class="row">
 

     <div class="col-sm-12">
       <div>
        Вы действительно хотите удалить заказ? <strong> <?php echo $orderItem['id'];  ?> </strong></br>

        <form action = "#" method = "POST">
          <input type = "submit" name = "submit" value = "Удалить" class = "btn btn-warning btn-sm">
        </form>
     


       </div>
  </div>
</div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
