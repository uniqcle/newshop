<?php 
  require_once(ROOT.'/views/layouts/header_admin.php'); 
?>

<section>
  <div class="container">
    <!-- Хлебные крошки --> 
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin/cabinet">Админ.панель</a></li>
        <li class="breadcrumb-item"><a href="/admin/category">Управление категорией</a></li>
        <li class="breadcrumb-item active" aria-current="page">Добавить</li>
      </ol>
    </nav>

    <div class="row">
     <div class="col-sm-12">
       <h5>Добавить новую категорию</h5>
     </div>

     <div class="col-sm-12">
       <div>

        <form action = "#" method = "POST" enctype = "multipart/form-data">
          <div class="form-group">
            <label for="nameCategory">Название категории</label>
            <input type="text" name = "name" class="form-control form-control-sm" id="nameCategory" placeholder="">
          </div>

          <div class="form-group">
            <label for="serialNum">Порядковый номер</label>
            <input type="text" name = "sort_order" class="form-control form-control-sm" id="sort_order" placeholder="">
          </div>

          <div class="form-group">
            <label for="showCategory">Отображать на сайте?</label>
            <select name = "status" class="form-control form-control-sm" id="showCategory">
              <option value= "1">Отображать</option>
              <option value = "0">Не отображать</option>
            </select>
          </div>

           <input type="submit" name="submit" class="btn btn-success" value="Сохранить"></br></br></br></br></br>

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
