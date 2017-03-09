<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eShop</title>
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('plugins/magnific/magnific-popup.css') }}" rel="stylesheet">
    @yield('stylesheet')
    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="{{ URL::asset('js/pace.min.js') }}"></script>
</head>
<body>
    @include('partials.top')
    @yield('content')
    @include('partials.footer')
    @yield('scripts')
    <script src="{{ URL::asset('js/registration.js') }}"></script>
    <script src="{{ URL::asset('js/login.js') }}"></script>
</body>
</html>