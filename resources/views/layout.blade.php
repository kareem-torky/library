<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  @yield('styles')

</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Route library</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('books.index') }}">Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('auth.register') }}">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('auth.login') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('auth.logout') }}">Logout</a>
        </li>

      </ul>
    </div>
  </nav>
  
  <div class="container py-5">
    @yield('content')
  </div>

  <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>

  @yield('scripts')

</body>
</html>