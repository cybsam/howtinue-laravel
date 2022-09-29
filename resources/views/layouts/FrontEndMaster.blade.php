{{-- @include('layouts.FrontEndInc.header') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('FrontTitle')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('FrontEnd/img/core-img/favicon.ico') }}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('FrontEnd/style.css') }}">
    <link rel="stylesheet" href="{{ asset('FrontEnd/css/cus.css') }}">

</head>

@include('layouts.FrontEndInc.nav')
{{-- @include('layouts.FrontEndInc.preload') --}}




       @yield('FrontEnd')

</section>
    @include('layouts.FrontEndInc.footer')
    @include('layouts.FrontEndInc.copywrite')
    <script src="{{ asset('FrontEnd/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('FrontEnd/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('FrontEnd/js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('FrontEnd/js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('FrontEnd/js/active.js') }}"></script>
</body>
</html>



