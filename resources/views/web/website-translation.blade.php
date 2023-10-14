@extends('layouts.frontend.app')
@section('title', 'Website Translation')

@section('css')

@endsection

@section('content')
    <section class="section--overflow">
        <div class="layout">
            <div class="layout__row layout__row--center  ">

                <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-text ">

                        <h1 style="font-size: 40px;">Seamless Website Translation
                            Services <br> - <br> <span style="font-size: 20px;">Expanding
                                Your Digital Presence</span></h1>
                        <p style="font-size: 15px;">We cater to all platforms from
                            WordPress and Drupal to Wix and Webflow, ensuring your website
                            speaks fluently to every visitor, no matter where they come
                            from.
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

                            <source media="(max-width: 428px)" srcset="{{ asset ('public/frontend/images/website.png') }},
                            {{ asset ('public/frontend/images/website.png') }}">

                            <source srcset="{{ asset ('public/frontend/images/website.png') }},
                            {{ asset ('public/frontend/images/website.png') }}">

                            <img src="{{ asset ('public/frontend/images/website.png') }}"
                            srcset="{{ asset ('public/frontend/images/website.png') }}" loading="eager">

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

                        <h3 style="margin-bottom: 30px;">Cultural Nuances in Website
                            Content</h3>
                        <p>
                            A website should resonate with its audience, both
                            linguistically and culturally. Our translations ensure your
                            content is relevant and relatable for every visitor.</p>
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

                        <h3>Boosting Global Engagement</h3>

                    </div>

                </div>
                <div class="layout__col-1 layout__col-xs-12 ">

                </div>
                <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-text  hero-text--medium">

                        <p>Having a multilingual website amplifies your global reach.
                            With our professional website translation services, increase
                            your site's engagement and conversion rates.</p>
                        <p><span style="font-weight: bold;">Ensuring Technical
                                Precision: </span> From the frontend content to the backend
                            meta tags, every element of your website is translated with
                            technical precision, ensuring smooth functionality and optimal
                            SEO performance.
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
