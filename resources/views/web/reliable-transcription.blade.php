@extends('layouts.frontend.app')
@section('title', 'Accurate and Reliable Transcription')

@section('css')

@endsection

@section('content')
    <section class="section--overflow" id="our-services">
        <div class="layout">
            <div class="layout__row   ">
                <div class="layout__col-12 layout__col-xs-12 ">
                    <div class="hero-text hero-text--center ">
                        <h3>Unwavering Precision with TranslationsX <br> Transcription Services
                        </h3>
                        <p>In an age of relentless digital communication, the essence of spoken words, dialogues, and
                            narratives is paramount. At TranslationsX, we understand that. We go beyond merely capturing
                            spoken content; we encapsulate the emotions, context, and nuances that accompany every word.
                        </p>
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
                        <h1 style="font-size: 40px;">About TranslationsX Transcription
                        </h1>
                        <p style="font-size: 15px;">TranslationsX's transcription journey has been one of unwavering
                            commitment. In our pursuit of excellence, we’ve transformed raw audio into refined, written
                            narratives that capture the very essence of its origin.
                            Our process is designed to guarantee 100% accuracy. Every project undergoes multiple layers
                            of quality checks, ensuring that our transcriptions are not just accurate, but also
                            meaningful.</p>
                    </div>
                </div>
                <div class="layout__col-1 layout__col-xs-12 ">
                </div>
                <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-image">

                        <picture>

                            <source media="(max-width: 428px)" srcset="{{ asset ('public/frontend/images/2nd.jpg') }},
                            {{ asset ('public/frontend/images/2nd.jpg') }}">

                            <source srcset="{{ asset ('public/frontend/images/2nd.jpg') }},
                            {{ asset ('public/frontend/images/2nd.jpg') }}">

                            <img src="{{ asset ('public/frontend/images/2nd.jpg') }}"
                            srcset="{{ asset ('public/frontend/images/2nd.jpg') }}" loading="eager">
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

                        <h3 style="">Our Transcribers: Guardians of Authenticity
                        </h3>

                    </div>

                </div>
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-text ">
                        <h4 class="H400" style="margin-bottom: 20px;">At the heart of our transcription services lies a
                            team of meticulous professionals. Every TranslationsX transcription is more than just an
                            expert in language - they’re an aficionado of context, tone, and clarity.
                        </h4>
                        <ul class="list list--checked">
                            <li><span style="font-weight: bold;">Audio Transcription: </span> Each audio file is
                                deciphered with careful precision. Our team ensures that every nuance, tone, and
                                sentiment is accurately represented in the written format.
                                </span> Fast translation services you can trust.</li>
                            <li><span style="font-weight: bold;">Video Transcription: </span> From webinars to movies,
                                our transcribers ensure that the visual essence and spoken content are perfectly
                                synchronized, giving readers a holistic understanding of the content.
                            </li>
                        </ul>
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
                        <h3>Why Choose TranslationsX for Transcription?
                        </h3>
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
                        <h3 style="font-size: 30px;">Experienced Team:</h3>
                    </div>
                </div>
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text  hero-text--medium">
                        <p>Our transcribers come with years of experience across various sectors, ensuring
                            domain-specific accuracy.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section--overflow" style="margin-top: -100px;">
        <div class="layout">
            <div class="layout__row   ">
                <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text ">
                        <h3 style=" font-size: 30px;">State-of-the-Art Technology:</h3>
                    </div>
                </div>
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text  hero-text--medium">
                        <p>While the human touch defines our work, we are backed by cutting-edge technology that
                            facilitates faster and more accurate transcription.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section--overflow" style="margin-top: -100px;">
        <div class="layout">
            <div class="layout__row   ">
                <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text ">
                        <h3 style="font-size: 30px;">Confidentiality Assured:</h3>
                    </div>
                </div>
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text  hero-text--medium">
                        <p>Every project is executed with the utmost respect for confidentiality. Your content is in
                            safe hands with us.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section--overflow" id="our-services" style="margin-top: -50px;">
        <div class="layout">
            <div class="layout__row   ">
                <div class="layout__col-12 layout__col-xs-12 ">
                    <div class="hero-text hero-text--center ">
                        <a href="{{ route ('instantQuote') }}" class="button button--secondary">Translate Now
                        </a>
                        <a href="{{ route ('contactUs') }}" class="link link--noline  link--medium">Talk to Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')

@endsection
