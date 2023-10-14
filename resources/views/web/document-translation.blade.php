@extends('layouts.frontend.app')
@section('title', 'Document Translation')

@section('css')

@endsection

@section('content')
<section class="section--overflow">
    <div class="layout">
        <div class="layout__row layout__row--center  ">

            <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                <div class="hero-image">

                    <picture>

                        <source media="(max-width: 428px)" srcset="{{ asset ('public/frontend/images/document.jpg') }},
                        {{ asset ('public/frontend/images/document.jpg') }}">

                        <source srcset="{{ asset ('public/frontend/images/document.jpg') }},
                        {{ asset ('public/frontend/images/document.jpg') }}">

                        <img src="{{ asset ('public/frontend/images/document.jpg') }}"
                        srcset="{{ asset ('public/frontend/images/document.jpg') }}" loading="eager">

                    </picture>
                </div>

            </div>
            <div class="layout__col-1 layout__col-xs-12 ">
            </div>
            <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                <div class="hero-text ">

                    <h1 style="font-size: 40px;">Comprehensive Document Translation
                        for All Needs <br> - <br> <span style="font-size: 20px;">Diverse
                            Document Translation Solutions</span></h1>
                    <p style="font-size: 15px;">From legal and medical documents to
                        academic transcripts and certifications, our translators
                        ensure every word retains its intended meaning and context.</p>
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

                    <h3 style="font-size: 35px;">Confidential Handling of Sensitive
                        Documents</h3>

                </div>

            </div>
            <div class="layout__col-1 layout__col-xs-12 ">

            </div>
            <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                <div class="hero-text  hero-text--medium">

                    <p>We understand the importance of trust when handling documents
                        like bank statements, marriage certificates, and more. With
                        our services, confidentiality is paramount.</p>

                    <!-- <a href="#" class="button button--secondary">Translate now
            </a>
            <a href="#" class="link link--noline  link--medium">Talk to us</a>
            -->

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

                    <h3 style="margin-bottom: 30px;">Broad Range Document
                        Translation</h3>
                    <p>
                        Whether you have business documents, ID cards, or user
                        manuals, our services cater to a wide spectrum, ensuring every
                        document is translated with the utmost precision.</p>
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

                    <h3 style="font-size: 35px;">Certified Translations for Official
                        Documents</h3>

                </div>

            </div>
            <div class="layout__col-1 layout__col-xs-12 ">

            </div>
            <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                <div class="hero-text  hero-text--medium">

                    <p>From diplomas and divorce decrees to passports and adoption
                        records, our certified translation services guarantee
                        accuracy, trustworthiness, and official recognition.</p>
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
