@extends('user.layouts.main')

@push('title')
    <title>Dashboard - User</title>
@endpush

@section('content')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="my-4">Dashboard</h1>

                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body mx-auto">
                                        <img src="{{ asset('dashboard/assets/img/user.png')}}" style="width: 155px;">
                                    </div>
                                    <div class="my-3">
                                        <h5 class="text-center text-dark">Idrees Abbasi</h5>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-6 col-md-6">
                                <div class="card bg-warning text-white mb-4" style="height: 250px;">
                                    <div class="card-body mx-auto my-4">
                                        <h5 class="text-dark">Billing Address</h5>
                                        <h6 class="text-dark">Page layouts look better with something in each section.</h6>
                                        <span class="text-dark"><strong>Email:</strong> idreesabbasi006@gmail.com</span><br>
                                        <span class="text-dark"><strong>Phone:</strong> +1234567890</span><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="d-flex">
                                    <h4>Recent Orders</h4>
                                    <div class="ms-auto">
                                    <a class="text-decoration-none btn btn-dark btn-sm">View All</a>
                                    </div>
                                </div>
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th scope="row">001</th>
                                            <td>05 October 2025</td>
                                            <td>Rs. 15,000.00</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-warning">Processing</span>
                                                <a href="#" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                            </tr>

                                            <tr>
                                            <th scope="row">001</th>
                                            <td>05 October 2025</td>
                                            <td>Rs. 15,000.00</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-info">On the way</span>
                                                <a href="#" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                            </tr>

                                            <tr>
                                            <th scope="row">001</th>
                                            <td>05 October 2025</td>
                                            <td>Rs. 15,000.00</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delivered</span>
                                                <a href="#" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

@endsection

