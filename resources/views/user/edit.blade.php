@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="main-content-label mg-b-5">
                ویرایش کاربر
            </div>
            <p class="mg-b-20">سفارشی سازی آن بسیار آسان است و از آن در پیاده سازی وب سایت شما استفاده می شود.</p>
            <form method="post" action="{{route('edit_user')}}" enctype="multipart/form-data">
                <input type="hidden" value="{{$user->id}}" name="id">
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
                <div class="row row-sm">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>نقش کاربری</label>
                            <select name="role" class="form-control">
                                @foreach($roles as $role)
                                    <option value="{{$role->name}}" @if($role->name === $user->getRoleNames()[0]) selected @endif>{{$role->name}}</option>
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
@endsection
