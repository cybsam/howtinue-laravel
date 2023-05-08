@extends('layouts.FrontEndMaster')

@section('FrontTitle', '404 - Healthy Botic')
@section('FrontEnd')

    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">
                <div id="notfound">
                    <div class="notfound">
                        <div class="notfound-404">
                            <h1>404</h1>
                        </div>
                        <h2>Oops, The Page you are looking for can't be found!</h2>
                        <form class="notfound-search" action="{{ route('frontEnd.SearchIndex') }}" method="POST">
                            @csrf
                            <input type="text" name="__search" id="__search" placeholder="Search...">
                            <button type="submit">Search</button>
                        </form>
                        <a href="{{ URL::previous() }}"><span class="arrow"></span>Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @extends('layouts.errorCustomMaster')
@endsection
