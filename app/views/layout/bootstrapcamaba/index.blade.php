<html>
    <head>
        @include('layout.bootstrapcamaba.head')
    </head>
    <body>
      
        @include('layout.bootstrapcamaba.header')
     
        @include('layout.bootstrapcamaba.nav')
        <div class="container">
            @yield('content')
        </div>
        @include('layout.bootstrapcamaba.footer')
    </body>
</html>

