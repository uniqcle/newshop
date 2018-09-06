 <?php 
require_once(ROOT.'/views/layouts/header_admin.php'); 
?>

<section>
  <div class="container">
    <!-- Хлебные крошки --> 
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/admin/cabinet">Админ.панель</a></li>
      <li class="breadcrumb-item active" aria-current="page">Управление заказами</li>
    </ol>
    
    <div class="row">
     
     <div class="col-sm-12">
       <div>
        <table class = "table-borderd table-sm table-hover table-striped table">
          <caption>Список заказов</caption>
          
          <thead>
            <tr>
              <th>ID заказа</th>
              <th>Имя покупателя</th>
              <th>Телефон покупателя</th>
              <th>Дата оформления</th>
              <th>Статус</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          
          <?php foreach($orderItems as $item): ?>
            <tr>
              <td><?php echo $item['id']; ?></td>
              <td><?php echo $item['user_name']; ?></td>
              <td><?php echo $item['user_phone']; ?></td>
              <td><?php echo $item['save_date']; ?></td>
              <td><?php Order::getStatusOrder($item['status']); ?></td>
              <td><a href = "/admin/orders/view/<?php echo $item['id']; ?>"><i class="far fa-eye"></i></a></td>
              <td><a href = "/admin/orders/update/<?php echo $item['id']; ?>"><i class="far fa-edit"></i></a></td>
              <td><a href = "/admin/orders/delete/<?php echo $item['id']; ?>"><i class="far fa-trash-alt"></i></a></td>
            </tr>
          <?php endforeach; ?>

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
