@extends('layouts.main')

@push('title')
<title>Home Page</title>
@endpush

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
    <div class="d-flex">
        <div class="flex-grow-1"><h2>Top Deals</h2></div>
        <div><a href="#" class="btn btn-sm theme-green-btn text-light rounded-pill px-3 py-2">View All</a></div>
    </div>
        <div class="row theme-product">
            <div class="col-lg-3">
                <div class="card">
                <a href="#"><img src="{{ asset ('assets/images/products/5p.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Chairs</a></h6>
                    <h5 class="card-title text-center">Rs. 11,499.00</h5>
                </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                <a href="#"><img src="{{ asset ('assets/images/products/2p.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Infinix Mobile</a></h6>
                    <h5 class="card-title text-center">Rs. 15,499.00</h5>
                </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                <a href="#"><img src="{{ asset ('assets/images/products/3p.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Shoes</a></h6>
                    <h5 class="card-title text-center">Rs. 1499.00</h5>
                </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                <a href="#"><img src="{{ asset ('assets/images/products/4p.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Electronics</a></h6>
                    <h5 class="card-title text-center">Rs. 1000.00</h5>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Best Of Electronics -->

<section class="my-5">
    <div class="container">

    <div class="d-flex">
        <div class="flex-grow-1"><h2>Best Of Electronics</h2></div>
        <div><a href="#" class="btn btn-sm theme-orange-btn text-light rounded-pill px-3 py-2">View All</a></div>
    </div>
        <div class="row theme-product">
            <div class="col-lg-3">
                <div class="card">
                <a href="#"><img src="{{ asset ('assets/images/products/3p.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Shoes</a></h6>
                    <h5 class="card-title text-center">Rs. 499.00</h5>
                </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                <a href="#"><img src="{{ asset ('assets/images/products/5p.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Chairs</a></h6>
                    <h5 class="card-title text-center">Rs. 9,499.00</h5>
                </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                <a href="#"><img src="{{ asset ('assets/images/products/2p.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Infinix Mobile</a></h6>
                    <h5 class="card-title text-center">Rs. 41,499.00</h5>
                </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                <a href="#"><img src="{{ asset ('assets/images/products/4p.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Electronics</a></h6>
                    <h5 class="card-title text-center">Rs. 1000.00</h5>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular Categories -->

<section class="my-5">
    <div class="container">

    <div class="d-flex">
        <div class="flex-grow-1"><h2>Popular Categories</h2></div>
        <div><a href="#" class="btn btn-sm theme-orange-btn text-light rounded-pill px-3 py-2">View All</a></div>
    </div>
        <div class="row theme-product">
            <div class="col-lg-3">
                <div class="card">
                <a href="#"><img src="{{ asset ('assets/images/products/3p.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Shoes</a></h6>
                    <h5 class="card-title text-center">Rs. 499.00</h5>
                </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                <a href="#"><img src="{{ asset ('assets/images/products/5p.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Chairs</a></h6>
                    <h5 class="card-title text-center">Rs. 9,499.00</h5>
                </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                <a href="#"><img src="{{ asset ('assets/images/products/2p.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Infinix Mobile</a></h6>
                    <h5 class="card-title text-center">Rs. 41,499.00</h5>
                </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                <a href="#"><img src="{{ asset ('assets/images/products/4p.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Electronics</a></h6>
                    <h5 class="card-title text-center">Rs. 1000.00</h5>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recently viewed Products -->

<section class="my-5">
    <div class="container">

    <div class="d-flex">
        <div class="flex-grow-1"><h2>Recently viewed</h2></div>
        <div><a href="#" class="btn btn-sm theme-orange-btn text-light rounded-pill px-3 py-2">View All</a></div>
    </div>
        <div class="row theme-product">
            <div class="col-lg-3">
                <div class="card">
                <a href="#"><img src="{{ asset ('assets/images/products/3p.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Shoes</a></h6>
                    <h5 class="card-title text-center">Rs. 499.00</h5>
                </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                <a href="#"><img src="{{ asset ('assets/images/products/5p.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Chairs</a></h6>
                    <h5 class="card-title text-center">Rs. 9,499.00</h5>
                </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                <a href="#"><img src="{{ asset ('assets/images/products/2p.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Infinix Mobile</a></h6>
                    <h5 class="card-title text-center">Rs. 41,499.00</h5>
                </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                <a href="#"><img src="{{ asset ('assets/images/products/4p.jpg') }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Electronics</a></h6>
                    <h5 class="card-title text-center">Rs. 1000.00</h5>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
