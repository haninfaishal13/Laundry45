<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    @include('_layout.style')
    <title> @yield('title') </title>
    @yield('after-style')
</head>
<body>
    @include('partials.navbar')
    @yield('content')
    @include('_layout.script')
    @yield('after-script')
</body>
</html>
