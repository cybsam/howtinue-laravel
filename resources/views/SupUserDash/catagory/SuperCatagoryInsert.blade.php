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
    <b style="color:yellow">Note: </b> if you once insert a supercatagory, you can not modified, because it's constract catagory...
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

<div class="card">
    <div class="card-body">
        <form action="">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Catagory name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Catagory Meta</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </form>
    </div>
</div>


@endsection