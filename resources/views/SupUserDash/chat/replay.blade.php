@extends('layouts.SupUserMaster')
@section('title', 'Super Catagory - HowTinue')
@section('SupUserContent')


    <div class="pagetitle">
        <h1>Replay Chat</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('supuser.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('supuser.chat') }}">Chat</a></li>
                <li class="breadcrumb-item active">Replay</li>
            </ol>
        </nav>
    </div>

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Chat Option</h4>
          <div class="chat-box scrollable" style="height: 475px">
            <!--chat Row -->
            <ul class="chat-list">
              <!--chat Row -->
              <li class="chat-item">
                <div class="chat-img">
                  <img src="../assets/images/users/1.jpg" alt="user" />
                </div>
                <div class="chat-content">
                  <h6 class="font-medium">James Anderson</h6>
                  <div class="box bg-light-info">
                    Lorem Ipsum is simply dummy text of the printing
                    &amp; type setting industry.
                  </div>
                </div>
                <div class="chat-time">10:56 am</div>
              </li>
              <!--chat Row -->
              <li class="chat-item">
                <div class="chat-img">
                  <img src="../assets/images/users/2.jpg" alt="user" />
                </div>
                <div class="chat-content">
                  <h6 class="font-medium">Bianca Doe</h6>
                  <div class="box bg-light-info">
                    It’s Great opportunity to work.
                  </div>
                </div>
                <div class="chat-time">10:57 am</div>
              </li>
              <!--chat Row -->
              <li class="odd chat-item">
                <div class="chat-content">
                  <div class="box bg-light-inverse">
                    I would love to join the team.
                  </div>
                  <br />
                </div>
              </li>
              <!--chat Row -->
              <li class="odd chat-item">
                <div class="chat-content">
                  <div class="box bg-light-inverse">
                    Whats budget of the new project.
                  </div>
                  <br />
                </div>
                <div class="chat-time">10:59 am</div>
              </li>
              <!--chat Row -->
              <li class="chat-item">
                <div class="chat-img">
                  <img src="../assets/images/users/3.jpg" alt="user" />
                </div>
                <div class="chat-content">
                  <h6 class="font-medium">Angelina Rhodes</h6>
                  <div class="box bg-light-info">
                    Well we have good budget for the project
                  </div>
                </div>
                <div class="chat-time">11:00 am</div>
              </li>
              <!--chat Row -->
            </ul>
          </div>
        </div>
        <div class="card-body border-top">
          <div class="row">
            <div class="col-9">
              <div class="input-field mt-0 mb-0">
                <textarea
                  id="textarea1"
                  placeholder="Type and enter"
                  class="form-control border-0"
                ></textarea>
              </div>
            </div>
            <div class="col-3">
              <a
                class="btn-circle btn-lg btn-cyan float-end text-white"
                href="javascript:void(0)"
                ><i class="mdi mdi-send fs-3"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  @endsection
