@extends('layouts.frontend.app')
@section('title', 'Get Started with TranslationsX')

@section('css')

@endsection

@section('content')
    <section class="section--overflow" id="our-services">
        <div class="layout">
            <div class="layout__row   ">
                <div class="layout__col-12 layout__col-xs-12 ">
                    <div class="hero-text hero-text--center ">
                        <h3>Get Started with TranslationsX
                        </h3>
                        <p>Navigate the complexities of language with ease. Whether you're looking for translation,
                            transcription, or interpreting services, we've got you covered. Provide us with the details
                            of your project, and let our global network of experts deliver unparalleled results.
                        </p>
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
                        <h3 style="font-size: 30px;">Professional Translation Services:</h3>
                    </div>
                </div>
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text  hero-text--medium">
                        <p>From <span style="color: #625BF6;">legal documents to technical manuals,</span> our
                            translators ensure clarity, precision, and cultural relevance.
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
                        <h3 style="font-size: 30px;">Accurate Transcription:</h3>
                    </div>
                </div>
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text  hero-text--medium">
                        <p>Our transcribers handle <span style="color: #625BF6;"> audio and video</span> materials,
                            ensuring every word is captured with utmost accuracy.
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
                        <h3 style="font-size: 30px;">Seamless Interpreting:</h3>
                    </div>
                </div>
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text  hero-text--medium">
                        <p>Our interpreters bridge communication gaps, making conversations flow naturally in any
                            setting.
                        </p>
                    </div>
                </div>
            </div>
            <a href="{{ route ('instantQuote') }}" class="button button--secondary">Proceed to Quote
            </a>
        </div>

    </section>
    <section class="section--overflow">
        <div class="layout">
            <div class="layout__row layout__row--center  ">
                <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text ">
                        <h1 style="font-size: 40px;">About TranslationsX


                        </h1>
                        <p style="font-size: 15px;">At TranslationsX, we believe in breaking down language barriers.
                            With a world as vast and diverse as ours, communication is the key to understanding and
                            collaboration. Leveraging our global network of translators, interpreters, and transcribers,
                            we provide #1 <span style="color: #625BF6; font-weight: bold;"> Professional Online
                                Translation Services.</span> We're more than just a service provider; we're your partner
                            in connecting with the world.
                        </p>

                    </div>
                </div>
                <div class="layout__col-1 layout__col-xs-12 ">
                </div>
                <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-image">

                        <picture>

                            <source media="(max-width: 428px)" srcset="{{ asset ('public/frontend/images/4932756.jpg') }},
                            {{ asset ('public/frontend/images/4932756.jpg') }}">

                            <source srcset="{{ asset ('public/frontend/images/4932756.jpg') }},
                            {{ asset ('public/frontend/images/4932756.jpg') }}">

                            <img src="{{ asset ('public/frontend/images/4932756.jpg') }}"
                            srcset="{{ asset ('public/frontend/images/4932756.jpg') }}" loading="eager">
                        </picture>
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
                        <h3>Meet Our Experts
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
                        <h3>Translation:
                        </h3>
                    </div>
                </div>
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text ">
                        <ul class="list list--checked">
                            <li><span style="font-weight: bold;">Native Translators:</span> <span
                                    style="color: #625BF6;">We work with native speakers to ensure your content is
                                    translated naturally, keeping cultural nuances in mind.</span>
                            </li>
                            <li><span style="font-weight: bold;">Specialized Fields:</span> Our translators come from a
                                range of professional backgrounds, allowing us to match your content with a translator
                                experienced in your sector.
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
                        <h3>Transcription:
                        </h3>
                    </div>
                </div>
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text ">
                        <ul class="list list--checked">
                            <li><span style="font-weight: bold;">Detail-Oriented Transcribers:</span> We pride ourselves
                                on our team's attention to detail. Every pause, tone, and sentiment is captured to
                                ensure a complete representation of your content.
                            </li>
                            <li><span style="font-weight: bold;">Multi-format Expertise:</span> Whether it's a video
                                conference, an audio interview, or a podcast, our team is equipped to handle a range of
                                formats.
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
                        <h3>Interpreting:
                        </h3>
                    </div>
                </div>
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text ">
                        <ul class="list list--checked">
                            <li><span style="font-weight: bold;">On-Demand Interpretations:</span> Our interpreters are
                                available for real-time interpretation, ensuring seamless communication for meetings,
                                conferences, or personal interactions.
                            </li>
                            <li><span style="font-weight: bold;">Vast Language Pairs:</span> From common languages to
                                rare dialects, our interpreters can cater to a wide range of language pairs.
                            </li>
                        </ul>
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
                        <a href="{{ route ('instantQuote') }}" class="button button--secondary">Translate now
                        </a>
                        <a href="{{ route ('contactUs') }}" class="link link--noline  link--medium">Talk to us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection
