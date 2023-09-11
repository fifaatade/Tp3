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
<body class=" ">
    <img src="{{asset('images/pexels-steve-johnson-1266808.jpg')}}" class="bg" alt="">
    <div class="container pt-5 ">
        <div style="width:500px" class=" d-flex justify-content-center card border-secondary">
            <h2 class="card-header bg-secondary pt-3 pb-3 text-white">
                @yield('title')
            </h2>
            <div class="card-body">
                @if (session('errors'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                                <li>{{session('errors')}}</li><br />
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                @endif
                    @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js
    ">
    </script>
</body>
</html>
