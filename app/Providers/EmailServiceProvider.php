<?php

namespace App\Providers;

use App\Helpers\Common;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class EmailServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        try {
            $emailServices_smtp = Common::get_business_settings('mail_config');
            $config = [
                'driver' => $emailServices_smtp['MAIL_MAILER'],
                'host' => $emailServices_smtp['MAIL_HOST'],
                'port' => (int)$emailServices_smtp['MAIL_PORT'],
                'username' => $emailServices_smtp['MAIL_USERNAME'],
                'password' => $emailServices_smtp['MAIL_PASSWORD'],
                'encryption' => $emailServices_smtp['MAIL_ENCRYPTION'],
                'from' => [
                    'address' => $emailServices_smtp['MAIL_FROM_ADDRESS'],
                    'name' => $emailServices_smtp['MAIL_FROM_NAME'],
                ],
                'sendmail' => '/usr/sbin/sendmail -bs',
                'pretend' => false,
            ];
            Config::set('mail', $config);

        } catch (\Exception $ex) {
            \Log::error('EmailServiceProvider Exception: ' . $ex->getMessage());
        }
    }
}
