<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shortlist CV - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"></head>
    <link rel="stylesheet" href="{{asset('assets/font/css/open-iconic-bootstrap.css')}}"></head>
<body class="bg-white">
<div class="container bg-white">
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-white">
        <a class="navbar-brand font-weight-bold" href="#">
            CV ShortListing
        </a>
    </nav>
    @yield('content')
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
