@extends('layouts.master')
@section('menu')
<div class="dropdown">
	<button class="btn btn-secondary dropdown-toggle mb-auto mx-2 btn-outline-primary text-white btn-sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
	{{ auth()->user()->name }}
	</button>
	<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
	<li><a class="dropdown-item" href="#">Profile</a></li>
	<li><a class="dropdown-item" href="#">Orders</a></li>
	@if(isset($total))
		<li><a class="dropdown-item" href="#">Cart({{$total}})</a></li>
	@endif
	<hr>
	<form action="/logout" method="POST">
		@csrf
		<div class="d-grid gap-2">
		<button class="btn btn-primary btn-sm mx-auto" type="submit">Log out</button>
		</div>
	</form>
	</ul>
</div>
@endsection