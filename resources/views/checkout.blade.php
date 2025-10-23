
@extends('layouts.main')

@push('title')
<title>Checkout-page</title>
@endpush

@section('content')
 <div class="container-fluid bg-light p-5">
       <h1 class="text-center"><i class="fa-solid fa-cart-shopping"></i>Check-Out</h1>
 </div>

 <!-- Billing Information -->

 <section>
    <div class="container my-5">
        <h2>Billing Details</h2>
        <div class="row">
            <div class="col-lg-12">
                <form>
                    <div class="row my-3">
                    <div class="col-lg-12 mb-3">
                      <select class="form-select form-control " aria-label="Default select example">
                        <option selected>Select Your Country</option>
                        <option value="1">Pakistan</option>
                        <option value="2">Nepal</option>
                        <option value="3">China</option>
                        <option value="4">Saudia</option>
                        <option value="5">UK</option>
                    </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <input type="text" class="form-control " placeholder="First Name">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <input type="text" class="form-control " placeholder="Last Name">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <input type="tel" class="form-control  " placeholder="Your Phone">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <input type="email" class="form-control  " placeholder="Your Email">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <input type="text" class="form-control " placeholder="Pin Code">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <input type="text" class="form-control " placeholder="Landmark">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <select class="form-select form-control " aria-label="Default select example">
                            <option selected>Select Your City</option>
                            <option value="1">Islamabad</option>
                            <option value="2">Karachi</option>
                            <option value="3">Lahore</option>
                            <option value="4">Pindi</option>
                            <option value="5">Gujrat</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <select class="form-select form-control " aria-label="Default select example">
                            <option selected>Select Your State</option>
                            <option value="1">Punjab</option>
                            <option value="2">AJK</option>
                            <option value="3">KPK</option>
                            <option value="4">Sindh</option>
                        </select>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <textarea class="form-control" placeholder="Your Address" rows="4"></textarea>
                </form>
            </div>
        </div>
    </div>
</section>

 <!-- Yours Orders -->

<section>
    <div class="container">
        <h2> Yours Orders </h2>
        <div class="row mb-5">
            <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col"><h5>Product</h5></th>
                    <th scope="col"><h5>Price</h5></th>
                    <th scope="col"><h5>Quantity</h5></th>
                    <th scope="col"><h5>Sub-Total</h5></th>
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
                    <td>01</td>
                    <td>Rs. 1499.00</td>
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
                    <td>02</td>
                    <td>Rs. 11,499.00</td>
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
                    <td>01</td>
                    <td>Rs. 15,499.00</td>
                    </tr>

                    <tr>
                    <th colspan="3"><h5>Total</h5></th>
                    <th><h5>Rs. 28,499.00</h5></th>
                    </tr>

                </tbody>
            </table>
            </div>
        </div>
    </div>
</section>

<!-- Payment -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                    <label class="form-check-label" for="radioDefault1">
                        <h5>UPI</h5>
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2">
                    <label class="form-check-label" for="radioDefault2">
                        <h5>Credit/Debit Card</h5>
                    </label>
                     <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
                    <label class="form-check-label" for="radioDefault2">
                        <h5>Cash on delivery</h5>
                    </label>
                </div>

                <div class="mt-4"><a href="{{ url('checkout/product') }}" class="btn theme-orange-btn text-light rounded-pill w-100 my-4 px-3 py-2" >Place Order</a></div>
            </div>

            </div>
        </div>
    </div>
</section>
@endsection

