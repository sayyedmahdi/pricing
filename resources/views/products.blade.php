@extends('layouts.raw')

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
                        <img class="card-img-top w-100" data-image="{{asset("Image/$product->image")}}" src="{{asset("Image/$product->image")}}" style="max-height: 200px; cursor: pointer" alt="">
                        <div class="card-body bg-info">
                            <h5 class="card-title mb-3">نام محصول:{{$product->name}}</h5>
                            <p class="card-text">دسته بندی:{{$product->category->name}}</p>
                            @hasanyrole('User1|Admin|Super Admin')
                                <button class="btn btn-primary" type="button"> قیمت{{$product->price1}}</button>
                            @endhasanyrole
                            @hasanyrole('User2|Admin|Super Admin')
                                <button class="btn btn-primary" type="button">قیمت{{$product->price2}}</button>
                            @endhasanyrole
                            @hasanyrole('User3|Admin|Super Admin')
                                <button class="btn btn-primary" type="button">قیمت{{$product->price3}}</button>
                            @endhasanyrole
                        </div>
                    </div>
                </div>
        @endforeach
    </div>

    <div class="modal" id="modaldemo3">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">تصویر کامل محصول</h6><button aria-label="بستن" class="close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">بستن</button>
                        </div>
                    </div>
                </div>
            </div>
@endsection
@section('footer_tags')
<script>
    $('.card-img-top').on('click' , (e) => {
        let html = '';
        $('.modal-body').text(html)
        let url = e.target.dataset.image
        html = `<img src="${url}" style="width: 100%;">`;
        console.log(e.target.dataset.image)
        $('.modal-body').append(html)
        $('#modaldemo3').modal('show');
    })
</script>
@endsection
