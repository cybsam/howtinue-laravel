@extends('layouts.BlogUserMaster')
@section('title', 'Update User - HealthyBotic')
@section('BlogUserContent')

<div class="pagetitle">
    <h1>{{ __('Update User') }}</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('blogusr.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('blogusr.users') }}">Users</a></li>
        
        <li class="breadcrumb-item active">Update User</li>
    </ol>
    </nav>
</div>



    @if (Session::get('err'))
        <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
            {{ Session::get('err') }}
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form action="{{ route('updateUserBloggerSave') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="__userid" name="__userid" value="{{ $userInfo->id }}">
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="__username" value="{{ $userInfo->name }}"
                    readonly="readonly">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="__userEmail" value="{{ $userInfo->email }}"
                    readonly="readonly">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $userInfo->gender }}" readonly="readonly">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Update time</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $userInfo->updated_at->diffForHumans() }}"
                    readonly="readonly">
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Active User</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="__userActivate" id="__userActivate" value="1"
                        checked>
                    <label class="form-check-label" for="gridRadios1">
                        Active User
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="__userActivate" id="__userActivate" value="2">
                    <label class="form-check-label" for="gridRadios2">
                        Block User
                    </label>
                </div>
                
            </div>
        </fieldset>
        




        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">User Role</label>
            <div class="col-sm-10">
                <select class="form-select bg-warning text-black" name="__userRole" aria-label="Default select example">
                    <option value="0" selected>Open this select user role</option>
                    <option value="0">User</option>
                    <option value="2">Blogger</option>
                    
                </select>
            </div>
        </div>



        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Save user</label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Updata User</button>
            </div>
        </div>

    </form>



@endsection
