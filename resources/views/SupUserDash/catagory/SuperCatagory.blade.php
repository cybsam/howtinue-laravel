@extends('layouts.SupUserMaster')
@section('title', 'Super Catagory - HowTinue')
@section('SupUserContent')


    <div class="pagetitle">
        <h1>Super Catagory</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('supuser.dashboard') }}">Home</a></li>

                <li class="breadcrumb-item active">Super Catagory</li>
            </ol>
        </nav>
    </div>

    <table class="table table-hover datatable table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Catagory Name</th>
                <th scope="col">Catagory Mega</th>

                <th scope="col">Status</th>
                <th scope="col">Added By</th>
                <th scope="col">Create-At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($listCatagory as $listCat)
                <th scope="row"><a href="#">#{{ $listCat->id }}</a></td>
                <td>{{ $listCat->supcatagoryname }}</td>
                <td>{{ $listCat->supcatagory_meta_tag }}</td>

                <td><a href="" class="badge rounded-pill bg-{{ $listCat->supcatagory_status == 1 ? 'success' : 'danger' }}">
                        @if ($listCat->supcatagory_status == 1)
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
                  {{-- <a href="{{ route('supuser.cata.super.update') }}/{{ $listCat->id }}">Update</a>
                  <a href="{{ route('supuser.cata.super.archive') }}/{{ $listCat->id }}">Archive</a> --}}
                </td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection
