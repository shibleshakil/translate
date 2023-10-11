@extends('layouts.frontend.app')
@section('title', 'Contact Us')

@section('css')

@endsection

@section('content')

    <section class="section--overflow" id="our-services">
        <div class="layout">
            <div class="layout__row   ">
                <div class="layout__col-12 layout__col-xs-12 ">
                    <div class="hero-text hero-text--center ">
                        <h3>Reach Out to TranslationsX
                        </h3>
                        <p>We're here to help with all your translation, transcription,
                            localization and interpretation needs.
                            Whether you have a question or just want to <span style="font-weight: bold; color: #625BF6;">
                                say
                                hello,</span> we'd love to hear from you. Complete the form
                            below and our team will get back to you
                            promptly.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container22">
        <form method="POST">
            <input type="hidden" name="_captcha" value="false">

            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your Name.." required>

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Your Email Address.." required>

            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Enter Subject.." required>

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Write something.." style="height:200px" required></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>
    <section class="section--overflow">
        <div class="layout">
            <div class="layout__row   ">
                <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text ">
                        <h3>About TranslationsX
                        </h3>
                        </a>
                    </div>
                </div>
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text ">
                        <ul class="list list--checked">
                            <li>At TranslationsX, we've redefined the art of linguistic
                                services.</li>
                            <li>Backed by a global network of industry-leading
                                professionals, we're committed to delivering
                                top-tier translation, transcription, and interpretation
                                solutions.</li>
                            <li>Our clients trust us not just for the quality of our work
                                but also for our commitment to their
                                success.
                            </li>
                            <li>From local businesses to multinational corporations, we've
                                assisted thousands in crossing
                                linguistic barriers and achieving their global aspirations.</li>
                        </ul>
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
                            <h3 style="font-size: 30px;">Ready to Start?
                            </h3>
                            <p>If you're looking to get a quick estimate for your
                                requirements, use our <a href="{{ route ('instantQuote') }}" style="text-decoration: none;">Instant Quote</a> feature.
                                It's fast, easy, and transparent,
                                ensuring you get the value you deserve.
                            </p>
                        </div>
                        <a href="{{ route ('instantQuote') }}" class="button button--stretched button--big ">
                            Instant Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection
