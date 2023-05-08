@extends('layouts.BasUserMaster')
@section('FrontTitle', 'Dashboard')
@section('basUser')


    <section class="pb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- breaddcrumb -->
                    <!-- Breadcrumb -->
                    <ul class="breadcrumbs bg-light mb-4">
                        <li class="breadcrumbs__item">
                            <a href="{{ route('basUser.dashboard') }}" class="breadcrumbs__url">
                                <i class="fa fa-home"></i> Dashboard</a>
                        </li>

                        <li class="breadcrumbs__item breadcrumbs__item--current">
                            OverView
                        </li>
                    </ul>
                    <!-- end breadcrumb -->
                </div>

                <div class="col-md-6 m-auto">
                    <h4>Article List</h4>
                    <div>
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($blog as $blog)
                                <tr>
                                    <td><a
                                            href="{{ route('blog.details', ['post_name' => $blog->slug]) }}">{{ Str::limit($blog->blog_name, 35, '...') }}</a>
                                    </td>
                                    <td>
                                        @if ($blog->post_status == 0)
                                            {{ __('Active') }}
                                        @else
                                            {{ __('InActive') }}
                                        @endif
                                        @if ($blog->post_status == 3)
                                            {{ __('InActive') }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
            </div>
            <div class="col-md-6 m-auto">
                <h4>Comments you shoot</h4>
                <table>
                    <tr>
                        <th>Comments</th>
                        <th>View</th>
                    </tr>
                    @foreach ($comments as $comment)
                        <tr>
                            <td>
                                @php
                                    $blogId = $comment->commentable_id;
                                    $findSlag = DB::table('sup_user_blogs')
                                        ->where('id', $blogId)
                                        ->first();
                                    $slub = $findSlag->slug;
                                @endphp
                                <a
                                    href="{{ route('blog.details', ['post_name' => $slub]) }}">{{ $comment->comment }}</a>
                            </td>


                            </td>
                            <td>
                                @php
                                    $blogId = $comment->commentable_id;
                                    $findSlag = DB::table('sup_user_blogs')
                                        ->where('id', $blogId)
                                        ->first();
                                    $slub = $findSlag->slug;
                                @endphp
                                <a href="{{ route('blog.details', ['post_name' => $slub]) }}">View</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>

        </div>
        </div>

    </section>



    <div class="container">
        <div class="row justify-content-center">

        </div>
    </div>



@endsection
