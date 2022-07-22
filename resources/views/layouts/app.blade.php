<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @yield('css')
</head>

<body class="bg-light">
    @include('components.header')

    @yield('content')

    @include('components.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
