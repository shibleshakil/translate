<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('web.index');
    }


    public function languageProfessionals(){
        return view('web.language-professionals');
    }


    public function instantQuote(){
        return view('web.instant-quote');
    }


    public function contactUs(){
        return view('web.contact-us');
    }


    public function fastTranslation(){
        return view('web.fast-translation');
    }


    public function contentLocalization(){
        return view('web.content-localization');
    }


    public function websiteLocalization(){
        return view('web.website-localization');
    }


    public function multilingualSeo(){
        return view('web.multilingual-seo');
    }


    public function multilingualTranscription(){
        return view('web.multilingual-transcription');
    }


    public function audioTranscription(){
        return view('web.audio-transcription');
    }


    public function videoTranscription(){
        return view('web.video-transcription');
    }


    public function interpretingServices(){
        return view('web.interpreting-services');
    }


    public function certifiedTranslation(){
        return view('web.certified-translation');
    }



}
