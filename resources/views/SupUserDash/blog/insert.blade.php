@extends('layouts.SupUserMaster')
@section('title', 'Insert Blog - HowTinue')
@section('SupUserContent')

    <div class="pagetitle">
        <h1>Insert Blog</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('supuser.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('supuser.blog') }}">List Blog</a></li>
                <li class="breadcrumb-item active">Insert Blog</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Press key fell free :)</h5>

                        <!-- General Form Elements -->
                        <form>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Blog Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" style="background: rgb(15, 238, 115);" placeholder="Type Your Blog Name." name="blogName" id="blogName">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Blog Short desc</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="short description" name="blogShortDesc" id="blogShortDesc">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Blog Meta</label>
                                <div class="col-sm-10">
                                    <input type="text" id="blogMeta" class="form-control" name="blogMeta" placeholder="Blog Meta Tag">
                                    <span>Seperate by ( , )</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <select class="form-select bg-danger" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        @foreach ($listCate as $cateList)
                                            <option value="{{ $cateList->id }}">{{ $cateList->subcatagoryname }}</option>
                                       
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Blog Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            

                            
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10 ">
                                    <div class="form-control">
                                    <textarea name="description" class="quill-editor-full" id="" cols="" rows=""></textarea>
                                </div>
                                </div>
                            </div>
                            
                            

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Disabled</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="Read only / Disabled" disabled>
                                </div>
                            </div>

                            

                            {{-- <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Multi Select</label>
                                <div class="col-sm-10">
                                    <select class="form-select" multiple aria-label="multiple select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div> --}}
 
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Submit Button</label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit Form</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>
        </div>
    </section>


        @endsection
