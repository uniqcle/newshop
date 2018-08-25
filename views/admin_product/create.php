<?php 
  require_once(ROOT.'/views/layouts/header_admin.php'); 
?>

<section>
  <div class="container">
    <!-- Хлебные крошки --> 
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin/">Управление</a></li>
        <li class="breadcrumb-item"><a href="/admin/product">Управление товаром</a></li>
        <li class="breadcrumb-item active" aria-current="page">Добавить</li>
      </ol>
    </nav>

    <div class="row">
     <div class="col-sm-12">
       <h5>Добавить новый товар</h5>
   </div>

    <div class="col-sm-12">
       <div>


        <form action = "#" method = "POST" enctype = "multipart/form-data">
          <div class="form-group">
            <label for="nameProduct">Название товара</label>
            <input type="text" name = "name" class="form-control form-control-sm" id="nameProduct" placeholder="">
          </div>

          <div class="form-group">
            <label for="articleProduct">Артикул</label>
            <input type="text" name = "code" class="form-control form-control-sm" id="articleProduct" placeholder="">
          </div>

          <div class="form-group">
            <label for="priceProduct">Цена</label>
            <input type="text" name = "price" class="form-control form-control-sm" id="priceProduct" placeholder="">
          </div>


          <div class="form-group">
            <label for="categoryProduct">Категория</label>
            <select name = "category_id" class="form-control form-control-sm" id="categoryProduct">
              <?php foreach($categoryList as $item): ?>
              <option value = "<?php echo $item['id']; ?>"><?php echo $item['name']; ?></option>
            <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">
            <label for="manufacture">Производитель</label>
            <input type="text" name= "brand" class="form-control form-control-sm" id="manufacture" placeholder="">
          </div>

          <form>
            <div class="form-group">
              <label for="imageProduct">Изображение товара</label>
              <input type="file" name = "image" class="form-control-file form-control-sm" id="imageProduct">
            </div>
          </form>


          <div class="form-group">
            <label for="availableProduct">Наличие на складе</label>
            <select name = "availability" class="form-control form-control-sm" id="availableProduct">
              <option value= "1">Да</option>
              <option value = "0">Нет</option>
            </select>
          </div>

          <div class="form-group">
            <label for="newProduct">Новинка?</label>
            <select name = "is_new" class="form-control form-control-sm" id="newProduct">
              <option value = "1">Да</option>
              <option value = "0">Нет</option>
            </select>
          </div>

          <div class="form-group">
            <label for="recommendedProduct">Рекомендуемый?</label>
            <select name = "is_recommended" class="form-control form-control-sm" id="recommendedProduct">
              <option value = "1">Да</option>
              <option value = "0">Нет</option>
            </select>
          </div>


          <div class="form-group">
            <label for="descriptProduct">Детальное описание</label>
            <textarea class="form-control form-control-sm" name = "description" id="descriptProduct" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label for="status">Статус</label>
            <select name = "status" class="form-control form-control-sm" id="status">
              <option value = "1" selected = "selected">Отображается</option>
              <option value = "0" >Скрыт</option>
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
 