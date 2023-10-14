@extends('layouts.frontend.app')
@section('title', 'Multilingual SEO')

@section('css')

@endsection

@section('content')
<section class="section--overflow">
    <div class="layout">
        <div class="layout__row layout__row--center  ">
            <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text ">
                    <h1 style="font-size: 40px;">Multilingual SEO
                    </h1>
                    <p style="font-size: 15px;">In today's interconnected world, reaching a global audience is
                        essential for businesses seeking to expand their reach. With our specialized International
                        SEO Services, your website isn't just translated—it's transformed. We understand the
                        intricacies of language and the technical nuances of SEO. This combination allows us to
                        ensure that your content is not only linguistically accurate but also optimized for search
                        engines across the globe. By bridging the gap between language and search engine algorithms,
                        we position your business for international success.
                    </p>
                    <a href="{{ route ('contactUs') }}" class="button button--secondary">Talk to us
                    </a>
                </div>
            </div>
            <div class="layout__col-1 layout__col-xs-12 ">
            </div>
            <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                <div class="hero-image">

                    <picture>

                        <source media="(max-width: 428px)" srcset="{{ asset('public/frontend/images/seo.jpg') }}, {{ asset('public/frontend/images/seo.jpg') }}">

                        <source srcset="{{ asset('public/frontend/images/seo.jpg') }}, {{ asset('public/frontend/images/seo.jpg') }}">

                        <img src="{{ asset('public/frontend/images/seo.jpg') }}" srcset="{{ asset('public/frontend/images/seo.jpg') }}" loading="eager">
                    </picture>
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
                        <h3 style="font-size: 30px;">International SEO for Websites</h3>
                        <p>Going global is a significant step. It means not only translating your website but also
                            ensuring it ranks effectively in foreign search engines. Our services delve deep into
                            region-specific keyword research, guaranteeing your translated content gains the
                            visibility it merits.
                        </p>
                    </div>
                    <a href="{{ route ('contactUs') }}" class="button button--stretched button--big ">
                        Talk to Us
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
                    <h3>Capturing Global Audiences Through Multilingual SEO
                    </h3>
                    <p>Reaching global audiences requires more than just translation. It demands an understanding of
                        cultural nuances and linguistic preferences. We ensure your content resonates and remains
                        SEO-friendly, offering a seamless experience for every user, no matter where they come from.
                    </p>
                    <a href="{{ route ('contactUs') }}" class="button button--secondary">Talk to us
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
                        <h3 style="font-size: 30px;">Dive Deep with International SEO Translation</h3>
                        <p>International SEO is about capturing the essence of your message and ensuring it
                            resonates across languages and locales. By blending the artistry of translation with the
                            precision of SEO, we maintain the consistency and impact of your brand's voice.
                        </p>
                    </div>
                    <a href="{{ route ('contactUs') }}" class="button button--stretched button--big ">
                        Contact Us
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
                    <h3>Get in Touch
                    </h3>
                    <p>Ready to expand your digital reach and resonate with a global audience? Our team is here to
                        guide you through every step, ensuring your website stands out no matter the language.
                        Contact us today and let’s embark on this journey together.
                    </p>
                    <a href="{{ route ('contactUs') }}" class="button button--secondary">Contact TranslationsX
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')

@endsection
