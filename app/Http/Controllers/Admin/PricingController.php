<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sector;
use App\Models\Pricing;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PricingController extends Controller
{
    public function index() {
        $languages = Language::where('id', '!=', 27)->orderBy('title')->get();
        $sectors = Sector::orderBy('title')->get();
        $datas = Pricing::withTrashed()->get()->reverse();
        $sl = 0;

        return view('backend.quote_settings.pricing', compact('languages','sectors','datas', 'sl'));
    }


    public function store(Request $request) {
        $validatedData = $request->validate([
            'language_id' => ['required', 'unique:pricings,language_id,'. $request->id . ',id,sector_id,' . $request->sector_id,],
            'sector_id' => ['required', Rule::unique('pricings')->where(function ($query) use ($request) {
                    return $query->where('language_id', $request->language_id);
                })->ignore($request->id, 'id'),
            ],
            'client_rate' => ['required'],
            'client_min_price' => ['required'],
            'professionals_rate' => ['required'],
        ]);

        DB::beginTransaction();

        try {
            $data = new Pricing;
            $data->language_id = $request->language_id;
            $data->sector_id = $request->sector_id;
            $data->client_rate = $request->client_rate;
            $data->client_min_price = $request->client_min_price;
            $data->professionals_rate = $request->professionals_rate;
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
            'language_id' => ['required', 'unique:pricings,language_id,'. $request->id . ',id,sector_id,' . $request->sector_id,],
            'sector_id' => ['required', Rule::unique('pricings')->where(function ($query) use ($request) {
                    return $query->where('language_id', $request->language_id);
                })->ignore($request->id, 'id'),
            ],
            'client_rate' => ['required'],
            'client_min_price' => ['required'],
            'professionals_rate' => ['required'],
        ]);

        DB::beginTransaction();

        try {
            $data = Pricing::findorFail($request->id);
            $data->language_id = $request->language_id;
            $data->sector_id = $request->sector_id;
            $data->client_rate = $request->client_rate;
            $data->client_min_price = $request->client_min_price;
            $data->professionals_rate = $request->professionals_rate;
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
            $data = Pricing::find($id);
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
            $data = Pricing::onlyTrashed()->find($id);
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
