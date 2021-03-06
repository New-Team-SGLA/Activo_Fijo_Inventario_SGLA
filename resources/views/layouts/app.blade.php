<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>CADENA LOGÍSTICA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta name="description" content="Examples of just how powerful ArchitectUI really is!">
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}} -->
    <link rel="stylesheet" href="{{ asset('template/vendors/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('template/vendors/ionicons-npm/css/ionicons.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('template/vendors/linearicons-master/dist/web-font/style.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('template/vendors/pixeden-stroke-7-icon-master/pe-icon-7-stroke/dist/pe-icon-7-stroke.css') }}">
    <link href="{{ asset('template/styles/css/base.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
            
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> --}}
                {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}

                    <!-- Left Side Of Navbar -->
                    {{-- <ul class="navbar-nav mr-auto">

                    </ul> --}}

                    <!-- Right Side Of Navbar -->
                    
                        <!-- Authentication Links -->
                        @guest
                        <div id="app">
                            <div class="">
                                <main class="py"> {{-- no modificar esto es del login --}}
            
                                    @yield('content')
                                </main>     
                            </div>
                        </div>              
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>     
                            <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
                                <div class="app-header header-shadow">
                                    <div class="app-header__logo">
                                        <div class="logo-src"></div>
                                        <div class="header__pane ml-auto">
                                            <div>
                                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                                    <span class="hamburger-box">
                                                        <span class="hamburger-inner"></span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="app-header__mobile-menu">
                                        <div>
                                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                                <span class="hamburger-box">
                                                    <span class="hamburger-inner"></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="app-header__menu">
                                        <span>
                                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                                <span class="btn-icon-wrapper">
                                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                                </span>
                                            </button>
                                        </span>
                                    </div>
                                    <div class="app-header__content">
                                        
                                        <div class="app-header-right">
                                            {{-- <div class="header-dots">
                                                <div class="dropdown">
                                                    <button type="button" aria-haspopup="true" aria-expanded="false"
                                                        data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                                                        <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                                            <span class="icon-wrapper-bg bg-primary"></span>
                                                            <i class="icon text-primary ion-android-apps"></i>
                                                        </span>
                                                    </button>
                                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                                        class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                                        <div class="dropdown-menu-header">
                                                            <div class="dropdown-menu-header-inner bg-plum-plate">
                                                                <div class="menu-header-image" style="background-image: url('images/dropdown-header/abstract4.jpg');"></div>
                                                                <div class="menu-header-content text-white">
                                                                    <h5 class="menu-header-title">Grid Dashboard</h5>
                                                                    <h6 class="menu-header-subtitle">Easy grid navigation inside dropdowns</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="grid-menu grid-menu-xl grid-menu-3col">
                                                            <div class="no-gutters row">
                                                                <div class="col-sm-6 col-xl-4">
                                                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                                        <i class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                                                        Automation
                                                                    </button>
                                                                </div>
                                                                <div class="col-sm-6 col-xl-4">
                                                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                                        <i class="pe-7s-piggy icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                                                        Reports
                                                                    </button>
                                                                </div>
                                                                <div class="col-sm-6 col-xl-4">
                                                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                                        <i class="pe-7s-config icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                                                        Settings
                                                                    </button>
                                                                </div>
                                                                <div class="col-sm-6 col-xl-4">
                                                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                                        <i class="pe-7s-browser icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                                                        Content
                                                                    </button>
                                                                </div>
                                                                <div class="col-sm-6 col-xl-4">
                                                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                                        <i class="pe-7s-hourglass icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                                                        Activity
                                                                    </button>
                                                                </div>
                                                                <div class="col-sm-6 col-xl-4">
                                                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                                        <i class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                                                        Contacts
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item-divider nav-item"></li>
                                                            <li class="nav-item-btn text-center nav-item">
                                                                <button class="btn-shadow btn btn-primary btn-sm">Follow-ups</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <button type="button" aria-haspopup="true" aria-expanded="false"
                                                        data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                                                        <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                                            <span class="icon-wrapper-bg bg-danger"></span>
                                                            <i class="icon text-danger icon-anim-pulse ion-android-notifications"></i>
                                                            <span class="badge badge-dot badge-dot-sm badge-danger">Notifications</span>
                                                        </span>
                                                    </button>
                                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                                        class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                                        <div class="dropdown-menu-header mb-0">
                                                            <div class="dropdown-menu-header-inner bg-deep-blue">
                                                                <div class="menu-header-image opacity-1" style="background-image: url('images/dropdown-header/city3.jpg');"></div>
                                                                <div class="menu-header-content text-dark">
                                                                    <h5 class="menu-header-title">Notifications</h5>
                                                                    <h6 class="menu-header-subtitle">You have
                                                                        <b>21</b> unread messages
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                                            <li class="nav-item">
                                                                <a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header">
                                                                    <span>Messages</span>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a role="tab" class="nav-link" data-toggle="tab" href="#tab-events-header">
                                                                    <span>Events</span>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header">
                                                                    <span>System Errors</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tab-messages-header" role="tabpanel">
                                                                <div class="scroll-area-sm">
                                                                    <div class="scrollbar-container">
                                                                        <div class="p-3">
                                                                            <div class="notifications-box">
                                                                                <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                                                    <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                                        <div>
                                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                                <h4 class="timeline-title">All Hands Meeting</h4>
                                                                                                <span class="vertical-timeline-element-date"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                                        <div>
                                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                                <p>Yet another one, at
                                                                                                    <span class="text-success">15:00 PM</span>
                                                                                                </p>
                                                                                                <span class="vertical-timeline-element-date"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                                        <div>
                                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                                <h4 class="timeline-title">
                                                                                                    Build the production release
                                                                                                    <span class="badge badge-danger ml-2">NEW</span>
                                                                                                </h4>
                                                                                                <span class="vertical-timeline-element-date"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                                        <div>
                                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                                <h4 class="timeline-title">
                                                                                                    Something not important
                                                                                                    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                            <div class="avatar-icon">
                                                                                                                <img src="images/avatars/1.jpg" alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                            <div class="avatar-icon">
                                                                                                                <img src="images/avatars/2.jpg" alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                            <div class="avatar-icon">
                                                                                                                <img src="images/avatars/3.jpg" alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                            <div class="avatar-icon">
                                                                                                                <img src="images/avatars/4.jpg" alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                            <div class="avatar-icon">
                                                                                                                <img src="images/avatars/5.jpg" alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                            <div class="avatar-icon">
                                                                                                                <img src="images/avatars/9.jpg" alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                            <div class="avatar-icon">
                                                                                                                <img src="images/avatars/7.jpg" alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                            <div class="avatar-icon">
                                                                                                                <img src="images/avatars/8.jpg" alt="">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                                            <div class="avatar-icon">
                                                                                                                <i>+</i>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </h4>
                                                                                                <span class="vertical-timeline-element-date"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                                                        <div>
                                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                                <h4 class="timeline-title">This dot has an info state</h4>
                                                                                                <span class="vertical-timeline-element-date"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                                        <div>
                                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                                <h4 class="timeline-title">All Hands Meeting</h4>
                                                                                                <span class="vertical-timeline-element-date"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                                        <div>
                                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                                <p>Yet another one, at
                                                                                                    <span class="text-success">15:00 PM</span>
                                                                                                </p>
                                                                                                <span class="vertical-timeline-element-date"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                                        <div>
                                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                                <h4 class="timeline-title">
                                                                                                    Build the production release
                                                                                                    <span class="badge badge-danger ml-2">NEW</span>
                                                                                                </h4>
                                                                                                <span class="vertical-timeline-element-date"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                                        <div>
                                                                                            <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                                <h4 class="timeline-title">This dot has a dark state</h4>
                                                                                                <span class="vertical-timeline-element-date"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="tab-events-header" role="tabpanel">
                                                                <div class="scroll-area-sm">
                                                                    <div class="scrollbar-container">
                                                                        <div class="p-3">
                                                                            <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                                    <div>
                                                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                                                            <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                                        </span>
                                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                                            <h4 class="timeline-title">All Hands Meeting</h4>
                                                                                            <p>
                                                                                                Lorem ipsum dolor sic amet, today at
                                                                                                <a href="javascript:void(0);">12:00 PM</a>
                                                                                            </p>
                                                                                            <span class="vertical-timeline-element-date"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                                    <div>
                                                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                                                            <i class="badge badge-dot badge-dot-xl badge-warning"></i>
                                                                                        </span>
                                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                                            <p>Another meeting today, at
                                                                                                <b class="text-danger">12:00 PM</b>
                                                                                            </p>
                                                                                            <p>Yet another one, at
                                                                                                <span class="text-success">15:00 PM</span>
                                                                                            </p>
                                                                                            <span class="vertical-timeline-element-date"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                                    <div>
                                                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                                                            <i class="badge badge-dot badge-dot-xl badge-danger"></i>
                                                                                        </span>
                                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                                            <h4 class="timeline-title">Build the production release</h4>
                                                                                            <p>
                                                                                                Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut
                                                                                                labore et dolore magna elit enim at minim veniam quis nostrud
                                                                                            </p>
                                                                                            <span class="vertical-timeline-element-date"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                                    <div>
                                                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                                                            <i class="badge badge-dot badge-dot-xl badge-primary"></i>
                                                                                        </span>
                                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                                            <h4 class="timeline-title text-success">Something not important</h4>
                                                                                            <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p>
                                                                                            <span class="vertical-timeline-element-date"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                                    <div>
                                                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                                                            <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                                        </span>
                                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                                            <h4 class="timeline-title">All Hands Meeting</h4>
                                                                                            <p>
                                                                                                Lorem ipsum dolor sic amet, today at
                                                                                                <a href="javascript:void(0);">12:00 PM</a>
                                                                                            </p>
                                                                                            <span class="vertical-timeline-element-date"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                                    <div>
                                                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                                                            <i class="badge badge-dot badge-dot-xl badge-warning"></i>
                                                                                        </span>
                                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                                            <p>Another meeting today, at
                                                                                                <b class="text-danger">12:00 PM</b>
                                                                                            </p>
                                                                                            <p>Yet another one, at
                                                                                                <span class="text-success">15:00 PM</span>
                                                                                            </p>
                                                                                            <span class="vertical-timeline-element-date"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                                    <div>
                                                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                                                            <i class="badge badge-dot badge-dot-xl badge-danger"></i>
                                                                                        </span>
                                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                                            <h4 class="timeline-title">Build the production release</h4>
                                                                                            <p>
                                                                                                Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut
                                                                                                labore et dolore magna elit enim at minim veniam quis nostrud
                                                                                            </p>
                                                                                            <span class="vertical-timeline-element-date"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                                                    <div>
                                                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                                                            <i class="badge badge-dot badge-dot-xl badge-primary"></i>
                                                                                        </span>
                                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                                            <h4 class="timeline-title text-success">Something not important</h4>
                                                                                            <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p>
                                                                                            <span class="vertical-timeline-element-date"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="tab-errors-header" role="tabpanel">
                                                                <div class="scroll-area-sm">
                                                                    <div class="scrollbar-container">
                                                                        <div class="no-results pt-3 pb-0">
                                                                            <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                                                <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                                                <span class="swal2-success-line-tip"></span>
                                                                                <span class="swal2-success-line-long"></span>
                                                                                <div class="swal2-success-ring"></div>
                                                                                <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                                                <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                                            </div>
                                                                            <div class="results-subtitle">All caught up!</div>
                                                                            <div class="results-title">There are no system errors!</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item-divider nav-item"></li>
                                                            <li class="nav-item-btn text-center nav-item">
                                                                <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View Latest Changes</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <button type="button" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                                                        <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                                            <span class="icon-wrapper-bg bg-focus"></span>
                                                            <span class="language-icon opacity-8 flag large DE"></span>
                                                        </span>
                                                    </button>
                                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                                        class="rm-pointers dropdown-menu dropdown-menu-right">
                                                        <div class="dropdown-menu-header">
                                                            <div class="dropdown-menu-header-inner pt-4 pb-4 bg-focus">
                                                                <div class="menu-header-image opacity-05" style="background-image: url('images/dropdown-header/city2.jpg');"></div>
                                                                <div class="menu-header-content text-center text-white">
                                                                    <h6 class="menu-header-subtitle mt-0"> Choose Language</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h6 tabindex="-1" class="dropdown-header"> Popular Languages</h6>
                                                        <button type="button" tabindex="0" class="dropdown-item">
                                                            <span class="mr-3 opacity-8 flag large US"></span>
                                                            USA
                                                        </button>
                                                        <button type="button" tabindex="0" class="dropdown-item">
                                                            <span class="mr-3 opacity-8 flag large CH"></span>
                                                            Switzerland
                                                        </button>
                                                        <button type="button" tabindex="0" class="dropdown-item">
                                                            <span class="mr-3 opacity-8 flag large FR"></span>
                                                            France
                                                        </button>
                                                        <button type="button" tabindex="0" class="dropdown-item">
                                                            <span class="mr-3 opacity-8 flag large ES"></span>
                                                            Spain
                                                        </button>
                                                        <div tabindex="-1" class="dropdown-divider"></div>
                                                        <h6 tabindex="-1" class="dropdown-header">Others</h6>
                                                        <button type="button" tabindex="0" class="dropdown-item active">
                                                            <span class="mr-3 opacity-8 flag large DE"></span>
                                                            Germany
                                                        </button>
                                                        <button type="button" tabindex="0" class="dropdown-item">
                                                            <span class="mr-3 opacity-8 flag large IT"></span>
                                                            Italy
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <button type="button" aria-haspopup="true" data-toggle="tooltip" data-placement="bottom"
                                                        title="Tooltip on bottom" aria-expanded="false" class="p-0 btn btn-link dd-chart-btn">
                                                        <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                                            <span class="icon-wrapper-bg bg-success"></span>
                                                            <i class="icon text-success ion-ios-analytics"></i>
                                                        </span>
                                                    </button>
                                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                                        class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                                        <div class="dropdown-menu-header">
                                                            <div class="dropdown-menu-header-inner bg-premium-dark">
                                                                <div class="menu-header-image" style="background-image: url('images/dropdown-header/abstract4.jpg');"></div>
                                                                <div class="menu-header-content text-white">
                                                                    <h5 class="menu-header-title">Users Online</h5>
                                                                    <h6 class="menu-header-subtitle">Recent Account Activity Overview</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-chart">
                                                            <div class="widget-chart-content">
                                                                <div class="icon-wrapper rounded-circle">
                                                                    <div class="icon-wrapper-bg opacity-9 bg-focus"></div>
                                                                    <i class="lnr-users text-white"></i>
                                                                </div>
                                                                <div class="widget-numbers">
                                                                    <span>344k</span>
                                                                </div>
                                                                <div class="widget-subheading pt-2">
                                                                    Profile views since last login
                                                                </div>
                                                                <div class="widget-description text-danger">
                                                                    <span class="pr-1">
                                                                        <span>176%</span>
                                                                    </span>
                                                                    <i class="fa fa-arrow-left"></i>
                                                                </div>
                                                            </div>
                                                            <div class="widget-chart-wrapper">
                                                                <div id="dashboard-sparkline-carousel-3-pop"></div>
                                                            </div>
                                                        </div>
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item-divider mt-0 nav-item"></li>
                                                            <li class="nav-item-btn text-center nav-item">
                                                                <button class="btn-shine btn-wide btn-pill btn btn-warning btn-sm">
                                                                    <i class="fa fa-cog fa-spin mr-2"></i>
                                                                    View Details
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="header-btn-lg pr-0">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="btn-group">
                                                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                                                    <img width="42" class="rounded-circle" src="{{asset('template/images/avatars/1.jpg')}}" alt="">
                                                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                                                </a>
                                                                <div tabindex="-1" role="menu" aria-hidden="true"
                                                                    class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                                                    <div class="dropdown-menu-header">
                                                                        <div class="dropdown-menu-header-inner bg-info">
                                                                            <div class="menu-header-image opacity-2" style="background-image: url('../template/images/dropdown-header/city3.jpg');"></div>
                                                                            <div class="menu-header-content text-left">
                                                                                <div class="widget-content p-0">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left mr-3">
                                                                                            <img width="42" class="rounded-circle"
                                                                                            src="{{asset('template/images/avatars/1.jpg')}}" alt="">
                                                                                        </div>
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">{{ Auth::user()->name }}</div>
                                                                                            <div class="widget-subheading opacity-8">A short profile description</div>
                                                                                        </div>
                                                                                        <div class="widget-content-right mr-2">
                                                                                            <a class="btn-pill btn-shadow btn-shine btn btn-focus" href="{{ route('logout') }}"
                                                                                            onclick="event.preventDefault();
                                                                                                          document.getElementById('logout-form').submit();">
                                                                                             {{ __('Logout') }}
                                                                                         </a>
                                                     
                                                                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                                             @csrf
                                                                                         </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="scroll-area-xs" style="height: 150px;">
                                                                        <div class="scrollbar-container ps">
                                                                            <ul class="nav flex-column">
                                                                                <li class="nav-item-header nav-item">Activity</li>
                                                                                <li class="nav-item">
                                                                                    <a href="javascript:void(0);" class="nav-link">
                                                                                        Chat
                                                                                        <div class="ml-auto badge badge-pill badge-info">8</div>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a href="javascript:void(0);" class="nav-link">Recover Password</a>
                                                                                </li>
                                                                                <li class="nav-item-header nav-item">
                                                                                    My Account
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a href="javascript:void(0);" class="nav-link">
                                                                                        Settings
                                                                                        <div class="ml-auto badge badge-success">New</div>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a href="javascript:void(0);" class="nav-link">
                                                                                        Messages
                                                                                        <div class="ml-auto badge badge-warning">512</div>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a href="javascript:void(0);" class="nav-link">Logs</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="nav flex-column">
                                                                        <li class="nav-item-divider mb-0 nav-item"></li>
                                                                    </ul>
                                                                    <div class="grid-menu grid-menu-2col">
                                                                        <div class="no-gutters row">
                                                                            <div class="col-sm-6">
                                                                                <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                                                    <i class="pe-7s-chat icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i>
                                                                                    Message Inbox
                                                                                </button>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                                                    <i class="pe-7s-ticket icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                                                    <b>Support Tickets</b>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="nav flex-column">
                                                                        <li class="nav-item-divider nav-item"></li>
                                                                        <li class="nav-item-btn text-center nav-item">
                                                                            <button class="btn-wide btn btn-primary btn-sm"> Open Messages</button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left  ml-3 header-user-info">
                                                            <div class="widget-heading"> {{ Auth::user()->name }}</div>
                                                            <div class="widget-subheading"> VP People Manager</div>
                                                        </div>
                                                        <div class="widget-content-right header-user-info ml-3">
                                                            {{-- <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                                                <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                                            </button> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>                                
                                <div class="app-main">
                                    <div class="app-sidebar sidebar-shadow">
                                        <div class="app-header__logo">
                                            <div class="logo-src"></div>
                                            <div class="header__pane ml-auto">
                                                <div>
                                                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                                        <span class="hamburger-box">
                                                            <span class="hamburger-inner"></span>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="app-header__mobile-menu">
                                            <div>
                                                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                                    <span class="hamburger-box">
                                                        <span class="hamburger-inner"></span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="app-header__menu">
                                            <span>
                                                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                                    <span class="btn-icon-wrapper">
                                                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                                                    </span>
                                                </button>
                                            </span>
                                        </div>
                                        <div class="scrollbar-sidebar">
                                            <div class="app-sidebar__inner">
                                                <ul class="vertical-nav-menu">
                                                    <li class="app-sidebar__heading">Menu</li>
                                                    <li>
                                                        <a href="/registrar">
                                                            <i class="metismenu-icon pe-7s-rocket"></i>
                                                            REGISTRAR USUARIO
                                                          
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="#">
                                                            <i class="metismenu-icon pe-7s-rocket"></i>
                                                            Maestros
                                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                                        </a>
                                                        
                                                        <ul>
                                                           <!--  <li>
                                                                <a href="ciudad.index" class="mm-active">
                                                                    <i class="metismenu-icon"></i>
                                                                    Inventariador
                                                                </a>
                                                            </li> -->
                                                            <li>
                                                                <a href="{{ url('/ciudad') }}">
                                                                    <i class="metismenu-icon"></i>
                                                                    Ciudad
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{url('/departamento_af')}}">
                                                                    <i class="metismenu-icon"></i>
                                                                    Departamento
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{url('/empresa_af')}}">
                                                                    <i class="metismenu-icon"></i>
                                                                    Empresa
                                                                    <!-- <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i> -->
                                                                </a>
                                                                <!-- <ul>
                                                                    <li>
                                                                        <a href="dashboards-minimal-1.html">
                                                                            <i class="metismenu-icon"></i>
                                                                            Variation 1
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="dashboards-minimal-2.html">
                                                                            <i class="metismenu-icon"></i>
                                                                            Variation 2
                                                                        </a>
                                                                    </li>
                                                                </ul> -->
                                                            </li>
                                                            <li>
                                                                <a href="{{url('/item_af')}}">
                                                                    <i class="metismenu-icon"></i>
                                                                    Items
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{url('/calificacion_acti_af')}}">
                                                                    <i class="metismenu-icon"></i>
                                                                    Clasificación de Activo
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{url('/marca_af')}}">
                                                                    <i class="metismenu-icon"></i>
                                                                    Marca
                                                                </a>                                                                                            
                                                            </li>
                                                            <li>
                                                                <a href="{{url('/modelo_af')}}">
                                                                    <i class="metismenu-icon"></i>
                                                                    Modelo
                                                                </a>
                                                            </li>
                                                            <!-- <li>
                                                                <a href="{{url('/sector_af')}}">
                                                                    <i class="metismenu-icon"></i>
                                                                    Sector
                                                                </a>
                                                            </li> -->
                                                            <!-- <li>
                                                                <a href="{{url('/sucursal_af')}}">
                                                                    <i class="metismenu-icon"></i>
                                                                    Sucursal
                                                                </a>
                                                            </li> -->
                                                            <li>
                                                                <a href="{{url('/area_af')}}">
                                                                    <i class="metismenu-icon"></i>
                                                                    Área
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{url('/turno_af')}}">
                                                                    <i class="metismenu-icon"></i>
                                                                    Turno
                                                                </a>
                                                            </li>
                                                            <!-- <li>
                                                                <a href="{{url('/responsable_af')}}">
                                                                    <i class="metismenu-icon"></i>
                                                                    Responsable
                                                                </a>
                                                            </li> -->
                                                            <!-- <li>
                                                                <a href="{{url('/turno_af')}}">
                                                                    <i class="metismenu-icon"></i>
                                                                    Tipo de Informe
                                                                </a>
                                                            </li> -->
                                                            <li>
                                                                <a href="{{url('/tipo_resp_af')}}">
                                                                    <i class="metismenu-icon"></i>
                                                                    Tipo de Responsable
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li> 
                                                    <li class="mm-active">
                                                        <a href="#">
                                                            <i class="metismenu-icon pe-7s-rocket"></i>
                                                            Gestionar Salidas
                                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                                        </a> 
                                                        <ul>
                                                            <li>
                                                                <a href="{{ url('/salidas_transferencia') }}" class="mm-active">
                                                                    <i class="metismenu-icon"></i>
                                                                    Por Transferencia
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ url('/salidas_prestamo') }}">
                                                                    <i class="metismenu-icon"></i>
                                                                    Por Préstamo
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ url('/salidas_mantenimiento') }}">
                                                                    <i class="metismenu-icon"></i>
                                                                    Por mantenimiento
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ url('/salidas_bajas') }}">
                                                                    <i class="metismenu-icon"></i>
                                                                    Por Baja
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>  
                                                    <li > <!-- class="mm-active" -->
                                                        <a href="#">
                                                            <i class="metismenu-icon pe-7s-way"></i>
                                                            Ingresos
                                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                                        </a>
                                                        <ul>
                                                            <li>
                                                                <a href="{{url('ingresocompra')}}" > <!-- class="mm-active" -->
                                                                    <i class="metismenu-icon"></i>
                                                                    Ingreso por Compra
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="dashboards-commerce.html">
                                                                    <i class="metismenu-icon"></i>
                                                                    Ingreso por Transferencia
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="dashboards-sales.html">
                                                                    <i class="metismenu-icon"></i>
                                                                    Ingreso por Mantenimiento
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="metismenu-icon"></i>
                                                                    Ingreso por Donación
                                                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                                                </a>                                                                
                                                            </li>                                                        
                                                        </ul>
                                                    </li>    
                                                    <li class="mm-active">
                                                        <a href="#">
                                                            <i class="metismenu-icon pe-7s-way"></i>
                                                            Documentos
                                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                                        </a>
                                                        <ul>
                                                            <li>
                                                                <a href="{{url('documentos')}}">
                                                                    <i class="metismenu-icon"></i>
                                                                    Solicitud De Activo
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="dashboards-commerce.html">
                                                                    <i class="metismenu-icon"></i>
                                                                    Asignacion De Activo
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="dashboards-sales.html">
                                                                    <i class="metismenu-icon"></i>
                                                                    Respuesta a Solicitud
                                                                </a>
                                                            </li>                                                        
                                                        </ul>
                                                    </li>                                                                                            
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="app-main__outer">
                                        <div class="app-main__inner">
                                            <div class="app-page-title ">
                                                <div class="page-title-wrapper">
                                                    <div class="page-title-heading">
                                                        <div>
                                                            <div class="page-title-head center-elem">
                                                                <span class="d-inline-block pr-2">
                                                                    <i class="lnr-apartment icon-gradient bg-mean-fruit"></i>
                                                                </span>
                                                                <span class="d-inline-block">CADENA LOGÍSTICA</span>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                            <div id="app">
                                                <div class="col-md-12">
                                                    
                                                    @yield('content')
                                                    @yield('contenido')
                                                    @yield('documentos')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                                                                                                    
                            </div>                                                                                                                    
                        @endguest                    
                    {{-- </ul> --}}
        
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ asset('template/vendors/jquery/dist/jquery.min.js') }}"></script> -->
    <script type="text/javascript" src="{{ asset('template/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ asset('template/vendors/moment/moment.js') }}"></script> -->
    <script type="text/javascript" src="{{ asset('template/vendors/metismenu/dist/metisMenu.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ asset('template/vendors/bootstrap4-toggle/js/bootstrap4-toggle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/vendors/jquery-circle-progress/dist/circle-progress.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/vendors/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script> -->
    <!-- <script type="text/javascript" src="{{ asset('template/vendors/toastr/build/toastr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/vendors/jquery.fancytree/dist/jquery.fancytree-all-deps.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/vendors/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/vendors/bootstrap-table/dist/bootstrap-table.min.js') }}"></script> -->
    <!-- <script type="text/javascript" src="{{ asset('template/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/vendors/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/vendors/slick-carousel/slick/slick.min.js') }}"></script> -->
    <!-- custome.js -->
    <!-- <script type="text/javascript" src="{{ asset('/template/js/charts/apex-charts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/circle-progress.js') }}"></script> -->
    <script type="text/javascript" src="{{ asset('/template/js/demo.js') }}"></script> <!-- menu hamburguesa -->
    <!-- <script type="text/javascript" src="{{ asset('/template/js/scrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/template/js/toastr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/treeview.js') }}"></script> -->
    <!-- <script type="text/javascript" src="{{ asset('/template/js/form-components/toggle-switch.js') }}"></script> -->
    <!-- <script type="text/javascript" src="{{ asset('/template/js/tables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/template/js/carousel-slider.js') }}"></script> -->
    <script type="text/javascript" src="{{ asset('/template/js/app.js') }}"></script>
    @yield('scripts-custom')
</body>
</html>
