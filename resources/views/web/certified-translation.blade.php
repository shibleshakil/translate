@extends('layouts.frontend.app')
@section('title', 'Certified Translation')

@section('css')

@endsection

@section('content')
<section class="section--overflow">
    <div class="layout">
        <div class="layout__row layout__row--center  ">

            <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                <div class="hero-text ">

                    <h1 style="font-size: 40px;">Certified Translation Services
                    </h1>
                    <p style="font-size: 15px;">Step into a world of globally recognized, certified translations
                        with TranslationsX. When documents need a seal of authenticity for legal, governmental, or
                        international applications, our certified translation services ensure precision,
                        professionalism, and punctuality. Entrust us with your most vital documents, and we’ll
                        ensure they resonate with credibility across borders.
                    </p>
                    <a href="{{ route ('instantQuote') }}" class="button button--secondary">Translate now
                    </a>
                </div>

            </div>
            <div class="layout__col-1 layout__col-xs-12 ">
            </div>
            <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                <div class="hero-image">

                    <picture>

                        <source media="(max-width: 428px)"
                            srcset="{{ asset('public/frontend/images/grunge_certified_seal_stamp_rubber_look.jpg') }},
                            {{ asset('public/frontend/images/grunge_certified_seal_stamp_rubber_look.jpg') }}">

                        <source
                            srcset="{{ asset('public/frontend/images/grunge_certified_seal_stamp_rubber_look.jpg') }},
                            {{ asset('public/frontend/images/grunge_certified_seal_stamp_rubber_look.jpg') }}">

                        <img src="{{ asset('public/frontend/images/grunge_certified_seal_stamp_rubber_look.jpg') }}"
                            srcset="{{ asset('public/frontend/images/grunge_certified_seal_stamp_rubber_look.jpg') }}" loading="eager">

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

                    <h4 style="color: #538F4A !important;">Legal Document Translation
                    </h4>
                    <p>Legal intricacies require a meticulous touch. From affidavits to court transcripts, our
                        certified translators ensure every word aligns with the legal standards of the destination
                        country. Maintain the integrity and credibility of your legal documents, always.
                    </p>
                    <a href="{{ route ('instantQuote') }}" style="color: #538F4A !important;" class="link link--noline ">Translate
                        Now</a>
                </div>
            </div>
            <div class="layout__col layout__col-xs-12 ">
                <div class="grid-item ">
                    <h4 style="color: #538F4A !important;">Academic Translations
                    </h4>
                    <p>Your academic pursuits know no boundaries, and neither should your documents. Whether it's
                        diplomas, transcripts, or letters of recommendation, our certified translations help you
                        make a mark in institutions worldwide.</p>
                    <a href="{{ route ('instantQuote') }}" style="color: #538F4A !important;" class="link link--noline ">Translate
                        Now</a>
                </div>
            </div>
            <div class="layout__col layout__col-xs-12 ">
                <div class="grid-item ">
                    <h4 style="color: #538F4A !important;">Immigration Document Translation</h4>
                    <p>Navigating international waters requires accurate paperwork. Our certified translation
                        services for immigration documents like birth certificates, marriage licenses, and passports
                        smooth out your transition, making global relocations a breeze.
                    </p>
                    <a href="{{ route ('instantQuote') }}" style="color: #538F4A !important;" class="link link--noline ">Translate
                        Now</a>
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

                    <h4 style="color: #538F4A !important;">Medical Report Translation
                    </h4>
                    <p>The nuances of healthcare documentation require a sensitive touch. Trust our certified
                        translators to handle medical records, clinical trials, and patient histories with utmost
                        confidentiality and care.</p>
                    <a href="{{ route ('instantQuote') }}" style="color: #538F4A !important;" class="link link--noline ">Translate
                        Now</a>
                </div>
            </div>
            <div class="layout__col layout__col-xs-12 ">
                <div class="grid-item ">
                    <h4 style="color: #538F4A !important;">Business Contract Translation
                    </h4>
                    <p>In the realm of global business, every deal hinges on clarity. With certified translations of
                        business contracts, MOUs, and shareholder agreements, ensure your enterprise thrives without
                        linguistic hitches.
                    </p>
                    <a href="{{ route ('instantQuote') }}" style="color: #538F4A !important;" class="link link--noline ">Translate
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
                    <h3>Why Choose TranslationsX for Certified Translations?
                    </h3>
                </div>
            </div>
            <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text ">
                    <ul class="list list--checked">
                        <li>Certified translations demand an unparalleled level of accuracy.</li>
                        <li>At TranslationsX, we're more than just linguists; we're gatekeepers of authenticity.
                        </li>
                        <li>Our extensive network of certified translators, familiar with global certification
                            norms, ensures that your documents withstand the scrutiny of legal and official
                            processes, wherever they may be.
                        </li>
                    </ul>
                </div>
                <a href="{{ route ('solutions') }}" class="button button--stretched button--big ">
                    Explore our Expertise
                </a>


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
                        <h3 style="font-size: 30px;">The Benefits of Partnering with Us
                        </h3>
                        <p>With TranslationsX, certified doesn’t just mean a stamp—it signifies a promise. Our
                            commitment to excellence, swift turnaround times, and a keen understanding of
                            international regulations make us the preferred choice for individuals and businesses
                            alike. Experience a partnership that values integrity as much as you do.
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
