<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LiveCoach.io</title>
    
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/own.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
   
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    
</head>
<body>
    @include('layouts.partials.header')
    <div id="app">
        @yield('content')
        @include('layouts.partials.modal')
    </div>
    @include('layouts.partials.footer')
    <script type="text/javascript" src="/js/app.js"></script>
    <script type="text/javascript" src="/js/own.js"></script>
    @include('sweet::alert')
</body>
</html>
