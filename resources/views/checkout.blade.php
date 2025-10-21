
@extends('layouts.main')

@push('title')
<title>Product-Detail</title>
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
                    </div>
                        <div><a class="btn theme-orange-btn text-light rounded-pill">Post a comment <i class="fa-solid fa-arrow-right"></i></a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>




@endsection

