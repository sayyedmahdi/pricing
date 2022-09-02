@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card text-center ">
                {{--            <img class="card-img-top w-100" data-image="{{asset("Image/$product->image")}}" src="{{asset("Image/$product->image")}}" style="max-height: 200px; cursor: pointer" alt="">--}}
                <div class="card-body bg-info">
                    <h5 class="card-title mb-3">تعداد کل محصولات:{{count($products)}}</h5>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card text-center ">
                {{--            <img class="card-img-top w-100" data-image="{{asset("Image/$product->image")}}" src="{{asset("Image/$product->image")}}" style="max-height: 200px; cursor: pointer" alt="">--}}
                <div class="card-body bg-info">
                    <h5 class="card-title mb-3">تعداد کل دسته بندی ها:{{count($categories)}}</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
