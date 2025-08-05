<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - @yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/logocrb.png') }}" />

    <!-- CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <x-navbar.public :app-name="config('app.name')" :links="[]" />
    @yield('content')
    <x-script.toast />
</body>

</html>
