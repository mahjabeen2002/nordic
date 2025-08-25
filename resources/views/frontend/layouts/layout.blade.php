<!DOCTYPE html>
<!--<html lang="en">-->
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="x-ua-compatible" content="ie=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="canonical" href="https://growdigitalcare.com/">
     <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets') }}/img/favicon.png">
@yield('title')
    @include('frontend.credentials.header')
</head>

<body>
    @include('frontend.credentials.navbar')
    @yield('content')

    @include('frontend.credentials.footer')
    @include('frontend.credentials.script')
</body>
</html>
