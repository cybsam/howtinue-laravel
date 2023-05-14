  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between">
          <a href="{{ route('supuser.dashboard') }}" class="logo d-flex align-items-center">
              <img src="{{ asset('SupUser/assets/img/logo.png') }}" alt="">
              <span class="d-none d-lg-block">Healthy Botic</span>
          </a>
          <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->

      <div class="search-bar">
          <form class="search-form d-flex align-items-center" method="POST" action="#">
              <input type="text" name="query" placeholder="Search" title="Enter search keyword">
              <button type="submit" title="Search"><i class="bi bi-search"></i></button>
          </form>
      </div><!-- End Search Bar -->

      <nav class="header-nav ms-auto">
          <ul class="d-flex align-items-center">

              <li class="nav-item d-block d-lg-none">
                  <a class="nav-link nav-icon search-bar-toggle " href="#">
                      <i class="bi bi-search"></i>
                  </a>
              </li><!-- End Search Icon-->

              <li class="nav-item dropdown">

                  <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                      <i class="bi bi-bell"></i>
                      <span class="badge bg-primary badge-number">4</span>
                  </a><!-- End Notification Icon -->

                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                      <li class="dropdown-header">
                          You have 4 new notifications
                          <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li class="notification-item">
                          <i class="bi bi-exclamation-circle text-warning"></i>
                          <div>
                              <h4>Lorem Ipsum</h4>
                              <p>Quae dolorem earum veritatis oditseno</p>
                              <p>30 min. ago</p>
                          </div>
                      </li>

                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li class="notification-item">
                          <i class="bi bi-x-circle text-danger"></i>
                          <div>
                              <h4>Atque rerum nesciunt</h4>
                              <p>Quae dolorem earum veritatis oditseno</p>
                              <p>1 hr. ago</p>
                          </div>
                      </li>

                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li class="notification-item">
                          <i class="bi bi-check-circle text-success"></i>
                          <div>
                              <h4>Sit rerum fuga</h4>
                              <p>Quae dolorem earum veritatis oditseno</p>
                              <p>2 hrs. ago</p>
                          </div>
                      </li>

                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li class="notification-item">
                          <i class="bi bi-info-circle text-primary"></i>
                          <div>
                              <h4>Dicta reprehenderit</h4>
                              <p>Quae dolorem earum veritatis oditseno</p>
                              <p>4 hrs. ago</p>
                          </div>
                      </li>

                      <li>
                          <hr class="dropdown-divider">
                      </li>
                      <li class="dropdown-footer">
                          <a href="#">Show all notifications</a>
                      </li>

                  </ul><!-- End Notification Dropdown Items -->

              </li><!-- End Notification Nav -->

              <li class="nav-item dropdown">
                @php
                    $msgfetch = DB::table('contacts')->where('seen',0)->take(5)->get();
                    $countMsg = $msgfetch->count();
                @endphp

                  <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                      <i class="bi bi-chat-left-text"></i>
                      <span class="badge bg-success badge-number">{{ $countMsg }}</span>
                  </a><!-- End Messages Icon -->

                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                      <li class="dropdown-header">
                          You have {{ $countMsg }} new messages
                          <a href="{{ route('supuser.frontendcontact') }}"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>
                      @foreach ($msgfetch as $fetchMsg)


                      <li class="message-item">
                          <a href="{{ route('supuser.frontendcontactMsgShow',['message_id'=>$fetchMsg->id]) }}">
                              <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                              <div>
                                  <h4>{{ $fetchMsg->anonymouse_name }}</h4>
                                  <p>{{ $fetchMsg->anonymouse_subject }}...</p>
                                  <p>{{ $fetchMsg->created_at }}</p>
                              </div>
                          </a>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>
                      @endforeach

                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li class="dropdown-footer">
                          <a href="{{ route('supuser.frontendcontact') }}">Show all messages</a>
                      </li>

                  </ul><!-- End Messages Dropdown Items -->

              </li><!-- End Messages Nav -->

              <li class="nav-item dropdown pe-3">

                  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                      data-bs-toggle="dropdown">
                      <img src="{{ asset('SupUser/uploads/usersimage') }}/{{ Auth::user()->proimage }}" alt="Profile"
                          class="rounded-circle">
                      <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                  </a><!-- End Profile Iamge Icon -->

                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                      <li class="dropdown-header">
                          <h6>{{ Str::title(Auth::user()->name) }}</h6>
                          <span>{{ __('Super Admin') }}</span>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li>
                          <a class="dropdown-item d-flex align-items-center"
                              href="{{ route('supuser.profile.dashboard') }}">
                              <i class="bi bi-person"></i>
                              <span>My Profile</span>
                          </a>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li>
                          <a class="dropdown-item d-flex align-items-center"
                              href="{{ route('supuser.profile.dashboard') }}">
                              <i class="bi bi-gear"></i>
                              <span>Account Settings</span>
                          </a>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li>
                          <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                              <i class="bi bi-question-circle"></i>
                              <span>Need Help?</span>
                          </a>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li>
                          <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">

                              <i class="bi bi-box-arrow-right"></i>
                              <span>Sign Out</span>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </a>
                      </li>

                  </ul>
              </li>
          </ul>
      </nav>
  </header>
