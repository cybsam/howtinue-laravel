@extends('layouts.FrontEndMaster')
@section('FrontTitle', 'Howtinue')
@section('FrontEnd')
<main>
  <div class="container">

    <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
      <h1>404</h1>
      <h2>The page you are looking for doesn't exist.</h2>
      <a class="btn" href="{{ URL::previous() }}">Return Back</a>
      <img src="{{ asset('SupUser/assets/img/not-found.svg') }}" class="img-fluid py-5" alt="Page Not Found">

    </section>

  </div>
</main>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@endsection


