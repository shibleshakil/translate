<!-- Basic Pills start -->
<section id="basic-pills" class="mb-2">
    <div class="row match-height">
        <div class="col-lg-12">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link {{Request::is('admin/business-settings') ? 'active' : '' }}" href="{{ route('admin.business_settings.generalInfo') }}">
                        {{ __('General') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Basic Pills end -->
