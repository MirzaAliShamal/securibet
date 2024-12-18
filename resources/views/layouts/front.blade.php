<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Securibet</title>

    <link rel="shortcut icon" type="image/png" href="{{ asset('images/SB.png') }}">

    <link rel="stylesheet" href="{{ asset('font/stylesheet.css') }}">

    <link rel="stylesheet" href="{{ asset('vendors/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/slick/slick-theme.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css?v='.rand()) }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css?v='.rand()) }}">
</head>
<body>
    @include('front.components.header')

    @yield('content')

    @include('front.components.'.$footer)


    <form action="{{ route('logout') }}" method="POST" id="logout-form">@csrf</form>
    <form action="{{ route('admin.logout') }}" method="POST" id="admin-logout-form">@csrf</form>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/script.js?v='.rand()) }}"></script>

    @yield('js')
</body>
</html>
