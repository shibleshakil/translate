@extends('layouts.frontend.app')
@section('title', 'Professional Translation Services')

@section('css')

@endsection

@section('content')
    <section class="section--overflow" id="our-services">
        <div class="layout">
            <div class="layout__row   ">
                <div class="layout__col-12 layout__col-xs-12 ">
                    <div class="hero-text hero-text--center ">
                        <h3>Our Premier Services at TranslationsX
                        </h3>
                        <p>At TranslationsX, we've expanded beyond the traditional bounds of a translation agency. We
                            proudly present ourselves as a global team of linguistic Experts, fervently united by a
                            single mission – demolishing linguistic barriers to cultivate effortless communication.
                        </p>
                        <a href="{{ route ('contactUs') }}" class="button button--secondary">Talk to us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section--overflow">
        <div class="layout">
            <div class="layout__row layout__row--center  ">
                <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text ">
                        <h1 style="font-size: 40px;">About TranslationsX
                        </h1>
                        <p style="font-size: 15px;">Founded with the goal of fostering a connected world, TranslationsX
                            stands as a beacon in the realm of linguistic services. Our journey is hallmarked by an
                            unwavering commitment to impeccable quality, ceaseless advancement, and the valorization of
                            the human element within every project.
                            Each word, phrase, or dialogue we encounter is carefully handled, ensuring it resonates with
                            the sentiment, tone, and clarity intended by its original author.
                        </p>
                    </div>
                </div>
                <div class="layout__col-1 layout__col-xs-12 ">
                </div>
                <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-image">

                        <picture>

                            <source media="(max-width: 428px)" srcset="{{ asset ('public/frontend/images/document.jpg') }},
                            {{ asset ('public/frontend/images/document.jpg') }}">

                            <source srcset="{{ asset ('public/frontend/images/document.jpg') }},
                            {{ asset ('public/frontend/images/document.jpg') }}">

                            <img src="{{ asset ('public/frontend/images/document.jpg') }}"
                            srcset="{{ asset ('public/frontend/images/document.jpg') }}" loading="eager">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section--overflow">
        <div class="layout">
            <div class="layout__row   ">
                <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text ">
                        <h3>Our Translators: The Heartbeat of TranslationsX
                        </h3>
                        <a href="{{ route ('instantQuote') }}" class="button button--secondary">Translate Now
                        </a>
                        <a href="{{ route ('contactUs') }}" class="link link--noline  link--medium">Talk to Us</a>
                    </div>
                </div>
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text ">
                        <h4 class="H400" style="margin-bottom: 20px;">Our team, a rich tapestry of translators,
                            transcribers, and interpreters, is meticulously chosen based on their unparalleled
                            expertise, vast experience, and profound cultural insights. At TranslationsX, our
                            translators transcend bilingual capabilities, embedding themselves deeply within the
                            cultures they represent.
                        </h4>
                        <ul class="list list--checked">
                            <li><span style="font-weight: bold;">Website and Document Translation:</span> Leveraging the
                                prowess of our extensive global network of translators, we pledge that every word
                                reverberates with the same emotional and contextual depth in the translated language as
                                it did in its original form.
                            </li>
                            <li><span style="font-weight: bold;">Localization Services:</span> At TranslationsX,
                                translation is more than a mechanical process. It's an intricate dance of adapting
                                content to resonate with cultural, regional, and demographic nuances.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section--overflow">
        <div class="layout">
            <div class="layout__row   ">
                <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text ">
                        <h3>Our Transcribers: Masters of Precision
                        </h3>
                        <a href="{{ route ('contactUs') }}" class="button button--secondary">Transcribe Now
                        </a>
                        <a href="{{ route ('contactUs') }}" class="link link--noline  link--medium">Talk to Us</a>
                    </div>
                </div>
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text ">
                        <h4 class="H400" style="margin-bottom: 20px;">To us, transcription is an art. An art where every
                            pause, sentiment, and intonation is captured with an unwavering commitment to precision.
                        </h4>
                        <ul class="list list--checked">
                            <li><span style="font-weight: bold;">Audio & Video Transcription:</span> Our dedicated team
                                ensures unwavering accuracy, encapsulating the very essence of spoken dialogues across a
                                myriad of formats.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section--overflow">
        <div class="layout">
            <div class="layout__row   ">
                <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text ">
                        <h3>Our Interpreters: Pioneers of Real-time Communication
                        </h3>
                        <a href="{{ route ('contactUs') }}" class="button button--secondary">Interpret Now
                        </a>
                        <a href="{{ route ('contactUs') }}" class="link link--noline  link--medium">Talk to Us</a>
                    </div>
                </div>
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text ">
                        <h4 class="H400" style="margin-bottom: 20px;">We firmly believe that language should never serve
                            as an impediment. Our team of interpreters, with their meticulous training and expertise,
                            ensure that communication remains fluid and coherent across a multitude of scenarios.
                        </h4>
                        <ul class="list list--checked">
                            <li><span style="font-weight: bold;">On-Demand and Specialized Interpreting:</span> Be it an
                                international convention or a nuanced medical consultation, our team ensures that
                                messages are relayed with utmost clarity and precision, irrespective of the languages in
                                play.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection
