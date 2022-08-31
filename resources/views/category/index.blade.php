@extends('layouts.master')

@section('header_tags')
    <!--- Internal Sweet-Alert css-->
    <link href="{{asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">
@endsection

@section('content')
    <!--div-->
    <div class="col-xl-12">
        <div class="card mg-b-20">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">لیست دسته بندی</h4>
                    <a href="{{route('create_category')}}" class="btn btn-primary">افزودن دسته بندی</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table key-buttons text-md-nowrap">
                        <thead>
                        <tr>
                            <th class="border-bottom-0">نام</th>
                            <th class="border-bottom-0">عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->name}}</td>
                                <td>
                                    <a href="{{route('show_edit_product' , $category->id)}}" class="btn btn-success">ویرایش</a>
                                    <button class="btn btn-danger delete-btn" data-id="{{$category->id}}" >حذف</button>
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
                    let url = 'category/delete/' + id
                    axios.get(url)
                        .then((res) => {
                            swal("حذف!", "فایل مورد نظر با موفقیت حذف شد", "success");
                            window.location = '/category'
                        })
                        .catch((err) => {
                            window.location = '/category'
                        })

                });
        })
    </script>
@endsection
