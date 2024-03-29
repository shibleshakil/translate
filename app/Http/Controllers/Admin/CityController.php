<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    public function index() {
        $countries = Country::withTrashed()->orderBy('nicename')->get();
        $datas = City::withTrashed()->get()->reverse();
        $sl = 0;

        return view('backend.quote_settings.cities', compact('countries', 'datas', 'sl'));
    }


    public function store(Request $request) {
        $validatedData = $request->validate([
            'title' => ['required', 'string', 'unique:cities,title,'.$request->id .',id,country_id,'.$request->country],
            'country' => ['required', 'exists:countries,id'],
            'zip_code' => ['nullable'],
        ]);

        DB::beginTransaction();

        try {
            $data = new City;
            $data->country_id = $request->country;
            $data->title = $request->title;
            $data->zip_code = $request->zip_code;
            $data->save();
            DB::commit();

            return back()->with('success', 'Data inserted successfully!');

        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', 'An error occured! Try again.');
        }

    }


    public function update(Request $request) {
        $validatedData = $request->validate([
            'title' => ['required', 'string', 'unique:cities,title,'.$request->id .',id,country_id,'.$request->country],
            'country' => ['required', 'exists:countries,id'],
            'zip_code' => ['nullable'],
        ]);

        DB::beginTransaction();

        try {
            $data = City::findorFail($request->id);
            $data->country_id = $request->country;
            $data->title = $request->title;
            $data->zip_code = $request->zip_code;
            $data->save();
            DB::commit();

            return back()->with('success', 'Data updated successfully!');

        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', 'An error occured! Try again.');
        }

    }


    public function delete($id){
        DB::beginTransaction();

        try {
            $data = City::find($id);
            if (!$data) {
                DB::rollback();
                return $res = [
                    'type'=> 'error',
                    'title'=> __('Error'),
                    'msg'=> __('Data not found!')
                ];
            }

            $data->delete();

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

    public function restore(Request $request, $id){
        DB::beginTransaction();

        try {
            $data = City::onlyTrashed()->find($id);
            if (!$data) {
                DB::rollback();
                return $res = [
                    'type'=> 'error',
                    'title'=> __('Error'),
                    'msg'=> __('Data not found!')
                ];
            }

            $data->restore();

            DB::commit();

            return $res = [
                'type' => 'success',
                'title' => __('Recovered!'),
                'msg' => __('Data recovered successfully!'),
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

