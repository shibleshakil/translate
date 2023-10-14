@extends('layouts.frontend.app')
@section('title', 'Technical Translation')

@section('css')

@endsection

@section('content')
    <section class="section--overflow">
        <div class="layout">
            <div class="layout__row layout__row--center  ">
                <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-image">

                        <picture>

                            <source media="(max-width: 428px)" srcset="{{ asset ('public/frontend/images/technical.png') }},
                            {{ asset ('public/frontend/images/technical.png') }}">

                            <source srcset="{{ asset ('public/frontend/images/technical.png') }},
                            {{ asset ('public/frontend/images/technical.png') }}">

                            <img src="{{ asset ('public/frontend/images/technical.png') }}"
                            srcset="{{ asset ('public/frontend/images/technical.png') }}" loading="eager">

                        </picture>
                    </div>

                </div>
                <div class="layout__col-1 layout__col-xs-12 ">
                </div>
                <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-text ">

                        <h1 style="font-size: 40px;">Expert Technical Translation
                            Services</h1>
                        <p style="font-size: 15px;">Decoding Technical Terminologies:
                            The technical domain presents its unique lexicon. Our services
                            guarantee clarity in translating scientific reports, data
                            sheets, and safety manuals, rendering technicalities into
                            comprehensible narratives.
                        </p>
                        <a href="{{ route ('instantQuote') }}" class="button button--secondary">Translate now
                        </a>
                        <a href="{{ route ('contactUs') }}" class="link link--noline  link--medium">Talk to us</a>
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

                        <h3>Diverse Technical Translation Solutions</h3>

                    </div>

                </div>
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-text  hero-text--medium">

                        <p>Covering a range of areas from Automotive Mechanics to
                            Software Localization, we ensure each sector's jargon is
                            translated preserving its inherent meaning. With our services,
                            every technical detail is perfectly captured.</p>

                        <!-- <a href="#" class="button button--secondary">Translate now
                </a>
                <a href="#" class="link link--noline  link--medium">Talk to us</a> -->
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

                        <h3>Patents Translation with Precision</h3>

                    </div>

                </div>
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-text  hero-text--medium">

                        <p>Inventions are products of genius, and their patents are
                            paramount. Our technical documentation translations ensure
                            every nuance of your patents is retained in every language.
                        </p>
                        <!-- <a href="#" class="button button--secondary">Translate now
                </a>
                <a href="#" class="link link--noline  link--medium">Talk to us</a> -->

                    </div>

                </div>

            </div>
        </div>
    </section>
    <section class="section--overflow section--wide">
        <div class="layout">
            <div class="layout__row   ">

                <div class="layout__col-12 layout__col-xs-12 ">

                    <div class="hero-text hero-text--center ">

                        <h3 style="margin-bottom: 30px;">Global Reach in Technical
                            Translations</h3>
                        <p>
                            From scientific articles to machine operation manuals, our
                            translations bridge technical communication across industries
                            and global markets.
                        </p>
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
