@extends('layouts.master')
@section('content')
<div class="row mt-5 mb-auto mx-md-n5 bg-white" style="color: black;">
    <div class="col px-md-5">
        <div class="p-3">
            <img class="img-fluid" src="{{ asset('uploads/products_images/'.$products['image']) }}">
        </div>
    </div>
    <div class="col px-md-5" style="align-self:center;">
        <div class="p-3">
            <h3>{{$products['title']}}</h3>
            <br><br>
            <h5>{!!strip_tags($products['description'])!!}</h5>
            <h5>Amount: </h5>
            <h4>{{$products['price']}}</h4>
            <form action="add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$products['id']}}">
                <button class="btn btn-primary">ADD TO CART</button>
            </form>
            <button class="btn btn-success">BUY NOW</button>
        </div>
    </div>
</div>
@endsection