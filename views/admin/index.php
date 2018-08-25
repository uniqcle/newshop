<?php 
  require_once(ROOT.'/views/layouts/header_admin.php'); 
?>

<section>
  <div class="container">
    <div class="row">
    <div class="col-sm-12 greet-admin">
      <h4>Привет, Администратор</h4>
          <p>
      Вам доступны следующие возможности: </br>
    </p>
    </div>


    <div class="col-sm">
      <ul>
        <li><a href = "/admin/orders">Управление заказами</a></li>
        <li><a href = "/admin/product">Управление товарами</a></li>
        <li><a href = "/admin/category">Управление категориями</a></li>
      </ul>
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
 