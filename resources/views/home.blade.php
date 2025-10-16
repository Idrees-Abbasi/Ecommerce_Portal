@extends('layouts.main')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
 <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset ('assets/images/1st.jpg') }}" class="d-block w-100" alt="slider 1">
    </div>
    <div class="carousel-item">
      <img src="{{ asset ('assets/images/2nd.jpg') }}" class="d-block w-100" alt="slider 4">
    </div>
    <div class="carousel-item">
      <img src="{{ asset ('assets/images/3rd.jpg') }}" class="d-block w-100" alt="slider 5">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Product Section-->

<section class="my-5">
    <div class="container">
    <h1 class="mb-3">Top Deals</h1>
        <div class="row theme-product">
            <div class="col-lg-3">
                <div class="card">
                <a href="#"><img src="{{ asset ('assets/images/products/5p.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center">Two Chair</h6>
                    <h5 class="card-title text-center">Rs. 11,499.00</h5>
                </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                <a href="#"><img src="{{ asset ('assets/images/products/2p.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center">Infinix Mobile</h6>
                    <h5 class="card-title text-center">Rs. 15,499.00</h5>
                </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                <a href="#"><img src="{{ asset ('assets/images/products/3p.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center">Shoes</h6>
                    <h5 class="card-title text-center">Rs. 1499.00</h5>
                </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                <a href="#"><img src="{{ asset ('assets/images/products/4p.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center">Electronics</h6>
                    <h5 class="card-title text-center">Rs. 1000.00</h5>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
