@extends('layouts.FrontEndMaster')
@section('FrontTitle', "$post->blog_name".' - '.'Healthy Botic')
@section('MetaTitle', "$post->blog_meta_title")
@section('description', "$post->blog_meta_description")
@section('Keyword', "$post->blog_meta_keyword")
@section('author', "$userDet->username")
@section('FrontEnd')

    <section class="pb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <ul class="breadcrumbs bg-light mb-4">
                        <li class="breadcrumbs__item">
                            <a href="{{ route('FrontEnd.Index') }}" class="breadcrumbs__url">
                                <i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumbs__item">
                            <a href="" class="breadcrumbs__url">Article List</a>
                        </li>
                        <li class="breadcrumbs__item breadcrumbs__item--current">
                            Article Details
                        </li>
                    </ul>
                   
                </div>
                <div class="col-md-8">
                    
                    <div class="wrap__article-detail">
                        <div class="wrap__article-detail-title">
                            <h1>{{ $post->blog_name }}</h1>
                            <h3>
                                {{ $post->blog_short_desc }}.
                            </h3>
                        </div>
                        <hr />
                        <div class="wrap__article-detail-info">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <figure class="image-profile">
                                        <img src="{{ asset('SupUser/uploads/usersimage') }}/{{ $userDet->proimage }}"
                                            alt="" />
                                    </figure>
                                </li>
                                <li class="list-inline-item">
                                    <span> by </span>
                                    <a href="#"> {{ $post->username }}, </a>
                                </li>
                                <li class="list-inline-item">
                                    <span class="text-dark text-capitalize ml-1">
                                        {{ $post->updated_at->format('l, j F Y') }}
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span class="text-dark text-capitalize"> in </span>
                                    <a href="{{ route('category.post', ['list_post' => $post->sub_category_slug]) }}"> {{ $post->sub_category_name }} </a>
                                </li>
                            </ul>
                        </div>

                        <div class="wrap__article-detail-image mt-4">
                            <figure>
                                <img src="{{ asset('uploads/postimage') }}/{{ $post->blog_image }}" alt=""
                                    class="img-fluid" />
                            </figure>
                        </div>
                        <div class="wrap__article-detail-content">
                            <div class="total-views">
                                <div class="total-views-read">
                                    {{ $postViewCount }}
                                    <span> views </span>
                                </div>

                                <ul class="list-inline">
                                    <span class="share">share on:</span>
                                    @php
                                        $curentUrl = URL::current();
                                    @endphp
                                    
                                    
                                    
                                    <li class="list-inline-item" style="">
                                        <style>
                                            div#social-links ul li{
                                                display: inline-block;
                                            }
                                            div#social-links ul li a{
                                                padding: 10px;
                                                margin: 1px;
                                                font-size: 30px;
                                                
                                            }
                                        </style>
                                        <div class="social-share">
                                            {!! $socialShare !!}
                                        </div>
                                    </li>
                                    
                                    
                                </ul>
                            </div>
                            <p class="has-drop-cap-fluid">
                                {!! $post->description !!}
                            </p>


                        </div>
                    </div>
                    <!-- end content article detail -->

                    <!-- tags -->
                    <!-- News Tags -->
                    <div class="blog-tags">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <i class="fa fa-tags"> </i>
                            </li>
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
                        </ul>
                    </div>
                    
                    <div class="wrap__profile">
                        <div class="wrap__profile-author">
                            <figure>
                                <img src="{{ asset('SupUser/uploads/usersimage') }}/{{ $userDet->proimage }}" alt="" class="img-fluid rounded-circle" />
                            </figure>
                            <div class="wrap__profile-author-detail">
                                <div class="wrap__profile-author-detail-name">author</div>
                                <h4>{{ $userDet->username }}</h4>
                                <p>
                                    {{ $userAbout->about }}
                                </p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="{{ $userDetSocial->facebook }}" target="blank"
                                            class="btn btn-social btn-social-o facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="{{ $userDetSocial->twitter }}" target="blank"
                                            class="btn btn-social btn-social-o twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="{{ $userDetSocial->instagram }}" target="blank"
                                            class="btn btn-social btn-social-o instagram">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-social btn-social-o telegram" target="blank">
                                            <i class="fa fa-telegram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="{{ $userDetSocial->linkedin }}" target="blank"
                                            class="btn btn-social btn-social-o linkedin">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        @comments(['model' => $post])
                    </div>
                   
                    <br>
                    <br>
                    
                    <div class="clearfix"></div>

                    <div class="related-article">
                        <h4>you may also like</h4>

                        <div class="article__entry-carousel-three">
                            @foreach ($youMayAlsoLike as $alsoLike)
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="{{ route('blog.details', ['post_name' => $alsoLike->slug]) }}">
                                            <img src="{{ asset('uploads/postimage') }}/{{ $alsoLike->blog_image }}" alt="{{ $alsoLike->blog_meta_keyword }}" class="img-fluid" />
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary"> by {{ $alsoLike->username }} </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span> {{ $alsoLike->updated_at->format('l, j F Y') }} </span>
                                            </li>
                                        </ul>
                                        <h5>
                                            <a href="{{ route('blog.details', ['post_name' => $alsoLike->slug]) }}">
                                                {{ $alsoLike->blog_name }}.
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sticky-top">
                        <aside class="wrapper__list__article">
                            <!-- <h4 class="border_section">Sidebar</h4> -->
                            <div class="mb-4">
                                <div class="widget__form-search-bar">
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <input class="form-control border-secondary border-right-0 rounded-0"
                                                value="" placeholder="Search" />
                                        </div>
                                        <div class="col-auto">
                                            <button
                                                class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrapper__list__article-small">
                                @foreach ($reletedIn as $relative)
                                    
                               
                                <div class="mb-3">
                                    <!-- Post Article -->
                                    <div class="card__post card__post-list">
                                        <div class="image-sm">
                                            <a href="{{ route('blog.details', ['post_name' => $relative->slug]) }}">
                                                <img src="{{ asset('uploads/postimage') }}/{{ $relative->blog_image }}" class="img-fluid"
                                                    alt="" />
                                            </a>
                                        </div>

                                        <div class="card__post__body">
                                            <div class="card__post__content">
                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                by {{ $relative->username }}
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                                {{ $relative->updated_at->format('l, j F Y') }}
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h6>
                                                        <a href="{{ route('blog.details', ['post_name' => $relative->slug]) }}">
                                                            {{ $relative->blog_name }}-->
                                                        </a>
                                                    </h6>
                                                    
                      
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="#">
                                            <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid" />
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <div class="article__category">travel</div>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary"> by david hall </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="text-dark text-capitalize">
                                                    descember 09, 2016
                                                </span>
                                            </li>
                                        </ul>
                                        <h5>
                                            <a href="#">
                                                Proin eu nisl et arcu iaculis placerat sollicitudin ut
                                                est
                                            </a>
                                        </h5>
                                        <p>
                                            Maecenas accumsan tortor ut velit pharetra mollis. Proin
                                            eu nisl et arcu iaculis placerat sollicitudin ut est. In
                                            fringilla dui dui.
                                        </p>
                                        <a href="#" class="btn btn-outline-primary mb-4 text-capitalize">
                                            read more</a>
                                    </div>
                                </div>
                            </div>
                        </aside>

                        <!-- social media -->
                        <aside class="wrapper__list__article">
                            <h4 class="border_section">stay conected</h4>
                            <!-- widget Social media -->
                            <div class="wrap__social__media">
                                <a href="#" target="_blank">
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
                                <a href="#" target="_blank">
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
                                <a href="#" target="_blank">
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
                        <!-- End social media -->

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
                            <h4 class="border_section">newsletter</h4>
                            <!-- Form Subscribe -->
                            <div class="widget__form-subscribe bg__card-shadow">
                                <h6>The most important world news and events of the day.</h6>
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

                        <aside class="wrapper__list__article">
                            <h4 class="border_section">Advertise</h4>
                            <a href="#">
                                <figure>
                                    <img src="images/placeholder/500x400.jpg" alt="" class="img-fluid" />
                                </figure>
                            </a>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
