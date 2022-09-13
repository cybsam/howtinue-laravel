
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>404 - HowTiune</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


    <link href="{{ asset('SupUser/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('SupUser/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">


  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link href="{{ asset('SupUser/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('SupUser/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">


    <link href="{{ asset('SupUser/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <main>
    <div class="container">

      <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1>404</h1>
        <h2>The page you are looking for doesn't exist.</h2>
        <a class="btn" href="{{ URL::previous() }}">Return Back</a>
        <img src="{{ asset('SupUser/assets/img/not-found.svg') }}" class="img-fluid py-5" alt="Page Not Found">

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  <script src="{{ asset('SupUser/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('SupUser/assets/js/main.js') }}"></script>

</body>

</html>
