@extends('layouts.master')

@section('header_tags')
    <!--- Internal Sweet-Alert css-->
    <link href="{{asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">
@endsection

@section('content')
    <!--div-->
    @error('file')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <div class="col-xl-12">
        <div class="card mg-b-20">
            <div class="card-header pb-0">
                <div class="d-flex ">
                    <h4 class="card-title mg-b-0" style="height: 40px; margin-top: 12px; margin-left: 20px;">لیست محصولات</h4>
                    <a href="{{route('create_product')}}" class="btn btn-primary" style="height: 40px">افزودن محصول</a>
                    <form action="{{route('import_product')}}" method="post" enctype="multipart/form-data" style="display: flex; align-items: center; margin-right: auto">
                        @csrf
                        <input type="file" name="file"  class="form-control ml-2">افزودن محصول</input>
                        <button href="{{route('create_product')}}" type="submit" class="btn btn-primary">بارگذاری اکسل</button>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table key-buttons text-md-nowrap">
                        <thead>
                        <tr>
                            <th class="border-bottom-0">شناسه</th>
                            <th class="border-bottom-0">نام</th>
                            <th class="border-bottom-0">دسته بندی</th>
                            <th class="border-bottom-0">قیمت سطح 1</th>
                            <th class="border-bottom-0">قیمت سطح 2</th>
                            <th class="border-bottom-0">قیمت سطح 3</th>
                            <th class="border-bottom-0">تصویر</th>
                            <th class="border-bottom-0">عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->price1}}</td>
                                <td>{{$product->price2}}</td>
                                <td>{{$product->price3}}</td>
                                <td><img height="50px" src="{{asset("Image/$product->image")}}"></td>
                                <td>
                                    <a href="{{route('show_edit_product' , $product->id)}}" class="btn btn-success">ویرایش</a>
                                    <button class="btn btn-danger delete-btn" data-id="{{$product->id}}" >حذف</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--/div-->
@endsection

@section('footer_tags')
    <!-- Internal Data tables -->
    <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>

    <!--Internal  Sweet-Alert js-->
    <script src="{{asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/plugins/sweet-alert/jquery.sweet-alert.js')}}"></script>

    <!-- Sweet-alert js  -->
    <script src="{{asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/js/sweet-alert.js')}}"></script>
    <!--Internal  Datatable js -->
    <script src="{{asset('assets/js/table-data.js')}}"></script>

    <script>
        $('.delete-btn').on('click' , (e) => {
            let id = $(e.target).attr('data-id')
            swal({
                    title: "شما مطمئن هستید؟",
                    text: "شما قادر به بازیابی این محصول نخواهید بود!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn btn-danger",
                    confirmButtonText: "بله حذف کن!",
                    cancelButtonText: 'بازگشت',
                    closeOnConfirm: false
                },
                function(){
                    let url = 'product/delete/' + id
                    axios.get(url)
                        .then((res) => {
                            swal("حذف!", "فایل مورد نظر با موفقیت حذف شد", "success");
                            window.location = '/product'
                        })
                        .catch((err) => {
                            window.location = '/product'
                        })

                });
        })
    </script>
@endsection
