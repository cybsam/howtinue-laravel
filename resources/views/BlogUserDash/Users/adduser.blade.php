@extends('layouts.BlogUserMaster')
@section('title', 'Team: Modarator - HowTinue')
@section('BlogUserContent')

    <div class="pagetitle">
        <h1> Team Management</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('blogusr.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('blogusr.users') }}">Users</a></li>
                <li class="breadcrumb-item"><a href="{{ route('blogusr.users.allteam') }}">Team</a></li>

                <li class="breadcrumb-item active">Adding User</li>

            </ol>
        </nav>
    </div><!-- End Page Title -->


    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Users List</h5>
            @if (Session::get('succ'))
                <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
                    {{ Session::get('succ') }}
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            @endif
            @if (Session::get('err'))
                <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                    {{ Session::get('err') }}
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            @endif
            <table class="table table-hover datatable table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>

                        <th scope="col">Verified</th>
                        <th scope="col">Team</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($basusers as $basu)
                        <th scope="row"><a href="#">#{{ $basu->id }}</a></td>
                        <td>{{ $basu->name }}</td>
                        <td><a class="" href=""><span>@</span>{{ $basu->username }}</a></td>

                        <td><a href="" class="badge rounded-pill bg-{{ $basu->block == 0 ? 'success' : 'danger' }}">
                                @if ($basu->block == 0)
                                    <span class="text-white"><i class="bi bi-person-check-fill"></i></span>
                                @else
                                    <span class="text-white"><i class="bi bi-person-x-fill"></i></span>
                                @endif
                            </a></td>
                        <td>
                            @if ($basu->teamname)
                                {{ $basu->teamname }}
                            @else
                                {{ __('Withdout team') }}
                            @endif
                        </td>
                        {{-- <td><span class="badge rounded-pill bg-info"></span></td> --}}
                        @php
                            $user_id = $basu->id;
                            $user_name = $basu->username;
                            $teamId = $teamId;
                            $sepTeamName = $sepTeamName;
                            $rand = Str::random(20);
                        @endphp
                        <td><a class="text-success badge rounded-pill bg-info"
                                href="{{ route('blogusr.users.allteam.users.add.confirm', ['sepTeamName' => $sepTeamName, 'teamId' => $teamId, 'username' => $user_name, 'user_id' => $user_id, 'rand' => $rand]) }}">Add
                                To My team</a></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>



@endsection
