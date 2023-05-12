@extends('layouts.FrontEndMaster')
@section('FrontTitle', 'About Us - HealthyBotic')
@section('MetaTitle', 'About us ')
@section('description', 'about us description')
@section('Keyword', 'about us keyword')
@section('author', 'HealthyBotic')
@section('FrontEnd')




    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <ul class="breadcrumbs bg-light mb-4">
                        <li class="breadcrumbs__item">
                            <a href="{{ route('FrontEnd.Index') }}" class="breadcrumbs__url">
                                <i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumbs__item">
                            <a href="" class="breadcrumbs__url">About Us</a>
                        </li>

                    </ul>


                    <div class="wrap__about-us">
                        {!! $fetchAbout->description !!}
                        <div class="clearfix"></div>
                        <h2>Our Valuable Team Members</h2>
                        <!-- team member -->
                        <div class="team-member row">
                            @foreach ($valuableTeamMember as $randomTeamMember)
                            <div class="col-md-3">
                                <figure class="member"> <img src="{{ asset('SupUser/uploads/usersimage') }}/{{ $randomTeamMember->proimage }}" style="height:600;width:600;" class="img-fluid"
                                        alt="Image">
                                    <figcaption>
                                        <h4>{{ $randomTeamMember->name }}</h4>
                                        <small>@if ($randomTeamMember->role == 1)
                                            Admin
                                        @else
                                            Editor
                                        @endif

                                        </small>
                                        @php
                                        $id = $randomTeamMember->id;
                                            $socialLink = DB::table('users_info_admins')->where('user_id',$id)->first();
                                        @endphp

                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="{{ $socialLink->facebook }}"><i class="fa fa-facebook"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="{{ $socialLink->twitter }}"><i class="fa fa-twitter"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="{{ $socialLink->instagram }}"><i class="fa fa-youtube-play"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="{{ $socialLink->linkedin }}"><i class="fa fa-linkedin"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                            @endforeach
                        </div>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>

                    </div>
                </div>


            </div>
        </div>
    </section>


@endsection
