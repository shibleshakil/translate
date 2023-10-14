@extends('layouts.frontend.app')
@section('title', 'Expert Interpreting Services')

@section('css')

@endsection

@section('content')
<section class="section--overflow" id="our-services">
    <div class="layout">
        <div class="layout__row   ">
            <div class="layout__col-12 layout__col-xs-12 ">
                <div class="hero-text hero-text--center ">
                    <h3>Breaking Barriers with TranslationsX Interpreting Services
                    </h3>
                    <p>In an interconnected world, the ability to communicate effectively across linguistic boundaries
                        is priceless. TranslationsX bridges this gap, ensuring that every word, intent, and emotion is
                        faithfully and accurately conveyed, no matter the language.
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
                    <h1 style="font-size: 40px;">About TranslationsX Interpreting
                    </h1>
                    <p style="font-size: 15px;">With years of experience under our belt, TranslationsX's interpreting
                        services stand unparalleled. We pride ourselves on our commitment to real-time, flawless
                        interpretation, making international conferences, meetings, and events more inclusive and
                        efficient.
                        <br> Our interpreters are more than just bilingual experts; they are cultural liaisons who
                        ensure smooth communication while respecting cultural nuances.
                    </p>
                </div>
            </div>
            <div class="layout__col-1 layout__col-xs-12 ">
            </div>
            <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                <div class="hero-image">

                    <picture>

                        <source media="(max-width: 428px)" srcset="{{ asset ('public/frontend/images/solutions.jpg') }},
                        {{ asset ('public/frontend/images/solutions.jpg') }}">

                        <source srcset="{{ asset ('public/frontend/images/solutions.jpg') }},
                        {{ asset ('public/frontend/images/solutions.jpg') }}">

                        <img src="{{ asset ('public/frontend/images/solutions.jpg') }}"
                        srcset="{{ asset ('public/frontend/images/solutions.jpg') }}" loading="eager">
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

                    <h3>Our Interpreters: Voices Across Boundaries
                    </h3>

                </div>

            </div>
            <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                <div class="hero-text ">
                    <h4 class="H400" style="margin-bottom: 20px;">Every interpreter at TranslationsX is handpicked for
                        their linguistic prowess and domain-specific expertise.
                    </h4>
                    <ul class="list list--checked">
                        <li><span style="font-weight: bold;">Conference Interpreting: </span> Seamlessly manage
                            multilingual events with our adept interpreters who specialize in real-time interpretation,
                            ensuring all participants are on the same page.
                        </li>
                        <li><span style="font-weight: bold;">Business Meeting Interpretation: </span> Navigate global
                            business landscapes with confidence, as our interpreters ensure clear, concise, and
                            contextually appropriate interpretation.
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
                    <h3>Why Choose TranslationsX for Interpretation?
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
                    <h3 style="font-size: 30px;">Diverse Expertise:</h3>
                </div>
            </div>
            <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text  hero-text--medium">
                    <p>Our interpreters specialize across a range of sectors, ensuring you always have an expert who
                        understands the intricacies of your domain.
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
                    <h3 style=" font-size: 30px;">Technology-Backed:</h3>
                </div>
            </div>
            <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text  hero-text--medium">
                    <p>While the human element is irreplaceable, we leverage the latest interpreting technologies to
                        enhance efficiency and precision.
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
                    <h3 style="font-size: 30px;">Global Reach:</h3>
                </div>
            </div>
            <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text  hero-text--medium">
                    <p>Our global network of interpreters ensures that no matter where you are, you'll always have a
                        TranslationsX interpreter ready to assist.
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
                    <a href="{{ route ('contactUs') }}" class="button button--secondary">Interpret Now
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
