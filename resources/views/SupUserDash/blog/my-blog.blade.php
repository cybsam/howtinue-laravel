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
    <div class="container">
        <div class="row">
            @foreach ($myArticle as $myblog)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">

                            <img src="{{ asset('uploads/postimage/') }}/{{ $myblog->blog_image }}" class="card-img-top"
                                alt="{{ $myblog->blog_meta }}">
                            <div class="card-img-overlay">
                                <span>{{ views($myblog)->count() }} views</span>
                                <br>
                                <a href="{{ route('blog.details', ['post_name' => $myblog->slug]) }}"
                                    class="card-title">{{ Str::limit($myblog->blog_name, 18) }}</a>
                                <p class="card-text">{{ Str::limit($myblog->blog_short_desc, 30, '...') }}.</p>
                                <a href="" class="card-link btn btn-success">Update</a>
                                <a href="" class="card-link btn btn-warning">Archive</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>






@endsection
