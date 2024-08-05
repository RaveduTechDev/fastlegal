<!DOCTYPE html>
<html class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name="description"
        content="FASTLEGAL.id adalah platform yang menyediakan layanan pengurusan legalitas perusahaan dan perorangan.">

    <link rel="stylesheet" href="{{ asset('lib/owlcarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/owlcarousel/css/owl.theme.default.min.css') }}">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-DPvBhz__.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css" />


</head>

<body>
    @include('components.navbar')

    @yield('content')

    @include('components.wa')
    @include('components.footer')

    <script src="{{ asset('lib/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js') }}"></script>
    <script src="{{ asset('build/assets/app-Mt8Je599.js') }}"></script>

</body>

</html>
