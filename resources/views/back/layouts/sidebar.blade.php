<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard Sayfası</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('back/')}}/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('back/')}}/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('back/')}}/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/css/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('back/')}}/css/theme.css" rel="stylesheet" media="all">
    @toastr_css
    @yield('css')
</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="{{asset('back/')}}/index.html">
                        <img src="{{asset('back/')}}/images/icon/logo.png" alt="CoolAdmin" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>

    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="{{route('admin.dashboard')}}">
                <img src="{{asset('back/')}}/images/icon/png1.png" alt="Cool Admin" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="has-sub">
                        <a class="js-arrow" href="">
                            <i class="fas fa-tachometer-alt"></i>Post Page</a>
                    </li>
                    <li>
                        <a href="{{route('admin.posts.index')}}">
                            <i class="fas fa-pound-sign"></i>Post Sayfası</a>
                    </li>
                    <li>
                        <a href="{{route('admin.category.index')}}">
                            <i class="fas fa-fw fa-list"></i>Kategoriler</a>
                    </li>
                    <li>
                        <a href="{{route('admin.pages.index')}}">
                            <i class="fas fa-fw fa-folder"></i>Eklenebilir Sayfalar</a>
                    </li>
                    <li>
                        <a href="calendar.html">
                            <i class="fas fa-calendar-alt"></i>Calendar</a>
                    </li>
                    <li>
                        <a href="map.html">
                            <i class="fas fa-map-marker-alt"></i>Maps</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Pages</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="register.html">Register</a>
                            </li>
                            <li>
                                <a href="forget-pass.html">Forget Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-desktop"></i>UI Elements</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="button.html">Button</a>
                            </li>
                            <li>
                                <a href="badge.html">Badges</a>
                            </li>
                            <li>
                                <a href="tab.html">Tabs</a>
                            </li>
                            <li>
                                <a href="card.html">Cards</a>
                            </li>
                            <li>
                                <a href="alert.html">Alerts</a>
                            </li>
                            <li>
                                <a href="progress-bar.html">Progress Bars</a>
                            </li>
                            <li>
                                <a href="modal.html">Modals</a>
                            </li>
                            <li>
                                <a href="switch.html">Switchs</a>
                            </li>
                            <li>
                                <a href="grid.html">Grids</a>
                            </li>
                            <li>
                                <a href="fontawesome.html">Fontawesome Icon</a>
                            </li>
                            <li>
                                <a href="typo.html">Typography</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->
</div>
