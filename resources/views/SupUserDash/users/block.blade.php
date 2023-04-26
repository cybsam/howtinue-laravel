@extends('layouts.SupUserMaster')
@section('title', 'Users - HowTinue')
@section('SupUserContent')
<link rel="stylesheet" href="{{ asset('datatables/dataTables.min.css') }}">

<div class="pagetitle">
    <h1>Users Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('supuser.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('supuser.listuser') }}">Users</a></li>
        <li class="breadcrumb-item"><a href="{{ route('supuser.archive') }}">Archive Users</a></li>
        <li class="breadcrumb-item active">Block Users</li>
      </ol>
    </nav>
    
  </div><!-- End Page Title -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Block Users</h5>
      
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
            @foreach ($blockUsers as $block)
          <tr>
            <th scope="row">{{ $block->id }}</th>
            <td>{{ $block->name }}</td>
            <td>{{ $block->email }}</td>
            <td><a href="" class="badge rounded-pill bg-{{ $block->block == 1 ? 'danger':'success' }}"> @if ($archive->block == 1) <span class="text-white"><i class="bi bi-person-x-fill"></i></span> @else <span class="text-white"><i class="bi bi-person-check-fill"></i></span> @endif</a></td>
            <td>{{ $block->updated_at->diffForHumans() }}</td>
            <td><a class="btn btn-info btn-sm" href="{{ route('supuser.archiveBlockRestore',['user_id'=>$archive->id]) }}">Restore</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
     

    </div>
  </div>








    </div>
  </div>


@endsection
