<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('web.index');
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

    public function languageProfessionals(){
        return view('web.language-professionals');
    }


    public function instantQuote(){
        return view('web.instant-quote');
    }


    public function contactUs(){
        return view('web.contact-us');
    }



    public function reliableTranscription(){
        abort(404);
        return view('web.reliable-transcription');
    }


    public function professionalTranslation(){
        abort(404);
        return view('web.professional-translation');
    }


    public function expertInterpreting(){
        abort(404);
        return view('web.expert-interpreting');
    }


    public function getStarted(){
        abort(404);
        return view('web.get-started');
    }


    public function terms_and_conditions(){
        abort(404);
        return view('web.terms-and-conditions');
    }


    public function privacy_policy(){
        abort(404);
        return view('web.privacy-policy');
    }


    public function cookie_policy(){
        abort(404);
        return view('web.cookie-policy');
    }


    public function legalTranslations(){
        abort(404);
        return view('web.legal-translations');
    }


    public function technicalTranslation(){
        abort(404);
        return view('web.technical-translation');
    }


    public function marketingTranslation(){
        abort(404);
        return view('web.marketing-translation');
    }


    public function financialTranslation(){
        abort(404);
        return view('web.financial-translation');
    }


    public function websiteTranslation(){
        abort(404);
        return view('web.website-translation');
    }


    public function documentTranslation(){
        abort(404);
        return view('web.document-translation');
    }


    public function solutions(){
        abort(404);
        return view('web.solutions');
    }


}
