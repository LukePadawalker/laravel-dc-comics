<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>


    @vite('resources/js/app.js')
</head>
<body>
    @include('header')

    @include('main_content')

    @include('footer')


@yield('scripts')
</body>
</html>
