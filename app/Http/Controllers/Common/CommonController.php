<?php

namespace App\Http\Controllers\Common;

use App\Models\Pricing;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{
    public function getLangComPrice(Request $request){
        $data = Pricing::where('sector_id', $request->sector)->where(function ($query) use ($request) {
            $query->where('language_id', $request->from_lang)->orWhere('language_id', $request->to_lang);
        })->first();

        $res = [
            'rate_per_word' => $data->professionals_rate ?? null,
            'rate_per_minute' => $data->professionals_rate ?? null,
        ];

        return json_encode($res);

    }


    public function getAvailableLanCom(Request $request){

        if ($request->id == 27) {
            $datas = Language::where('id', '!=', $request->id)->orderBy('title')->get(['id', 'title']);
            return json_encode($datas);
        }else{
            $datas = Language::where('id', 27)->orderBy('title')->get(['id', 'title']);
            return json_encode($datas);
        }
    }
}
