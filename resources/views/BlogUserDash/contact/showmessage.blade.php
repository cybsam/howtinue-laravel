
@extends('layouts.BlogUserMaster')
@section('title', 'Contact message Show - HealthyBotic')
@section('BlogUserContent')

<div class="pagetitle">
    <h1>Contact Message Show</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('blogusr.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('blogusr.ShowContact') }}">Contact Message</a></li>
        <li class="breadcrumb-item active">Show Contact Message</li>
    </ol>
    </nav>
</div>






<div class="container">
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Messaage From:  {{ $fetchData->anonymouse_name }}</h4>
                </div>
                <div class="card-body bg-light">
                    <form action="">
                        <div class="form-group">
                            <span>Name</span>
                            <input type="text" value="{{ $fetchData->anonymouse_name }}" class="form-control bg-light" readonly>
                        </div><hr>
                        <div class="form-group">
                            <span>Email</span>
                            <input type="text" value="{{ $fetchData->anonymouse_email }}" class="form-control bg-light" readonly>
                        </div><hr>
                        <div class="form-group">
                            <span>Website</span>
                            <input type="text" value="{{ $fetchData->anonymouse_website }}" class="form-control bg-light" readonly>
                        </div><hr>
                        <div class="form-group">
                            <span>Subject</span>
                            <input type="text" value="{{ $fetchData->anonymouse_subject }}" class="form-control bg-light" readonly>
                        </div>
                        <hr>
                        <div class="form-group">
                            <span>Message: </span><br>

                            {{ $fetchData->anonymouse_message }}
                        </div>
                        <hr>
                        <div class="form-group">
                            <a href="mailto:{{ $fetchData->anonymouse_email }}" class="btn btn-success">Replay</a>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
