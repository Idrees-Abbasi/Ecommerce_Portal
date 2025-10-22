<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="{{asset ('assets/css/style.css')}}" rel="stylesheet">
  </head>
  <body>
<nav class="navbar navbar-expand-lg theme-navbar">
  <div class="container">
    <a class="navbar-brand" href="#"><h1 class="text-light">E Commerce</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div>
        <form class="d-flex" role="search">
        <div class="input-group">
        <input class="form-control form-control-sm" style="width:350px"search" placeholder="Search for products" aria-label="Search"/>
        <button class="btn btn-light text-secondary btn-sm rounded-pill" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
      </form>
    </div>
    <div>
      <a href="#" class="text-decoration-none text-light">Become a Seller</a>
      <a href="{{ url('cart-list/product') }}" class="btn theme-green-btn btn-sm text-light rounded-pill"><i class="fa-solid fa-cart-shopping"></i>cart</a>
      <a href="{{ url('login') }}" class="btn theme-orange-btn btn-sm text-light rounded-pill"><i class="fa-solid fa-user"></i>Login</a>
    </div>
  </div>
</nav>

<!-- Category nav-->

<nav class="navbar navbar-expand-lg theme-navbar-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active text-dark" href="{{ url('category/electronics') }}">Mobile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark" href="#">Fashion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark" href="#">Electronics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark" href="#">Furniture</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark" href="#">Grocery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-dark" href="{{ url('category/electronics/tv') }}">Applinces</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
