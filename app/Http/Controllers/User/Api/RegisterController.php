<?php

namespace App\Http\Controllers\User\Api;

use App\Models\User;
use App\Helpers\Common;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:user');
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required','email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:5'],
        ]);
        if ($validator->fails()) {
            return response()->json(['status'=> 'error', 'message' => Common::apiErrorProcessor($validator)], 422);
        }

        DB::beginTransaction();

        try {
            $data = new User();
            $data->fname = $request->fname;
            $data->lname = $request->lname;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);
            $data->token = Str::random(64);
            $data->save();
            DB::commit();

            $res = [
                'status' => 'success',
                'message' => 'Registration successful!',
                'tcrm_redirect_url' => route ('user.loginWithToken', $data->token),
            ];

            return response()->json($res, 200);

        } catch (\Throwable $th) {
            $res = [
                'status' => 'error',
                'message' => 'An error occured! try after some times',
            ];

            DB::rollback();
            return response()->json($res, 500);

        }


    }

}
