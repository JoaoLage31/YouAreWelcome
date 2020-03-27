<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Titulo</title>
    <link rel="stylesheet" href="{{ mix('/front/css/app.css') }}" media="screen" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- use the latest release -->
    <script src="https://unpkg.com/vuejs-paginate@latest"></script>
    <!-- or use the specify version -->
    <script src="https://unpkg.com/vuejs-paginate@0.9.0"></script>
</head>

<body>

    <!-- Begin: Header -->
    @include('front.layout.nav-bar2')
    <!-- End: Header -->
    
    <!-- Begin: Content -->
    @yield('content')
    <!-- End: Content -->

    <!-- Begin: Footer-->
    @include('front.layout.footer')
    <!-- End: Footer-->



    <script src="{{ mix('/front/js/app.js') }}"></script>
    @stack('scripts')
</body>

</html>
