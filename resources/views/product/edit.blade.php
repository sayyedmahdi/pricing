@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="main-content-label mg-b-5">
                ویرایش محصول
            </div>
            <p class="mg-b-20">سفارشی سازی آن بسیار آسان است و از آن در پیاده سازی وب سایت شما استفاده می شود.</p>
            <form method="post" action="{{route('edit_product')}}" enctype="multipart/form-data">
                @csrf
                <div class="row row-sm">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>نام محصول</label>
                            <input class="form-control" name="name" value="{{$product->name}}" placeholder="نام محصول">
                            @error('name')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row row-sm">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>قیمت سطح1</label>
                            <input class="form-control" value="{{$product->price1}}" name="price1" placeholder="قیمت سطح1">
                            @error('price1')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>قیمت سطح2</label>
                            <input class="form-control" name="price2" value="{{$product->price2}}" placeholder="قیمت سطح2">
                            @error('price2')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>قیمت سطح3</label>
                            <input class="form-control" value="{{$product->price3}}" name="price3" placeholder="قیمت سطح3">
                            @error('price3')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row row-sm">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="custom-file">
                            <input class="custom-file-input" id="customFile" type="file" name="image">
                            <label class="custom-file-label" for="customFile">انتخاب فایل</label>
                            @error('image')
                            <div class="error">{{ $message }}</div>
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
