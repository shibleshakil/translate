<?php

namespace App\Http\Controllers\Admin\Quote;

use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LanguagesController extends Controller
{
    public function index() {
        $datas = Language::withTrashed()->get()->reverse();
        $sl = 0;

        return view('backend.quote_settings.languages', compact('datas', 'sl'));
    }


    public function store(Request $request) {
        $validatedData = $request->validate([
            'title' => ['required', 'string', 'unique:languages,title,'.$request->id .',id'],
        ]);

        DB::beginTransaction();

        try {
            $data = new Language;
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
            'title' => ['required', 'string', 'unique:languages,title,'.$request->id .',id'],
        ]);

        DB::beginTransaction();

        try {
            $data = Language::findorFail($request->id);
            if ($data->id == 27) {
                DB::rollback();
                return $res = [
                    'type'=> 'error',
                    'title'=> __('Error'),
                    'msg'=> __('Data not found!')
                ];
            }
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
            $data = Language::find($id);
            if (!$data || $data->id == 27) {
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
            $data = Language::onlyTrashed()->find($id);
            if (!$data || $data->id == 27) {
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


    public function professionalStatus(Request $request, $id){
        DB::beginTransaction();

        try {
            $data = Language::withTrashed()->find($id);
            if (!$data) {
                DB::rollback();
                return $res = [
                    'type'=> 'error',
                    'title'=> __('Error'),
                    'msg'=> __('Data not found!')
                ];
            }

            $data->professional = $request->status;
            $data->save();

            DB::commit();

            return $res = [
                'type' => 'success',
                'title' => __('Changed!'),
                'msg' => __('Status changed successfully!'),
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
    public function quoteStatus(Request $request, $id){
        DB::beginTransaction();

        try {
            $data = Language::withTrashed()->find($id);
            if (!$data) {
                DB::rollback();
                return $res = [
                    'type'=> 'error',
                    'title'=> __('Error'),
                    'msg'=> __('Data not found!')
                ];
            }

            $data->quote = $request->status;
            $data->save();

            DB::commit();

            return $res = [
                'type' => 'success',
                'title' => __('Changed!'),
                'msg' => __('Status changed successfully!'),
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
