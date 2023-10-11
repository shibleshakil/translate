@extends('layouts.frontend.app')
@section('title', 'Home')

@section('css')

@endsection

@section('content')
    <section class="section--overflow" id="backgroundImages">
        <div class="layout">
            <div class="layout__row layout__row--center  ">

                <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-text ">

                        <h1 style="font-size: 40px; margin-bottom: 20px;">Unlock the
                            World with Our #1 Professional Online Translation</h1>
                        <p>We professionally translate documents with speed and
                            precision. Connect more, do more.</p>

                        <a href="get-started.html" class="button button--big">Get
                            Started
                        </a>

                    </div>

                </div>
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-image hero-image--align-right">

                        <picture>

                            <img style="border-radius: 50px;"
                                src="{{ asset ('public/frontend/images/Abozar_beautiful_artificial_1_hug_flower_depicting_growth_a_lot_e3f485da-0925-4dcf-91ce-e2153db9852d.png') }}"
                                loading="eager">

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
                        <h3>Our services</h3>
                        <p style="color: #625BF6;">Offering Professional Translation
                            Services, Transcription,
                            and Interpreting for All Your Needs</p>
                    </div>
                </div>
                <div class="layout__col layout__col-xs-12 ">
                    <div class="grid-item ">
                        <i style="background-image: url(public/frontend/images/p2.png);" class="icon icon--image icon--inline"></i>
                        <h4>Accurate and Reliable Transcription</h4>
                        <p>We convert spoken words into written form with 100% accuracy.
                            Our professionally trained team ensures that nothing is lost.</p>
                        <a href="reliable-transcription.html" class="link link--noline "
                            style="color: #625BF6 !important;">Learn
                            More</a>
                    </div>
                </div>
                <div class="layout__col layout__col-xs-12 ">
                    <div class="grid-item ">
                        <i style="background-image: url(public/frontend/images/p1.png);" class="icon icon--image icon--inline icon--96"></i>
                        <h4>Professional Translation Services</h4>
                        <p>Whether it's website translation or document handling, <span style="color: #625BF6;"> our
                                team provides fast translation</span> with a human touch.
                            Entrust
                            your words to us and get your message across, clearly and
                            effectively.</p>
                        <a href="professional-translation.html" class="link link--noline "
                            style="color: #625BF6 !important;">Learn
                            more</a>
                    </div>
                </div>
                <div class="layout__col layout__col-xs-12 ">
                    <div class="grid-item ">
                        <i style="background-image: url(public/frontend/images/p3.png);" class="icon icon--image icon--inline"></i>
                        <h4>Expert Interpreting Services</h4>
                        <p>Real-time language solutions for your events, meetings, and
                            conferences. Our certified interpreters provide both
                            simultaneous and consecutive interpretations, ensuring
                            seamless communication in any setting
                        </p>
                        <a href="expert-interpreting.html" class="link link--noline "
                            style="color: #625BF6 !important;">Learn
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section--overflow">
        <div class="layout">
            <div class="layout__row layout__row--center layout__row--reorder-sm ">

                <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="responsive-video">

                        <img class="center" src="{{ asset ('public/frontend/images/process.png') }}" alt>

                    </div>

                </div>
                <div class="layout__col-1 layout__col-xs-12 ">

                </div>
                <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-text ">

                        <h3 style="font-size: 31px; margin-bottom: 30px;">How Our
                            Professional Online Translation Services Work</h3>
                        <p>
                            <span style="font-weight: bold;">Instant Quote Submission:
                            </span>
                            Begin by using our instant quote feature to <span style="color: #625BF6;"> the document you
                                wish to translate.
                            </span> <br>
                            <span style="font-weight: bold;">Review & Payment: </span>
                            Once uploaded, you'll promptly receive a price quote and the
                            estimated turnaround time. After reviewing,<span style="color: #625BF6;"> proceed with the
                                payment.</span><br>
                            <span style="font-weight: bold;">Translation & Quality
                                Assurance:</span>
                            Our expert translators will undertake the task, ensuring not
                            just translation but also thorough localization. This is
                            followed by a <span style="color: #625BF6;">meticulous review
                                to maintain the utmost quality.</span><br>
                            <span style="font-weight: bold;">Secure Delivery:</span> Rest
                            easy knowing your <span style="color: #625BF6;">
                                professionally translated documents will be delivered to you
                                both quickly and securely. </span><br>
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
                        <h3>Why Choose Our Professional
                            Translation Services?</h3>
                    </div>
                </div>
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text ">
                        <h4 class="H400" style="margin-bottom: 20px;">Quality is our
                            priority. We guarantee fast translation without compromising
                            accuracy. <span style="color: #625BF6;">Our team is comprised
                                of certified professionals who
                                are experts in various fields, ensuring that we can meet any
                                translation need.</span> </h4>
                        <ul class="list list--checked">
                            <li>Fast translation services you can trust.</li>
                            <li>Professional team specializing in website translation,
                                transcription, and interpreting.</li>
                            <li>Rigorous quality control for localization & translation.</li>
                        </ul>
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
                        <h3>What Our Clients Say</h3>
                    </div>
                </div>
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">
                    <div class="hero-text  hero-text--medium">
                        <p>Join the growing list of satisfied customers who trust our
                            Professional Online Translation Services for all their
                            localization needs.
                        </p>
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
                            <h3 style="font-size: 30px;">Stay Updated with the Latest in
                                Translation</h3>
                            <p>Learn more about the industry's best practices, tips for
                                fast translation, and how to get the most out of our
                                professional translation services.</p>
                        </div>
                        <a href="signup.html" class="button button--stretched button--big ">
                            Sign up for newsletter
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')

@endsection
