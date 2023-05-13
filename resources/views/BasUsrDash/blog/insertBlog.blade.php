@extends('layouts.BasUserMaster')
@extends('summernote.summernote')
@section('FrontTitle', 'Become Blogger - HealthyBotic')
@section('basUser')

<section class="pb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <ul class="breadcrumbs bg-light mb-4">
                    <li class="breadcrumbs__item">
                        <a href="{{ route('basUser.dashboard') }}" class="breadcrumbs__url">
                            <i class="fa fa-home"></i> Dashboard</a>
                    </li>
                    <li class="breadcrumbs__item">
                        <a href="{{ route('basUser.userActivity') }}" class="breadcrumbs__url">
                             Activity</a>
                    </li>
                    <li class="breadcrumbs__item breadcrumbs__item--current">
                        Publish Article
                    </li>
                </ul>
                <!-- end breadcrumb -->
            </div>
            <div class="col-md-10 m-auto">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Press key fell free :)</h5>


                    @if (Session::get('blogInsSucc'))
                        <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show"
                            role="alert">
                            {{ Session::get('blogInsSucc') }}
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    @if (Session::get('blogInsFail'))
                        <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show"
                            role="alert">
                            {{ Session::get('blogInsFail') }}
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="{{ route('basUser.becomeBloggerInsertBlog') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Article Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control  @error('blogName') is-invalid @enderror"
                                    value="{{ old('blogName') }}" placeholder="Type Your Blog Name." name="blogName"
                                    id="blogName">
                                <div class="">
                                    @error('blogName')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Article Short desc</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('blogShortDesc') is-invalid @enderror"
                                    value="{{ old('blogShortDesc') }}" placeholder="short description"
                                    name="blogShortDesc" id="blogShortDesc">
                                <div class="">
                                    @error('blogShortDesc')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Article Tags</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('blogTags') is-invalid @enderror"
                                    value="{{ old('blogTags') }}" data-role="tagsinput" placeholder="Tags, seperate by ( , )"
                                    name="blogTags" id="blogTags">
                                    <span style="color:red;">seperate by comma ( , )</span>
                                <div class="">
                                    @error('blogTags')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr style="color:red;">
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">SEO Meta Title</label>
                            <div class="col-sm-10">
                                <input type="text" id="blogMeta"
                                    class="form-control @error('blogMeta') is-invalid @enderror"
                                    value="{{ old('blogMeta') }}" name="blogMeta" placeholder="SEO Blog Meta Title">

                                <div class="">
                                    @error('blogMeta')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">SEO Meta Description</label>
                            <div class="col-sm-10">
                                <textarea placeholder="SEO Blog Meta Description" class="form-control @error('blogMetaDesc') is-invalid @enderror" name="blogMetaDesc" id="blogMetaDesc"></textarea>


                                <div class="">
                                    @error('blogMetaDesc')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr style="color:red;">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                <select class="form-select bg-danger @error('category') is-invalid @enderror"
                                    name="category" aria-label="Default select example">
                                    <option selected value="0">Open this select menu</option>
                                    @foreach ($listCate as $cateList)
                                        <option value="{{ $cateList->id }}">{{ $cateList->subcatagoryname }}</option>
                                    @endforeach
                                </select>
                                <div class="">
                                    @error('category')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Article Image</label>
                            <div class="col-sm-10">
                                <input class="form-control @error('image') is-invalid @enderror" name="image"
                                    type="file">
                            </div>
                        </div>
                        <div class="">
                            @error('image')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>


                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10 ">
                                <div class="">
                                    <textarea name="description" value="{{ old('description') }}" name="description" id="summernote"
                                        class="form-control @error('description') is-invalid @enderror" cols="" rows=""></textarea>
                                </div>
                                <div class="">
                                    @error('description')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Insert Article</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        </div>
    </div>
</section>
<div id=""></div>
<script>
    $('#summernote').summernote({
        placeholder: 'Description...',
        tabsize: 2,
        height: 200
    });
</script>






@endsection
