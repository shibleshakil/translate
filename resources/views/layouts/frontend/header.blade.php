<header class="header--standard">
    <div class="layout layout--norow">
        <a href="{{ route ('home') }}"><img style="width: 222px;" src="{{ asset ('public/frontend/images/logotop.png') }}" alt></a>
        <input id="input-hamburger" type="checkbox">
        <label for="input-hamburger" data-testid="toggle-hamburger-menu">
            <i class="icon  ">
                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g stroke="none" strokewidth="1" class="icon__fill" fill-rule="evenodd">
                        <path d="M3,13 C2.44771525,13 2,12.5522847 2,12 C2,11.4477153 2.44771525,11 3,11 L21,11 C21.5522847,
                        11 22,11.4477153 22,12 C22,12.5522847 21.5522847,13 21,13 L3,13 Z M3,7 C2.44771525,7 2,6.55228475 2,
                        6 C2,5.44771525 2.44771525,5 3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 C22,6.55228475 21.5522847,
                        7 21,7 L3,7 Z M3,19 C2.44771525,19 2,18.5522847 2,18 C2,17.4477153 2.44771525,17 3,17 L21,17 C21.5522847,
                        17 22,17.4477153 22,18 C22,18.5522847 21.5522847,19 21,19 L3,19 Z" id="path-1" />
                    </g>
                </svg>
            </i>
            <i class="icon  ">
                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g stroke="none" strokewidth="1" class="icon__fill" fill-rule="evenodd">
                        <path d="M13.4142136,12 L18.7071068,17.2928932 C19.0976311,17.6834175 19.0976311,18.3165825 18.7071068,
                        18.7071068 C18.3165825,19.0976311 17.6834175,19.0976311 17.2928932,18.7071068 L12,13.4142136 L6.70710678,
                        18.7071068 C6.31658249,19.0976311 5.68341751,19.0976311 5.29289322,18.7071068 C4.90236893,18.3165825 4.90236893,
                        17.6834175 5.29289322,17.2928932 L10.5857864,12 L5.29289322,6.70710678 C4.90236893,6.31658249 4.90236893,
                        5.68341751 5.29289322,5.29289322 C5.68341751,4.90236893 6.31658249,4.90236893 6.70710678,5.29289322 L12,
                        10.5857864 L17.2928932,5.29289322 C17.6834175,4.90236893 18.3165825,4.90236893 18.7071068,5.29289322 C19.0976311,
                        5.68341751 19.0976311,6.31658249 18.7071068,6.70710678 L13.4142136,12 Z" id="path-1" />
                    </g>
                </svg>
            </i>
        </label>
        <nav>
            <ol>
                <li class="dropdownn">
                    <a href="#">Solutions</a>
                    <ul class="dropdownn-content">
                        <li>
                            <img src="{{ asset ('public/frontend/images/1l.png') }}" style="width: 30px; margin-left: 20px;" alt="">
                            <a href="{{ route ('fastTranslation') }}">Fast Translation</a>
                        </li>
                        <li>
                            <img src="{{ asset ('public/frontend/images/2l.png') }}" style="width: 30px;margin-left: 20px;" alt="">
                            <a href="{{ route ('contentLocalization') }}">Content Localization</a>
                        </li>
                        <li>
                            <img src="{{ asset ('public/frontend/images/3l.png') }}" style="width: 30px;margin-left: 20px;" alt="">
                            <a href="{{ route ('websiteLocalization') }}">Website Localization Service</a>
                        </li>
                        <li>
                            <img src="{{ asset ('public/frontend/images/4l.png') }}" style="width: 30px;margin-left: 20px;" alt="">
                            <a href="{{ route ('multilingualSeo') }}">Multilingual SEO</a>
                        </li>
                        <li>
                            <img src="{{ asset ('public/frontend/images/5l.png') }}" style="width: 30px;margin-left: 20px;" alt="">
                            <a href="{{ route ('multilingualTranscription') }}">Multilingual Transcription</a>
                        </li>
                        <li>
                            <img src="{{ asset ('public/frontend/images/6l.png') }}" style="width: 30px;margin-left: 20px;" alt="">
                            <a href="{{ route ('audioTranscription') }}">Audio Transcription</a>
                        </li>
                        <li>
                            <img src="{{ asset ('public/frontend/images/7l.png') }}" style="width: 30px;margin-left: 20px;" alt="">
                            <a href="{{ route ('videoTranscription') }}">Video Transcription</a>
                        </li>
                        <li>
                            <img src="{{ asset ('public/frontend/images/8l.png') }}" style="width: 30px;margin-left: 20px;" alt="">
                            <a href="{{ route ('interpretingServices') }}">Interpreting</a>
                        </li>
                        <li>
                            <img src="{{ asset ('public/frontend/images/9l.png') }}" style="width: 30px;margin-left: 20px;" alt="">
                            <a href="{{ route ('certifiedTranslation') }}">Certified Translation</a>
                        </li>

                    </ul>
                </li>
                <li class="dropdownn">
                    <a href="{{ route ('languageProfessionals') }}">Language Professionals</a>
                </li>
                <li class="dropdownn">
                    <a href="{{ route ('instantQuote') }}">Instant Quote</a>
                </li>
                <li class="dropdownn">
                    <a href="{{ route ('contactUs') }}">Contact us</a>
                </li>
                <li id="userInfo" class="header__userInfo header__userInfo--hidden dropdownn d-none" aria-label="user menu">
                    <a id="signin">
                        <i class="icon  ">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" strokewidth="1" class="icon__fill" fill-rule="evenodd">
                                <path d="M21,21 C21,21.5522847 20.5522847,22 20,22 C19.4477153,22 19,21.5522847 19,21 L19,19 C19,
                                17.3431458 17.6568542,16 16,16 L8,16 C6.34314575,16 5,17.3431458 5,19 L5,21 C5,21.5522847 4.55228475,
                                22 4,22 C3.44771525,22 3,21.5522847 3,21 L3,19 C3,16.2385763 5.23857625,14 8,14 L16,14 C18.7614237,
                                14 21,16.2385763 21,19 L21,21 Z M12,12 C9.23857625,12 7,9.76142375 7,7 C7,4.23857625 9.23857625,
                                2 12,2 C14.7614237,2 17,4.23857625 17,7 C17,9.76142375 14.7614237,12 12,12 Z M12,10 C13.6568542,
                                10 15,8.65685425 15,7 C15,5.34314575 13.6568542,4 12,4 C10.3431458,4 9,5.34314575 9,7 C9,
                                8.65685425 10.3431458,10 12,10 Z" id="path-1" />
                            </g>
                        </svg>
                        </i>
                        <span>Sign in</span>
                    </a>
                </li>
                <li class="nav__button dropdownn">
                    <a href="{{ route ('login') }}" class="button button--compact button--secondary"> Log in</a>
                </li>
                <li class="nav__button dropdownn">
                    <a href="{{ route ('register') }}" class="button button--compact"> Sign up</a>
                </li>
            </ol>
        </nav>
    </div>
</header>
