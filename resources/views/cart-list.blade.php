@extends('layouts.main')

@push('title')
<title>Product-Detail</title>
@endpush

@section('content')
 <div class="container-fluid bg-light p-5">
       <h1 class="text-center"><i class="fa-solid fa-cart-shopping"></i>Cart-List</h1>
 </div>

 <!-- Cart-list-->

<section>
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col"><h4>Product</h4></th>
                    <th scope="col"><h4>Price</h4></th>
                    <th scope="col"><h4>Quantity</h4></th>
                    <th scope="col"><h4>Sub-Total</h4></th>
                    <th scope="col"><h4>Remove</h4></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th>
                        <div class="d-flex">
                            <div>
                                <img src="{{ asset ('assets/images/products/3p.jpg') }}" style = "width: 70px;" class="rounded-3">
                            </div>
                            <div class="p-3"><h5>Shoes</h5></div>
                        </div>
                    </th>
                    <td>Rs. 1499.00</td>
                    <td> <div class="d-flex flex-row mb-3">
                                {{-- <div class="p-1"><h6>Quantity</h6></div> --}}
                                <div class="p-1">
                                    <span class="btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                                    <span class="mx-2">01</span>
                                    <span class="btn btn-secondary btn-sm rounded-end-pill"><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </div>
                        </div></td>
                    <td>Rs. 1499.00</td>
                    <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                    </tr>

                    <tr>
                    <th>
                        <div class="d-flex">
                            <div>
                                <img src="{{ asset ('assets/images/products/5p.jpg') }}" style = "width: 70px;" class="rounded-3">
                            </div>
                            <div class="p-3"><h5>Chairs</h5></div>
                        </div>
                    </th>
                    <td>Rs. 11,499.00</td>
                    <td> <div class="d-flex flex-row mb-3">
                                {{-- <div class="p-1"><h6>Quantity</h6></div> --}}
                                <div class="p-1">
                                    <span class="btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                                    <span class="mx-2">01</span>
                                    <span class="btn btn-secondary btn-sm rounded-end-pill"><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </div>
                        </div></td>
                    <td>Rs. 11,499.00</td>
                    <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                    </tr>

                    <tr>
                    <th>
                        <div class="d-flex">
                            <div>
                                <img src="{{ asset ('assets/images/products/2p.jpg') }}" style = "width: 70px;" class="rounded-3">
                            </div>
                            <div class="p-3"><h5>Infinix Mobile</h5></div>
                        </div>
                    </th>
                    <td>Rs. 15,499.00</td>
                    <td> <div class="d-flex flex-row mb-3">
                                {{-- <div class="p-1"><h6>Quantity</h6></div> --}}
                                <div class="p-1">
                                    <span class="btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                                    <span class="mx-2">01</span>
                                    <span class="btn btn-secondary btn-sm rounded-end-pill"><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </div>
                        </div></td>
                    <td>Rs. 15,499.00</td>
                    <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</section>


@endsection

