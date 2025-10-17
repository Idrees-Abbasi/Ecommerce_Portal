@extends('layouts.main')

@push('title')
<title>Product-Detail</title>
@endpush

@section('content')
 <div class="container-fluid bg-light p-5">
       <h1 class="text-center"><i class="fa-solid fa-list"></i>Product-Detail</h1>
 </div>

<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 my-4">
            <img src="{{ asset('assets/images/products/5p.jpg') }}" class="rounded img-fluid" style="width: 300px; height: auto;">
            </div>


            <div class="col-lg-8">
                <div>
                    <h2> Chairs </h2>
                    <h5>Rs. 11,499.00</h5>
                    <div>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <h6> 2 Customers Rating </h6>
                    </div>
                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
                        those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
                        Cicero are also reproduced in their exact original form, accompanied by English
                        versions from the 1914 translation by H. Rackham.</p>
                        <div>
                            <a class="btn theme-green-btn text-light rounded-pill me-1">Add to cart</a>
                            <a class="btn theme-orange-btn text-light rounded-pill">Buy Now</a>
                        </div>
                </div>
            </div>

            <div class = "my-4">
                <h4>Product Discription</h4>
                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
                        those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
                        Cicero are also reproduced in their exact original form, accompanied by English
                        versions from the 1914 translation by H. Rackham.</p>
                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
                        those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
                        Cicero are also reproduced in their exact original form, accompanied by English
                        versions from the 1914 translation by H. Rackham.</p>
                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
                        those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
                        Cicero are also reproduced in their exact original form, accompanied by English
                        versions from the 1914 translation by H. Rackham.</p>
            </div>

            <!-- Related Products-->

            <div>
                <section>
    <div class="container">

    <div class="d-flex">
        <div class="flex-grow-1"><h2>Related Products</h2></div>
        <div><a href="#" class="btn btn-sm theme-orange-btn text-light">View All</a></div>
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
</div>
             <hr>

                <!-- Reviews -->

            <section>
                <div class="row mt-4">
                    <h2> 02 Reviews </h2>
                    <div class="col-lg-1">
                        <img src="{{ asset('assets/images/products/5p.jpg') }}" class="rounded- rounded-circle img-fluid" style="width: 300px; height: auto;">
                    </div>
                    <div class="col-lg-10">
                        <div>
                    </div>
                <div>
                    <h4>Idrees Abbasi</h4>
                    <div>
                    <div class="d-flex">
                        <div class="flex-grow-1"><h6>10 july 2025</h6></div>
                        <div>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        </div>
                    </div>
                    </div>
                    <p>used since the 1500s. It is a sequence of Latin words that do not form coherent sentences, serving as placeholder text in graphic design, publishing, and web development. The purpose of Lorem Ipsum is to fill spaces in layouts before the final content is available, allowing designers to focus on visual elements without being distracted by readable text. You can easily generate Lorem Ipsum text using various online tools.</p>
                </div>
                <div><a class="btn theme-orange-btn btn-sm text-light rounded-pill">Replay</a></div>

                <div class="col-lg-1">
                        <img src="{{ asset('assets/images/products/5p.jpg') }}" class="rounded- rounded-circle img-fluid" style="width: 300px; height: auto;">
                    </div>
                    <div class="col-lg-10">
                        <div>
                    </div>
                <div>
                    <h4>Idrees Abbasi</h4>
                    <div>
                    <div class="d-flex">
                        <div class="flex-grow-1"><h6>10 july 2025</h6></div>
                        <div>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        </div>
                    </div>
                    </div>
                    <p>used since the 1500s. It is a sequence of Latin words that do not form coherent sentences, serving as placeholder text in graphic design, publishing, and web development. The purpose of Lorem Ipsum is to fill spaces in layouts before the final content is available, allowing designers to focus on visual elements without being distracted by readable text. You can easily generate Lorem Ipsum text using various online tools.</p>
                </div>
                <div><a class="btn theme-orange-btn btn-sm text-light rounded-pill">Replay</a></div>
            </section>
        </div>
    </div>
</section>

@endsection
