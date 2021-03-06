<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no"/>

        <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
        <link href="/css/uikit-flat.css" rel="stylesheet" type="text/css">
        @yield('head')

    </head>
    <body>
        <div id="app">
            <example></example>
        </div>
        @yield('content')
    </body>
    <script src="js/app.js"></script>
    <script>
        window.Laravel = { csrfToken: '{{ csrf_token() }}' };
    </script>
</html>
