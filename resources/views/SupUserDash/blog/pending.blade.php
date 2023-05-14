@extends('layouts.SupUserMaster')
@section('title', 'pending Article - Healthybotic')
@section('SupUserContent')

<div class="pagetitle">
    <h1>Pending Articles</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('supuser.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('supuser.blog') }}">Articles</a></li>
        <li class="breadcrumb-item"><a href="{{ route('supuserBlog.myBlog') }}">My Articles</a></li>
        <li class="breadcrumb-item active">Pending Articles</li>
      </ol>
    </nav>
  </div>


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

        @foreach ($penArticle as $myarticle)
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
              <a href="{{ route('supuserBlog.pendingBlogShow',['blog_id'=>$myarticle->id]) }}" class="btn btn-success btn-sm">View</a>

            </td>
            </tr>
        @endforeach

    </tbody>
</table>




@endsection
