    <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Request::is('supuser.dashboard') ? '':'active'}}" href="{{ route('supuser.dashboard') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Apps</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
            <i class="bi bi-chat-text"></i>
            <span>Chat</span>
            </a>
        </li>

        {{-- <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('supuser.users.team') }}">
            <i class="bi bi-people-fill"></i>
            <span>Team</span>
            </a>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#email-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-envelope"></i><span>Emails</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="email-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#">
                    <i class="bi bi-circle"></i><span>Compose</span>
                    </a>
                </li>
            <li>
                <a href="#">
                <i class="bi bi-download"></i><span>Inbox</span>
                </a>
            </li>
            <li>
                <a href="#">
                <i class="bi bi-circle"></i><span>Drifts</span>
                </a>
            </li>
            <li>
                <a href="#">
                <i class="bi bi-circle"></i><span>Trash</span>
                </a>
            </li>
            </ul>
        </li>

        <li class="nav-heading">Blog</li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Post Blog</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('supuser.blog') }}">
                <i class="bi bi-circle"></i><span>List Blog</span>
                </a>
            </li>
            <li>
                <a href="{{ route('supuser.blog.insert') }}">
                <i class="bi bi-circle"></i><span>Insert Blog</span>
                </a>
            </li>
            <li>
                <a href="components-badges.html">
                <i class="bi bi-circle"></i><span>Badges</span>
                </a>
            </li>
            
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="forms-elements.html">
                <i class="bi bi-circle"></i><span>Form Elements</span>
                </a>
            </li>
            <li>
                <a href="forms-layouts.html">
                <i class="bi bi-circle"></i><span>Form Layouts</span>
                </a>
            </li>
            <li>
                <a href="forms-editors.html">
                <i class="bi bi-circle"></i><span>Form Editors</span>
                </a>
            </li>
            <li>
                <a href="forms-validation.html">
                <i class="bi bi-circle"></i><span>Form Validation</span>
                </a>
            </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="tables-general.html">
                <i class="bi bi-circle"></i><span>General Tables</span>
                </a>
            </li>
            <li>
                <a href="tables-data.html">
                <i class="bi bi-circle"></i><span>Data Tables</span>
                </a>
            </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-bar-chart"></i><span>Catagory</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('subcatagory.index') }}">
                <i class="bi bi-circle"></i><span>List Catagory</span>
                </a>
            </li>
            <li>
                <a href="{{ route('subcatagory.insert') }}">
                <i class="bi bi-circle"></i><span>Insert Sub Catagory</span>
                </a>
            </li>
            <li>
                <a href="{{ route('subcatagoryIndex.archived') }}">
                <i class="bi bi-circle"></i><span>Archived</span>
                </a>
            </li>
            </ul>
        </li><!-- End Charts Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#catagory-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-gem"></i><span>Super Catagory</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="catagory-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('supuser.cata.super') }}">
                <i class="bi bi-circle"></i><span>Active Catagory</span>
                </a>
            </li>
            <li>
                <a href="{{ route('supuser.cata.super.insert') }}">
                <i class="bi bi-circle"></i><span>Insert Catagory</span>
                </a>
            </li>
            <li>
                <a href="{{ route('supuser.cata.super.archive') }}">
                <i class="bi bi-circle"></i><span>Archived</span>
                </a>
            </li>
            </ul>
        </li><!-- End Icons Nav -->

        <li class="nav-heading">Users</li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-person-lines-fill"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="users-nav" class="nav-content collapse {{ Request::is('supuser.listuser') || Request::is('blogger.datatable.listuser') ? ' show':'' }}" data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('supuser.listuser') }}" class="{{ Request::is('supuser.listuser') ? ' active':'' }}">
                <i class="bi bi-circle"></i><span>List Users</span>
                </a>
            </li>
            <li>
                <a href="{{ route('supuser.archive') }}">
                <i class="bi bi-circle"></i><span>Archive Users</span>
                </a>
            </li>
            <li>
                <a href="{{ route('supuser.archiveBlock') }}">
                <i class="bi bi-circle"></i><span>Block Users</span>
                </a>
            </li>
            </ul>
        </li>

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('supuser.settings.main') }}">
            <i class="bi bi-gear"></i>
            <span>Settings</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-faq.html">
            <i class="bi bi-question-circle"></i>
            <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('supuser.frontendcontact') }}">
            <i class="bi bi-envelope"></i>
            <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-register.html">
            <i class="bi bi-card-list"></i>
            <span>Register</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-login.html">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" target="blank" href="{{ route('FrontEnd.Index') }}">
            <i class="bi bi-dash-circle"></i>
            <span>View Site</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('supuser.blank') }}">
            <i class="bi bi-file-earmark"></i>
            <span>Blank</span>
            </a>
        </li><!-- End Blank Page Nav -->
    </ul>
</aside><!-- End Sidebar-->
