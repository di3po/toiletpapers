@extends('layouts.master')
@section('content')
<div class="row mx-md-n5 mt-4 mb-auto bg-white" style="color: black; justify-content: space-between; align-items:baseline;">
  <div class="col px-md-5">
      <div class="p-3">
            <a href="/products" class="badge badge-dark">Go back</a><br>
            <img class="img-fluid" src="{{ asset('uploads/products_images/'.$products['image']) }}">
        </div>
    </div>
  <div class="col px-md-5">
      <div class="p-3">
            <h2>{{$products['title']}}</h2>
            <h3>{!!strip_tags($products['description'])!!}</h3>
            <!--h4>{{$products['price']}}</h4-->
            <button class="btn btn-primary">ADD TO CART</button>
            <br><br>
            <button class="btn btn-success">BUY NOW</button>
        </div>
    </div>
</div>
@endsection