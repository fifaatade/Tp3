<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css
    ">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="/">
            <img class="rounded-circle" src="{{asset('images/logo229.jpeg')}}" alt="" width="80" height="80">
            <b>Ecole 229 </b>
            </a>
            @if(Auth::check())
                <a href="{{route('logout')}}" class="btn btn-danger ms-3 float-end"> Se deconnecter</a>
            @endif
        </div>
        
    </nav>
    @if (session('errors'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                    <li>{{session('errors')}}</li><br />
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <ul>
                    <li>{{session('errors')}}</li><br />
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif
    @yield('content')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js
    ">
    </script>
</body>
</html>