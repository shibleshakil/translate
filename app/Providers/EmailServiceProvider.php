<?php

namespace App\Providers;

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
            if ($emailServices_smtp['status'] == 1) {
                $config = array(
                    'driver' => $emailServices_smtp['MAIL_MAILER'],
                    'host' => $emailServices_smtp['MAIL_HOST'],
                    'port' => $emailServices_smtp['MAIL_PORT'],
                    'username' => $emailServices_smtp['MAIL_USERNAME'],
                    'password' => $emailServices_smtp['MAIL_PASSWORD'],
                    'encryption' => $emailServices_smtp['MAIL_ENCRYPTION'],
                    'from' => array('address' => $emailServices_smtp['MAIL_FROM_ADDRESS'], 'name' => $emailServices_smtp['MAIL_FROM_NAME']),
                    'sendmail' => '/usr/sbin/sendmail -bs',
                    'pretend' => false,
                );
                Config::set('mail', $config);
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
}
