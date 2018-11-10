<html lang="{{app()->getLocale()}}">
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
        @yield('content')
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>