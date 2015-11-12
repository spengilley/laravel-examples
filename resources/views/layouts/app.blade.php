<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Examples</title>

        <!-- CSS And JavaScript -->
        <link type="text/css" rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

        <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <ul class="nav navbar-nav">

                    <!-- Add new menu items here -->
                    <li><a href="/">Home</a>

                </ul>
            </nav>
        </div>

        @yield('content')
    </body>
</html>