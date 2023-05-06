@extends('layouts.BlogUserMaster')
@extends('summernote.summernote')
@section('title', 'Insert Blog - Healthy Botic')
@section('BlogUserContent')

    <div class="pagetitle">
        <h1>My All Blog</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('blogusr.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('BlogUser.Insert') }}">Blog List</a></li>
                {{-- <li class="breadcrumb-item"><a href="{{ route('subcatagory.index') }}">Sub Category</a></li> --}}
                <li class="breadcrumb-item active">My Blog</li>

            </ol>
        </nav>
    </div>

<div>
    @foreach ($myBlog as $myblog)
    <div class="col-lg-3">
        <div class="card">
            <img src="{{ asset('uploads/postimage/') }}/{{ $myblog->blog_image }}" class="card-img-top" alt="{{ $myblog->blog_meta }}">
            <div class="card-img-overlay">
                <a href="{{ route('blog.details', ['post_name' => $myblog->slug]) }}" class="card-title">{{ $myblog->blog_name }}</a>
                <p class="card-text">{{ $myblog->blog_short_desc }}.</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection