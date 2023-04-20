@extends('layouts.SupUserMaster')
@section('title', 'Insert Super Catagory - HowTinue')
@section('SupUserContent')
    {{-- <script>
    alert("Note: if you insert a supercatagory, you can not modified it, because it's construct...");
</script> --}}

    <div class="pagetitle">
        <h1>Insert Super Catagory</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('supuser.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('supuser.cata.super') }}">Super Catagory</a></li>
                <li class="breadcrumb-item active">Insert Catagory</li>
            </ol>
        </nav>
    </div>
    <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
        <b style="color:yellow">Note: </b> if you once insert a supercatagory, you can not modified, because it's constract
        catagory...
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @if (Session::get('succ'))
    <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
        {{ Session::get('succ') }}
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    @if (Session::get('erro'))
    <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
        {{ Session::get('erro') }}
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    


    <div class="card">
        <div class="card-body">
            <form action="{{ route('supuser.cata.super.insert.chk') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6 mt-4">
                        <div class="form-floating mb-3">
                            <input type="text" value="{{ old('catagoryname') }}" class="form-control @error('catagoryname') is-invalid @enderror" id="floatingInput" placeholder="ex: food, health, Technical" name="catagoryname">
                            <label for="floatingInput">Catagory Name</label>
                            <div class="">
                                @error('catagoryname')
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
