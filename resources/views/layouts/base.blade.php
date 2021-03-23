<html>

    <head>
        <title>@yield('pageTitle')</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" />
        <script src="{{asset('js/app.js')}}" defer></script>
    </head>

    <body>

        <div class="container">
    @yield('content')
        </div>
    </body>
</html>
