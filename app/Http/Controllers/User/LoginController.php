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
            else{
                dd("failed");
            }
        }

        return redirect()->route('login');
    }



    public function logout(Request $request)
    {
        auth()->guard('user')->logout();
        return redirect()->route('login');
    }


}
