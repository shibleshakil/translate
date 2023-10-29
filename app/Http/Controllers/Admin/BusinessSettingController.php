<?php

namespace App\Http\Controllers\Admin;

use App\Mail\TestMail;
use App\Helpers\Common;
use App\Helpers\ImageHelper;
use Illuminate\Http\Request;
use App\Models\BusinessSetting;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class BusinessSettingController extends Controller
{
    public function maintenanceMode(){
        $maintenance_mode = BusinessSetting::where('type', 'maintenance_mode')->first();
        if (isset($maintenance_mode) == false) {
            DB::table('business_settings')->insert([
                'type' => 'maintenance_mode',
                'value' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'updated_by' => auth('admin')->user()->id,
            ]);
        } else {
            DB::table('business_settings')->where(['type' => 'maintenance_mode'])->update([
                'type' => 'maintenance_mode',
                'value' => $maintenance_mode->value == 1 ? 0 : 1,
                'updated_at' => now(),
                'updated_by' => auth('admin')->user()->id,
            ]);
        }

        if (isset($maintenance_mode) && $maintenance_mode->value){
            return response()->json(['msg'=>'Maintenance is off.', 'type'=>'success', 'title' => 'Success']);
        }

        return response()->json(['msg'=>'Maintenance is on.', 'type'=>'success', 'title' => 'Success']);
    }


    public function generalInfo(){
        return view('backend.business_settings.generalInfo');
    }


    public function generalInfoUpdate(Request $request){
        abort(404);
        $validatedData = $request->validate([
            'company_name' => ['required'],
            'company_email' => ['required'],
            'company_phone' => ['required'],
            'company_address' => ['required'],
            'copy_right_text' => ['required'],
            'logo' => ['nullable', 'mimes:jpg,bmp,png'],
            'favicon' => ['nullable', 'mimes:jpg,bmp,png,ico'],
        ]);
        DB::beginTransaction();
        try {
            $inputData = $request->except(['_token','logo','favicon']);

            foreach ($inputData as $fieldName => $fieldValue) {
                if (!empty($fieldName)) {
                    $update = BusinessSetting::updateOrInsert(
                        [
                            'type' => $fieldName,
                        ],
                        [
                            'value'=> $fieldValue,
                            'updated_at' => now(),
                            'updated_by' => auth('admin')->user()->id,
                        ]
                    );
                }
            }
            if ($file4 = $request->file('logo')) {
                $data = BusinessSetting::where('type', 'logo')->first();
                $image4 = ImageHelper::handleUpdatedUploadedImage($file4, '/storage', $data, 'logo');
                $update = BusinessSetting::updateOrInsert(
                    [
                        'type' => 'logo',
                    ],
                    [
                        'value'=> $image4,
                        'updated_at' => now(),
                        'updated_by' => auth('admin')->user()->id,
                    ]
                );
            }
            if ($file5 = $request->file('footer_logo')) {
                $data2 = BusinessSetting::where('type', 'logo')->first();
                $image5 = ImageHelper::handleUpdatedUploadedImage($file5, '/storage', $data2, 'footer_logo');
                $update2 = BusinessSetting::updateOrInsert(
                    [
                        'type' => 'footer_logo',
                    ],
                    [
                        'value'=> $image5,
                        'updated_at' => now(),
                        'updated_by' => auth('admin')->user()->id,
                    ]
                );
            }

            if ($file6 = $request->file('small_logo')) {
                $data3 = BusinessSetting::where('type', 'small_logo')->first();
                $image6 = ImageHelper::handleUpdatedUploadedImage($file6, '/storage', $data3, 'small_logo');
                $update3 = BusinessSetting::updateOrInsert(
                    [
                        'type' => 'small_logo',
                    ],
                    [
                        'value'=> $image6,
                        'updated_at' => now(),
                        'updated_by' => auth('admin')->user()->id,
                    ]
                );
            }

            DB::commit();
            return back()->with('success', __('Data updated successfully'));

        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', __('An error occured! Try Again'));
        }
    }


    public function mailConfig(){
        return view('backend.business_settings.mailConfig');
    }


    public function mailConfigUpdate(Request $request){
        abort(404);
        $validatedData = $request->validate([
            'MAIL_MAILER' => ['required'],
            'MAIL_HOST' => ['required'],
            'MAIL_PORT' => ['required'],
            'MAIL_USERNAME' => ['required'],
            'MAIL_PASSWORD' => ['required'],
            'MAIL_ENCRYPTION' => ['required'],
            'MAIL_FROM_ADDRESS' => ['required'],
            'MAIL_FROM_NAME' => ['required']
        ]);
        DB::beginTransaction();
        try {
            $data = json_encode([
                "status" => 1,
                "MAIL_MAILER" => $request['MAIL_MAILER'],
                "MAIL_HOST" => $request['MAIL_HOST'],
                "MAIL_PORT" => $request['MAIL_PORT'],
                "MAIL_USERNAME" => $request['MAIL_USERNAME'],
                "MAIL_PASSWORD" => $request['MAIL_PASSWORD'],
                "MAIL_ENCRYPTION" => $request['MAIL_ENCRYPTION'],
                "MAIL_FROM_ADDRESS" => $request['MAIL_FROM_ADDRESS'],
                "MAIL_FROM_NAME" => $request['MAIL_FROM_NAME']
            ]);
            $update = BusinessSetting::updateOrInsert(
                [
                    'type' => 'mail_config',
                ],
                [
                    'value'=> $data
                ]
            );

            DB::commit();
            return back()->with('success', __('Data updated successfully'));

        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', __('An error occured! Try Again'));
        }
    }

    public function smsConfig(){
        return view('backend.business_settings.smsConfig');
    }


    public function smsConfigUpdate(Request $request, $name){
        if ($name == 'twilio_sms') {
            DB::table('business_settings')->updateOrInsert(['type' => 'twilio_sms'], [
                'type' => 'twilio_sms',
                'value' => json_encode([
                    'status' => $request['status'],
                    'sid' => $request['sid'],
                    'messaging_service_sid' => $request['messaging_service_sid'],
                    'token' => $request['token'],
                    'from' => $request['from'],
                    'otp_template' => $request['otp_template'],
                ]),
                'updated_by' => auth('admin')->user()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return back()->with('success', __('Data updated successfully'));
    }


    public function sendTestMail(Request $request){
        abort(404);
        $validatedData = $request->validate([
            'email' => ['required'],
        ]);

        $response_flag = 0;
        try {
            $details = [
                'title' => 'Test Email',
                'body' => 'This is a test email from admin.'
            ];

            Mail::to($request->email)->send(new TestMail($details));
            $data = [
                'type' => 'success',
                'msg' => __('Test email sent successfully!'),
            ];

            return $data;

        } catch (\Throwable $th) {
            $data = [
                'type' => 'error',
                'msg' => $th->getMessage(),
            ];
            return $data;
        }
    }




    public function paymentMethod(){
        return view('backend.business_settings.paymentMethod');
    }


    public function paymentMethodUpdate(Request $request, $name)
    {
        abort(404);
        if ($name == 'stripe') {
            $payment = BusinessSetting::where('type', 'stripe')->first();
            if (isset($payment) == false) {
                DB::table('business_settings')->insert([
                    'type' => 'stripe',
                    'value' => json_encode([
                        'status' => 1,
                        'environment' => 'sandbox',
                        'api_key' => '',
                        'published_key' => ''
                    ]),
                    'updated_by' => auth('admin')->user()->id,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
            } else {
                if ($request['status'] == 1) {
                    $request->validate([
                        'api_key' => 'required',
                        'published_key' => 'required'
                    ]);
                }
                DB::table('business_settings')->where(['type' => 'stripe'])->update([
                    'type' => 'stripe',
                    'value' => json_encode([
                        'status' => $request['status'],
                        'environment' => $request['environment'],
                        'api_key' => $request['api_key'],
                        'published_key' => $request['published_key']
                    ]),
                    'updated_by' => auth('admin')->user()->id,
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
            }
        } elseif ($name == 'paypal') {
            $payment = BusinessSetting::where('type', 'paypal')->first();
            if (isset($payment) == false) {
                DB::table('business_settings')->insert([
                    'type' => 'paypal',
                    'value' => json_encode([
                        'status' => 1,
                        'environment' => 'sandbox',
                        'paypal_client_id' => '',
                        'paypal_secret' => '',
                    ]),
                    'updated_by' => auth('admin')->user()->id,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
            } else {
                if ($request['status'] == 1) {
                    $request->validate([
                        'paypal_client_id' => 'required',
                        'paypal_secret' => 'required'
                    ]);
                }
                DB::table('business_settings')->where(['type' => 'paypal'])->update([
                    'type' => 'paypal',
                    'value' => json_encode([
                        'status' => $request['status'],
                        'environment' => $request['environment'],
                        'paypal_client_id' => $request['paypal_client_id'],
                        'paypal_secret' => $request['paypal_secret'],
                    ]),
                    'updated_by' => auth('admin')->user()->id,
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
            }
        }

        return back()->with('success', __('Data updated successfully'));
    }


}
