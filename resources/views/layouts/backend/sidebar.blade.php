<div class="main-menu menu-fixed menu-light menu-accordion" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{Request::is('admin') ? 'active' : 'nav-item' }}">
                <a href="{{ route ('admin.dashboard') }}">
                    <i class="feather icon-mail"></i><span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="{{Request::is('admin/business-settings*') ? 'active' : 'nav-item' }}">
                <a href="{{ route('admin.business_settings.generalInfo') }}"><i class="feather icon-settings"></i>
                    <span class="menu-title">{{ __('Business Settings') }}</span>
                </a>
            </li>
        </ul>
    </div>
</div>
