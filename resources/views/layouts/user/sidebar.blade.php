<div class="main-menu menu-fixed menu-light menu-accordion" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{Request::is('user/dashboard') ? 'active' : 'nav-item' }}">
                <a href="{{ route ('user.dashboard') }}">
                    <i class="feather icon-home"></i><span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="feather icon-list"></i><span class="menu-title">Task</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="feather icon-credit-card"></i><span class="menu-title">Payments</span>
                </a>
            </li>
        </ul>
    </div>
</div>
