@extends('layouts.BlogUserMaster')
@section('title', 'Blog List - Healthy Botic')
@section('BlogUserContent')

<div class="pagetitle">
    <h1>Catagory</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('blogusr.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Blog List</li>
        </ol>
    </nav>
</div>



@endsection