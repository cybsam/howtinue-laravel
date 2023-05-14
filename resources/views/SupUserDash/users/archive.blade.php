@extends('layouts.SupUserMaster')
@section('title', 'Archive Users - HealthyBotic')
@section('SupUserContent')
<link rel="stylesheet" href="{{ asset('datatables/dataTables.min.css') }}">

<div class="pagetitle">
    <h1>Archive Users</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('supuser.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('supuser.listuser') }}">Users</a></li>
        <li class="breadcrumb-item active">Archive Users</li>
      </ol>
    </nav>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Archive Users</h5>

      <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
            <th scope="col">Register</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($archiveUsers as $archive)
          <tr>
            <th scope="row"><a href="">{{ $archive->id }}</a></th>
            <td>{{ $archive->name }}</td>
            <td>{{ $archive->email }}</td>
            <td><a href="" class="badge rounded-pill bg-{{ $archive->block == 0 ? 'success':'danger' }}"> @if ($archive->block == 0) <span class="text-white"><i class="bi bi-person-check-fill"></i></span> @else <span class="text-white"><i class="bi bi-person-x-fill"></i></span> @endif</a></td>
            <td>{{ $archive->updated_at->diffForHumans() }}</td>
            <td><a class="btn btn-info btn-sm" href="{{ route('supuser.archiveRestore',['user_id'=>$archive->id]) }}">Restore</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>


    </div>
  </div>







    </div>
  </div>


@endsection
