@extends('layouts.frontend.app')
@section('title', 'Video Transcription')

@section('css')

@endsection

@section('content')
<section class="section--overflow">
    <div class="layout">
        <div class="layout__row layout__row--center  ">
            <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text ">
                    <h1 style="font-size: 40px;">Video Transcription
                    </h1>
                    <p style="font-size: 15px;">Unlock the potential of your visual content with our top-tier Video
                        Transcription Services. In a world dominated by video communication, ensuring that your
                        message reaches global audiences becomes imperative. We don't just transcribe; we offer a
                        blend of transcription and localization, converting your videos into a language-rich
                        experience tailored to your audience's cultural context.
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

                        <source media="(max-width: 428px)" srcset="{{ asset('public/frontend/images/video.jpg') }}, {{ asset('public/frontend/images/video.jpg') }}">

                        <source srcset="{{ asset('public/frontend/images/video.jpg') }}, {{ asset('public/frontend/images/video.jpg') }}">

                        <img src="{{ asset('public/frontend/images/video.jpg') }}" srcset="{{ asset('public/frontend/images/video.jpg') }}" loading="eager">
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
                    <h3>Transcending Boundaries
                    </h3>
                    <p>Through Video Transcription The power of video content is undeniable. By transcribing and
                        localizing your videos, you can ensure that your messages resonate across multilingual
                        audiences. Every video holds a story, a message, or information. Our goal is to ensure these
                        stories are not restricted by language barriers but instead amplified through accurate and
                        localized transcriptions.
                    </p>
                    <a href="contact-us.html" class="button button--secondary">Talk to Us
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
                        <h3 style="font-size: 30px;">Marketing Videos
                        </h3>
                        <p>Marketing is all about resonating with the audience. Our transcription services ensure
                            that your marketing videos are not just transcribed but localized, allowing you to truly
                            connect with and captivate your global audience.
                        </p>
                    </div>
                    <a href="contact-us.html" class="button button--stretched button--big ">
                        Localize Now
                    </a>
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

                    <h4 style="color: #69CDFF !important;">Webinars & Presentations

                    </h4>
                    <p>Make your webinars and presentations accessible to all, regardless of language. Our
                        transcription services ensure that every word, every sentiment, is captured and understood.
                    </p>
                    <a href="get-started.html" style="color: #69CDFF !important;" class="link link--noline ">Get
                        Started</a>
                </div>
            </div>
            <div class="layout__col layout__col-xs-12 ">
                <div class="grid-item ">

                    <h4 style="color: #69CDFF !important;">eLearning & Training

                    </h4>
                    <p>Knowledge should have no boundaries. Transcribe and localize your eLearning and training
                        videos to ensure that learning is universal, breaking the confines of language.
                    </p>
                    <a href="contact-us.html" style="color: #69CDFF !important;" class="link link--noline ">Talk to
                        Us</a>
                </div>
            </div>

            <div class="layout__col layout__col-xs-12 ">
                <div class="grid-item ">

                    <h4 style="color: #69CDFF !important;">Guides & Walkthroughs
                    </h4>
                    <p>Every guide and walkthrough has intricate details. Our transcription services ensure that
                        these details are captured and localized, ensuring that every step is clear and
                        comprehensible.
                    </p>
                    <a href="contact-us.html" style="color: #69CDFF !important;" class="link link--noline ">Transcribe
                        Today</a>
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
                    <h3>Why Transcribe Videos with TranslationsX?

                    </h3>
                </div>
            </div>
            <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text ">
                    <ul class="list list--checked">
                        <li>In an era of visual dominance, videos are the medium of choice.</li>
                        <li>We understand their power and the importance of making them universally accessible.</li>
                        <li>Our transcription services prioritize accuracy, timeliness, and cultural relevance,
                            ensuring your videos have the impact they deserve.
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
                        <h3 style="font-size: 30px;">The Benefits of Working with Us
                        </h3>
                        <p>Choosing TranslationsX means opting for quality, reliability, and expertise. From the
                            moment you send us your video to the time you receive the transcription, our team works
                            diligently to ensure your satisfaction. Experience unparalleled service, attention to
                            detail, and a commitment to excellence when you choose us.
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
@endsection

@section('script')

@endsection
