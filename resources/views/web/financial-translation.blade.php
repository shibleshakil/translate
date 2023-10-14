@extends('layouts.frontend.app')
@section('title', 'Financial Translation')

@section('css')

@endsection

@section('content')
    <section class="section--overflow">
        <div class="layout">
            <div class="layout__row layout__row--center  ">

                <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-text ">

                        <h1 style="font-size: 40px;">Deciphering Financial Jargon </h1>
                        <p style="font-size: 15px;">Financial documents are intricate
                            and demand keen precision. From RFIs and RFPs to income
                            statements and tax reports, our financial translators ensure
                            your documents retain their inherent accuracy and clarity.
                        </p>
                        <a href="{{ route ('instantQuote') }}" class="button button--secondary">Translate now
                        </a>
                        <a href="{{ route ('contactUs') }}" class="link link--noline  link--medium">Talk to us</a>
                    </div>

                </div>
                <div class="layout__col-1 layout__col-xs-12 ">
                </div>
                <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-image">

                        <picture>

                            <source media="(max-width: 428px)" srcset="{{ asset ('public/frontend/images/financial.jpg') }},
                            {{ asset ('public/frontend/images/financial.jpg') }}">

                            <source srcset="{{ asset ('public/frontend/images/financial.jpg') }},
                            {{ asset ('public/frontend/images/financial.jpg') }}">

                            <img src="{{ asset ('public/frontend/images/financial.jpg') }}"
                            srcset="{{ asset ('public/frontend/images/financial.jpg') }}" loading="eager">

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

                        <h3>Broad-Spectrum Financial Document Translation</h3>

                    </div>

                </div>
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-text  hero-text--medium">

                        <p>Whether it's financial statements, audit reports, or banking
                            documents, our services cover every facet of financial
                            translation, ensuring every number and term is accurately
                            presented.</p>
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
            <div class="layout__row layout__row--center layout__row--reorder-sm ">

                <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-image">

                        <picture>

                            <source media="(max-width: 428px)"
                                srcset="{{ asset ('public/frontend/images/Wavy_Med-03_Single-11.jpg') }},
                                {{ asset ('public/frontend/images/Wavy_Med-03_Single-11.jpg') }}">

                            <source srcset="{{ asset ('public/frontend/images/Wavy_Med-03_Single-11.jpg') }},
                            {{ asset ('public/frontend/images/Wavy_Med-03_Single-11.jpg') }}">

                            <img src="{{ asset ('public/frontend/images/Wavy_Med-03_Single-11.jpg') }}"
                                srcset="{{ asset ('public/frontend/images/Wavy_Med-03_Single-11.jpg') }}"
                                loading="eager">

                        </picture>
                    </div>

                </div>
                <div class="layout__col-1 layout__col-xs-12 ">

                </div>
                <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-text ">

                        <h3>Confidentiality is Our Priority</h3>
                        <p>Financial documents often contain sensitive data. We
                            prioritize the confidentiality of your information, ensuring
                            secure and discreet translations every time.</p>
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

                        <h3>Expert Financial Translators</h3>

                    </div>

                </div>
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-text  hero-text--medium">

                        <p>Our team of expert financial translators possesses deep
                            industry knowledge, ensuring accurate and reliable
                            translations that you can depend on.
                        </p>

                        <!-- <a href="#" class="button button--secondary">Translate now
                </a>
                <a href="#" class="link link--noline  link--medium">Talk to us</a> -->
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection
