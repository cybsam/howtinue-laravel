@extends('layouts.SupUserMaster')
@section('title', 'My category - HealthyBotic')
@section('SupUserContent')


    <div class="pagetitle">
        <h1>Sub Catagory</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('supuser.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('supuser.cata.super') }}">Super Catagory</a></li>
                <li class="breadcrumb-item"><a href="{{ route('subcatagory.index') }}">Sub Catagory</a></li>
                <li class="breadcrumb-item active">My Catagory</li>
            </ol>
        </nav>
    </div>

    
    <table class="table table-hover datatable table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Meta tag</th>
                <th scope="col">Main Catagory</th>
                <th scope="col">Status</th>
                <th scope="col">Added By</th>
                <th scope="col">Create-At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($myCategory as $listCat)
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
                <td>
                    <a class="text-success" href=""><i class="bi bi-pencil-square"></i></a><span>&nbsp;&nbsp;</span><a class="text-danger" href="{{ route('subcatagoryIndex.archivedSoft',['cate_id'=>$listCat->id]) }}"><i class="bi bi-trash"></i></a>
                </td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection
