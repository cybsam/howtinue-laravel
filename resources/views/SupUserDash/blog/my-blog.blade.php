@extends('layouts.SupUserMaster')
@section('title', 'List Blog - HowTinue')
@section('SupUserContent')

<div class="pagetitle">
    <h1>My Article</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('supuser.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('supuser.blog') }}">Articles</a></li>
        
        <li class="breadcrumb-item active">My Articles</li>
      </ol>
    </nav>
  </div>
  
  <div>
    @foreach ($myArticle as $myblog)
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