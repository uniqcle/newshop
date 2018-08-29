<?php 
require_once(ROOT.'/views/layouts/header_admin.php'); 
?>

<section>
  <div class="container">
    <!-- Хлебные крошки --> 
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/admin/cabinet/">Админ.панель</a></li>
      <li class="breadcrumb-item active" aria-current="page">Управление товарами</li>
    </ol>
    
    <div class="row">
     <div class="col-sm-12">
       <a href = "/admin/product/create" class = "btn btn-success btn-sm">Добавить товар</a></br></br> 
     </div>

     <div class="col-sm-12">
       <div>
        <table class = "table-borderd table-sm table-hover table-striped table">
          <caption>Список товаров</caption>
          
          <thead>
           <tr>
             <th>Код товара</th>
             <th>Артикул</th>
             <th>Название товара</th>
             <th>Цена</th>
             <th></th>
             <th></th>
           </tr>
         </thead>
         <tbody>

          <?php foreach($productList as $product): ?>
           <tr>
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product['code']; ?></td>
            <td><a href = "/product/<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></td>
            <td><?php echo $product['price']; ?></td>
            <td><a href = "/admin/product/update/<?php echo $product['id'];?>"><i class="far fa-edit"></i></a></td>
            <td>
            <a href = "/admin/product/delete/<?php echo $product['id'];?>"><i class="far fa-trash-alt"></i></a>  
 
            </td>
          </tr>

        <?php endforeach; ?>


      </tbody>
    </table>

  </div>

</div>
</div>
</section>


<!-- Button trigger modal -->




</div>
</div>
</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
