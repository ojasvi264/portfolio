<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('frontend.scripts.css')
    @yield('styles')

    <title>{{$siteSetting->name}}</title>
</head>

<body>
@include('frontend.layouts.header')

@yield('content')

@include('frontend.layouts.footer')

@include('frontend.scripts.js')
@yield('js')

</body>

</html>
