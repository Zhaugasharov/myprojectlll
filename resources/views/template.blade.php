<!DOCTYPE>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')" />
    <meta name="Keywords" content="@yield('keywords')" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="row first-menu">
            <div class="col-md-10 offset-md-1">
                <a class="float-right" href="">Login</a>
            </div>
        </div>
        <div class="row second-menu">
            <div class="col-md-1 offset-md-1">
                LOGO
            </div>
            <div class="col-md-2">
                <select name="" id="" class="form-control">

                </select>
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control">
            </div>
            <div class="col-md-2">
                <select name="" id="" class="form-control">

                </select>
            </div>
        </div>
    </header>
    @yield('content')

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    @yield('js')
</body>
</html>