<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('user/img/favicon.ico')}}" />
    <!-- Bootstrap icons-->
    <link rel="stylesheet" href="{{asset('user/css/bootstrap-grid.rtl.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('user/css/font-awesome.min.css')}}" type="text/css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('user/css/styles.css')}}" rel="stylesheet" />
</head>
<body>
@include('site/includes/sidebar')
@yield('content')
@include('site/includes/footer')
<!-- Bootstrap core JS-->
<script src="{{asset('user/js/bootstrap.bundle.min.js')}}"></script>
<!-- Core theme JS-->
<script src="{{asset('user/js/scripts.js')}}"></script>
</body>
</html>
