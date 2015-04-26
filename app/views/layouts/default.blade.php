<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zebra Cheese</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css'); }}">
        <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="{{ URL::asset('js/typeahead.js'); }}"></script>
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Zebra Cheese</a>
            </div>
          </div>
        </nav>

        <div class="container-fluid">
          <div class="row">
            @include('layouts.sidebar')
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                @yield('content')
            </div>
          </div>
        </div>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
        <script>@yield('javascript')</script>  
    </body>
</html>