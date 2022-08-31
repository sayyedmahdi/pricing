@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="main-content-label mg-b-5">
                ایجاد کاربر جدید
            </div>
            <p class="mg-b-20">سفارشی سازی آن بسیار آسان است و از آن در پیاده سازی وب سایت شما استفاده می شود.</p>
            <form method="post" action="{{route('create_user')}}" enctype="multipart/form-data">
                @csrf
                <div class="row row-sm">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>نام کاربر</label>
                            <input class="form-control" name="name" placeholder="نام کاربر">
                            @error('name')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row row-sm">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>نام کاربری</label>
                            <input class="form-control" name="username" placeholder="نام کاربری">
                            @error('username')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row row-sm">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>رمز عبور</label>
                            <input class="form-control" name="password" type="password" placeholder="رمز عبور">
                            @error('username')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row row-sm">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>نقش کاربری</label>
                            <select name="role" class="form-control">
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
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
    </div>
@endsection
