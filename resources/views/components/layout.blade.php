<!DOCTYPE html>
<html class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name="description"
        content="FASTLEGAL.id adalah platform yang menyediakan layanan pengurusan legalitas perusahaan dan perorangan.">

    <link rel="shortcut icon" href="{{ asset('assets/img/FL.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('lib/owlcarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css" />

    {{-- <link rel="stylesheet" href="{{ asset('lib/owlcarousel/css/owl.theme.default.min.css') }}"> --}}
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-D1D9QzBY.css') }}">

</head>

<body>
    @include('components.navbar')

    @if ($success = Session::get('success'))
        @include('components.toast-success', ['success' => $success])
    @endif

    @if ($error = Session::get('error'))
        @include('components.toast-success', ['error' => $error])
    @endif

    @yield('content')

    @include('components.wa')
    @include('components.footer')

    <script src="{{ asset('lib/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js') }}"></script>
    <script src="{{ asset('build/assets/app-qZAqPJAz.js') }}"></script>

</body>

</html>
