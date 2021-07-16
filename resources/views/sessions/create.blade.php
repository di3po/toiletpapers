@extends('layouts.master');

@section('content')
<main class="px-2 mx-auto mt-5">
    <h1>Login</h1>
    <form method="POST" action="/sessions" class="mt-5">
    @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Email</span>
            </div>
            <input type="email" value="{{ old('email') }}" name="email" id="email" class="form-control" aria-label="Email" aria-describedby="basic-addon1">
        </div>
        @error('email')
            <p style="color: red; font-size: 0.8rem; line-height: 0.5; text-align: left;">{{ $message }}</p>
        @enderror
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Password</span>
            </div>
            <input type="password" name="password" id="password" class="form-control" aria-label="Password" aria-describedby="basic-addon1">
        </div>
        <button type="submit" class="btn btn-outline-primary">Login</button>
    </form>
</main>
@endsection