<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="generator" content="Hugo 0.84.0">
  <title>@yield('title')</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">
  <link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="/css/style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body>

  <body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100  mx-auto flex-column">
      <header class="mb-auto fixed-top bg-dark mt-0 px-1 m-0">
        <div>
          <a style="color:white;" href="/">
            <h3 class="float-md-start mb-0">Toiletpapers</h3>
          </a>
          <nav class="nav fixed-top nav-masthead justify-content-center float-md-end mb-auto-1">
            <a class="nav-link" href="/products">Products</a>
            <a class="nav-link" href="/about">About</a>
            <a class="nav-link" href="/contact">Contacts</a>
            @auth
            @yield('menu')
            @else
            <a class="nav-link" id="login-button" href="/login" style="color: green;">Login</a>
            <a class="nav-link" href="/register" style="color: blue;">Register</a>
            @endauth
          </nav>
        </div>
      </header>
      @yield('content')
      <footer class="mt-auto text-white-50 container py-5">
        <p class="b-0">Made by <a href="https://github.com/di3po" class="text-white">@di3po</a>.</p>
      </footer>
      @if(session()->has('success'))
      <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" style="background-color: #00FF7F; position:fixed; bottom:1.5rem; right:0; border-radius:1.8rem; padding: 0.1rem 0.6rem; font-size: 0.8rem; text-align: center;">
        <p>{{ session('success') }}</p>
      </div>
      @endif
  </body>
  <script src="bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>