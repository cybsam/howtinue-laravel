@extends('layouts.FrontEndMaster')
@section('FrontTitle', 'Terms Of Use - HealthyBotic')
@section('MetaTitle', 'Terms of use')
@section('description', 'Description of terms of use')
@section('Keyword', 'terms of use keyword')
@section('author', 'healthyBotic')
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
                            <a href="" class="breadcrumbs__url">Terms Of Condition</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-10 m-auto">
                    {!! $fetchTermsOfCondition->description	 !!}

                </div>
            </div>
        </div>
    </section>





@endsection
