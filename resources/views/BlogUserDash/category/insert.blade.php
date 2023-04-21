@extends('layouts.BlogUserMaster')
@section('title', 'Category Index - Healthy Botic')
@section('BlogUserContent')

<div class="pagetitle">
    <h1>Sub Catagory</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('blogusr.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('bloggerCate.index') }}">Catagory</a></li>
            
            <li class="breadcrumb-item active">Insert Catagory</li>
        </ol>
    </nav>
</div>

<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
    <b style="color:rgb(7, 223, 72)">Note: </b> 
    Please Select Your Super/Main Catagory, Then input your subCatagory 
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@if (Session::get('subsucc'))
<div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
    {{ Session::get('subsucc') }}
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
@if (Session::get('suberro'))
<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
    {{ Session::get('suberro') }}
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif




<div class="card">
    <div class="card-body">
        <form action="{{ route('bloggerCate.insertSave') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6 mt-4">
                    <label for="" class="text-danger">Super catagory</label>
                        <div class="form-floating mb-3">
                            
                            <select class="form-select text-primary @error('supCataId') is-invalid @enderror "  name="supCataId" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                @foreach ($supCata as $showCata)
                                    <option value="{{ $showCata->id }}">{{ $showCata->supcatagoryname }}</option>
                                    {{-- <input type="hidden" name="SupCataId" value="{{ $showCata->id }} "> --}}
                                @endforeach
                              
                            </select>
                            <div class="">
                                @error('supCataId')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                          </div>
                    
                    <div class="form-floating mb-3">
                        <input type="text" value="{{ old('subcatagoryname') }}" class="form-control @error('subcatagoryname') is-invalid @enderror" id="floatingInput" placeholder="ex: food, health, Technical" name="subcatagoryname">
                        <label for="floatingInput">Catagory Name</label>
                        <div class="">
                            @error('subcatagoryname')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('catagorymeta') is-invalid @enderror" value="{{ old('catagorymeta') }}" id="floatingInput" placeholder="catagory-meta" name="catagorymeta">
                        <label for="floatingInput">Catagory Meta Tag</label>
                        <div class="">
                            @error('catagorymeta')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="from-control @error('image') is-invalid @enderror">
                            <input class="form-control" type="file" name="image" id="formFile">
                        </div>
                        @error('image')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                      </div>
                      <div class="mt-2">
                        <button type="submit" class="btn btn-primary">Insert</button>
                      </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection