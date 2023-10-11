@extends('layouts.frontend.app')
@section('title', 'Instant Quote')

@section('css')

@endsection

@section('content')

    <section class="section--overflow" id="our-services">
        <div class="layout">
            <div class="layout__row   ">
                <div class="layout__col-12 layout__col-xs-12 ">
                    <div class="hero-text hero-text--center ">
                        <h3>Get Your Instant Quote </h3>
                        <p>Begin your global journey with TranslationsX. Fill in the details below, and we'll
                            provide you with an instant estimate tailored to your specific requirements.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section--overflow">
        <div class="layout" bis_skin_checked="1">
            <div class="layout__row" bis_skin_checked="1">
                <div class="layout__col-7 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 pt-0"
                    bis_skin_checked="1">
                    <div class="layout__row" bis_skin_checked="1">
                        <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group" bis_skin_checked="1">
                            <label for="from">From</label>
                            <select name="from" id="from" class="form-control select2">
                                <option value="">Select</option>
                                <option value="Africans" selected>Africans</option>
                                <option value="Albanians">Albanians</option>
                                <option value="Arabic">Arabic</option>
                                <option value="Bajan">Bajan</option>
                                <option value="Bengali">Bengali</option>
                                <option value="Bislama">Bislama</option>
                                <option value="Bosnian">Bosnian</option>
                                <option value="Catalan">Catalan</option>
                            </select>
                        </div>
                        <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group" bis_skin_checked="1">
                            <label for="to">To</label>
                            <select name="to" id="to" class="form-select select2">
                                <option value="">Select</option>
                                <option value="English" selected>English</option>
                                <option value="French">French</option>
                                <option value="German">German</option>
                                <option value="Greek">Greek</option>
                                <option value="Italian">Italian</option>
                                <option value="Japanese">Japanese</option>
                                <option value="Russian">Russian</option>
                                <option value="Spanish">Spanish</option>
                            </select>
                        </div>

                        <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group" bis_skin_checked="1">
                            <label for="delivery_date">Delivery Date</label>
                            <input type="date" id="delivery_date" name="delivery_date" class="form-control" style="height: 26px; border:0;"
                                placeholder="Your Email Address..">
                        </div>

                        <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group" bis_skin_checked="1">
                            <label for="subject">Subject</label>
                            <select name="subject" id="subject" class="form-control select2">
                                <option value="">Select</option>
                                <option value="Accounting & Finance" selected>Accounting & Finance</option>
                                <option value="Adwords Campaigns">Adwords Campaigns</option>
                                <option value="Aerospace / Defence">Aerospace / Defence</option>
                                <option value="Architecture">Architecture</option>
                                <option value="Art">Art</option>
                                <option value="Automotive">Automotive</option>
                                <option value="Certificates, Diplomas, Licences , Cv's, Etc">Certificates, Diplomas, Licences , Cv's, Etc</option>
                                <option value="Chemical">Chemical</option>
                            </select>
                        </div>
                    </div>
                    <div class="layout__row" bis_skin_checked="1">

                        <div class="layout__col-12 layout__col-sm-12 layout__col-xs-12 form-group" bis_skin_checked="1">
                            <label for="word_count">Word Count</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Word count" value="1000"
                                name="word_count" id="word_count" aria-describedby="button-addon2">
                                <div class="input-group-append" id="button-addon2">
                                    <div class="word-count-or-upload__upload" bis_skin_checked="1">
                                        <span class="word-count-or-upload__or">or</span>
                                        <div class="word-count-or-upload__button-wrapper" bis_skin_checked="1">
                                            <button type="button" class="btn button--secondary btn-sm" id="file-upload-btn">Upload files</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="file" name="files-hidden" id="orderFiles" multiple hidden>
                        </div>
                    </div>
                    <div class="uploaded_file_list">
                    </div>
                </div>
                <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 "
                    style="background-color: #eee; border-radius: 0.25rem" bis_skin_checked="1">
                    <h5>Quote Summary</h5>
                    <div class="layout__row" bis_skin_checked="1">
                        <div class="layout__col-5 py-1" bis_skin_checked="1">
                            <p id="">From</p>
                        </div>
                        <div class="layout__col-7 py-1" bis_skin_checked="1">
                            <p id="from_lang">Arabic</p>
                        </div>
                        <div class="layout__col-5 py-1" bis_skin_checked="1">
                            <p id="">To</p>
                        </div>
                        <div class="layout__col-7 py-1" bis_skin_checked="1">
                            <p id="to_lang">English</p>
                        </div>
                        <div class="layout__col-5 pt-1" bis_skin_checked="1">
                            <p id="">Subject</p>
                        </div>
                        <div class="layout__col-7 pt-1" bis_skin_checked="1">
                            <p id="selected_subject">Accounting & Finance</p>
                        </div>
                    </div>

                    <h5>Pricing ($0.10 / word)</h5>
                    <div class="layout__row   " bis_skin_checked="1">
                        <div class="layout__col-5 pt-1" bis_skin_checked="1">
                            <p id="total_word">100 Words</p>
                        </div>
                        <div class="layout__col-7 pt-1" bis_skin_checked="1">
                            <p id="total_price">$9.50</p>
                        </div>
                    </div>

                    <h5>Estimated Delivery <small>(2000 words / day)</small></h5>
                    <div class="layout__row" bis_skin_checked="1">
                        <div class="layout__col-5 pt-1" bis_skin_checked="1">
                            <p id="">Translation</p>
                        </div>
                        <div class="layout__col-7 pt-1" bis_skin_checked="1">
                            <p id="estimate_date">Thursday, October 05</p>
                        </div>

                        <div class="layout__col-12 layout__col-sm-12 layout__col-xs-12 form-group mb-0" bis_skin_checked="1"
                            style="display: grid; align-items: end;">
                            <button class="btn button--secondary check price" type="button">Update prices</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')

@endsection
