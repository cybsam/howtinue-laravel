@extends('layouts.FrontEndMaster')
@section('FrontTitle', 'Search Result - HealthyBotic')
@section('FrontEnd')





    {{-- <h1>Search</h1>

There are {{ $searchResults->count() }} results.

@foreach ($searchResults->groupByType() as $type => $modelSearchResults)
   <h2>{{ $type }}</h2>

   @foreach ($modelSearchResults as $searchResult)
       <ul>
            <li><a href="{{ $searchResult->url }}">{{ $searchResult->title }}</a></li>
       </ul>
   @endforeach
@endforeach --}}

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <!-- Search result -->
                    <div class="wrap__search-result">
                        <div class="wrap__search-result-keyword">
                            <h5>Search results for keyword: <span class="text-primary"> "{{ $searchQueryValue }}" </span>
                                found in <span class="text-primary">{{ $searchQuery->count() }}</span> posts and  <span class="text-primary">{{ $commntsGetFromDatabase->count() }}</span> comments. </h5>
                        </div>

                        <!-- Post Article List -->
                        @foreach ($searchQuery as $search)
                            <div class="card__post card__post-list card__post__transition mt-30">
                                <div class="row ">
                                    <div class="col-md-5">
                                        <div class="card__post__transition">
                                            <a href="{{ route('blog.details', ['post_name' => $search->slug]) }}">
                                                <img src="{{ asset('uploads/postimage/') }}/{{ $search->blog_image }}"
                                                    class="img-fluid w-100" alt="{{ $search->blog_meta_keyword }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 my-auto pl-0">
                                        <div class="card__post__body ">
                                            <div class="card__post__content  ">
                                                <div class="card__post__category ">
                                                    <a
                                                        href="{{ route('category.post', ['list_post' => $search->sub_category_slug]) }}" style="color:#fff;">{{ $search->sub_category_name }}</a>
                                                </div>
                                                <div class="card__post__author-info mb-2">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                by {{ $search->username }}
                                                            </span>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                                {{ $search->updated_at->format('l, j F Y') }}
                                                            </span>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="card__post__title">
                                                    <h5>
                                                        <a
                                                            href="{{ route('blog.details', ['post_name' => $search->slug]) }}">
                                                            {{ $search->blog_name }}
                                                        </a>
                                                    </h5>
                                                    <p class="d-none d-lg-block d-xl-block mb-0">
                                                        {{ $search->blog_short_desc }}
                                                    </p>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                    <hr>
                    <div class="mt-5">
                        <h5>Search results for keyword: <span class="text-primary"> "{{ $searchQueryValue }}" </span>
                            found in {{ $commntsGetFromDatabase->count() }} comments. </h5>

                        <div class="card__post card__post-list">

                            @foreach ($commntsGetFromDatabase as $comments)


                            <div class="card__post__body ">
                                <div class="card__post__content">

                                    <div class="card__post__author-info mb-2">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    by @php
                                                        $id = $comments->commenter_id;
                                                        $name = DB::table('users')->where('id',$id)->first();

                                                    @endphp
                                                    {{ $name->username }}
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="text-dark text-capitalize">
                                                    {{ $comments->updated_at }}
                                                </span>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="card__post__title">
                                        <h6>
                                            @php
                                                $blogId = $comments->commentable_id;
                                                $findSlag = DB::table('sup_user_blogs')->where('id',$blogId)->first();
                                                $slub = $findSlag->slug;
                                            @endphp
                                            <a href="{{ route('blog.details', ['post_name' => $slub]) }}">

                                                {{ $comments->comment }}
                                            </a>
                                        </h6>
                                        <!-- <p class="d-none d-lg-block d-xl-block">
                                                Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat
                                                sollicitudin ut est. In fringilla dui dui.
                                            </p> -->

                                    </div>

                                </div>
                                <hr>

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4">

                    {{-- {{ $searchQuery->links() }} --}}

                    {{-- <div class="pagination-area">
                            <div class="pagination wow fadeIn animated" data-wow-duration="2s" data-wow-delay="0.5s"
                                style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">

                                <a href="#">«</a>
                                <a href="#">1</a>
                                <a class="active" href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <a href="#">5</a>

                                <a href="#">»</a>
                            </div>
                        </div> --}}


                </div>

            </div>

        </div>
        </div>
    </section>


    {{-- <h1>search</h1>
    there are {{ $searchQuery->count() }} result<br /><br>
    @foreach ($searchQuery as $search)
        @if ($search->blog_name)
            blog name = {{ $search->blog_name }} <br>
            <hr>
        @endif
        @if ($search->blog_short_desc)
            <br><br>blog short = {{ $search->blog_short_desc }}
            <hr>
        @endif
        @if ($search->sub_category_name)
            <br><br>Category = {{ $search->sub_category_name }}
            <hr>
        @endif
    @endforeach --}}






@endsection
