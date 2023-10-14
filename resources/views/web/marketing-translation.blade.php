@extends('layouts.frontend.app')
@section('title', 'Marketing Translation')

@section('css')

@endsection

@section('content')
    <section class="section--overflow">
        <div class="layout">
            <div class="layout__row layout__row--center  ">

                <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-text ">

                        <h1 style="font-size: 40px;">Tailored Marketing Translation
                            Solutions <br> - <br> <span style="font-size: 20px;">Transform
                                Your Marketing Campaigns</span> </h1>
                        <p style="font-size: 15px;">From banners and search engine ad
                            campaigns to newsletters and email campaigns, your message
                            must resonate with your target audience, irrespective of
                            language and culture. We're here to ensure that it does.
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

                            <source media="(max-width: 428px)" srcset="{{ asset ('public/frontend/images/marketing.jpg') }},
                            {{ asset ('public/frontend/images/marketing.jpg') }}">

                            <source srcset="{{ asset ('public/frontend/images/marketing.jpg') }},
                            {{ asset ('public/frontend/images/marketing.jpg') }}">

                            <img src="{{ asset ('public/frontend/images/marketing.jpg') }}"
                            srcset="{{ asset ('public/frontend/images/marketing.jpg') }}" loading="eager">

                        </picture>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="section--overflow">
        <div class="layout">
            <div class="layout__row   ">

                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-text  hero-text--medium">

                        <p>Be it handouts, brochures, ebooks, white papers, or marketing
                            films, our professional services ensure your brand voice is
                            consistent and impactful across every medium.
                        </p>

                    </div>

                </div>
                <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-text ">

                        <h3>Holistic Translation for Every Marketing Material</h3>

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

                        <h3>Localizing Marketing Efforts</h3>

                    </div>

                </div>
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-text  hero-text--medium">

                        <p>Localization goes beyond mere translation. It's about
                            understanding and adapting to local cultures and customs. With
                            our expertise, your brand will feel local, regardless of the
                            market you target.
                        </p>

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

                            <source media="(max-width: 428px)" srcset="{{ asset ('public/frontend/images/5641748.jpg') }},
                            {{ asset ('public/frontend/images/5641748.jpg') }}">

                            <source srcset="{{ asset ('public/frontend/images/5641748.jpg') }},
                            {{ asset ('public/frontend/images/5641748.jpg') }}">

                            <img src="{{ asset ('public/frontend/images/5641748.jpg') }}"
                            srcset="{{ asset ('public/frontend/images/5641748.jpg') }}" loading="eager">

                        </picture>
                    </div>

                </div>
                <div class="layout__col-1 layout__col-xs-12 ">

                </div>
                <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-text ">

                        <h3>Precision in Marketing Collaterals</h3>
                        <p>From websites to reviews & testimonials, our translations
                            prioritize accuracy while maintaining the persuasive essence
                            vital to marketing materials.</p>
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
