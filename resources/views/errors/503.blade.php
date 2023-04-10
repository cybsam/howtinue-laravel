
@extends('layouts.FrontEndMaster')
@section('FrontTitle', '503 - Healthy Botic')
@section('FrontEnd')

    <div id="notfound">
        <div class="notfound">
            <div class="notfound-404">
                <h1>503</h1>
            </div>
            <h2>Oops, Service Unavailable!</h2>
            <form class="notfound-search">
                <input type="text" placeholder="Search...">
                <button type="button">Search</button>
            </form>
            
            <a href="{{ URL::previous() }}"><span class="arrow"></span>Go Back</a>
        </div>
    </div>
    @extends('layouts.errorCustomMaster')
@endsection



