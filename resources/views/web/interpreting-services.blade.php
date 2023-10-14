@extends('layouts.frontend.app')
@section('title', 'Interpreting Services')

@section('css')

@endsection

@section('content')
<section class="section--overflow">
    <div class="layout">
        <div class="layout__row layout__row--center  ">
            <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text ">
                    <h1 style="font-size: 40px;">Interpreting Services

                    </h1>
                    <p style="font-size: 15px;">Enter a world where language barriers fade away. With
                        TranslationsX's professional interpreting services, foster clear communication, build
                        stronger relationships, and bridge the linguistic divide. Whether it's for a global business
                        meeting or an international seminar, our certified interpreters are at the forefront,
                        ensuring your voice is heard, understood, and responded to, irrespective of the language
                        spoken.
                    </p>
                    <a href="{{ route ('contactUs') }}" class="button button--secondary">Interpret Now
                    </a>
                </div>
            </div>
            <div class="layout__col-1 layout__col-xs-12 ">
            </div>
            <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                <div class="hero-image">

                    <picture>

                        <source media="(max-width: 428px)" srcset="{{ asset('public/frontend/images/interpreting.jpg') }}, {{ asset('public/frontend/images/interpreting.jpg') }}">

                        <source srcset="{{ asset('public/frontend/images/interpreting.jpg') }}, {{ asset('public/frontend/images/interpreting.jpg') }}">

                        <img src="{{ asset('public/frontend/images/interpreting.jpg') }}" srcset="{{ asset('public/frontend/images/interpreting.jpg') }}" loading="eager">
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
                    <h3>Global Business Meetings & Conferences
                    </h3>
                    <p>Harness the power of face-to-face communication in today’s digital age. Our interpreters
                        specialize in real-time interpretation for business settings, making sure you leave an
                        indelible mark in every boardroom, regardless of the native tongues present.
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
                    <h3>Medical & Healthcare
                    </h3>
                </div>
            </div>
            <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text  hero-text--medium">
                    <p>Interpreting Empathy and accuracy take center stage in medical settings. Our trained
                        interpreters not only understand the technical jargon but also appreciate the emotional
                        nuances, ensuring patient-caregiver communication is both clear and compassionate.
                    </p>
                    <a href="{{ route ('contactUs') }}" class="button button--secondary">Interpret Now
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
                    <h3>Legal Interpreting
                    </h3>
                </div>
            </div>
            <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text  hero-text--medium">
                    <p>In the realm of law, every word counts. Our legal interpreters are well-versed in courtroom
                        protocols and legal terminologies, ensuring justice isn't hindered by language differences.
                    </p>
                    <a href="{{ route ('contactUs') }}" class="button button--secondary">Get Started
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
                    <h3>Event & Seminar
                    </h3>
                </div>
            </div>
            <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text  hero-text--medium">
                    <p>Interpreting Events, seminars, and workshops are melting pots of diverse attendees. Ensure
                        your message resonates universally, with our skilled interpreters making real-time
                        Interpretations seem effortless.
                    </p>
                    <a href="{{ route ('contactUs') }}" class="button button--secondary">Get Started
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
                    <h3>Remote & Over-The-Phone Interpreting
                    </h3>
                    <p>In an increasingly digital world, <span style="color: #625BF6;"> our services extend across
                            various platforms including Zoom and MS Teams. </span>Whether it's a remote business
                        negotiation, a telehealth consultation, or a virtual team meeting, our interpreters ensure
                        clarity and coherence, facilitating communication seamlessly over any medium.
                    </p>
                    <a href="{{ route ('contactUs') }}" class="button button--secondary">Interpret Today
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
                    <h3>Why Choose TranslationsX for Interpreting?
                    </h3>
                    <a href="{{ route ('solutions') }}" class="button button--secondary">Explore Our Expertise
                    </a>
                </div>
            </div>
            <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text ">
                    <ul class="list list--checked">
                        <li>Interpreting is an art that requires finesse, intuition, and a deep understanding of
                            languages.</li>
                        <li>We understand their power and the importance of making them universally accessible.</li>
                        <li>At TranslationsX, we prioritize cultural context alongside linguistic accuracy.
                        </li>
                        <li>With a <span style="color: #625BF6;">vast network of certified interpreters, we
                                guarantee a seamless interpreting experience, </span> tailored to your specific
                            needs.
                        </li>
                    </ul>
                </div>



            </div>
        </div>
    </div>
</section>
<!-- <section class="section--overflow">
    <div class="layout">
        <div class="layout__row   ">
            <div class="layout__col layout__col-xs-12 ">
                <div class="cta">
                    <div class="cta__description">
                        <h3 style="font-size: 30px;">Marketing Videos
                        </h3>
                        <p>Marketing is all about resonating with the audience. Our transcription services ensure that your marketing videos are not just transcribed but localized, allowing you to truly connect with and captivate your global audience.
                        </p>
                    </div>
                    <a href="#" class="button button--stretched button--big ">
                        Localize Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="section--overflow">
    <div class="layout">
        <div class="layout__row   ">
            <div class="layout__col layout__col-xs-12 ">
                <div class="cta">
                    <div class="cta__description">
                        <h3 style="font-size: 30px;">The Benefits of Partnering with Us
                        </h3>
                        <p>At TranslationsX, we pride ourselves on our commitment to excellence. By choosing us,
                            you're not just opting for language services, but a partnership that prioritizes your
                            needs. Experience swift coordination, unmatched expertise, and interpreters who are
                            dedicated to facilitating meaningful connections.
                        </p>
                    </div>
                    <a href="{{ route ('contactUs') }}" class="button button--stretched button--big ">
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
