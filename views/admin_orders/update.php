<?php 
require_once(ROOT.'/views/layouts/header_admin.php'); 
?>

<section>
  <div class="container">
    <!-- Хлебные крошки --> 
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin/">Админ.панель</a></li>
        <li class="breadcrumb-item"><a href="/admin/orders">Управление заказами</a></li>
        <li class="breadcrumb-item active" aria-current="page">Редактировать</li>
      </ol>
    </nav>

    <div class="row">
     <div class="col-sm-12">
       <h5>Редактировать заказ</h5>
     </div>

     <div class="col-sm-12">
       <div>


        <form action = "#" method = "POST" enctype = "multipart/form-data">
          <div class="form-group">
            <label for="nameClient">Имя клиента</label>
            <input type="text" name = "name" class="form-control form-control-sm" id="nameClient" placeholder="">
          </div>

          <div class="form-group">
            <label for="phoneClient">Телефон клиента</label>
            <input type="text" name = "phone" class="form-control form-control-sm" id="phoneClient" placeholder="">
          </div>

          <div class="form-group">
            <label for="commentClient">Комментарий клиента</label>
            <textarea class="form-control form-control-sm" name = "comment" id="commentClient" rows="3"></textarea>
          </div>


          <div class="form-group">
            <label for="datePuchase">Дата оформления заказа</label>
            <input type="text" name = "date" class="form-control form-control-sm" id="datePuchase" placeholder="">
          </div>

          <div class="form-group">
            <label for="status">Статус</label>
            <select name = "status" class="form-control form-control-sm" id="status">
              <option value = "1" selected = "selected">Новый заказ</option>
              <option value = "0" >В обработке</option>
            </select>
          </div>

          <button type="button" class="btn btn-success">Сохранить</button></br></br></br></br></br>
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
