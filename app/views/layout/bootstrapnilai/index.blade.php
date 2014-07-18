<html>
    <head>
        @include('layout.bootstrapnilai.head')
    </head>
    <body>
      
        @include('layout.bootstrapnilai.header')
 
        @include('layout.bootstrapnilai.nav')
        <div class="container">
            @yield('content')
        </div>
        @include('layout.bootstrapnilai.footer')
    </body>
</html>

