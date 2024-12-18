<div class="left-sidenav">
    <!-- LOGO -->
    <div class="topbar-left">
        <a href="{{ route('admin.dashboard') }}" class="logo">
            <span>
                <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
            </span>
            <span>
                <img src="{{ asset('admin/assets/images/logo.png') }}" alt="logo-large" class="logo-lg logo-light">
                <img src="{{ asset('admin/assets/images/logo-dark.png') }}" alt="logo-large" class="logo-lg logo-dark">
            </span>
        </a>
    </div>
    <!--end logo-->
    <div class="leftbar-profile p-3 w-100">
        <div class="media position-relative">
            <div class="leftbar-user online">
                <img src="{{ asset('admin/assets/images/users/user-9.jpg') }}" alt="" class="thumb-md rounded-circle">
            </div>
            <div class="media-body align-self-center text-truncate ml-3">
                <h5 class="mt-0 mb-1 font-weight-semibold">{{ auth()->user()->fullname }}</h5>
                <p class="text-uppercase mb-0 font-12">Admin</p>
            </div><!--end media-body-->
        </div>
    </div>
    <ul class="metismenu left-sidenav-menu slimscroll">
        <li class="menu-label">Main</li>
        <li class="leftbar-menu-item @routeis('admin.dashboard') mm-active active @endrouteis">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i data-feather="pie-chart" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="leftbar-menu-item">
            <a href="javascript:void(0);" class="menu-link">
                <i data-feather="package" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>
                <span>Money Bets</span>
                <span class="menu-arrow">
                    <i class="mdi mdi-chevron-right"></i>
                </span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.moneybet.add') }}">
                        <i class="ti-control-record"></i>Add Bets
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.moneybet.index') }}">
                        <i class="ti-control-record"></i>List of bets
                    </a>
                </li>
            </ul>
        </li>
        <li class="leftbar-menu-item">
            <a href="javascript:void(0);" class="menu-link">
                <i data-feather="activity" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>
                <span>Betting Tools</span>
                <span class="menu-arrow">
                    <i class="mdi mdi-chevron-right"></i>
                </span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.betting.tool.add') }}">
                        <i class="ti-control-record"></i>Add Betting Tool
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.betting.tool.index') }}">
                        <i class="ti-control-record"></i>List of betting tools
                    </a>
                </li>
            </ul>
        </li>
        <li class="leftbar-menu-item">
            <a href="javascript:void(0);" class="menu-link">
                <i data-feather="archive" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>
                <span>Bookmarkers</span>
                <span class="menu-arrow">
                    <i class="mdi mdi-chevron-right"></i>
                </span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.bookmarker.add') }}">
                        <i class="ti-control-record"></i>Add bookmarkers
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.bookmarker.index') }}">
                        <i class="ti-control-record"></i>List of bookmarkers
                    </a>
                </li>
            </ul>
        </li>
        <li class="leftbar-menu-item">
            <a href="{{ route('admin.user.index') }}" class="menu-link">
                <i data-feather="dollar-sign" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>
                <span>Users</span>
            </a>
        </li>
        <li class="leftbar-menu-item">
            <a href="{{ route('admin.plan') }}" class="menu-link">
                <i data-feather="dollar-sign" class="align-self-center vertical-menu-icon icon-dual-vertical"></i>
                <span>Pricing Plans</span>
            </a>
        </li>
    </ul>
</div>
