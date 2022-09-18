@extends('layouts.BlogUserMaster')
@section('title', 'Team: Modarator - HowTinue')
@section('BlogUserContent')

<div class="pagetitle">
    <h1>Team Management</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('blogusr.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('blogusr.users') }}">Users</a></li>
        <li class="breadcrumb-item active">Users Team</li>
    </ol>
    </nav>
</div><!-- End Page Title -->


      <a class=" btn btn-outline-info" href="{{ route('blogusr.users.allteam.newteam') }}">New Team</a>

      <a class=" btn btn-outline-warning" href="#">Modified team</a>

        <a class="btn btn-outline-danger" href="#">Delete team</a>








@endsection
