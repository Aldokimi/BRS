<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href='{{ route('home') }}'>DOKIBRS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">List Pages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">My Rentals</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Add New Book</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">List Genres</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-sm-2" type="text" placeholder="Search for a book ...">
              
                      <div class="d-grid gap-2">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                      
                  @if (Route::has('login'))
                  @auth
                  <div class="col">
                    <button class="btn btn-secondary my-2 my-sm-0">
                      <a href="{{ url('/home') }}" class="list-group-item list-group-item-action active">Home</a></button>
                  </div>
                  @else
                      <button type="button"  class="btn btn-primary my-2 my-sm-0" onclick="window.location='{{ route('login') }}'">login</button>
                    @if (Route::has('register'))
                          <button type="button"  class="btn btn-primary my-2 my-sm-0" onclick="window.location='{{ route('register') }}'">register</button>
                    @endif
                  @endauth
                @endif
              
              
            </form>
          </div>
        </div>
      </nav>
      <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
      <main>
          @yield('content')
      </main>
      <div class="m-4 p-3" style="width: 20px; height: 20px"></div>
      <div class="footer fixed-bottom">
        <div class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="container text-center">
                    <p class="text-light">Copyright &copy; DOKIBRS</p> 
                  </div>
            </div>
        </div>
      </div>
      
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
  </body>

</html>
