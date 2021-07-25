@extends('layouts.master')
@section('content')
<main class="products-blade" id="products">
  <h1 class="mt-4 py-3" style="font-size: 4rem; text-shadow: 2px 2px 4px #000000; background: khaki;">Choose your toiletpaper</h1>
  <p class="lead mb-auto py-3">We have various types of toiletpaper.</p>
  <div class="py-1 mb-auto">
    <div class="container">
      <div class="row mb-5">
        @foreach($data as $d)
        <div class="col-md-3">
          <div class="card mt-4">
            <img class="img-fluid" src="{{ asset('uploads/products_images/'.$d->image) }}" alt="Product image">
            <div class="card-body">
              <a href="{{ route('single-product', ['id'=>$d->id]) }}"><h5>{{ $d->title }}</h5></a>
              <small class="" style="color: grey;">{{ $d->status }}</small>
              <hr>
              <small class="mt-0">{!! strip_tags($d->description) !!}</small>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

</main>
@endsection