<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Helpers\Common;
use App\Helpers\ImageHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function profile(){
        $data = Admin::findorFail(auth('admin')->user()->id);
        return view('backend.profile', compact('data'));
    }


    public function profileUpdate(Request $request){
        $validatedData = $request->validate([
            'email' => ['required', 'unique:admins,email,' . auth('admin')->user()->id],
            'name' => ['required'],
            'image' => ['nullable', 'mimes:jpg,bmp,png'],
            'phone' => ['nullable', 'string'],
        ]);

        DB::beginTransaction();
        try {
            $data = Admin::find(auth('admin')->user()->id);
            $data->email = $request->email;
            $data->name = $request->name;
            $data->phone = $request->phone;

            if ($file = $request->file('image')) {
                $data->image = ImageHelper::handleUpdatedUploadedImage($file, '/storage', $data, 'image');
            }

            $data->save();

            DB::commit();
            return back()->with('success', __('Profile Updated successfully'));

        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', $th->getMessage());
            return back()->with('error', __('An error occured! Try Again'));
        }

    }



    public function showPasswordForm(){
        return view('backend.auth.password_update');
    }


    public function updatePassword(Request $request){
        $validatedData = $request->validate([
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ]);

        DB::beginTransaction();
        try {
            $data = Admin::find(auth('admin')->user()->id);
            $data->password = Hash::make($request->password);
            $data->save();

            DB::commit();
            return back()->with('success', __('Password changed successfully'));

        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', __('An error occured! Try Again'));
        }
    }


}
