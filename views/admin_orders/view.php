 <?php 
 require_once(ROOT.'/views/layouts/header_admin.php'); 
 ?>

 <section>
  <div class="container">
    <!-- Хлебные крошки --> 
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin/">Админ.панель</a></li>
        <li class="breadcrumb-item"><a href="/admin/orders">Управление заказами</a></li>
        <li class="breadcrumb-item active" aria-current="page">Информация о заказе</li>
      </ol>
    
    <div class="row">

     <div class="col-sm-12">
       <div class="col-sm-4">
       	<table class = "table-borderd table-sm table-hover table">
          <thead>
            <tr>
              <th colspan = "2">Информация о заказе</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Номер заказа</td>
              <td>323123</td>
            </tr>
            <tr>
              <td>Имя клиента</td>
              <td>Jacob</td>
            </tr>
            <tr>
              <td>Телефон клиента</td>
              <td >2 123123 132123</td>
            </tr>
            <tr>
              <td>Комментарий клиента</td>
              <td > </td>
            </tr>

            <tr>
              <th>Статус заказа</th>
              <td >В обработке</td>
            </tr>

            <tr>
              <th>Дата заказа заказа</th>
              <td >26.08.2018</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>




    <div class="col-sm-12">
     <div class="col-sm-10">
      <table class = "table-borderd table-sm table-hover table">
        <thead>
          <tr>
            <th>ID товара</th>
            <th>Артикул товара</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Количество</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>23</td>
            <td>323123</td>
            <td>Компьютер Everest Game </td>
            <td>56.23</td>
            <td>15</td>
          </tr>

          <tr>
            <td>23</td>
            <td>323123</td>
            <td>Компьютер Everest Game </td>
            <td>56.23</td>
            <td>15</td>
          </tr>

          <tr>
            <td>23</td>
            <td>323123</td>
            <td>Компьютер Everest Game </td>
            <td>56.23</td>
            <td>15</td>
          </tr>

          <tr>
            <td>23</td>
            <td>323123</td>
            <td>Компьютер Everest Game </td>
            <td>56.23</td>
            <td>15</td>
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
