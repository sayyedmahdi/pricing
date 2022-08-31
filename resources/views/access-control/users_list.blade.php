@extends('layouts.master')
@section('title' , 'سطح دسترسی')
@section('header-tags')

    <!-- Internal Data table css -->
    <link href="assets/plugins/datatable/datatables.min.css" rel="stylesheet" />
    <link href="assets/plugins/datatable/responsive.dataTables.min.css" rel="stylesheet">
    <link href="assets/plugins/datatable/responsive.bootstrap5.css" rel="stylesheet">
    <link href="assets/plugins/datatable/css/buttons.bootstrap5.min.css" rel="stylesheet">
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="assets/plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet">
@endsection

@section('footer_tags')

    <!-- custom js -->
    <!-- Rating js-->
    <script src="{{asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>
    <script src="{{asset('assets/plugins/rating/jquery.barrating.js')}}"></script>


    <!-- Moment js -->
    <script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>

    <!--Internal  Chart.bundle js -->
    <script src="{{asset('assets/plugins/chartjs/Chart.bundle.min.html')}}"></script>

    <!--Internal Sparkline js -->
    <script src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <!--Internal Apexchart js-->
    <script src="{{asset('assets/js/apexcharts.js')}}"></script>

    <!-- Internal Map -->
    <script src="{{asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

    <!--Internal  index js -->
    <script src="{{asset('assets/js/index.js')}}"></script>

    <!-- Apexchart js-->
    <script src="{{asset('assets/js/apexcharts.js')}}"></script>
    <script src="{{asset('assets/js/jquery.vmap.sampledata.js')}}"></script>


@endsection


@section('content')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">جداول</h4><span
                    class="text-muted mt-1 tx-13 ms-2 mb-0">/ جداول داده</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="mb-xl-0" id="p-r-c-1">
                <button type="button" class="btn btn-info btn-icon btn-b" id="m-l-c-05"><i
                        class="mdi mdi-filter-variant"></i></button>
            </div>
            <div class="mb-xl-0" id="p-r-c-1">
                <button type="button" class="btn btn-danger btn-icon" id="m-l-c-05"><i
                        class="mdi mdi-star"></i></button>
            </div>
            <div class="mb-xl-0" id="p-r-c-1">
                <button type="button" class="btn btn-warning btn-icon" id="m-l-c-05"><i
                        class="mdi mdi-refresh"></i></button>
            </div>
            <div class="mb-xl-0">
                <div class="btn-group dropdown">
                    <button type="button" class="btn btn-primary">20 مهر 1400</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                            id="dropdownMenuDate" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate"
                         x-placement="bottom-end">
                        <a class="dropdown-item" href="#">1397</a>
                        <a class="dropdown-item" href="#">1398</a>
                        <a class="dropdown-item" href="#">1399</a>
                        <a class="dropdown-item" href="#">1400</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">لیست کاربران</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">نام </th>
                                <th class="wd-15p border-bottom-0">نام خانوادگی</th>
                                <th class="wd-20p border-bottom-0">موقعیت</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->surname}}</td>
                                    <td>{{$user->roles[0]->name}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->
    </div>
@endsection
