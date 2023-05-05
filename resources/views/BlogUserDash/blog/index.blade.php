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
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="section">
                @foreach ($listBlog as $myblog)
    <div class="col-lg-4">
        <div class="card">
            <img src="{{ asset('uploads/postimage/') }}/{{ $myblog->blog_image }}" class="card-img-top" alt="{{ $myblog->blog_meta }}">
            <div class="card-img-overlay">
                <a href="{{ route('blog.details', ['post_name' => $myblog->slug]) }}" class="card-title">{{ $myblog->blog_name }}</a>
                <p class="card-text">{{ $myblog->blog_short_desc }}.</p>
                <a href="" class="card-link btn btn-outline-success">Update</a>
                <a href="" class="card-link btn btn-outline-warning">Archive</a>
            </div>
            
        </div>
    </div>
    @endforeach
            </div>
        </div>
    </div>
</div>



@endsection