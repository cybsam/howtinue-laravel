    <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('blogusr.dashboard') }}">
            <i class="bi bi-grid"></i>
            <span>Blogger Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Apps</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
            <i class="bi bi-chat-text"></i>
            <span>Chat</span>
            </a>
        </li>

        
        <li class="nav-heading">Blog</li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Post Blog</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="components-alerts.html">
                <i class="bi bi-circle"></i><span>Alerts</span>
                </a>
            </li>
            <li>
                <a href="components-accordion.html">
                <i class="bi bi-circle"></i><span>Accordion</span>
                </a>
            </li>
            <li>
                <a href="components-badges.html">
                <i class="bi bi-circle"></i><span>Badges</span>
                </a>
            </li>
            <li>
                <a href="components-breadcrumbs.html">
                <i class="bi bi-circle"></i><span>Breadcrumbs</span>
                </a>
            
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-journal-text"></i><span>Pending Blog</span><i class="bi bi-chevron-down ms-auto"></i>
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
            <i class="bi bi-layout-text-window-reverse"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="">
                    <i class="bi bi-circle"></i><span>Insert Category</span>
                </a>
            </li>
            <li>
                <a href="{{ route('bloggerCate.myCate') }}">
                    <i class="bi bi-circle"></i><span>My Category</span>
                </a>
            </li>
            <li>
                <a href="{{ route('bloggerCate.index') }}">
                <i class="bi bi-circle"></i><span>List Category</span>
                </a>
            </li>
            
            </ul>
        </li><!-- End Tables Nav -->

        
       

        <li class="nav-heading">Users</li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-person-lines-fill"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="users-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('blogusr.users') }}">
                <i class="bi bi-circle"></i><span>List Users</span>
                </a>
            </li>
            <li>
                <a href="#">
                <i class="bi bi-circle"></i><span>Remix Icons</span>
                </a>
            </li>
            <li>
                <a href="icons-boxicons.html">
                <i class="bi bi-circle"></i><span>Boxicons</span>
                </a>
            </li>
            </ul>
        </li>

        <li class="nav-heading">Pages</li>

        

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-faq.html">
            <i class="bi bi-question-circle"></i>
            <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-contact.html">
            <i class="bi bi-envelope"></i>
            <span>Contact Message</span>
            </a>
        </li><!-- End Contact Page Nav -->
{{-- 
        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-register.html">
            <i class="bi bi-card-list"></i>
            <span>Register</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-login.html">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Login</span>
            </a>
        </li> --}}


    </ul>
</aside><!-- End Sidebar-->
