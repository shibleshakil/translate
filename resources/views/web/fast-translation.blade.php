@extends('layouts.frontend.app')
@section('title', 'Fast Translation')

@section('css')

@endsection

@section('content')
<section class="section--overflow" id="our-services">
    <div class="layout">
        <div class="layout__row   ">
            <div class="layout__col-12 layout__col-xs-12 ">
                <div class="hero-text hero-text--center ">
                    <h3>Fast Translation</h3>
                    <p>Our #1 <span style="color: #625BF6;">Professional Online Translation Services provide
                            swift, accurate, and reliable translations. </span> With our global
                        network of translators and language experts, we deliver timely
                        solutions for website translation, voice-over, subtitles
                        translation, and more. Every piece of content is meticulously
                        proofread & edited, guaranteeing high-quality results.</p>
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

                    <h1 style="font-size: 40px;">Legal Translations</h1>
                    <p style="font-size: 15px;">Legal Translations are crucial for ensuring clarity,
                        confidentiality, and compliance. Our certified legal translation services encompass
                        everything from contracts & confidentiality agreements to wills & trusts and court orders.
                        Our specialized legal translators navigate the intricacies of legal documents translation
                        with precision.
                    </p>
                    <a href="{{ route ('legalTranslations') }}" class="button button--secondary">Learn More
                    </a>
                </div>

            </div>
            <div class="layout__col-1 layout__col-xs-12 ">

            </div>
            <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                <div class="hero-image">

                    <picture>

                        <source media="(max-width: 428px)" srcset="{{ asset('public/frontend/images/legal.png') }}, {{ asset('public/frontend/images/legal.png') }}">

                        <source srcset="{{ asset('public/frontend/images/legal.png') }}, {{ asset('public/frontend/images/legal.png') }}">

                        <img src="{{ asset('public/frontend/images/legal.png') }}" srcset="{{ asset('public/frontend/images/legal.png') }}" loading="eager">

                    </picture>
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

                    <h1 style="font-size: 40px;">Technical Translation</h1>
                    <p style="font-size: 15px;">Technical translation is more than just changing words - it's about
                        conveying complex information in a comprehensible manner. Whether it's patents translation,
                        user manuals, scientific reports, or software localization, our expert technical translators
                        ensure accuracy and clarity, meeting the demands of global manufacturing and engineering
                        products sectors.
                    </p>
                    <a href="{{ route ('technicalTranslation') }}" class="button button--secondary">Learn More
                    </a>
                </div>

            </div>
            <div class="layout__col-1 layout__col-xs-12 ">
            </div>
            <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                <div class="hero-image">

                    <picture>

                        <source media="(max-width: 428px)" srcset="{{ asset('public/frontend/images/technical.png') }}, {{ asset('public/frontend/images/technical.png') }}">

                        <source srcset="{{ asset('public/frontend/images/technical.png') }}, {{ asset('public/frontend/images/technical.png') }}">

                        <img src="{{ asset('public/frontend/images/technical.png') }}" srcset="{{ asset('public/frontend/images/technical.png') }}" loading="eager">

                    </picture>
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

                    <h1 style="font-size: 40px;">Marketing Translation<br> - <br> <span
                            style="font-size: 20px;">Transform
                            Your Marketing Campaigns</span> </h1>
                    <p style="font-size: 15px;">Capture your global audience with precise and culturally adapted
                        marketing materials. Whether it's banners, search engine ad campaigns, newsletters, or
                        marketing films & videos, our Professional Marketing & Advertising Translation Services
                        ensure that your brand message resonates universally.
                    </p>
                    <a href="{{ route ('marketingTranslation') }}" class="button button--secondary">Learn More
                    </a>
                </div>

            </div>
            <div class="layout__col-1 layout__col-xs-12 ">
            </div>
            <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                <div class="hero-image">

                    <picture>

                        <source media="(max-width: 428px)" srcset="{{ asset('public/frontend/images/marketing.jpg') }}, {{ asset('public/frontend/images/marketing.jpg') }}">

                        <source srcset="{{ asset('public/frontend/images/marketing.jpg') }}, {{ asset('public/frontend/images/marketing.jpg') }}">

                        <img src="{{ asset('public/frontend/images/marketing.jpg') }}" srcset="{{ asset('public/frontend/images/marketing.jpg') }}" loading="eager">

                    </picture>
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

                    <h1 style="font-size: 40px;">Deciphering Financial Jargon </h1>
                    <p style="font-size: 15px;">Navigate the complexities of the financial world with our
                        Professional Financial Translation Services. Our localization experts specialize in
                        translating financial documentation, from RFIs and RFPs to financial and audit reports. With
                        our seasoned financial translators, every detail is meticulously translated and localized.
                    </p>
                    <a href="{{ route ('financialTranslation') }}" class="button button--secondary">Learn More
                    </a>
                </div>

            </div>
            <div class="layout__col-1 layout__col-xs-12 ">
            </div>
            <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                <div class="hero-image">

                    <picture>

                        <source media="(max-width: 428px)" srcset="{{ asset('public/frontend/images/financial.jpg') }}, {{ asset('public/frontend/images/financial.jpg') }}">

                        <source srcset="{{ asset('public/frontend/images/financial.jpg') }}, {{ asset('public/frontend/images/financial.jpg') }}">

                        <img src="{{ asset('public/frontend/images/financial.jpg') }}" srcset="{{ asset('public/frontend/images/financial.jpg') }}" loading="eager">

                    </picture>
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

                    <h1 style="font-size: 40px;">Seamless Website Translation
                        Services <br> - <br> <span style="font-size: 20px;">Expanding
                            Your Digital Presence</span></h1>
                    <p style="font-size: 15px;">Extend your online reach with our professional website translation
                        services. Whether your platform is Wordpress, Drupal, Wix, or Webflow, we make sure your
                        content speaks to every visitor, in every language, maintaining the essence of your brand
                        message.
                    </p>
                    <a href="{{ route ('websiteTranslation') }}" class="button button--secondary">Learn More
                    </a>
                </div>

            </div>
            <div class="layout__col-1 layout__col-xs-12 ">

            </div>
            <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                <div class="hero-image">

                    <picture>

                        <source media="(max-width: 428px)" srcset="{{ asset('public/frontend/images/website.png') }}, {{ asset('public/frontend/images/website.png') }}">

                        <source srcset="{{ asset('public/frontend/images/website.png') }}, {{ asset('public/frontend/images/website.png') }}">

                        <img src="{{ asset('public/frontend/images/website.png') }}" srcset="{{ asset('public/frontend/images/website.png') }}" loading="eager">

                    </picture>
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

                    <h1 style="font-size: 40px;">Comprehensive Document Translation
                        for All Needs <br> - <br> <span style="font-size: 20px;">Diverse
                            Document Translation Solutions</span></h1>
                    <p style="font-size: 15px;">Documents tell a story, convey information, or bear witness to
                        life's pivotal moments. Whether it's financial statements, legal documents, or even personal
                        certificates, our professional document translators ensure clarity, accuracy, and
                        authenticity. Trust us for seamless translations of any document in any language.
                    </p>
                    <a href="{{ route ('documentTranslation') }}" class="button button--secondary">Learn More
                    </a>
                </div>

            </div>
            <div class="layout__col-1 layout__col-xs-12 ">
            </div>
            <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                <div class="hero-image">

                    <picture>

                        <source media="(max-width: 428px)" srcset="{{ asset('public/frontend/images/document.jpg') }}, {{ asset('public/frontend/images/document.jpg') }}">

                        <source srcset="{{ asset('public/frontend/images/document.jpg') }}, {{ asset('public/frontend/images/document.jpg') }}">

                        <img src="{{ asset('public/frontend/images/document.jpg') }}" srcset="{{ asset('public/frontend/images/document.jpg') }}" loading="eager">

                    </picture>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection

@section('script')

@endsection
