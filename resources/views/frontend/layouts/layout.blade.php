<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="https://growdigitalcare.com/">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Dynamic Meta Tags -->
    @yield('meta-tags')
    @yield('title')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('frontend.credentials.header')
</head>

<body class="theme-creote">


    <div id="page" class="page_wapper hfeed site">

      <div id="wrapper_full" class="content_all_warpper">
            @include('frontend.credentials.navbar') <!-- Use either include or inline, not both -->
            @yield('content')
        </div>

        @include('frontend.credentials.footer') <!-- Use either include or inline, not both -->
    </div>

    @include('frontend.credentials.script')
</body>
</html>
