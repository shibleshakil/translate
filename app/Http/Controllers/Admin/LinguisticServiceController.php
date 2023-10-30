<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\LinguisticService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LinguisticServiceController extends Controller
{
    public function index() {
        $datas = LinguisticService::withTrashed()->get()->reverse();
        $sl = 0;

        return view('backend.quote_settings.linguistic_services', compact('datas', 'sl'));
    }


    public function store(Request $request) {
        $validatedData = $request->validate([
            'title' => ['required', 'string', 'unique:linguistic_services,title,'.$request->id .',id'],
        ]);

        DB::beginTransaction();

        try {
            $data = new LinguisticService();
            $data->title = $request->title;
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
            'title' => ['required', 'string', 'unique:linguistic_services,title,'.$request->id .',id'],
        ]);

        DB::beginTransaction();

        try {
            $data = LinguisticService::findorFail($request->id);
            $data->title = $request->title;
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
            $data = LinguisticService::find($id);
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
            $data = LinguisticService::onlyTrashed()->find($id);
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
