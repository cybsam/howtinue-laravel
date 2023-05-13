@extends('layouts.SupUserMaster')
@section('title', 'Chat - Healthy Botic')
@section('SupUserContent')


    <div class="pagetitle">
        <h1>Chat</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('supuser.dashboard') }}">Home</a></li>

                <li class="breadcrumb-item active">Chat</li>
            </ol>
        </nav>
    </div>

    <table class="table table-hover datatable table-sm">

        <tbody>


            @foreach ($userShowAll as $SupUser)
                <tr class="table-light">
                    <th scope="row"><a href="#">#{{ $SupUser->id }}</a></td>

                    <td scope="row"><a class="" href=""><span>@</span>{{ $SupUser->username }}</a></td>
                    <td scope="row">{{ Str::limit($SupUser->email, 10) }}</td>

                    <td scope="row">
                        <span class="badge rounded-pill bg-danger">
                            @php
                            $userId = $SupUser->id;
                                $chatFetch = DB::table('chats')->where('sender_id',$userId)->count();


                            @endphp
                            {{ $chatFetch }}



                        </span>
                    </td>
                    <td scope="row">


                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="{{ route('supuser.chatshow', ['user_id' => $SupUser->id]) }}"
                                class="btn btn-success btn-sm">Replay</a>
                        </div>


                    </td>
                </tr>
            @endforeach
            {{-- {{ route('subcatagory.Restor',['cate_id'=>$listCat->id ]) }} --}}
        </tbody>
    </table>













@endsection
