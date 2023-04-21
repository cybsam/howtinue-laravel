@extends('layouts.FrontEndMaster')
@section('FrontTitle', 'Category Post List - Health Botic')
@section('FrontEnd')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Breadcrumb -->
                    <ul class="breadcrumbs bg-light mb-4">
                        <li class="breadcrumbs__item">
                            <a href="{{ route('FrontEnd.Index') }}" class="breadcrumbs__url">
                                <i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumbs__item">
                            <a href="{{ route('frontEnd.catagory.parent') }}" class="breadcrumbs__url">
                                 Parent Category</a>
                        </li>
                        <li class="breadcrumbs__item">
                            <a href="{{ route('frontEnd.catagory.show') }}" class="breadcrumbs__url">
                                 Sub Category</a>
                        </li>

                        <li class="breadcrumbs__item breadcrumbs__item--current">
                            Details Category
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    

                    <aside class="wrapper__list__article ">
                        
                    

                        <h3 class="border_section">Category List Post</h3>
                        @foreach ($categoryName as $postDetails)
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card__post card__post-list">

                                    <div class="image-sm">
                                        <a href="#">
                                            <img src="{{ asset('uploads/postimage/') }}/{{ $postDetails->blog_image }}" class="img-fluid" alt="{{ $postDetails->blog_meta  }}">
                                            </a>
                                    </div>


                                    <div class="card__post__body ">
                                        <div class="card__post__content">

                                            <div class="card__post__author-info mb-2">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <span class="text-primary">
                                                            by {{ $postDetails->username }}
                                                        </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span class="text-dark text-capitalize">
                                                            descember 09, 2016
                                                        </span>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="card__post__title">
                                                <h4>
                                                    <a href="{{ route('blog.details', ['post_name' => $postDetails->slug]) }}">
                                                        {{ $postDetails->blog_name  }}
                                                    </a>
                                                </h4>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        @endforeach
                        
                        
                        
                    </aside>
                </div>
                <div class="col-md-4">
                    <div class="sidebar-sticky">
                        <aside class="wrapper__list__article ">
                            <h4 class="border_section">Sidebar</h4>
                            <div class="wrapper__list__article-small">
                                <div class="mb-3">
                                    <!-- Post Article -->
                                    <div class="card__post card__post-list">
                                        <div class="image-sm">
                                            <a href="./card-article-detail-v1.html">
                                                <img src="images/placeholder/500x400.jpg" class="img-fluid" alt="">
                                            </a>
                                        </div>


                                        <div class="card__post__body ">
                                            <div class="card__post__content">

                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                by david hall
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                                descember 09, 2016
                                                            </span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h6>
                                                        <a href="./card-article-detail-v1.html">
                                                            6 Best Tips for Building a Good Shipping Boat
                                                        </a>
                                                    </h6>
                                                    <!-- <p class="d-none d-lg-block d-xl-block">
                                    Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                                    sollicitudin ut est. In fringilla dui dui.
                                </p> -->

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <!-- Post Article -->
                                    <div class="card__post card__post-list">
                                        <div class="image-sm">
                                            <a href="./card-article-detail-v1.html">
                                                <img src="images/placeholder/500x400.jpg" class="img-fluid" alt="">
                                            </a>
                                        </div>


                                        <div class="card__post__body ">
                                            <div class="card__post__content">

                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                by david hall
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                                descember 09, 2016
                                                            </span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h6>
                                                        <a href="./card-article-detail-v1.html">
                                                            6 Best Tips for Building a Good Shipping Boat
                                                        </a>
                                                    </h6>
                                                    <!-- <p class="d-none d-lg-block d-xl-block">
                                    Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                                    sollicitudin ut est. In fringilla dui dui.
                                </p> -->

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <!-- Post Article -->
                                    <div class="card__post card__post-list">
                                        <div class="image-sm">
                                            <a href="./card-article-detail-v1.html">
                                                <img src="images/placeholder/500x400.jpg" class="img-fluid" alt="">
                                            </a>
                                        </div>


                                        <div class="card__post__body ">
                                            <div class="card__post__content">

                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                by david hall
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                                descember 09, 2016
                                                            </span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h6>
                                                        <a href="./card-article-detail-v1.html">
                                                            6 Best Tips for Building a Good Shipping Boat
                                                        </a>
                                                    </h6>
                                                    <!-- <p class="d-none d-lg-block d-xl-block">
                                    Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                                    sollicitudin ut est. In fringilla dui dui.
                                </p> -->

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="#">
                                            <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <div class="article__category">
                                            travel
                                        </div>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    by david hall
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="text-dark text-capitalize">
                                                    descember 09, 2016
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="#">
                                                Proin eu nisl et arcu iaculis placerat sollicitudin ut est
                                            </a>
                                        </h5>
                                        <p>
                                            Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis
                                            placerat sollicitudin ut
                                            est. In fringilla dui dui.
                                        </p>
                                        <a href="#" class="btn btn-outline-primary mb-4 text-capitalize"> read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </aside>

                        <aside class="wrapper__list__article">
                            <h4 class="border_section">tags</h4>
                            <div class="blog-tags p-0">
                                <ul class="list-inline">

                                    <li class="list-inline-item">
                                        <a href="#">
                                            #property
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #sea
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #programming
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #sea
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #property
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #life style
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #technology
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #framework
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #sport
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #game
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #wfh
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #sport
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #game
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #wfh
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            #framework
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </aside>

                        <aside class="wrapper__list__article">
                            <h4 class="border_section">newsletter</h4>
                            <!-- Form Subscribe -->
                            <div class="widget__form-subscribe bg__card-shadow">
                                <h6>
                                    The most important world news and events of the day.
                                </h6>
                                <p><small>Get magzrenvi daily newsletter on your inbox.</small></p>
                                <div class="input-group ">
                                    <input type="text" class="form-control" placeholder="Your email address">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">sign up</button>
                                    </div>
                                </div>
                            </div>
                        </aside>

                        <aside class="wrapper__list__article">
                            <h4 class="border_section">Advertise</h4>
                            <a href="#">
                                <figure>
                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid">
                                </figure>
                            </a>
                        </aside>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
            <!-- Pagination -->
            <div class="pagination-area">
                <div class="pagination wow fadeIn animated" data-wow-duration="2s" data-wow-delay="0.5s"
                    style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <a href="#">
                        «
                    </a>
                    <a href="#">
                        1
                    </a>
                    <a class="active" href="#">
                        2
                    </a>
                    <a href="#">
                        3
                    </a>
                    <a href="#">
                        4
                    </a>
                    <a href="#">
                        5
                    </a>

                    <a href="#">
                        »
                    </a>
                </div>
            </div>
        </div>
    </section>


@endsection