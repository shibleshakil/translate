<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginWithToken($token){
        $user = User::where('token', $token)->first();
        if ($user) {
            if (Auth::guard('user')->loginUsingId($user->id)) {
                return redirect()->route('user.dashboard');
            }
        }

        $externalUrl = env('APP_AFTER_LOGOUT_URL');
        return redirect()->away($externalUrl);

    }



    public function logout(Request $request)
    {
        auth()->guard('user')->logout();

        $externalUrl = env('APP_AFTER_LOGOUT_URL').'?logout';
        return redirect()->away($externalUrl);

    }


}
