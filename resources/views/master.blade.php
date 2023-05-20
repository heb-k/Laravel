<html>
    <head>
        <title>ExemploLaravel - @yield('title')</title>
        <link href="../css/receitinha.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body style=background-color:lightgray;text-align:center; >
        <div class="container" style=background-color:blanchedalmond;>
        @yield('content')
        @yield('content2')
        </div>
    </body>
</html>