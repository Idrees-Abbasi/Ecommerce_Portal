@extends('user.layouts.main')

@push('title')
    <title>Order History</title>
@endpush

@section('content')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">

                        <div class="row my-5">
                            <div class="col-xl-12 col-md-12">
                                <div class="d-flex">
                                    <h4>Order History</h4>
                                    {{-- <div class="ms-auto">
                                    <a class="text-decoration-none btn btn-dark btn-sm">View All</a>
                                    </div> --}}
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
                                            <td>Rs. 15,000.00 (5 Products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-warning">Processing</span>
                                                <a href="{{ url('detail') }}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                            </tr>

                                            <tr>
                                            <th scope="row">002</th>
                                            <td>06 October 2025</td>
                                            <td>Rs. 16,000.00 (3 Products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-info">On the way</span>
                                                <a href="{{ url('detail') }}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                            </tr>

                                            <tr>
                                            <th scope="row">003</th>
                                            <td>07 October 2025</td>
                                            <td>Rs. 17,000.00 (8 Products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delivered</span>
                                                <a href="{{ url('detail') }}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                            </tr>

                                            <tr>
                                            <th scope="row">004</th>
                                            <td>07 October 2025</td>
                                            <td>Rs. 17,000.00 (8 Products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delivered</span>
                                                <a href="{{ url('detail') }}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                            </tr>

                                            <tr>
                                            <th scope="row">005</th>
                                            <td>07 October 2025</td>
                                            <td>Rs. 17,000.00 (8 Products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delivered</span>
                                                <a href="{{ url('detail') }}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                            </tr>

                                            <tr>
                                            <th scope="row">006</th>
                                            <td>07 October 2025</td>
                                            <td>Rs. 17,000.00 (8 Products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delivered</span>
                                                <a href="{{ url('detail') }}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                            </tr>

                                            <tr>
                                            <th scope="row">006</th>
                                            <td>07 October 2025</td>
                                            <td>Rs. 17,000.00 (8 Products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delivered</span>
                                                <a href="{{ url('detail') }}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                            </tr>

                                            <tr>
                                            <th scope="row">006</th>
                                            <td>07 October 2025</td>
                                            <td>Rs. 17,000.00 (8 Products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delivered</span>
                                                <a href="{{ url('detail') }}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                            </tr>

                                            <tr>
                                            <th scope="row">006</th>
                                            <td>07 October 2025</td>
                                            <td>Rs. 17,000.00 (8 Products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delivered</span>
                                                <a href="{{ url('detail') }}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                            </tr>

                                            <tr>
                                            <th scope="row">006</th>
                                            <td>07 October 2025</td>
                                            <td>Rs. 17,000.00 (8 Products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delivered</span>
                                                <a href="{{ url('detail') }}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                            </tr>

                                            <tr>
                                            <th scope="row">006</th>
                                            <td>07 October 2025</td>
                                            <td>Rs. 17,000.00 (8 Products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delivered</span>
                                                <a href="{{ url('detail') }}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                            </tr>

                                            <tr>
                                            <th scope="row">006</th>
                                            <td>07 October 2025</td>
                                            <td>Rs. 17,000.00 (8 Products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delivered</span>
                                                <a href="{{ url('detail') }}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                            </tr>

                                            <tr>
                                            <th scope="row">006</th>
                                            <td>07 October 2025</td>
                                            <td>Rs. 17,000.00 (8 Products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delivered</span>
                                                <a href="{{ url('detail') }}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                            </tr>

                                            <tr>
                                            <th scope="row">006</th>
                                            <td>07 October 2025</td>
                                            <td>Rs. 17,000.00 (8 Products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delivered</span>
                                                <a href="{{ url('detail') }}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                            </tr>

                                            <tr>
                                            <th scope="row">006</th>
                                            <td>07 October 2025</td>
                                            <td>Rs. 17,000.00 (8 Products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delivered</span>
                                                <a href="{{ url('detail') }}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                            </tr>

                                            <tr>
                                            <th scope="row">006</th>
                                            <td>07 October 2025</td>
                                            <td>Rs. 17,000.00 (8 Products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delivered</span>
                                                <a href="{{ url('detail') }}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="my-4">
                                    <nav>
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

@endsection


