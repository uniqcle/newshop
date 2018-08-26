<?php 
require_once(ROOT.'/views/layouts/header_admin.php'); 
?>

<section>
  <div class="container">
    <!-- Хлебные крошки --> 
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/admin">Управление</a></li>
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
          
           <tr>
            <td>45</td>
            <td>4323423</td>
            <td><a href = "#"> Компьютер Everest Game </a></td>
            <td>43.32</td>
            <td><a href = "#"><i class="far fa-edit"></i></a></td>
            <td><a href = "#"><i class="far fa-trash-alt"></i></a></td>
          </tr>

          <tr>
            <td>45</td>
            <td>4323423</td>
            <td><a href = "#"> Компьютер Everest Game </a></td>
            <td>43.32</td>
            <td><a href = "#"><i class="far fa-edit"></i></a></td>
            <td><a href = "#"><i class="far fa-trash-alt"></i></a></td>
          </tr>

          <tr>
            <td>45</td>
            <td>4323423</td>
            <td><a href = "#"> Компьютер Everest Game </a></td>
            <td>43.32</td>
            <td><a href = "#"><i class="far fa-edit"></i></a></td>
            <td><a href = "#"><i class="far fa-trash-alt"></i></a></td>
          </tr>


          <tr>
            <td>45</td>
            <td>4323423</td>
            <td><a href = "#"> Компьютер Everest Game </a></td>
            <td>43.32</td>
            <td><a href = "#"><i class="far fa-edit"></i></a></td>
            <td><a href = "#"><i class="far fa-trash-alt"></i></a></td>
          </tr>
          
        </tbody>
      </table>



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
