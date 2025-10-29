@extends('user.layouts.main')

@push('title')
    <title>Order History</title>
@endpush

@section('content')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="row my-5">
                            <h5 class="mb-4">Order Details: Nov 5, 2025 (3 Products)</h5>

                            <div class="col-md-6 border border-primary p-3">
                                <h5 class="text-dark">Billing Address</h5>
                                <h6 class="text-dark">Page layouts look better with something in each section.</h6>
                                <span class="text-dark"><strong>Email:</strong> idreesabbasi006@gmail.com</span><br>
                                <span class="text-dark"><strong>Phone:</strong> +1234567890</span><br>
                            </div>

                            <div class="col-md-6 border border-primary p-3">
                                <h5 class="text-dark">Order Summary</h5>
                                <span class="text-dark"><strong>Order ID:</strong> 123456</span><br>
                                <span class="text-dark"><strong>Payment Method:</strong> Cash on delivery</span><br>
                                <span class="text-dark"><strong>Sub-Total:</strong> Rs. 17,000.00</span><br>
                                <span class="text-dark"><strong>Discount:</strong> 20%</span><br>
                                <span class="text-dark"><strong>Shipping Fee:</strong> Free</span><br>
                                <h5 class="text-dark mt-3">Total: Rs. 17,000.00</h5>
                            </div>
                        </div>


                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div class="position-relative m-4">
                                <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 1px;">
                                    <div class="progress-bar" style="width: 50%"></div>
                                </div>
                                <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
                                <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
                                <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="d-flex">
                                <div class="p-2 ms-5 flex-fill">Order Received</div>
                                <div class="p-2 ms-5 flex-fill">Order Processing</div>
                                <div class="p-2 ms-5 flex-fill">On the way</div>
                                <div class="p-2 ms-5 flex-fill">Order Delivered</div>
                            </div>
                        </div>
                    </div>
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
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </main>

@endsection


