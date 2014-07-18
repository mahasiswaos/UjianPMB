<html>
    <head>
        @include('layout.bootstrapmenu.head')
    </head>
    <body>
        @include('layout.bootstrapmenu.header')
        @include('layout.bootstrapmenu.nav')
        <div class="container">
            @yield('content')
        </div>
        @include('layout.bootstrapmenu.footer')
    </body>
</html>

