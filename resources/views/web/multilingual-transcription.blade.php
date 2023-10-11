@extends('layouts.frontend.app')
@section('title', 'Multilingual Transcription')

@section('css')

@endsection

@section('content')
<section class="section--overflow">
    <div class="layout">
        <div class="layout__row layout__row--center  ">
            <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text ">
                    <h1 style="font-size: 40px;">Multilingual Transcription

                    </h1>
                    <p style="font-size: 15px;">In the age of digital globalization, the power of the spoken word is
                        amplified when it can be understood by diverse audiences worldwide. Our specialized
                        Multilingual Transcription Services are tailored to meet this need. We don't just
                        transcribe; we bring words to life in multiple languages, ensuring every sentiment and
                        detail is captured and rendered with utmost accuracy. Whether you're looking to convert a
                        seminar, a clip, or an interview, we have the language expertise to bridge communication
                        gaps seamlessly.
                    </p>
                    <a href="contact-us.html" class="button button--secondary">Transcribe Now
                    </a>
                </div>
            </div>
            <div class="layout__col-1 layout__col-xs-12 ">
            </div>
            <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                <div class="hero-image">

                    <picture>

                        <source media="(max-width: 428px)"
                            srcset="{{ asset('public/frontend/images/transcriptionmulti.jpg') }}, {{ asset('public/frontend/images/transcriptionmulti.jpg') }}">

                        <source srcset="{{ asset('public/frontend/images/transcriptionmulti.jpg') }}, {{ asset('public/frontend/images/transcriptionmulti.jpg') }}">

                        <img src="{{ asset('public/frontend/images/transcriptionmulti.jpg') }}" srcset="{{ asset('public/frontend/images/transcriptionmulti.jpg') }}" loading="eager">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section--overflow">
    <div class="layout">
        <div class="layout__row   ">
            <div class="layout__col layout__col-xs-12 ">
                <div class="cta">
                    <div class="cta__description">
                        <h3 style="font-size: 30px;">The Essence of Multilingual Transcription
                        </h3>
                        <p>Audio and video transcend boundaries, resonating with global audiences when rendered in
                            their native tongue. Our transcription services go beyond merely translating. We
                            specialize in transcribing videos and audios into various languages, ensuring every
                            nuance is captured and every word is transcribed with precision.
                        </p>
                    </div>
                    <a href="contact-us.html" class="button button--stretched button--big ">
                        Talk to Us
                    </a>

                </div>

            </div>

        </div>
    </div>
</section>
<section class="section--overflow" id="our-services">
    <div class="layout">
        <div class="layout__row   ">
            <div class="layout__col-12 layout__col-xs-12 ">
                <div class="hero-text hero-text--center ">
                    <h3>Why Transcription with TranslationsX?
                    </h3>
                    <p>Trust in the unmatched quality that TranslationsX brings to the table. With a team of
                        professional linguists and transcription experts, we ensure unparalleled accuracy in every
                        project. Our language expertise stands out, guaranteeing that our transcriptions are not
                        just linguistically sound but culturally resonant. Dive into the world of multilingual
                        transcription with a team that prioritizes your message's integrity in every language.
                    </p>
                    <a href="contact-us.html" class="button button--secondary">Talk to us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section--overflow">
    <div class="layout">
        <div class="layout__row   ">
            <div class="layout__col layout__col-xs-12 ">
                <div class="cta">
                    <div class="cta__description">
                        <h3 style="font-size: 30px;">How It Works
                        </h3>
                        <p>Dive into our streamlined process designed for ease and precision. From submitting your
                            files to receiving transcriptions in the language of your choice, every step is
                            transparent and efficient. <a href="contact-us.html" style="text-decoration: none;">Connect
                                with us</a>, and let our experts guide you
                            through each stage, ensuring your content is ready for global audiences.</p>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>
@endsection

@section('script')

@endsection
