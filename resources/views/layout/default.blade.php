<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link href="/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="/vendor/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row-fluid">
                @yield('content')
            </div>
        </div>
    </body>
</html>