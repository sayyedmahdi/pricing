@extends('layouts.raw')

@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success text-center br-container">
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <div class="main-content-label mg-b-5">
                ویرایش پروفایل
            </div>
            <form method="post" action="{{route('user_profile_edit')}}" enctype="multipart/form-data">
                @csrf
                <div class="row row-sm">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>نام کاربر</label>
                            <input class="form-control" name="name" value="{{$user->name}}" placeholder="نام کاربر">
                            @error('name')
                            <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>
                </div>
                <div class="row row-sm">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>نام کاربری</label>
                            <input class="form-control" name="username" value="{{$user->username}}" placeholder="نام کاربری">
                            @error('username')
                            <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                            @error('duplicate')
                            <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row row-sm">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>موبایل</label>
                            <input class="form-control" name="mobile" value="{{$user->mobile}}" placeholder="موبایل">
                            @error('mobile')
                            <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row row-sm">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>رمز عبور</label>
                            <input class="form-control" name="password" type="password" placeholder="رمز عبور">
                        </div>
                    </div>
                </div>
                <div class="row row-sm mt-4">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <button class="btn btn-primary" type="submit">ذخیره</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('footer_tags')
    <script>
        $('.close').on('click' , (e) => {
            $(e.target).closest('.alert').hide()
        })
    </script>
@endsection
