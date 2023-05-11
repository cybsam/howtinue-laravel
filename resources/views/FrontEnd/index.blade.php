@extends('layouts.FrontEndMaster')
@section('FrontTitle', 'Healthy Botic')
@section('FrontEnd')


    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapp__list__article-responsive wrapp__list__article-responsive-carousel">
                        @foreach($listBlogFirst as $listBlogsFir)

                        <div class="item">
                            <!-- Post Article -->
                            <div class="card__post card__post-list">
                                <div class="image-sm">
                                    <a href="{{ route('blog.details', ['post_name' => $listBlogsFir->slug]) }}">
                                        <img src="{{ asset('uploads/postimage/') }}/{{ $listBlogsFir->blog_image }}" class="img-fluid" alt="{{ $listBlogsFir->blog_meta }}" />
                                    </a>
                                </div>

                                <div class="card__post__body">
                                    <div class="card__post__content">
                                        <div class="card__post__author-info mb-2">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <span class="text-primary"> by {{ $listBlogsFir->username }} </span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span class="text-dark text-capitalize">
                                                        {{ $listBlogsFir->updated_at->format('l, j F Y') }}
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card__post__title">
                                            <h6>
                                                <a href="{{ route('blog.details', ['post_name' => $listBlogsFir->slug]) }}">
                                                    {{ $listBlogsFir->blog_short_desc }}
                                                </a>
                                            </h6>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="pt-0">
        <div class="popular__section-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="wrapper__list__article">
                            <h4 class="border_section">recent post</h4>
                        </div>
                        <div class="row">
                            @foreach ($recentArticle as $recentArticleTwo)
                            <div class="col-sm-12 col-md-6 mb-4">
                                <!-- Post Article -->
                                <div class="card__post">
                                    <div class="card__post__body card__post__transition">
                                        <a href="{{ route('blog.details', ['post_name' => $recentArticleTwo->slug]) }}">
                                            <img src="{{ asset('uploads/postimage/') }}/{{ $recentArticleTwo->blog_image }}" alt="{{ $recentArticleTwo->blog_meta }}" class="img-fluid" />
                                        </a>
                                        <div class="card__post__content bg__post-cover">
                                            <div class="card__post__category">{{ $recentArticleTwo->sub_category_name }}</div>
                                            <div class="card__post__title">
                                                <h5>
                                                    <a href="{{ route('blog.details', ['post_name' => $recentArticleTwo->slug]) }}">
                                                        {{ $recentArticleTwo->blog_name }}.</a>
                                                </h5>
                                            </div>
                                            <div class="card__post__author-info">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="">
                                                            by {{ $recentArticleTwo->username }}
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span> {{ $recentArticleTwo->updated_at->format('l, j F Y') }} </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">
                            @foreach ($recentArticleFour as $recentArticleFour)
                            <div class="col-sm-12 col-md-6">
                                <div class="wrapp__list__article-responsive">
                                    <div class="mb-3">
                                        <!-- Post Article -->
                                        <div class="card__post card__post-list">
                                            <div class="image-sm">
                                                <a href="{{ route('blog.details', ['post_name' => $recentArticleFour->slug]) }}">
                                                    <img src="{{ asset('uploads/postimage/') }}/{{ $recentArticleFour->blog_image }}" alt="{{ $recentArticleFour->blog_meta }}" class="img-fluid"
                                                         />
                                                </a>
                                            </div>

                                            <div class="card__post__body">
                                                <div class="card__post__content">
                                                    <div class="card__post__author-info mb-2">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <span class="text-primary">
                                                                    by {{ $recentArticleFour->username }}
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span class="text-dark text-capitalize">
                                                                    {{ $recentArticleFour->updated_at->format('l, j F Y') }}
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card__post__title">
                                                        <h6>
                                                            <a href="{{ route('blog.details', ['post_name' => $recentArticleFour->slug]) }}">
                                                                {{ $recentArticleFour->blog_name }}
                                                            </a>
                                                        </h6>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="col-md-12 col-lg-4">
                        <aside class="wrapper__list__article">
                            <h4 class="border_section">Articles</h4>
                            <div class="wrapper__list-number">
                                <!-- List Article -->
                                @foreach ($randomCate as $randCate)
                                    @php
                                        $countCatePOst = App\Models\SupUserBlog::where('category',$randCate->id)->where('post_status',0)->count();
                                    @endphp

                                <div class="card__post__list">
                                    <div class="list-number">
                                        <span> {{ $countCatePOst }} </span>
                                    </div>
                                    <a href="{{ route('category.post', ['list_post' => $randCate->slug]) }}" class="category"> {{ $randCate->subcatagoryname }} </a>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h5>
                                                <a href="{{ route('category.post', ['list_post' => $randCate->slug]) }}">
                                                    {{ $randCate->subcatagoryname }}
                                                </a>
                                            </h5>
                                        </li>
                                    </ul>
                                </div>
                                @endforeach

                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>


        <div>
            <div class="popular__news-header-carousel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="top__news__slider">
                            @foreach($listBlog as $listBlogs)


                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="{{ route('blog.details', ['post_name' => $listBlogs->slug]) }}">
                                            <img src="{{ asset('uploads/postimage/') }}/{{ $listBlogs->blog_image }}" alt="{{ $listBlogs->blog_meta }}" class="img-fluid" />
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary"> by {{ $listBlogs->username }} </span>,
                                            </li>

                                            <li class="list-inline-item">
                                                <span> {{ $listBlogs->updated_at->format('l, j F Y') }} </span>
                                            </li>
                                        </ul>
                                        <h5>
                                            <a href="{{ route('blog.details', ['post_name' => $listBlogs->slug]) }}">
                                                {{ $listBlogs->blog_name }}
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <aside class="wrapper__list__article">
                        <h4 class="border_section">Beauty</h4>
                    </aside>
                </div>
                <div class="col-md-12">
                    <div class="article__entry-carousel">
                        @foreach ($beautyRandomBlog as $beautyRandom)
                        <div class="item">
                            <!-- Post Article -->
                            <div class="article__entry">
                                <div class="article__image">
                                    <a href="{{ route('blog.details', ['post_name' => $beautyRandom->slug]) }}">
                                        <img src="{{ asset('uploads/postimage/') }}/{{ $beautyRandom->blog_image }}" alt="{{ $beautyRandom->blog_meta_title }}" class="img-fluid" />
                                    </a>
                                </div>
                                <div class="article__content">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <span class="text-primary"> by {{ $beautyRandom->username }} </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span> {{ $beautyRandom->updated_at->format('l, j F Y') }} </span>
                                        </li>
                                    </ul>
                                    <h5>
                                        <a href="{{ route('blog.details', ['post_name' => $beautyRandom->slug]) }}">
                                            {{ $beautyRandom->blog_name }}
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- End Popular news category -->

        <!-- Popular news category -->
        <div class="mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <aside class="wrapper__list__article mb-0">
                            <h4 class="border_section">Foods</h4>
                            <div class="row">
                                @foreach ($foodsRandomBlog as $foodsarticle)
                                <div class="col-md-6">

                                    <div class="mb-4">

                                        <!-- Post Article -->
                                        <div class="article__entry">
                                            <div class="article__image">
                                                <a href="{{ route('blog.details', ['post_name' => $foodsarticle->slug]) }}">
                                                    <img src="{{ asset('uploads/postimage/') }}/{{ $foodsarticle->blog_image }}" alt="{{ $foodsarticle->blog_meta_title }}"
                                                        class="img-fluid" />
                                                </a>
                                            </div>
                                            <div class="article__content">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <span class="text-primary"> by {{ $foodsarticle->username }} </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span> {{ $foodsarticle->updated_at->format('l, j F Y') }} </span>
                                                    </li>
                                                </ul>
                                                <h5>
                                                    <a href="{{ route('blog.details', ['post_name' => $foodsarticle->slug]) }}">
                                                        {{ $foodsarticle->blog_name }}
                                                    </a>
                                                </h5>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                @endforeach

                            </div>
                        </aside>
                        <aside class="wrapper__list__article">
                            <h4 class="border_section">Body</h4>

                            <div class="wrapp__list__article-responsive">
                                <!-- Post Article List -->
                                @foreach ($bodyArticleRandom as $bodyRandArticle)
                                <div class="card__post card__post-list card__post__transition mt-30">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="card__post__transition">
                                                <a href="{{ route('blog.details', ['post_name' => $bodyRandArticle->slug]) }}">
                                                    <img src="{{ asset('uploads/postimage/') }}/{{ $bodyRandArticle->blog_image }}" alt="{{ $bodyRandArticle->blog_meta_title }}" class="img-fluid w-100"
                                                        />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 my-auto pl-0">
                                            <div class="card__post__body">
                                                <div class="card__post__content">
                                                    <div class="card__post__category">{{ $bodyRandArticle->sub_category_name }}</div>
                                                    <div class="card__post__author-info mb-2">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <span class="text-primary">
                                                                    by {{ $bodyRandArticle->username }}
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span class="text-dark text-capitalize">
                                                                    {{ $bodyRandArticle->updated_at->format('l, j F Y') }}
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card__post__title">
                                                        <h5>
                                                            <a href="{{ route('blog.details', ['post_name' => $bodyRandArticle->slug]) }}">
                                                                {{ $bodyRandArticle->blog_name }}
                                                            </a>
                                                        </h5>
                                                        <p class="d-none d-lg-block d-xl-block mb-0">
                                                            {{ $bodyRandArticle->blog_short_desc }}.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </aside>
                    </div>

                    <div class="col-md-4">
                        <div class="sticky-top">
                            <aside class="wrapper__list__article">
                                <h4 class="border_section">Latest post</h4>
                                <div class="wrapper__list__article-small">
                                    <!-- Post Article -->

                                    <div class="article__entry">
                                        <div class="article__image">
                                            <a href="{{ route('blog.details', ['post_name' => $foodsTakeOneBlog->slug]) }}">
                                                <img src="{{ asset('uploads/postimage/') }}/{{ $foodsTakeOneBlog->blog_image }}" alt="{{ $foodsTakeOneBlog->blog_meta_title }}"
                                                    class="img-fluid" />
                                            </a>
                                        </div>
                                        <div class="article__content">
                                            <div class="article__category">{{ $foodsTakeOneBlog->sub_category_name }}</div>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <span class="text-primary"> by  {{ $foodsTakeOneBlog->username }}</span>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span class="text-dark text-capitalize">
                                                        {{ $foodsTakeOneBlog->updated_at->format('l, j F Y') }}
                                                    </span>
                                                </li>
                                            </ul>
                                            <h5>
                                                <a href="{{ route('blog.details', ['post_name' => $foodsTakeOneBlog->slug]) }}">
                                                    {{ $foodsTakeOneBlog->blog_name }}
                                                </a>
                                            </h5>
                                            <p>
                                                {{ $foodsTakeOneBlog->blog_short_desc }}.
                                            </p>
                                            <a href="{{ route('category.post', ['list_post' => $foodsTakeOneBlog->sub_category_slug]) }}" class="btn btn-outline-primary mb-4 text-capitalize">
                                                Load more</a>
                                        </div>
                                    </div>
                                    @foreach ($foodsRandTwoArticle as $foodsTwoArticle)
                                    <div class="mb-3">
                                        <!-- Post Article -->
                                        <div class="card__post card__post-list">
                                            <div class="image-sm">
                                                <a href="{{ route('blog.details', ['post_name' => $foodsTwoArticle->slug]) }}">
                                                    <img src="{{ asset('uploads/postimage/') }}/{{ $foodsTwoArticle->blog_image }}" alt="{{ $foodsTwoArticle->blog_meta_title }}" class="img-fluid"
                                                         />
                                                </a>
                                            </div>

                                            <div class="card__post__body">
                                                <div class="card__post__content">
                                                    <div class="card__post__author-info mb-2">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <span class="text-primary">
                                                                    by {{ $foodsTwoArticle->username }}.
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span class="text-dark text-capitalize">
                                                                    {{ $foodsTwoArticle->updated_at->format('l, j F Y') }}
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card__post__title">
                                                        <h6>
                                                            <a href="{{ route('blog.details', ['post_name' => $foodsTwoArticle->slug]) }}">
                                                                {{ $foodsTwoArticle->blog_name }}
                                                            </a>
                                                        </h6>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </aside>

                            <aside class="wrapper__list__article">
                                <h4 class="border_section">stay conected</h4>
                                @php

                                    $findUs = App\Models\FindUs::where('id',1)->first();

                                @endphp
                                <!-- widget Social media -->
                                <div class="wrap__social__media">
                                    <a href="{{ $findUs->facebook	 }}" target="_blank">
                                        <div class="social__media__widget facebook">
                                            <span class="social__media__widget-icon">
                                                <i class="fa fa-facebook"></i>
                                            </span>
                                            <span class="social__media__widget-counter">
                                                19,243 fans
                                            </span>
                                            <span class="social__media__widget-name"> like </span>
                                        </div>
                                    </a>
                                    <a href="{{ $findUs->twitter	 }}" target="_blank">
                                        <div class="social__media__widget twitter">
                                            <span class="social__media__widget-icon">
                                                <i class="fa fa-twitter"></i>
                                            </span>
                                            <span class="social__media__widget-counter">
                                                2.076 followers
                                            </span>
                                            <span class="social__media__widget-name"> follow </span>
                                        </div>
                                    </a>
                                    <a href="{{ $findUs->youtube	 }}" target="_blank">
                                        <div class="social__media__widget youtube">
                                            <span class="social__media__widget-icon">
                                                <i class="fa fa-youtube"></i>
                                            </span>
                                            <span class="social__media__widget-counter">
                                                15,200 followers
                                            </span>
                                            <span class="social__media__widget-name">
                                                subscribe
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </aside>

                            <aside class="wrapper__list__article">
                                <h4 class="border_section">tags</h4>
                                <div class="blog-tags p-0">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#"> #property </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"> #sea </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"> #programming </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"> #sea </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"> #property </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"> #life style </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"> #technology </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"> #framework </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"> #sport </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"> #game </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"> #wfh </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"> #sport </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"> #game </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"> #wfh </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#"> #framework </a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>

                            <aside class="wrapper__list__article">
                                <h4 class="border_section">Advertise</h4>
                                <a href="#">
                                    <figure>
                                        <img src="images/placeholder/600x400.jpg" alt="" class="img-fluid" />
                                    </figure>
                                </a>
                            </aside>

                            <aside class="wrapper__list__article">
                                <h4 class="border_section">newsletter</h4>
                                <!-- Form Subscribe -->
                                <div class="widget__form-subscribe bg__card-shadow">
                                    <h6>
                                        The most important world news and events of the day.
                                    </h6>
                                    <p>
                                        <small>Get magzrenvi daily newsletter on your inbox.</small>
                                    </p>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Your email address" />
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                sign up
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div class="mx-auto">
                        <!-- Pagination -->
                        <div class="pagination-area">
                            <div class="pagination wow fadeIn animated" data-wow-duration="2s" data-wow-delay="0.5s"
                                style="
                      visibility: visible;
                      animation-duration: 2s;
                      animation-delay: 0.5s;
                      animation-name: fadeIn;
                    ">
                    <div style="display: inline-block; display:flex;">{{ $bodyArticleRandom->links() }}</div>

                                {{-- <a href="#"> « </a>
                                <a href="#"> 1 </a>
                                <a class="active" href="#"> 2 </a>
                                <a href="#"> 3 </a>
                                <a href="#"> 4 </a>
                                <a href="#"> 5 </a>

                                <a href="#"> » </a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Popular news category -->




@endsection
