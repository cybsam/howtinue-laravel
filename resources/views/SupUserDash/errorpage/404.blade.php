@extends('layouts.SupUserMaster')
@section('title', '404 not found - HowTinue')
@section('SupUserContent')

<div class="pagetitle">
    <h1>Blank Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">404</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <main>
    <div class="container">

      <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1>404</h1>
        <h2>The page you are looking for doesn't exist.</h2>
        <a class="btn" href="{{ return back(); }}">Back to home</a>
        <img src="{{ asset('SupUser/assets/img/not-found.svg') }}" class="img-fluid py-5" alt="Page Not Found">

      </section>

    </div>
  </main>



@endsection
