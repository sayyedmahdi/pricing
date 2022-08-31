@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="main-content-label mg-b-5">
                ویرایش دسته بندی
            </div>
            <p class="mg-b-20">سفارشی سازی آن بسیار آسان است و از آن در پیاده سازی وب سایت شما استفاده می شود.</p>
            <form method="post" action="{{route('edit_category')}}" >
                <input type="hidden" value="{{$category->id}}" name="id">
                @csrf
                <div class="row row-sm">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>نام دسته بندی</label>
                            <input class="form-control" name="name" value="{{$category->name}}" placeholder="نام دسته بندی">
                            @error('name')
                                <div class="alert alert-danger error">{{ $message }}</div>
                            @enderror
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
