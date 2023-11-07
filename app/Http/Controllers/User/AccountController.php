<?php

namespace App\Http\Controllers\User;

use App\Models\City;
use App\Models\User;
use App\Models\Sector;
use App\Models\CatTool;
use App\Models\Language;
use App\Helpers\ImageHelper;
use Illuminate\Http\Request;
use App\Models\UserReference;
use App\Models\UserExperience;
use App\Models\LinguisticService;
use Illuminate\Support\Facades\DB;
use App\Models\UserLangCombination;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\ExperienceAndExpertise;

class AccountController extends Controller
{
    public function profile(){
        $data = auth('user')->user();
        $cities = City::orderBy('title')->get();

        if($data->type == 1){
            $exp_n_experts = ExperienceAndExpertise::orderBy('title')->get();
            $languages = Language::orderBy('title')->get();
            $sectors = Sector::orderBy('title')->get();
            $lin_services = LinguisticService::orderBy('title')->get();
            $catTools = CatTool::orderBy('title')->get();

            $lang_combinations = UserLangCombination::where('user_id', $data->id)->get();
            $experiences = UserExperience::where('user_id', $data->id)->get();
            $references = UserReference::where('user_id', $data->id)->get();
            return view('users.profile', compact('data', 'cities', 'exp_n_experts', 'languages', 'sectors',
            'lang_combinations', 'lin_services', 'catTools', 'experiences', 'references'));
        }

        return view('users.client_profile', compact('data', 'cities'));

    }

    public function showPasswordForm(){
        return view('users.password_update');
    }


    public function updatePassword(Request $request){
        $validatedData = $request->validate([
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ]);

        DB::beginTransaction();
        try {
            $data = User::find(auth('user')->user()->id);
            $data->password = Hash::make($request->password);
            $data->save();

            DB::commit();
            return back()->with('success', __('Password changed successfully'));

        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', __('An error occured! Try Again'));
        }
    }


