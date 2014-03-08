<!doctype html>
<html ng-app="myApp">
    <head>
        @include('includes.head')
    </head>
    <body ng-controller="MainController">
        <div class="container">
            @include('menus.navbar')

            @yield('content')

            @include('includes.footer')
        </div>
    </body>
</html>
