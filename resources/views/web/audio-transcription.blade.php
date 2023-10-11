@extends('layouts.frontend.app')
@section('title', 'Audio Transcription')

@section('css')

@endsection

@section('content')
<section class="section--overflow">
    <div class="layout">
        <div class="layout__row   ">
            <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text ">
                    <h3>Audio Transcription
                    </h3>
                </div>
            </div>
            <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text  hero-text--medium">
                    <p>Amplify the reach of your audio content with our superior
                        Audio Transcription Services. In an era where podcasts,
                        interviews, and audio books are rapidly gaining traction,
                        ensuring your voice is heard across diverse audiences is
                        paramount. We pride ourselves on providing not just
                        transcription, but a fusion of transcription and localization,
                        adapting your audio for audiences worldwide, while retaining
                        its original essence.
                    </p>
                </div>
            </div>
            <a href="contact-us.html" class="button button--secondary">Transcribe Now
            </a>
        </div>
    </div>
</section>
<section class="section--overflow">
    <div class="layout">
        <div class="layout__row layout__row--center  ">
            <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text ">
                    <h1 style="font-size: 40px;">Making Audio Universally Understood
                    </h1>
                    <p style="font-size: 15px;">The resonance of audio content is
                        unparalleled. By transcribing and localizing your audio, you
                        ensure that its depth, nuance, and message harmonize with
                        audiences from varying linguistic backgrounds. Every piece of
                        audio carries a narrative, an emotion, or a lesson. Our
                        mission is to let these narratives flourish without being
                        bound by language constraints.
                    </p>
                    <a href="contact-us.html" class="button button--secondary">Talk to Us
                    </a>
                </div>
            </div>
            <div class="layout__col-1 layout__col-xs-12 ">
            </div>
            <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                <div class="hero-image">

                    <picture>

                        <source media="(max-width: 428px)" srcset="{{ asset('public/frontend/images/audio.jpg') }}, {{ asset('public/frontend/images/audio.jpg') }}">

                        <source srcset="{{ asset('public/frontend/images/audio.jpg') }}, {{ asset('public/frontend/images/audio.jpg') }}">

                        <img src="{{ asset('public/frontend/images/audio.jpg') }}" srcset="{{ asset('public/frontend/images/audio.jpg') }}" loading="eager">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section--overflow" id="our-services">
    <div class="layout">
        <div class="layout__row   ">
            <div class="layout__col layout__col-xs-12 ">
                <div class="grid-item ">

                    <h4 style="color: #FBA24C !important;">Interviews & Discussions
                    </h4>
                    <p>Capture the essence of every conversation. Our transcription services ensure that the depth,
                        context, and nuance of your interviews and discussions are preserved and made accessible to
                        a broader audience.
                    </p>
                    <a href="contact-us.html" style="color: #FBA24C !important;" class="link link--noline ">Get
                        Started</a>
                </div>
            </div>
            <div class="layout__col layout__col-xs-12 ">
                <div class="grid-item ">

                    <h4 style="color: #FBA24C !important;">Podcasts & Radio Shows
                    </h4>
                    <p>In a world teeming with podcasts and radio shows, stand out
                        by ensuring yours are accessible to everyone. Our
                        transcription services don’t just jot down words, but they
                        capture the emotion, the humor, and the intelligence of your
                        content, making it universally relatable.
                    </p>
                    <a href="contact-us.html" style="color: #FBA24C !important;" class="link link--noline ">Talk to
                        Us</a>
                </div>
            </div>

            <div class="layout__col layout__col-xs-12 ">
                <div class="grid-item ">

                    <h4 style="color: #FBA24C !important;">Audiobooks & Narratives
                    </h4>
                    <p>Stories are meant to be shared far and wide. Transcribe and localize your audiobooks and
                        narratives to ensure that the magic of storytelling transcends linguistic barriers.
                    </p>
                    <a href="contact-us.html" style="color: #FBA24C !important;" class="link link--noline ">Learn
                        More</a>
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
                    <h3>Lectures & Seminars
                    </h3>
                </div>
            </div>
            <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text  hero-text--medium">
                    <p>Knowledge dissemination should know no bounds. Our transcription services ensure that the
                        wealth of information in your lectures and seminars reaches learners globally, irrespective
                        of language.
                    </p>
                </div>
            </div>
            <a href="contact-us.html" class="button button--secondary">Transcribe Today
            </a>
        </div>
    </div>
</section>
<section class="section--overflow">
    <div class="layout">
        <div class="layout__row   ">
            <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text ">
                    <h3>
                    </h3>
                </div>
            </div>
            <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text  hero-text--medium">
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section--overflow" style="margin-top: -100px;">
    <div class="layout">
        <div class="layout__row   ">
            <div class="layout__col layout__col-xs-12 ">
                <div class="cta">
                    <div class="cta__description">
                        <h3 style="font-size: 30px;">Why Transcribe Audio with TranslationsX? </h3>
                        <p>Audio holds a unique power, transporting listeners to different realms, evoking emotions,
                            and imparting knowledge. We recognize its potential and are committed to making it
                            universally accessible. With a focus on precision, timeliness, and cultural
                            compatibility, our transcription services promise to elevate your audio's impact.
                        </p>
                    </div>
                    <a href="contact-us.html" class="button button--stretched button--big ">
                        Get in Touch
                    </a>
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
                    <h3>The Benefits of Working with Us
                    </h3>
                </div>
            </div>
            <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text ">
                    <ul class="list list--checked">
                        <li>Partnering with TranslationsX signifies a commitment to quality, punctuality, and
                            expertise.</li>
                        <li>From the instant you share your audio to when you receive its transcription, our team is
                            dedicated to ensuring impeccable results.</li>
                        <li>Experience unparalleled dedication, meticulousness, and a relentless pursuit of
                            perfection with us.
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
