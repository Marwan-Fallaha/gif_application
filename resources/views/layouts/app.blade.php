<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('style.link')
    </head>
    <body class="font-sans antialiased {{ $modeType ?? 'dark-mode'}}">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </body>
</html>
