<!DOCTYPE html>
<html lang="en" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Dashboard | Live Workshop & Certification Management System </title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ mix('backend/css/dashlite.css') }}">
    <link id="skin-default" rel="stylesheet" href="{{ mix('backend/css/theme.css') }}">
    @yield('css_before')
</head>

<body class="nk-body  npc-default has-aside ">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <div class="nk-header  is-light">
                <div class="container-lg wide-xl">
                    <div class="nk-header-wrap">
                        <div class="nk-header-brand">
                            <a href="{{ url('/') }}" class="logo-link">
                                <img class="logo-light logo-img" src="{{ asset('backend/images/matthens-logo.svg') }}" height="80"  alt="logo">
                                <img class="logo-dark logo-img" src="{{ asset('backend/images/matthens-logo.svg') }}" height="80"  alt="logo-dark">
                            </a>
                        </div><!-- .nk-header-brand -->
                        <div class="nk-header-menu">
                            <ul class="nk-menu nk-menu-main">
                                <li class="nk-menu-item">
                                    <a href="{{ url('/my-library') }}" class="nk-menu-link">
                                        <span class="nk-menu-text">MY LIBRARY</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ url('/series') }}" class="nk-menu-link">
                                        <span class="nk-menu-text">SERIES</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ url('/uxd-bits') }}" class="nk-menu-link">
                                        <span class="nk-menu-text">UXDBITS</span>
                                    </a>
                                </li><!-- .nk-menu-item -->


                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-header-menu -->
                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                                @guest


                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('  Sign Up') }}</a>
                                        </li>
                                    @endif

                                @else
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-xl-block">
                                                    <div class="user-status user-status-unverified">Unverified</div>
                                                    <div class="user-name dropdown-indicator">Abu Bin Ishityak</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                                        <span class="sub-text">info@softnio.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">

                                                <ul class="link-list">
                                                    <li>
                                                        <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">
                                                            <em class="icon ni ni-signout"></em><span>Logout</span></a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                @endguest
                            </ul>


                            </ul><!-- .nk-quick-nav -->
                        </div><!-- .nk-header-tools -->
                    </div><!-- .nk-header-wrap -->
                </div><!-- .container-fliud -->
            </div>
            <!-- main header @e -->
            <!-- content @s -->
            <div class="nk-content ">
                <div class="container wide-xl">
                    <div class="nk-content-inner">
                        <div class="nk-aside" data-content="sideNav" data-toggle-overlay="true" data-toggle-screen="lg" data-toggle-body="true">
                            <div class="nk-sidebar-menu" data-simplebar>
                                <!-- Menu -->
                                <ul class="nk-menu">
                                    <li class="nk-menu-heading">
                                        <h6 class="overline-title">Menu</h6>
                                    </li>

                                    <li class="nk-menu-item">
                                        <a href="{{ url('/dashboard') }}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                            <span class="nk-menu-text">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ url('/dashboard/exams') }}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-calendar-booking"></em></span>
                                            <span class="nk-menu-text">Exams</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ url('/dashboard/job-board') }}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-joomla"></em></span>
                                            <span class="nk-menu-text">Job Board</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ url('/dashboard/courses') }}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-file-text"></em></span>
                                            <span class="nk-menu-text">Courses</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ url('/dashboard/batches') }}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-calendar-booking"></em></span>
                                            <span class="nk-menu-text">Batches</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ url('/dashboard/mentors') }}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-report-profit"></em></span>
                                            <span class="nk-menu-text">Mentors</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ url('/dashboard/users') }}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-report-profit"></em></span>
                                            <span class="nk-menu-text">Enrollments</span>
                                        </a>
                                    </li>

                                    <li class="nk-menu-item">
                                        <a href="{{ url('dashboard/categories?type=category') }}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                            <span class="nk-menu-text">Categories</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ url('/dashboard/users') }}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                            <span class="nk-menu-text">Users</span>
                                        </a>
                                    </li>




                                </ul>
                                <!-- Menu -->
                                <ul class="nk-menu nk-menu-sm">
                                    <!-- Menu -->
                                    <li class="nk-menu-heading">
                                        <span>Help Center</span>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/subscription/faqs.html" class="nk-menu-link">
                                            <span class="nk-menu-text">FAQs</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/subscription/contact.html" class="nk-menu-link">
                                            <span class="nk-menu-text">Contact</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/subscription/support.html" class="nk-menu-link">
                                            <span class="nk-menu-text">Support</span>
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- .nk-sidebar-menu -->
                            <div class="nk-aside-close">
                                <a href="#" class="toggle" data-target="sideNav"><em class="icon ni ni-cross"></em></a>
                            </div><!-- .nk-aside-close -->
                        </div><!-- .nk-aside -->
                        <div class="nk-content-body">
                          <div class="nk-content-wrap">
                              @yield('content')
                          </div>
                            <!-- footer @s -->
                            <div class="nk-footer">
                                <div class="container wide-xl">
                                    <div class="nk-footer-wrap g-2">
                                        <div class="nk-footer-copyright"> &copy; 2022. Live Workshop Management System. Development By  <a href="#">Insibe Business Solutions Pvt Ltd</a>
                                        </div>
                                        <div class="nk-footer-links">
                                            <ul class="nav nav-sm">
                                                <li class="nav-item dropup">
                                                    <a href="#" class="dropdown-toggle dropdown-indicator has-indicator nav-link text-base" data-bs-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                        <ul class="language-list">
                                                            <li>
                                                                <a href="#" class="language-item">
                                                                    <span class="language-name">English</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="language-item">
                                                                    <span class="language-name">Español</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="language-item">
                                                                    <span class="language-name">Français</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="language-item">
                                                                    <span class="language-name">Türkçe</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="" data-bs-toggle="modal" data-bs-target="#region" class="nav-link"><em class="icon ni ni-globe"></em><span class="ms-1">Select Region</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- footer @e -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- content @e -->
        </div>
        <!-- wrap @e -->
    </div>
    <!-- main @e -->
</div>
<!-- app-root @e -->

<!-- JavaScript -->

<script src="{{ asset('backend/js/bundle.js') }}"></script>
<script src="{{ asset('backend/js/libs/parsley.min.js') }}"></script>
@yield('js_after')
<script src="{{ asset('backend/js/scripts.js') }}"></script>

</body>

</html>
