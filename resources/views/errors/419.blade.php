
@extends('layouts.FrontEndMaster')

@section('FrontTitle', '519 - Healthy Botic')
@section('FrontEnd')

    <div id="notfound">
        <div class="notfound">
            <div class="notfound-404">
                <h1>519</h1>
            </div>
            <h2>Oops, Page Expired!</h2>
            <form class="notfound-search">
                <input type="text" placeholder="Search...">
                <button type="button">Search</button>
            </form>
            <a href="{{ URL::previous() }}"><span class="arrow"></span>Go Back</a>
        </div>
    </div>
    @extends('layouts.errorCustomMaster')
@endsection


