<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <div class="container">
            
        </div>
        @section('navibar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>