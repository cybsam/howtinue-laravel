@extends('layouts.BlogUserMaster')
@section('title', 'Blogger - HowTinue')
@section('BlogUserContent')

<div class="pagetitle">
    <h1>Blogger Dashboard</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('blogusr.dashboard') }}">Home</a></li>
    </ol>
    </nav>
</div><!-- End Page Title -->




@endsection
