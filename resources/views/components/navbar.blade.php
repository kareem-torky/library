<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Route library</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('books.index') }}">
            @lang('site.books')
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @lang('site.cats')
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @foreach ($cats as $cat)  
              <a class="dropdown-item" href="#">{{$cat->name}}</a>
            @endforeach
          </div>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('auth.register') }}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('auth.login') }}">Login</a>
          </li>
        @endguest

        @auth
          <li class="nav-item">
            <a class="nav-link disabled" href="#">{{ Auth::user()->name }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('auth.logout') }}">@lang('site.logout')</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Change
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                
                <a class="dropdown-item" href="{{ route('lang.ar') }}">AR</a>
                <a class="dropdown-item" href="{{ route('lang.en') }}">EN</a>

            </div>
          </li>
        @endauth
      </ul>
    </div>
  </nav>