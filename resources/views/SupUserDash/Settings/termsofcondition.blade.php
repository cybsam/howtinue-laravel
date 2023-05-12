@extends('layouts.SupUserMaster')
@extends('summernote.summernote')
@section('title', 'terms of condition - HealthyBotic')
@section('SupUserContent')

    <div class="pagetitle">
        <h1>Terms of condition</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('supuser.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('supuser.settings.main') }}">Settings</a></li>
                <li class="breadcrumb-item active">Terms Of Condition</li>
            </ol>
        </nav>
    </div>

    <div class="col-md-12 m-auto">
        @if (Session::get('updSuc'))
                            <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show"
                                role="alert">
                                {{ Session::get('updSuc') }}
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if (Session::get('updErr'))
                            <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show"
                                role="alert">
                                {{ Session::get('updErr') }}
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
        <div class="card">
            <div class="card-title text-center">
                <h4>Description</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('supuser.termsOfConditionUpdate') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <textarea name="description" id="summernote" class="form-control @error('description') is-invalid @enderror" cols="30" rows="10"></textarea>
                        <div class="">
                            @error('description')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Update</button>
                        <button type="reset" class="btn btn-warning float-right">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id=""></div>
    <script>
        $('#summernote').summernote({
            placeholder: 'Description...',
            tabsize: 2,
            height: 250
        });
    </script>

    <div class="col-md-12 m-auto">
        <div class="card">
            <div class="card-title text-center">
                <h4>Preview Terms of condition</h4>
            </div>
            <div class="card-body">
                {!! $previewTerms->description !!}
            </div>
        </div>
    </div>




@endsection
