@extends('layouts.BlogUserMaster')
@section('title', 'Contact message - HealthyBotic')
@section('BlogUserContent')

<div class="pagetitle">
    <h1>Contact Message</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('blogusr.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Contact Message</li>
    </ol>
    </nav>
</div>
<table class="table table-hover datatable table-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col"> Name</th>
            <th scope="col">Email</th>

            <th scope="col">Website</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
            <th scope="col">Time</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($showContact as $ShowMsg)
            <th scope="row"><a href="#">#{{ $ShowMsg->id }}</a></td>
            <td>{{ $ShowMsg->anonymouse_name }}</td>
            <td>{{ $ShowMsg->anonymouse_email }}</td>

            <td>{{ $ShowMsg->anonymouse_website }}</td>
            <td>
               {{ $ShowMsg->anonymouse_subject }}
            </td>
            <td>
                {{ $ShowMsg->anonymouse_message }}
             </td>
            <td>
              {{ $ShowMsg->created_at->diffForHumans() }}</td>
            <td>
              <a href="" >Show</a>
              
            </td>
            </tr>
        @endforeach

    </tbody>
</table>



@endsection
