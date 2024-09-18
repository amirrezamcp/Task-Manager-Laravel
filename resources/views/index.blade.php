<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ setting('site.title') }} </title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
    
    <!-- Header START -->
    @include('header')
    <!-- Header END -->
    
    <!-- Menu START -->
    @include('menu')
    <!-- Menu END -->
    
    <!-- **************** MAIN CONTENT START **************** -->
    @yield('content')
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- =======================
    Footer START -->
    @include('footer')
    <!-- =======================
    Footer END -->

    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
