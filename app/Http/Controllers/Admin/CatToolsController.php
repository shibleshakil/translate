<?php

namespace App\Http\Controllers\Admin;

use App\Models\CatTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CatToolsController extends Controller
{
    public function index() {
        $datas = CatTool::withTrashed()->get()->reverse();
        $sl = 0;

        return view('backend.quote_settings.cat_tools', compact('datas', 'sl'));
    }


    public function store(Request $request) {
        $validatedData = $request->validate([
            'title' => ['required', 'string', 'unique:cat_tools,title,'.$request->id .',id'],
        ]);

        DB::beginTransaction();

        try {
            $data = new CatTool();
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
            'title' => ['required', 'string', 'unique:cat_tools,title,'.$request->id .',id'],
        ]);

        DB::beginTransaction();

        try {
            $data = CatTool::findorFail($request->id);
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
            $data = CatTool::find($id);
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
            $data = CatTool::onlyTrashed()->find($id);
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
