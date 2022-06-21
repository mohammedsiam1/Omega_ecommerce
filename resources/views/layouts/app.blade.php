<!doctype html>
<html  class="no-js" lang="en-US" dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#9ed4d6">

    <title>{{ config('app.name', 'omega') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{asset('frontend/dist/css/font1.css')}}" rel="stylesheet">

    <!-- Styles -->
    <link  rel="stylesheet" href="{{asset('frontend/dist/css/app.css')}}">       
    <link  rel="stylesheet" href="{{asset('frontend/fontawesome/css/all.min.css')}}">       
	<!-- <link rel="apple-touch-icon" sizes="180x180" href="{{asset('frontend/dist/images/favicon/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('frontend/dist/images/favicon/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('frontend/dist/images/favicon/favicon-16x16.png')}}"> -->
	
  
	<!-- Load Fonts -->
    <link href="{{asset('frontend/dist/css/font2.css')}}" rel="stylesheet">
	<!-- All theme style -->
	<link rel="stylesheet" type="text/css" media="all" href="{{asset('frontend/dist/css/app.css')}}">

    <link rel="apple-touch-icon" sizes="180x180" href="/dist/images/favicon/apple-touch-icon.png">

<link rel="icon" type="image/png" sizes="32x32" href="/dist/images/favicon/favicon-32x32.png">

<link rel="icon" type="image/png" sizes="16x16" href="/dist/images/favicon/favicon-16x16.png">

<link rel="stylesheet" type="text/css" media="all"

      href="http://fonts.googleapis.com/css?family=Inconsolata:300,400,500,700|Unica+One:300,400,500,700">

<link rel="stylesheet" type="text/css" media="all" href="/dist/css/app.css">
<link rel="stylesheet" href="sweetalert2.min.css">

@livewireStyles
@yield('style')
</head>
<body>


@include('partial.Frontend.hedar')
    <div id="app">
        <div class="py-4">
            @yield('content')
        </div>

       
    </div>
    @include('partial.Frontend.footer')


    <a href="#" class="go-to-top">
	<i class="bx bx-chevrons-down"></i>
</a>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <script src="{{asset('frontend/dist/js/modernizr.js')}}"></script>
    <script src="{{asset('frontend/dist/js/app.js')}}"></script>
    <script src="{{asset('frontend/dist/js/iconify.js')}}"></script>
    <script src="{{asset('frontend/fontawesome/js/all.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script> 
    <x-livewire-alert::flash />
    @livewireScripts
    
    @yield('script')
</body>
</html>
