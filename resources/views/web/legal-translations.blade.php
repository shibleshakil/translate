@extends('layouts.frontend.app')
@section('title', 'Legal Translation')

@section('css')

@endsection

@section('content')
    <section class="section--overflow">
        <div class="layout">
            <div class="layout__row layout__row--center  ">

                <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-text ">

                        <h1 style="font-size: 40px;">Comprehensive Legal Translation
                            Services</h1>
                        <p style="font-size: 15px;">Precision in Legal Translation:
                            Legal intricacies demand unmatched precision. Even the
                            slightest misinterpretation can lead to significant
                            ramifications. With our
                            <span style="font-weight: bold; color: #625BF6;">certified Legal Translations Services, </span>
                            we ensure every clause and term, from Contracts &
                            confidentiality agreements to Arbitration translations, is
                            presented with unerring accuracy.
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

                            <source media="(max-width: 428px)" srcset="{{ asset ('public/frontend/images/legal.png') }},
                            {{ asset ('public/frontend/images/legal.png') }}">

                            <source srcset="{{ asset ('public/frontend/images/legal.png') }},
                            {{ asset ('public/frontend/images/legal.png') }}">

                            <img src="{{ asset ('public/frontend/images/legal.png') }}"
                            srcset="{{ asset ('public/frontend/images/legal.png') }}" loading="eager">

                        </picture>
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

                        <h3 style="margin-bottom: 30px;">Specialized Translators for
                            Legal Documents</h3>
                        <p>
                            Legal documentation varies vastly in its nature and
                            complexity. Our team comprises legal translators versed in
                            different judicial sectors. From Terms & Conditions and
                            Licenses to Service Agreements and GDPR regulations, rest
                            assured that your documents retain their intended legal
                            nuance.
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

                        <h3>Handling of Sensitive Legal Documents</h3>

                    </div>

                </div>
                <div class="layout__col-1 layout__col-xs-12 ">

                </div>
                <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-text  hero-text--medium">

                        <p> Trust is paramount when it comes to sensitive legal
                            documents. Be it Wills, Trusts, or Intellectual Property
                            Documents, our translators ensure the utmost confidentiality
                            and precision in translation</p>
                        <p><span style="font-weight: bold;">Broad Spectrum Legal
                                Document Translation: </span> We recognize the breadth of
                            the legal world. From Court Transcripts and Legal Statements
                            to Government Reports and Official Documents, our services
                            cater to all, ensuring every legal requirement is addressed
                            meticulously.</p>

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
