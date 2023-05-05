@extends('layouts.BasUserMaster')
@section('FrontTitle', 'User Activity - HealthyBotic')
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
                        Admin Contact
                    </li>
                </ul>
                <!-- end breadcrumb -->
            </div>

            {{-- content will go here --}}

        </div>
    </div>
</section>


@endsection