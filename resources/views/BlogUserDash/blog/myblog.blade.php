@extends('layouts.BlogUserMaster')
@extends('summernote.summernote')
@section('title', 'Insert Blog - Healthy Botic')
@section('BlogUserContent')

    <div class="pagetitle">
        <h1>My All Article</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('blogusr.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('BlogUser.Insert') }}">Article List</a></li>
                {{-- <li class="breadcrumb-item"><a href="{{ route('subcatagory.index') }}">Sub Category</a></li> --}}
                <li class="breadcrumb-item active">My Article</li>

            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($myBlog as $myblog)
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
                                <p class="card-text">{{ Str::limit($myblog->blog_short_desc, 20) }}.</p>
                                <a href="" class="card-link btn btn-success">Update</a>
                                <a href="{{ route('BlogUser.blogArchiveSoft',['blog_id'=>$myblog->id]) }}" class="card-link btn btn-warning">Archive</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>


@endsection
