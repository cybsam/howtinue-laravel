<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Super-User dash --}}
    <!-- Favicons -->
    <link href="{{ asset('SupUser/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('SupUser/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('SupUser/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('SupUser/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('SupUser/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('SupUser/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('SupUser/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('SupUser/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('SupUser/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('datatables/jquery.dataTables.min.css') }}"> --}}
    <link href="{{ asset('SupUser/assets/css/style.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}
    {{-- end super-user --}}
</head>
<body>
    @include('layouts.SupUserInc.SupUserNav')
    @include('layouts.SupUserInc.SupUserSide')
    <main id="main" class="main">

        @yield('SupUserContent')

    </main>
    @include('layouts.SupUserInc.SupUserFooter')



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="{{ asset('SupUser/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('SupUser/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('SupUser/assets/vendor/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('SupUser/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('SupUser/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('SupUser/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('SupUser/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('SupUser/assets/vendor/php-email-form/validate.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('SupUser/assets/js/main.js') }}"></script>
    {{-- data tables --}}
    {{-- <script src="{{ asset('datatables/jquery.dataTables.min.js') }}"></script> --}}
    {{-- <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    {{-- <script>
        $(document).ready( function () {
            $('#myDataTable').DataTable();
        } );
    </script> --}}

</body>

</html>
