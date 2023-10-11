@extends('layouts.frontend.app')
@section('title', 'Website Localization')

@section('css')

@endsection

@section('content')
<section class="section--overflow">
    <div class="layout">
        <div class="layout__row layout__row--center  ">
            <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text ">
                    <h1 style="font-size: 40px;">Website Translation Services
                        Services</h1>
                    <p style="font-size: 15px;">Creating a global brand requires more than just translating the
                        words on your website. It requires a comprehensive understanding of cultural nuances, local
                        slang, and the intricacies of various languages. With TranslationsX, your website will not
                        only be translated but localized, ensuring a seamless user experience for your international
                        audience.
                    </p>
                </div>
            </div>
            <div class="layout__col-1 layout__col-xs-12 ">
            </div>
            <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                <div class="hero-image">

                    <picture>

                        <source media="(max-width: 428px)" srcset="{{ asset('public/frontend/images/web2.jpg') }}, {{ asset('public/frontend/images/web2.jpg') }}">

                        <source srcset="{{ asset('public/frontend/images/web2.jpg') }}, {{ asset('public/frontend/images/web2.jpg') }}">

                        <img src="{{ asset('public/frontend/images/web2.jpg') }}" srcset="{{ asset('public/frontend/images/web2.jpg') }}" loading="eager">

                    </picture>
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
                    <h3>Why TranslationsX is the Best Option for Professional Website Translation Services
                    </h3>
                    <p>For your website to speak the language of your audience, you need professionals who don’t
                        just translate but understand the essence of each word. At TranslationsX, <span
                            style="color: #625BF6;"> we boast a team of fully-vetted translators </span>who are
                        adept at website localization. Our dedication to precision and cultural resonance sets us
                        apart, making us the go-to choice for businesses seeking professional website translation
                        services.
                    </p>
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
                    <h3 style="">How TranslationsX Website Translation Services Work
                    </h3>
                </div>
            </div>
            <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text ">
                    <h4 class="H400" style="margin-bottom: 20px;">Understanding Your Brand: Before we translate, we
                        understand the core message of your brand and your target audience.
                    </h4>
                    <ul class="list list--checked">
                        <li><span style="font-weight: bold;">Choosing the Best Translator:</span> Based on your
                            needs, we match your project with the language expert best suited to your content.
                        </li>
                        <li><span style="font-weight: bold;">Translation & Localization:</span> <span
                                style="color: #625BF6;"> Our experts translate and then localize the content,
                            </span>ensuring it resonates with the local audience.
                        </li>
                        <li><span style="font-weight: bold;">Review & Go Live:</span> After rigorous proofreading
                            and quality checks, your translated website is ready to connect with a global audience.
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
                    <h3>Why TranslationsX?
                    </h3>
                    <p>At TranslationsX, we pride ourselves on:
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section--overflow" style="margin-bottom: -100px;">
    <div class="layout">
        <div class="layout__row   ">
            <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text ">
                    <h3 style="font-size: 35px;">Simple Pricing:</h3>
                </div>
            </div>
            <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text  hero-text--medium">
                    <p style="color: #625BF6;">No hidden costs or unexpected charges.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section--overflow" style="margin-bottom: -100px;">
    <div class="layout">
        <div class="layout__row   ">
            <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text ">
                    <h3 style=" font-size: 35px;">Professional Translators:</h3>
                </div>
            </div>
            <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text  hero-text--medium">
                    <p>We employ only the best in the field, ensuring that your website is translated by experts who
                        understand both language and culture.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section--overflow" style="margin-bottom: -100px;">
    <div class="layout">
        <div class="layout__row   ">
            <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text ">
                    <h3 style="font-size: 35px;">Seamless Experience:</h3>
                </div>
            </div>
            <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text  hero-text--medium">
                    <p>From start to finish, we ensure the process is smooth and the final translated website truly
                        represents your brand in every language.
                    </p>
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
                    <h3 style="font-size: 35px;">Money Back Guarantee:</h3>
                </div>
            </div>
            <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                <div class="hero-text  hero-text--medium">
                    <p>We stand behind the quality of our translations. If you're not satisfied, <span
                            style="color: #625BF6;"> we'll make it right </span>or give you a refund.
                    </p>
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
                    <a href="contact-us.html" class="button button--secondary">Contact TranslationsX
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')

@endsection
