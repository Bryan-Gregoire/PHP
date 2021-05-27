<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<header>
    <h1> @yield('header') </h1>
</header>

<body>
    @yield('content')
</body>

</html>