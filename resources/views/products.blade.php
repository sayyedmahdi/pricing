@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        @foreach($products as $key => $product)
            @if( $key % 3 === 0)
            </div>
            @endif
            @if($key % 3 === 0)
            <div class="row">
            @endif
                <div class="col-4">
                    <div class="card text-center ">
                        <img class="card-img-top w-100" src="{{asset("Image/$product->image")}}" style="max-height: 200px; cursor: pointer" alt="">
                        <div class="card-body bg-info">
                            <h5 class="card-title mb-3">نام محصول:{{$product->name}}</h5>
                            <p class="card-text">دسته بندی:{{$product->category->name}}</p>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
@endsection

