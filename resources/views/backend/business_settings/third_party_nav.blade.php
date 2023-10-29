<!-- Basic Pills start -->
<section id="basic-pills" class="mb-2">
    <div class="row match-height">
        <div class="col-lg-12">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link {{Request::is('admin/business-settings/mail-config') ? 'active' : '' }}" href="{{ route('admin.business_settings.mailConfig') }}">
                        {{ __('Mail Config') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::is('admin/business-settings/sms-config') ? 'active' : '' }}" href="{{ route('admin.business_settings.smsConfig') }}">
                        {{ __('SMS Config') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::is('admin/business-settings/payment-method') ? 'active' : '' }}" href="{{ route('admin.business_settings.paymentMethod') }}">
                        {{ __('Payment Method') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Basic Pills end -->
