<meta charset="utf-8">
<meta name="description" content="Enjoy searching for your favorite GIF images">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="GIF image, Search GIF image, GIF Application">
<meta name="author" content="Marwan Fallaha">
<meta name="theme-color" content="#85f78b8a">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name') }}</title>
{{-- **************************************** --}}
<link href="{{ asset("lib/bootstrap/css/bootstrap.min.css") }}" type="text/css" rel="stylesheet">
<link href="{{ asset("css/app.css") }}" type="text/css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
@yield('links')
