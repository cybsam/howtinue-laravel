@extends('layouts.BlogUserMaster')
@section('title', 'Blogger - HowTinue')
@section('BlogUserContent')

<div class="pagetitle">
    <h1>Moderator Dashboard</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('blogusr.dashboard') }}">Home</a></li>
    </ol>
    </nav>
</div>

<section class="section dashboard">
    <div class="row">


        <div class="col-lg-8">
            <div class="row">



                <div class="col-12">
                    <div class="card recent-sales overflow-auto">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Recent Article <span>| Today</span></h5>

                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Article</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listAllArticle as $listAllArticle)
                                    <tr>
                                        <th scope="row"><a href="#">#{{ $listAllArticle->id }}</a></th>
                                        <td>{{ $listAllArticle->username }}</td>
                                        <td><a href="{{ route('supuserBlog.pendingBlogShow',['blog_id'=>$listAllArticle->id]) }}" class="text-primary">{{ Str::limit($listAllArticle->blog_name, 20) }}</a></td>
                                        <td>{{ $listAllArticle->sub_category_name }}</td>
                                        <td><span class="badge bg-{{ $listAllArticle->post_status == 0 ? 'success':'warning' }}">@if($listAllArticle->post_status == 0)
                                            {{ __('Approved') }}
                                        @else
                                            {{ __('Pending') }}
                                        @endif</span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div><!-- End Recent Sales -->



            </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

            <!-- Recent Activity -->
            <div class="card">
                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                    <div class="activity">
                        @foreach ($listComment as $recComment)
                        <div class="activity-item d-flex">
                            <div class="activite-label">{{ $recComment->updated_at }}</div>
                            <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                            <div class="activity-content">
                                @php
                                            $blogId = $recComment->commentable_id;
                                            $findSlag = DB::table('sup_user_blogs')->where('id',$blogId)->first();
                                            $slub = $findSlag->slug;
                                        @endphp
                                <a href="{{ route('blog.details', ['post_name' => $slub]) }}" class="fw-bold text-dark">{{ $recComment->comment }}</a>

                            </div>
                        </div>
                        @endforeach


                    </div>

                </div>
            </div>


        </div>

    </div>
</section>


@endsection
