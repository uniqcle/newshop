 <?php 
require_once(ROOT.'/views/layouts/header_admin.php'); 
?>

<section>
  <div class="container">
    <!-- Хлебные крошки --> 
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/admin/cabinet">Админ.панель</a></li>
      <li class="breadcrumb-item active" aria-current="page">Управление категориями</li>
    </ol>
    
    <div class="row">
     <div class="col-sm-12">
       <a href = "/admin/category/create" class = "btn btn-success btn-sm">Добавить категорию</a></br></br> 
     </div>

     <div class="col-sm-12">
       <div>
       	<table class = "table-borderd table-sm table-hover table-striped table">
       		<caption>Список категорий</caption>
       		
       		<thead>
       			<tr>
       				<th>ID категории</th>
       				<th>Название категории</th>
       				<th>Порядковый номер</th>
       				<th>Статус</th>
       				<th></th>
       				<th></th>
       			</tr>
       		</thead>
       		<tbody>
       		
          <?php foreach($categoryList as $item): ?>
       			<tr>
       				<td><?php echo $item['id']; ?></td>
       				<td><?php echo $item['name']; ?></td>
       				<td><?php echo $item['sort_order']; ?></td>
       				<td><?php echo Category::statusCategory($item['status']); ?></td>
       				<td><a href = "/admin/category/update/<?php echo $item['id']; ?>"><i class="far fa-edit"></i></a></td>
       				<td><a href = "/admin/category/delete/<?php echo $item['id']; ?>"><i class="far fa-trash-alt"></i></a></td>
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
