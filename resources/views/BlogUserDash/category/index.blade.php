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

@if (Session::get('success'))
    <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
        {{ Session::get('success') }}
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    @if (Session::get('fail'))
    <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
        {{ Session::get('fail') }}
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    
    <table class="table table-hover datatable table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Meta Tag</th>
                <th scope="col">Main Catagory</th>
                <th scope="col">Status</th>
                <th scope="col">Added By</th>
                <th scope="col">Create-At</th>
                
            </tr>
        </thead>
        <tbody>
            

            @foreach ($cateGory as $listCat)
                <th scope="row"><a href="#">#{{ $listCat->id }}</a></td>
                <td>{{ $listCat->subcatagoryname }}</td>
                <td>{{ $listCat->subcatagorymetatag }}</td>
                <td>{{ $listCat->supcataname }}</td>
                <td><a href="" class="badge rounded-pill bg-{{ $listCat->catagory_status == 0 ? 'success' : 'danger' }}">
                        @if ($listCat->supcatagory_status == 0)
                            <span class="text-white"><i class="bi bi-person-check-fill"></i></span>
                        @else
                            <span class="text-white"><i class="bi bi-person-x-fill"></i></span>
                        @endif
                    </a></td>
                <td>
                   {{ $listCat->username }}
                </td>
                <td>
                  {{ $listCat->created_at->diffForHumans() }}</td>
                {{-- <td>
                    <a class="text-success" href=""><i class="bi bi-pencil-square"></i></a><span>&nbsp;&nbsp;</span><a class="text-danger" href="{{ route('subcatagoryIndex.archivedSoft',['cate_id'=>$listCat->id]) }}"><i class="bi bi-trash"></i></a>
                </td> --}}
                </tr>
            @endforeach

        </tbody>
    </table>



@endsection