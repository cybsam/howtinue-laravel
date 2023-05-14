@extends('layouts.SupUserMaster')
@section('title', 'Archive Article - HealthyBotic')
@section('SupUserContent')

<div class="pagetitle">
    <h1>Archive Articles</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('supuser.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('supuser.blog') }}">Articles</a></li>
        <li class="breadcrumb-item"><a href="{{ route('supuserBlog.myBlog') }}">My Articles</a></li>
        <li class="breadcrumb-item active">Archive Articles</li>
      </ol>
    </nav>
  </div>


  @if (Session::get('restore'))
                            <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show"
                                role="alert">
                                {{ Session::get('restore') }}
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if (Session::get('delete'))
                            <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show"
                                role="alert">
                                {{ Session::get('delete') }}
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
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

            @foreach ($archiveArticle as $myarticle)
                <th scope="row"><a href="#">#{{ $myarticle->id }}</a></td>
                <td>{{ $myarticle->slug }}</td>
                <td>{{ $myarticle->sub_category_name }}</td>

                <td><a href="" class="badge rounded-pill bg-{{ $myarticle->post_status == 0 ? 'success' : 'danger' }}">
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
                  <a href="{{ route('supuser.blogArchiveRestore',['blog_id'=>$myarticle->id]) }}" class="btn btn-success btn-sm">Restore</a>
                  <a href="{{ route('supuser.blogArchiveDelete',['blog_id'=>$myarticle->id]) }}" class="btn btn-danger btn-sm">Delete</a>

                </td>
                </tr>
            @endforeach

        </tbody>
    </table>



@endsection
