<!DOCTYPE>
<html lang="{{ app()->getLocale() }}">
<head>

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')" />
    <meta name="Keywords" content="@yield('keywords')" />
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    @yield('css')
</head>
<body>
    <div class="header mb-2">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a href="/">
                        <img src="{{asset('img/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="col-md-10">
                    <div class="btn-group  dropleft float-right mt-3 mr-5">
                        <a href="#" class="dropdown-toggle underline-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Sign in</a>
                            <a class="dropdown-item" href="#">Sign up</a>
                        </div>
                    </div>
                    <a href="/advert/save" class="btn mr-4 mt-3 btn-sm btn-outline-success float-right">
                        <i class="fa fa-plus"></i> Add advert
                    </a>

                </div>
            </div>
        </div>
    </div>
    @yield('content')

   <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
   <script src="{{asset('js/popper.min.js')}}"></script>
   <script src="{{asset('js/bootstrap.min.js')}}"></script>
   <script src="{{asset('js/angular.min.js')}}"></script>
   @yield('js')
</body>
</html>