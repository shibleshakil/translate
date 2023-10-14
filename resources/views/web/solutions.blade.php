@extends('layouts.frontend.app')
@section('title', 'Solutions')

@section('css')

@endsection

@section('content')
    <section class="section--overflow">
        <div class="layout">
            <div class="layout__row layout__row--center  ">

                <div class="layout__col-6 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-image">

                        <picture>

                            <source media="(max-width: 428px)" srcset="{{ asset ('public/frontend/images/solutions.jpg') }},
                            {{ asset ('public/frontend/images/solutions.jpg') }}">

                            <source srcset="{{ asset ('public/frontend/images/solutions.jpg') }},
                            {{ asset ('public/frontend/images/solutions.jpg') }}">

                            <img src="{{ asset ('public/frontend/images/solutions.jpg') }}"
                            srcset="{{ asset ('public/frontend/images/solutions.jpg') }}" loading="eager">

                        </picture>
                    </div>

                </div>
                <div class="layout__col-1 layout__col-xs-12 ">

                </div>
                <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 ">

                    <div class="hero-text ">

                        <p>Unlock a world of opportunities with our comprehensive
                            language services. Transform your business by leveraging our
                            expertise in Content Translation, Transcription, and
                            Localization.</p>
                        <a href="{{ route ('contactUs') }}" class="button button--big">Contact us
                        </a>

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

                        <h3 style="margin-bottom: 30px;">Discover our solutions!</h3>

                    </div>

                </div>
                <div class="layout__col-4 layout__col-md-6 layout__col-xs-12 ">

                    <div class="grid-item ">

                        <i style="background-image: url(public/frontend/images/fast-delivery.png);"
                            class="icon icon--image icon--inline icon--96"></i>
                        <h5>Fast Translation Services for Quick Results</h5>
                        <p>For businesses requiring quick translation, our on-demand translations provide timely and
                            accurate results. Our translators specialize in languages across various sectors including
                            <span style="color: #625BF6;"> Legal translations, Financial translations, Marketing
                                translations, Website translations, and Document translations.</span></p>
                        <a href="{{ route ('fastTranslation') }}" style="text-decoration: none;">Learn more</a>
                    </div>

                </div>
                <div class="layout__col-4 layout__col-md-6 layout__col-xs-12 ">

                    <div class="grid-item ">

                        <i style="background-image: url(public/frontend/images/place.png);"
                            class="icon icon--image icon--inline icon--96"></i>
                        <h5>Content Localization: Transforming Messages for Global
                            Audiences</h5>
                        <p>Our Content Localization service goes beyond mere
                            translation. We transcreate your message to suit the
                            linguistic and cultural norms of your target audience, <span style="color: #625BF6;">
                                followed by rigorous proofreading to ensure quality.</span>
                        </p>
                        <a href="{{ route ('contentLocalization') }}" style="text-decoration: none;">Learn more</a>

                    </div>

                </div>
                <div class="layout__col-4 layout__col-md-6 layout__col-xs-12 ">

                    <div class="grid-item ">

                        <i style="background-image: url(public/frontend/images/internet.png);"
                            class="icon icon--image icon--inline icon--96"></i>
                        <h5>Website Localization: Speak the Language of Your Users</h5>
                        <p><span style="color: #625BF6;">Elevate your online presence with our Website Localization
                                Service. </span> From translating user interfaces to cultural content, we make sure your
                            website resonates with a global audience.</p>
                        <a href="{{ route ('websiteLocalization') }}" style="text-decoration: none;">Learn more</a>

                    </div>

                </div>
                <div class="layout__col-4 layout__col-md-6 layout__col-xs-12 ">

                    <div class="grid-item ">

                        <i style="background-image: url(public/frontend/images/333333.png);"
                            class="icon icon--image icon--inline icon--96"></i>
                        <h5>Multilingual SEO: Connecting Businesses Across Borders
                        </h5>
                        <p>Capture a wider audience with our Multilingual SEO solutions.
                            We localize keywords and optimize your site to rank higher in
                            different languages.</p>
                        <a href="{{ route ('multilingualSeo') }}" style="text-decoration: none;">Learn more</a>
                    </div>

                </div>
                <div class="layout__col-4 layout__col-md-6 layout__col-xs-12 ">

                    <div class="grid-item ">

                        <i style="background-image: url(public/frontend/images/2222.png);"
                            class="icon icon--image icon--inline icon--96"></i>
                        <h5>Multilingual Transcription: Bridging Language Gaps</h5>
                        <p>Whether it's legal interpretation or transcribing interviews,
                            our Multilingual Transcription services are designed to be
                            both accurate and efficient.</p>
                        <a href="{{ route ('multilingualTranscription') }}" style="text-decoration: none;">Learn more</a>

                    </div>

                </div>
                <div class="layout__col-4 layout__col-md-6 layout__col-xs-12 ">

                    <div class="grid-item ">

                        <i style="background-image: url(public/frontend/images/1111.png);"
                            class="icon icon--image icon--inline icon--96"></i>
                        <h5>Audio and Video Transcription: Capturing Every Spoken Word</h5>
                        <p>Our Audio and Video Transcription services are trusted by
                            professionals in various sectors. From interviews and webinars
                            to podcasts and video content, we provide high-quality
                            transcriptions that capture every spoken word accurately.</p>
                        <a href="{{ route ('videoTranscription') }}" style="text-decoration: none;">Learn more</a>

                    </div>

                </div>
                <div class="layout__col-4 layout__col-md-6 layout__col-xs-12 ">

                    <div class="grid-item ">

                        <i style="background-image: url(public/frontend/images/certified.png);"
                            class="icon icon--image icon--inline icon--96"></i>
                        <h5>Interpreting: Seamless Communication Anytime, Anywhere
                        </h5>
                        <p>When real-time language solutions are needed, our
                            <span style="color: #625BF6;"> professional interpretations service</span> is there to
                            ensure
                            seamless communication, including specialized legal
                            interpretation.
                        </p>
                        <a href="{{ route ('interpretingServices') }}" style="text-decoration: none;">Learn more</a>
                    </div>

                </div>
                <div class="layout__col-4 layout__col-md-6 layout__col-xs-12 ">

                    <div class="grid-item ">

                        <i style="background-image: url(public/frontend/images/interpretation.png);"
                            class="icon icon--image icon--inline icon--96"></i>
                        <h5>Certified and Notarised Translation: For Your Official Needs</h5>
                        <p>Need your documents not only translated but also certified or
                            notarised? We specialize in translating legal and financial
                            documents, and each translated file undergoes strict
                            proofreading services for quality assurance.
                        </p>
                        <a href="{{ route ('certifiedTranslation') }}" style="text-decoration: none;">Learn more</a>

                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection
