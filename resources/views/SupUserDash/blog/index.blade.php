@extends('layouts.SupUserMaster')
@section('title', 'List Article - HealthyBotic')
@section('SupUserContent')

    <div class="pagetitle">
        <h1>List Articles</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('supuser.dashboard') }}">Dashboard</a></li>

                <li class="breadcrumb-item active">Article</li>
            </ol>
        </nav>
    </div>
    @if (Session::get('succ'))
        <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
            {{ Session::get('succ') }}
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container">
        <div class="row">
            @foreach ($articleShow as $myblog)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">

                            <img src="{{ asset('uploads/postimage/') }}/{{ $myblog->blog_image }}" class="card-img-top"
                                alt="{{ $myblog->blog_meta }}">
                            <div class="card-img-overlay">
                                <span>{{ views($myblog)->count() }} views</span>
                                <br>
                                <a href="{{ route('blog.details', ['post_name' => $myblog->slug]) }}" target="__blank"
                                    class="card-title">{{ Str::limit($myblog->blog_name, 18) }}</a>
                                <p class="card-text">{{ Str::limit($myblog->blog_short_desc, 20) }}.</p>

                                <a href="{{ route('supuser.blogArchiveSoft',['blog_id'=>$myblog->id]) }}" class="card-link btn btn-danger">Archive</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>



@endsection
