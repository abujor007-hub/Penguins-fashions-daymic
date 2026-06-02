<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boostrap link start -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">


    <!-- boostrap link end -->
     <!-- slick slider link start -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- slick slider link end -->

    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Panguins Fashions</title>
</head>
<body>

    <!-- navigation start -->
     <nav class="navbar navbar-expand-lg bg-body-tertiary ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="Icon and image/brand-icon.png" alt="" style="width: 150px; height: 30px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home.page') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('manjacket.page') }}">Man jacket</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ route('women.page') }}">Woman jacket</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ route('shoes.page') }}">Shoes</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ route('shop.page') }}">Shop</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ route('contact.page') }}">Contact</a>
        </li>
          
      </ul>
    
      
      <form class="d-flex gap-2" role="search">
      <a href="" type="button" class="btn btn-outline-primary">Login</a>
  <a href="" type="button" class="btn btn-outline-info">Sign In</a>
      </form>
    </div>
  </div>
</nav>
    <!-- navigation end -->