<?php
namespace App\Helpers;

use DateTime;
use DateTimeZone;
use App\Models\BusinessSetting;

class Common
{

    public static function get_business_settings($name)
    {
        $config = null;
        $data = BusinessSetting::where(['type' => $name])->first();
        if (isset($data)) {
            $config = json_decode($data['value'], true);
            if (is_null($config)) {
                $config = $data['value'];
            }
        }

        return $config;
    }


    public static function apiErrorProcessor($validator)
    {
        $err_keeper = '';
        foreach ($validator->errors()->getMessages() as $index => $error) {
            $err_keeper .= $error[0] . "\n";
        }
        return $err_keeper;
    }
}
