<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    public function index() {
        $datas = Country::withTrashed()->get()->reverse();
        $sl = 0;

        return view('backend.quote_settings.countries', compact('datas', 'sl'));
    }


    public function store(Request $request) {
        $validatedData = $request->validate([
            'nicename' => ['required', 'string', 'unique:countries,nicename,'.$request->id .',id,iso,'.$request->iso],
            'iso' => ['required'],
            'iso3' => ['nullable'],
            'numcode' => ['nullable'],
            'phonecode' => ['nullable'],
        ]);

        DB::beginTransaction();

        try {
            $data = new Country;
            $data->name = strtoupper($request->nicename);
            $data->nicename = $request->nicename;
            $data->iso = $request->iso;
            $data->iso3 = $request->iso3;
            $data->numcode = $request->numcode;
            $data->phonecode = $request->phonecode;
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
            'nicename' => ['required', 'string', 'unique:countries,nicename,'.$request->id .',id,iso,'.$request->iso],
            'iso' => ['required', 'max:2'],
            'iso3' => ['nullable', 'max:3'],
            'numcode' => ['nullable', 'max:3'],
            'phonecode' => ['nullable', 'max:3'],
        ]);

        DB::beginTransaction();

        try {
            $data = Country::findorFail($request->id);
            $data->name = strtoupper($request->nicename);
            $data->nicename = $request->nicename;
            $data->iso = $request->iso;
            $data->iso3 = $request->iso3;
            $data->numcode = $request->numcode;
            $data->phonecode = $request->phonecode;
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
            $data = Country::find($id);
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
            $data = Country::onlyTrashed()->find($id);
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
