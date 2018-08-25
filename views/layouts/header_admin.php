<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <title>Панель администратора</title>
  </head>
<body>
 
<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="/" target = "_blank">
    <img src="/template/images/home/logo.png" width="120" height="30" alt="">    
  </a>
   
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!--Левая сторона --> 
    <ul class="navbar-nav mr-auto">
      <!--Она пустая, но она обязательно. В противном случае меню съедет влево -->
    </ul>
    
    <!--Правая сторона --> 
    <ul class="nav   justify-content-end">
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Управление
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/admin/orders">Управление заказами</a>
          <a class="dropdown-item" href="/admin/product">Управление товарами</a>
          <a class="dropdown-item" href="/admin/category">Управление категориями</a>
 
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="/admin">Админ панель</a>
      </li>

    </ul>

  </div>
</nav>
 