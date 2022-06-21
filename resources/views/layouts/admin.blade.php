<!doctype html>
<html  class="no-js" lang="en-US" dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Eecommerce App">
    <meta name="author" content="Mohammedsiam">
    <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('backend/vendor/bootstrap-fileinput/css/fileinput.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendor/summernote/summernote-bs4.min.css') }}">
    <title>{{ config('app.name', 'omega') }} Dashboard</title>

    @yield('style')
</head>
<body id="page-top">
<div id="app">
    <div id="wrapper">
    @include('partial.Backend.sidebar')
    <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @include('partial.backend.nav')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                @include('partial.backend.flash')
                    
                    @yield('content')
                </div>
            </div>

            @include('partial.Backend.footer')

        </div>
    </div>
   
    @include('partial.Backend.model')
</div>
   
    <script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('backend/js/sb-admin-2.min.js')}}"></script>
    <script src="{{ asset('backend/js/custom.js') }}"></script>
<script src="{{ asset('backend/vendor/bootstrap-fileinput/js/plugins/piexif.min.js') }}"></script>
<script src="{{ asset('backend/vendor/bootstrap-fileinput/js/plugins/sortable.min.js') }}"></script>
<script src="{{ asset('backend/vendor/bootstrap-fileinput/js/fileinput.min.js') }}"></script>
<script src="{{ asset('backend/vendor/bootstrap-fileinput/themes/fas/theme.min.js') }}"></script>
<script src="{{ asset('backend/vendor/summernote/summernote-bs4.min.js') }}"></script>

    @yield('script')
</body>
</html>
