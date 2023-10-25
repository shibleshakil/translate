<div class="main-menu menu-fixed menu-light menu-accordion" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{Request::is('admin') ? 'active' : 'nav-item' }}">
                <a href="{{ route ('admin.dashboard') }}">
                    <i class="feather icon-mail"></i><span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="{{Request::is('admin/quote-settings*') ? 'active' : 'nav-item'}}">
                <a href="#"><i class="feather icon-align-left"></i>
                    <span class="menu-title">Quotation Settings</span>
                </a>
                <ul class="menu-content">
                    <li class="{{Request::is('admin/quote-settings') ? 'active' : ''}}">
                        <a class="menu-item" href="{{ route ('admin.quote-settings.index') }}">Quotation Settings</a>
                    </li>
                    <li class="{{Request::is('admin/quote-settings/languages*') ? 'active' : ''}}">
                        <a class="menu-item" href="{{ route ('admin.quote-settings.languages.index') }}">Languages</a>
                    </li>
                    <li class="{{Request::is('admin/quote-settings/sectors*') ? 'active' : ''}}">
                        <a class="menu-item" href="{{ route ('admin.quote-settings.sectors.index') }}">Sectors</a>
                    </li>
                </ul>
            </li>

            <li class="{{Request::is('admin/business-settings') ? 'active' : 'nav-item' }}">
                <a href="{{ route('admin.business_settings.generalInfo') }}"><i class="feather icon-settings"></i>
                    <span class="menu-title">{{ __('Business Settings') }}</span>
                </a>
            </li>

            <li class="{{(Request::is('admin/business-settings/mail-config') || Request::is('admin/business-settings/payment-method')) ? 'active' : 'nav-item' }}">
                <a href="{{ route('admin.business_settings.mailConfig') }}"><i class="fa fa-key"></i>
                    <span class="menu-title">{{ __('3rd Party') }}</span>
                </a>
            </li>
        </ul>
    </div>
</div>
