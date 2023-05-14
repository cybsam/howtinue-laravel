@extends('layouts.BlogUserMaster')
@extends('summernote.summernote')
@section('title', 'Archive Article - Healthy Botic')
@section('BlogUserContent')

    <div class="pagetitle">
        <h1>Archive Article</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('blogusr.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('BlogUser.Insert') }}">Article List</a></li>

                <li class="breadcrumb-item active">Archive Article</li>

            </ol>
        </nav>
    </div>
    @if (Session::get('Succ'))
        <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
            {{ Session::get('Succ') }}
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <table class="table table-hover datatable table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Article Slug</th>
                <th scope="col">Category</th>

                <th scope="col">Status</th>
                <th scope="col">Added By</th>
                <th scope="col">Create-At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($archiveBlog as $myarticle)
                <th scope="row"><a href="#">#{{ $myarticle->id }}</a></td>
                <td>{{ $myarticle->slug }}</td>
                <td>{{ $myarticle->sub_category_name }}</td>

                <td><a href=""
                        class="badge rounded-pill bg-{{ $myarticle->post_status == 0 ? 'success' : 'danger' }}">
                        @if ($myarticle->post_status == 0)
                            <span class="text-white"><i class="bi bi-check-circle"></i></span>
                        @else
                            <span class="text-white"><i class="bi bi-exclamation-triangle-fill"></i></span>
                        @endif
                    </a></td>
                <td>
                    {{ $myarticle->username }}
                </td>
                <td>
                    {{ $myarticle->created_at->diffForHumans() }}</td>
                <td>
                    <a href="{{ route('BlogUser.blogArchiveRestore', ['blog_id' => $myarticle->id]) }}"
                        class="btn btn-success btn-sm">Restore</a>
                    {{-- <a href="{{ route('BlogUser.blogArchiveHardDelete',['blog_id'=>$myarticle->id]) }}" class="btn btn-danger btn-sm">Delete</a> --}}

                </td>
                </tr>
            @endforeach

        </tbody>
    </table>




@endsection
