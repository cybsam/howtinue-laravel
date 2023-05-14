@extends('layouts.SupUserMaster')
@section('title', 'Replay Chat - HealthyBotic')
@section('SupUserContent')


    <div class="pagetitle">
        <h1>Replay Chat</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('supuser.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('supuser.chat') }}">Chat</a></li>
                <li class="breadcrumb-item active">Replay</li>
            </ol>
        </nav>
    </div>

    <section style="background-color: #ffffff;">
        <div class="container py-5">

            <div class="row">

                <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">

                    <h5 class="font-weight-bold mb-3 text-center text-lg-start">Member</h5>

                    <div class="card">
                        <div class="card-body">

                            <ul class="list-unstyled mb-0">
                                {{-- @foreach ($userShowAll as $showUser) --}}
                                {{-- {{ route('supuser.chatshow', ['user_id' => $showUser->id]) }} --}}
                                    <li class="p-2 border-bottom">
                                        <a href=""
                                            class="d-flex justify-content-between">
                                            <div class="d-flex flex-row">
                                                <img src="{{ asset('SupUser/uploads/usersimage') }}/"
                                                    alt="avatar"
                                                    class="rounded-circle d-flex align-self-center me-3 shadow-1-strong"
                                                    width="60">
                                                <div class="pt-1">
                                                    <p class="fw-bold mb-0">fsda dsffsdf</p>

                                                </div>
                                            </div>
                                            <div class="pt-1">
                                                <p class="small text-muted mb-1">Just now</p>
                                                <span class="badge bg-danger float-end">1</span>
                                            </div>
                                        </a>
                                    </li>
                                {{-- @endforeach --}}
                            </ul>

                        </div>
                    </div>

                </div>

                <div class="col-md-6 col-lg-7 col-xl-8">

                    <ul class="list-unstyled">
                        @foreach ($fetchData as $fetchData)
                        <li class="d-flex justify-content-between mb-4">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between p-3">
                                    @php
                                        $fetchData->from_user_id;
                                        $userFrom = DB::table('users')->where('id',$userFrom)->get();
                                    @endphp
                                    <p class="fw-bold mb-0">{{ $userFrom->name }}</p>
                                    <p class="text-muted small mb-0"><i class="far fa-clock"></i> 12 mins ago</p>
                                </div>
                                <div class="card-body">
                                    <p class="mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        <li class="bg-white mb-3">
                            <div class="form-outline">
                                <textarea class="form-control" id="textAreaExample2" rows="4"></textarea>
                                <label class="form-label" for="textAreaExample2">Message</label>
                            </div>
                        </li>
                        <button type="button" class="btn btn-info btn-rounded float-end">Send</button>
                    </ul>

                </div>

            </div>

        </div>
    </section>

  @endsection
