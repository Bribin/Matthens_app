<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->

    <!-- Page Title  -->
    <title> Membership Central :: Matthens Design School</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ mix('backend/css/dashlite.css') }}">
    <link id="skin-default" rel="stylesheet" href="{{ mix('backend/css/theme.css') }}">
</head>

<body class="nk-body bg-white npc-subscription has-aside ">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <div class="nk-header nk-header-fixed is-light">
                <div class="container-lg wide-xl">
                    <div class="nk-header-wrap">
                        <div class="nk-header-brand">
                            <a href="{{ url('/') }}" class="logo-link">
                                <img class="logo-light logo-img" src="{{ asset('backend/images/logo-matthens.svg') }}" height="48"  alt="logo">
                                <img class="logo-dark logo-img" src="{{ asset('backend/images/logo-matthens.svg') }}" height="48"  alt="logo-dark">
                            </a>
                        </div><!-- .nk-header-brand -->
                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                                <li class="dropdown user-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm">
                                                <em class="icon ni ni-user-alt"></em>
                                            </div>
                                            <div class="user-name dropdown-indicator d-none d-sm-block">Abu Bin Ishityak</div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <span>AB</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text">Abu Bin Ishtiyak</span>
                                                    <span class="sub-text">info@softnio.com</span>
                                                </div>
                                                <div class="user-action">
                                                    <a class="btn btn-icon mr-n2" href="html/subscription/profile-setting.html"><em class="icon ni ni-setting"></em></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="html/subscription/profile.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                <li><a href="html/subscription/profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                <li><a href="html/subscription/profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li><!-- .dropdown -->

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
                                        <a href="{{ url('/dashboard/job-board') }}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                            <span class="nk-menu-text">Job Board</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ url('my-courses') }}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-file-text"></em></span>
                                            <span class="nk-menu-text">Courses</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ url('settings') }}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-report-profit"></em></span>
                                            <span class="nk-menu-text">Settings</span>
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
                                        <div class="nk-footer-copyright"> &copy; 2022 Dashlite. Template by <a href="#">Softnio</a>
                                        </div>
                                        <div class="nk-footer-links">
                                            <ul class="nav nav-sm">
                                                <li class="nav-item dropup">
                                                    <a herf="#" class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
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
                                                    <a href="#" data-toggle="modal" data-target="#region" class="nav-link"><em class="icon ni ni-globe"></em><span class="ml-1">Select Region</span></a>
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
    <!-- select region modal -->

</div>
<!-- app-root @e -->
<!-- JavaScript -->
<script src="{{ asset('backend/js/bundle.js') }}"></script>
{{--<script src="{{ asset('js/parsley.min.js') }}"></script>--}}
<script src="{{ asset('backend/js/scripts.js') }}"></script>
</body>

</html>
