@extends('layouts.FrontEndMaster')

@section('FrontTitle', '403 - Healthy Botic')
@section('FrontEnd')
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">
                <div id="notfound">
                    <div class="notfound">
                        <div class="notfound-404">
                            <h1>500</h1>
                        </div>
                        <h2>Oops, Server Error!</h2>
                        <form class="notfound-search">
                            <input type="text" placeholder="Search...">
                            <button type="button">Search</button>
                        </form>
                        <a href="{{ URL::previous() }}"><span class="arrow"></span>Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @extends('layouts.errorCustomMaster')
@endsection
