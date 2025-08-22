<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('laravel-dashboard/css/laravel-dashboard.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @yield('dashboard_content')

    <script src="{{ asset('laravel-dashboard/js/laravel-dashboard.js') }}"></script>
</body>
</html>