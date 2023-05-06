@extends('layouts.SupUserMaster')
@section('title', 'Find Us Social - Healthy Botic')
@section('SupUserContent')


    <div class="pagetitle">
        <h1>Find Us</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('supuser.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('supuser.settings.main') }}">Settings</a></li>
                <li class="breadcrumb-item active">Find Us Social</li>
            </ol>
        </nav>
    </div>
    @if (Session::get('succ'))
        <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
            {{ Session::get('succ') }}
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (Session::get('err'))
        <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
            {{ Session::get('err') }}
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form action="{{ route('supuser.FindUsBackendUpdate') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Facebook</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('__facebook') is-invalid @enderror" name="__facebook" value="{{ old('__facebook') }}" id="__facebook">
                @error('__facebook')
                    <span class="invalid-feedback" role="alert">
                        <span>{{ $message }}</span>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Twitter</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('__twitter') is-invalid @enderror" name="__twitter" value="{{ old('__twitter') }}" id="__twitter">
                @error('__facebook')
                    <span class="invalid-feedback" role="alert">
                        <span>{{ $message }}</span>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">WhatsApp</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('__whatsapp') is-invalid @enderror" name="__whatsapp" value="{{ old('__whatsapp') }}" id="__whatsapp">
                @error('__whatsapp')
                    <span class="invalid-feedback" role="alert">
                        <span>{{ $message }}</span>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Linkedin</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('__linkedin') is-invalid @enderror" name="__linkedin" value="{{ old('__linkedin') }}" id="__linkedin">
                @error('__linkedin')
                    <span class="invalid-feedback" role="alert">
                        <span>{{ $message }}</span>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Reddit</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('__reddit') is-invalid @enderror" name="__reddit" value="{{ old('__reddit') }}" id="__reddit">
                @error('__reddit')
                    <span class="invalid-feedback" role="alert">
                        <span>{{ $message }}</span>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Telegram</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('__telegram') is-invalid @enderror" name="__telegram" value="{{ old('__telegram') }}" id="__telegram">
                @error('__telegram')
                    <span class="invalid-feedback" role="alert">
                        <span>{{ $message }}</span>
                    </span>
                @enderror
            </div>
        </div>
        

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Update Social</label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Updata Social</button>
            </div>
        </div>

    </form>



    </div>
    </div>


@endsection
