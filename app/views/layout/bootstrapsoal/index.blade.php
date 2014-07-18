<html>
    <head>
        @include('layout.bootstrapsoal.head')
    </head>
    <body>
        @include('layout.bootstrapsoal.header')
        @include('layout.bootstrapsoal.nav')
        <div class="container">
            @yield('content')
        </div>
        @include('layout.bootstrapsoal.footer')
    </body>
</html>

