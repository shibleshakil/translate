<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\BusinessSetting;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class QuoteSettingController extends Controller
{
    public function quoteSetting(){
        return view('backend.quote_settings.index');
    }



    public function quoteSettingUpdate(Request $request){
        DB::beginTransaction();
        try {
            $inputData = $request->except(['_token','logo','favicon']);

            foreach ($inputData as $fieldName => $fieldValue) {
                if (!empty($fieldName)) {
                    $update = BusinessSetting::updateOrInsert(
                        [
                            'type' => $fieldName,
                        ],
                        [
                            'value'=> $fieldValue,
                            'updated_at' => now(),
                            'updated_by' => auth('admin')->user()->id,
                        ]
                    );
                }
            }

            DB::commit();
            return back()->with('success', __('Data updated successfully'));

        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('error', $th->getMessage());
            return back()->with('error', __('An error occured! Try Again'));
        }
    }



}
