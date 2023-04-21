@extends('layouts.BlogUserMaster')
@section('title', 'Category Index - Healthy Botic')
@section('BlogUserContent')

<div class="pagetitle">
    <h1>Catagory</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('blogusr.dashboard') }}">Home</a></li>
            {{-- <li class="breadcrumb-item"><a href="{{ route('supuser.cata.super') }}">Super Category</a></li>
            <li class="breadcrumb-item"><a href="{{ route('subcatagory.index') }}">Sub Category</a></li> --}}
            <li class="breadcrumb-item active">Category Index</li>
        </ol>
    </nav>
</div>


@endsection