    public function basicInfo (Request $request){
        $validatedData = $request->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required','email', 'unique:users,email,'.auth('user')->user()->id],
            'image' => ['nullable', 'mimes:jpg,bmp,png'],
        ]);

        DB::beginTransaction();

        try {
            $data = User::findorFail(auth('user')->user()->id);
            $data->fname = $request->fname;
            $data->lname = $request->lname;
            $data->phone = $request->phone;

            if ($file = $request->file('image')) {
                $data->image = ImageHelper::handleUpdatedUploadedImage($file, '/storage', $data, 'image');
            }

            $data->email = $request->email;
            $data->experience_expertise_id = $request->experience_expertise_id;
            $data->professional_Experience = $request->professional_Experience;
            $data->native_language_id = $request->native_language_id;
            $data->specialized_subject = $request->specialized_subject ? json_encode($request->specialized_subject) : null;
            $data->dob = $request->dob;
            $data->city_id = $request->city_id;
            $data->save();
            DB::commit();
            return back()->with('success', __('Data updated successfully'));

        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', $th->getMessage());
        }
    }


    public function education (Request $request){
        DB::beginTransaction();

        try {
            $data = User::findorFail(auth('user')->user()->id);
            $data->education = $request->education;
            $data->save();
            DB::commit();
            return back()->with('success', __('Data updated successfully'));

        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', $th->getMessage());
        }
    }


    public function linguisticsServices (Request $request){
        DB::beginTransaction();

        try {
            $data = User::findorFail(auth('user')->user()->id);
            $data->linguistic_services = $request->linguistic_services ? json_encode($request->linguistic_services) : null;
            $data->rate_per_word = $request->rate_per_word;
            $data->rate_per_minute = $request->rate_per_minute;
            $data->daily_translation_capacity = $request->daily_translation_capacity;
            $data->save();
            DB::commit();
            return back()->with('success', __('Data updated successfully'));

        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', $th->getMessage());
        }
    }


    public function langCombination (Request $request){
        DB::beginTransaction();

        try {

            if (sizeof ($request->from_lang) > 0) {
                foreach ($request->from_lang as $key => $value) {

                    $data = UserLangCombination::updateorInsert([
                        'user_id' => auth('user')->user()->id,
                        'from' => $value,
                        'to' => $request->to_lang[$key],
                        'sector_id' => $request->sector[$key]
                    ],[
                        'rate_per_word' => $request->rate_per_word[$key],
                        'rate_per_minute' => $request->rate_per_minute[$key],
                    ]);
                }
            }
            DB::commit();
            return back()->with('success', __('Data updated successfully'));

        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', $th->getMessage());
        }
    }


    public function experiences (Request $request){
        DB::beginTransaction();

        try {

            if (sizeof ($request->designation) > 0) {
                foreach ($request->designation as $key2 => $value) {
                    if ($request->exp_id[$key2]) {
                        $data = UserExperience::find($request->exp_id[$key2]);
                    }else{
                        $data = new UserExperience();

                    }

                    $data->user_id = auth('user')->user()->id;
                    $data->designation = $value;
                    $data->company = $request->company[$key2] ?? null;
                    $data->from_date = $request->from_date[$key2] ?? null;
                    $data->currently = $request->currently[$key2] ?? null;
                    $data->to_date = $request->to_date[$key2] ?? null;
                    $data->responsibilities = $request->responsibilities[$key2] ?? null;

                    $data->save();
                }
            }
            DB::commit();
            return back()->with('success', __('Data updated successfully'));

        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', $th->getMessage());
        }
    }


    public function references (Request $request){
        DB::beginTransaction();

        try {

            if (sizeof ($request->ref_name) > 0) {
                foreach ($request->ref_name as $key2 => $value) {
                    if ($request->ref_id[$key2]) {
                        $data = UserReference::find($request->ref_id[$key2]);
                    }else{
                        $data = new UserReference();

                    }

                    $data->user_id = auth('user')->user()->id;
                    $data->ref_name = $value;
                    $data->ref_email = $request->ref_email[$key2] ?? null;
                    $data->ref_phone = $request->ref_phone[$key2] ?? null;
                    $data->ref_capacity = $request->ref_capacity[$key2] ?? null;
                    $data->ref_company = $request->ref_company[$key2] ?? null;

                    $data->save();
                }
            }
            DB::commit();
            return back()->with('success', __('Data updated successfully'));

        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', $th->getMessage());
        }
    }


    public function catTools (Request $request){
        DB::beginTransaction();

        try {
            $data = User::findorFail(auth('user')->user()->id);
            $data->cat_tools = $request->cat_tools ? json_encode($request->cat_tools) : null;
            $data->desktop_publishing_sofware = $request->desktop_publishing_sofware ? json_encode($request->desktop_publishing_sofware) : null;
            $data->save();
            DB::commit();
            return back()->with('success', __('Data updated successfully'));

        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', $th->getMessage());
        }
    }


    public function cvUpload (Request $request){
        $validatedData = $request->validate([
            'cv' => ['nullable', 'mimes:docx,pdf'],
        ]);


        DB::beginTransaction();

        try {
            $data = User::findorFail(auth('user')->user()->id);
            if ($file = $request->file('cv')) {
                $data->cv = ImageHelper::handleUpdatedUploadedImage($file, '/storage', $data, 'cv');
            }

            $data->save();
            DB::commit();
            return back()->with('success', __('Data updated successfully'));

        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', $th->getMessage());
        }
    }


    public function LangComdelete($id){
        DB::beginTransaction();

        try {
            $data = UserLangCombination::find($id);
            if (!$data) {
                DB::rollback();
                return $res = [
                    'type'=> 'error',
                    'title'=> __('Error'),
                    'msg'=> __('Data not found!')
                ];
            }

            $data->forceDelete();

            DB::commit();

            return $res = [
                'type' => 'success',
                'title' => __('Deleted!'),
                'msg' => __('Data deleted successfully!'),
            ];

        } catch (\Throwable $th) {

            DB::rollback();
            return $res = [
                'type'=> 'error',
                'title'=> __('Error'),
                'msg'=> __('An Error Occured! Try Again')
            ];
        }

    }


    public function expdelete($id){
        DB::beginTransaction();

        try {
            $data = UserExperience::find($id);
            if (!$data) {
                DB::rollback();
                return $res = [
                    'type'=> 'error',
                    'title'=> __('Error'),
                    'msg'=> __('Data not found!')
                ];
            }

            $data->forceDelete();

            DB::commit();

            return $res = [
                'type' => 'success',
                'title' => __('Deleted!'),
                'msg' => __('Data deleted successfully!'),
            ];

        } catch (\Throwable $th) {

            DB::rollback();
            return $res = [
                'type'=> 'error',
                'title'=> __('Error'),
                'msg'=> __('An Error Occured! Try Again')
            ];
        }

    }


    public function refdelete($id){
        DB::beginTransaction();

        try {
            $data = UserReference::find($id);
            if (!$data) {
                DB::rollback();
                return $res = [
                    'type'=> 'error',
                    'title'=> __('Error'),
                    'msg'=> __('Data not found!')
                ];
            }

            $data->forceDelete();

            DB::commit();

            return $res = [
                'type' => 'success',
                'title' => __('Deleted!'),
                'msg' => __('Data deleted successfully!'),
            ];

        } catch (\Throwable $th) {

            DB::rollback();
            return $res = [
                'type'=> 'error',
                'title'=> __('Error'),
                'msg'=> __('An Error Occured! Try Again')
            ];
        }

    }

}
