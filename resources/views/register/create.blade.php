@extends('layouts.master');
@section('content')
<main class="px-2 mx-auto mt-5">
    <h1>Register</h1>
    <form method="POST" action="/register" class="mt-5">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Name</span>
            </div>
            <input type="text" value="{{ old('name') }}" name="name" id="name" class="form-control" aria-label="Name" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Username</span>
            </div>
            <input type="text" value="{{ old('username') }}" name="username" id="username" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        @error('username')
        <p style="color: red; font-size: 0.8rem; line-height: 0.5; text-align: left;">{{ $message }}</p>
        @enderror
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Email</span>
            </div>
            <input type="email" value="{{ old('email') }}" name="email" id="email" class="form-control" aria-label="Email" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Password</span>
            </div>
            <input type="password" name="password" id="password" class="form-control" aria-label="Password" aria-describedby="basic-addon1">
        </div>
        @error('password')
        <p style="color: red; font-size: 0.8rem; line-height: 0.5; text-align: left;">{{ $message }}</p>
        @enderror
        <button type="submit" class="btn btn-outline-primary">Submit</button>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <p class="lead">I already have an account-></p>
            </div>
            <p class="lead"><a href="/login">Login</a></p>
        </div>
    </form>
</main>
@endsection