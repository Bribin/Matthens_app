<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>My Matthens Library :: Matthens Design</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ mix('backend/css/dashlite.css') }}">
    <link id="skin-default" rel="stylesheet" href="{{ mix('backend/css/theme.css') }}">
</head>

<body class="nk-body  npc-default has-aside ">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <div class="nk-header  bg-white">
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
                                    <a href="{{ url('/Home') }}" class="nk-menu-link">
                                        <span class="nk-menu-text fw-bold">HOME</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ url('/online-test-serious') }}" class="nk-menu-link">
                                        <span class="nk-menu-text fw-bold">TEST SERIES</span>
                                    </a>
                                </li><!-- .nk-menu-item -->




                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-header-menu -->
                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                                @guest


                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link fw-bold " href="{{ route('register') }}">{{ __('  Sign Up') }}</a>
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

                        <div class="nk-content-body">
                        @yield('content')
                        <!-- footer @s -->
                            <div class="nk-footer">
                                <div class="container wide-xl">
                                    <div class="nk-footer-wrap g-2">
                                        <div class="nk-footer-copyright"> &copy; 2022  Insibe Business Solutions Pvt Ltd
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
{{--<script src="{{ asset('js/parsley.min.js') }}"></script>--}}
<script src="{{ asset('backend/js/scripts.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        CoundownTimer(parseInt($("#TestDuration").val()));

    });

    function CoundownTimer(e) {
        var t = 60 * e;


        myInterval = setInterval(function () {
            myTimeSpan = 1e3 * t, $(".timer-title").text(GetTime(myTimeSpan)), t < 600 ? ($(".timer-title").addClass("time-ending"), $(".timer-title").removeClass("time-started")) : ($(".timer-title").addClass("time-started"), $(".timer-title").removeClass("time-ending")), t > 0 ? t -= 1 : CleartTimer()
        }, 1e3)
    }
    function CleartTimer() {
        clearInterval(myInterval), $("title").text("Time Out"), $("#btnYesSubmitConfirm").trigger("click")
    }

    function GetTime(e) {
        parseInt(e % 1e3 / 100);
        var t = parseInt(e / 1e3 % 60),
            a = parseInt(e / 6e4 % 60),
            n = parseInt(e / 36e5 % 24);
        return (n = n < 10 ? "0" + n : n) + ":" + (a = a < 10 ? "0" + a : a) + ":" + (t < 10 ? "0" + t : t)
    }



</script>
<script type="text/javascript">
    $(document).ready(function () {
        var list = $('#list').find('>li');

        $("ul#list li:first").addClass("selected");
        $("#prev,#next").click(function (event) {

            var $new, $selected = $(".selected");

            $new = (event.target.id == "prev") ? ($selected.index() == 0 ? list.last() : $selected.prev()) : ($selected.index() == list.last().index() ? list.first() : $selected.next());
            $selected.removeClass("selected");
            $new.addClass("selected");
            $new.addClass("visited");
            $('.question-block').hide().filter($new.data('target')).show();

        });


        $("#save").click(function (event) {
            var $selected = $(".selected");
            $selected.removeClass('review');
            $selected.addClass("save");

        });

        $("#review").click(function (event) {
            var $selected = $(".selected");
            $selected.removeClass('save');
            $selected.addClass("review");

        });


        $("#list li").click(function (event) {
            var target = $(this).addClass('selected').data('target');
            $('.question-block').hide().filter(target).show();
            $(this).siblings().removeClass('selected');
            $(this).addClass('selected').addClass('visited');

        });
    });
</script>
</body>

</html>
