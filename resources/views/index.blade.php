@extends('layouts.master')
@section('title', 'Home')

@section('content')

<!--body class="d-flex h-100 text-center text-white bg-dark">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Cover</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Contact</a>
      </nav>
    </div>
  </header-->

  <main class="px-3">
    <h1 style="font-size: 10rem;">Toiletpapers</h1>
    <p class="lead">Get your toiletpapers here.</p>
    <p class="lead">
      <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Buy now</a>
    </p>
  </main>
  <main class="px-4" id="products">
    <h1>Choose your toiletpaper</h1>
    <p class="lead">We have various types of toiletpapers.</p>
  </main>
  <main class="px-5" id="aboutUs">
    <h1>Who we are?</h1>
    <p class="lead">We are heaven of toiletpapers you may like.</p>
  </main>
  <main class="px-6" id="contact">
    <h1>Contact us</h1>
    <p class="lead">Address: Toiletpapers</p>
    <p class="lead">E-mail: toiletpapers.@mail.com</p>
    <p class="lead">Telephone: +1 (234) 5678</p>
  </main>

  <!--footer class="mt-auto text-white-50">
    <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
  </footer>
</div>
</body-->

@endsection