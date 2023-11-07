<?php

namespace App\Http\Controllers\User\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login (Request $request){
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);
        if ($validator->fails()) {
            return response()->json(['status'=> 'error', 'message' => Common::apiErrorProcessor($validator)], 422);
        }

        try {
            $user = User::where(['email' => $request->username])->first();
            if (isset($user)) {
                if(Auth::attempt(['email' => $user->email, 'password' => $request->password])){
                    $user = Auth::user();
                    $res = [
                        'status' => 'success',
                        'message' => 'Login successful!',
                        'tcrm_redirect_url' => route ('user.loginWithToken', $user->token),
                    ];

                    return response()->json($res, 200);
                }
                else{
                    return response()->json(['message' => 'These credentials do not match our records', 'status' => 'error'], 401);
                }
            } else {
                $res = [
                    'status' => 'error',
                    'message' => 'These credentials do not match our records',
                ];

                return response()->json($res, 401);
            }
        } catch (\Throwable $th) {
            $res = [
                'status' => 'error',
                'message' => 'An error occured! try after some times',
            ];

            return response()->json($res, 500);
        }
    }
}
