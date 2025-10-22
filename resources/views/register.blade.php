@extends('layouts.main')

@push('title')
<title>Registeration page</title>
@endpush

@section('content')
 <div class="container-fluid bg-light p-5">
       <h1 class="text-center"><i class="fa-solid fa-user"></i>Users Register</h1>
 </div>

 <section>
    <div class="container my-5">
        <div class="row">
            <div class= "col-lg-10">
                <div class= "row">
                    <div class= "col-lg-6">
                        <div>
                            <img src="{{ asset ('assets/images/Register.jpg') }}"  class="rounded-3 img-fluid">
                        </div>
                    </div>
                    <div class= "col-lg-6">
                        <div>
                            <form>
                                <div class="mb-3">
                                    <div class="form-text mb-2">Please enter your mobile number </div>
                                    <input type="email" class="form-control form-control-lg" placeholder="+91">
                                </div>
                                <button type="submit" class="btn theme-orange-btn text-light form-control form-control-lg">Continue</button>
                                <div class="text-center p-5 my-5">Have an account? <a href="#" class="text-decoration-none">Login</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>

@endsection


