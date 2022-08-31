@extends('layouts.master')
@section('title' , 'سطح دسترسی')
@section('header-tags')
    <!-- Internal Data table css -->
    <link href="{{asset('assets/plugins/datatable/datatables.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/datatable/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/datatable/responsive.bootstrap5.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/datatable/css/buttons.bootstrap5.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
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
    <div class="alert alert-solid-success d-none" role="alert" id="success-notif">
        <button aria-label="بستن" class="close" data-dismiss="alert" type="button">
            <span id="hide-notif">×</span></button>
        تغییرات با موفقیت ذخیره شد!
    </div>
    <div class="alert alert-solid-danger d-none" role="alert" id="error-notif">
        <button aria-label="بستن" class="close" data-dismiss="alert" type="button">
            <span aria-hidden="true" id="hide-notif">×</span></button>
        عملیات با خطا مواجه شد!
    </div>
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">لیست موقعیت ها</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                            <tr>
                                <th class="wd-5p border-bottom-0">عنوان </th>
                                <th class="wd-15p border-bottom-0">دسترسی ها</th>
                                <th class="wd-5p border-bottom-0">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{$role->name}}</td>
                                    <td>{{$role->permissionNames}}</td>
                                    <td>
                                        <button class="btn btn-outline-success btn-block edit-btn" data-role="{{$role}}" data-bs-target="#scrollmodal" data-bs-toggle="modal"><i class="fa fa-edit"></i>ویرایش</button>
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
    </div>

    <div class="modal" id="scrollmodal">
        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">لیست مجوز ها</h6><button aria-label="بستن" class="close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body" >
                    <div class="row row-sm">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table text-md-nowrap" id="example1">
                                            <thead>
                                            <tr>
                                                <th class="wd-5p border-bottom-0">عنوان </th>
                                                <th class="wd-15p border-bottom-0">دسترسی ها</th>
                                            </tr>
                                            </thead>
                                            <tbody id="modal-content">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-primary" type="button" id="send-form">ذخیره تغییرات</button>
                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">بستن</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer_tags')
    <script>
        let allPermissions = @json($permissions);
        $('.edit-btn').on('click' , (e) => {
            let role = JSON.parse(e.target.dataset.role)
            let permissions = role.permissions
            let html = '';
            $('#modal-content').html(html);
            Object.keys(allPermissions).map((key , i) => {
                html += '<tr>'
                html += '<td>' + key + '</td>'
                html += '<td class="d-flex">'
                allPermissions[key].map((p , i) => {
                    if (permissions.some(el => el.id === p.id)){
                        html += '<label class="ckbox m-2" > <input type="checkbox" data-roleId="' + role.id + '" checked name="permissionId" value="' + p.id + '"> <span>' + p.name + ' </span></label>';
                    }else{
                        html += '<label class="ckbox m-2" > <input type="checkbox" name="permissionId" data-roleId="' +  role.id + '" value="' + p.id + '"> <span>' + p.name + ' </span></label>';
                    }
                })
                html += '</td>'
                html += '</tr>'
            })
            $('#modal-content').html(html);

            $('#send-form').on('click' , () => {
                let permissions = [];
                $("input:checkbox[name=permissionId]:checked").each(function(){
                    permissions.push(parseInt($(this).val()));
                });

                $.ajax({
                    url: '/access-control/change-permissions',
                    method: 'POST',
                    data: {roleId: role.id , permissions , _token: '{{@csrf_token()}}'},
                    success: (res) => {
                        $('#scrollmodal').modal('hide');
                        $('#success-notif').removeClass('d-none');
                    },
                    error: (err) => {
                        $('#error-notif').removeClass('d-none');
                        console.log(err)
                    }
                })
            })
        })

        $('#hide-notif').on('click' , (e) => {
            e.target.parentElement.parentElement.classList.add('d-none') ;
        })


    </script>
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

    <!--Internal  Datatable js -->
    <script src="{{asset('assets/js/table-data.js')}}"></script>

@endsection
