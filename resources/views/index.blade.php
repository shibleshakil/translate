<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Translate</title>

    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.11/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset ('public/css/styles.css') }}">
    <link rel="icon" href="{{ asset ('public/images/logosmall.png') }}">

    <style>

    </style>
</head>

<body>

    <header class="header--standard">
        <div class="layout layout--norow">
            <a href="{{ route ('home') }}"><img style="width: 222px;" src="{{ asset ('public/images/logotop.png') }}" alt></a>
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
                                <img src="{{ asset ('public/images/1l.png') }}" style="width: 30px; margin-left: 20px;" alt="">
                                <a href="#">Fast Translation</a>
                            </li>
                            <li>
                                <img src="{{ asset ('public/images/2l.png') }}" style="width: 30px;margin-left: 20px;" alt="">
                                <a href="#">Content Localization</a>
                            </li>
                            <li>
                                <img src="{{ asset ('public/images/3l.png') }}" style="width: 30px;margin-left: 20px;" alt="">
                                <a href="#">Website Localization Service</a>
                            </li>
                            <li>
                                <img src="{{ asset ('public/images/4l.png') }}" style="width: 30px;margin-left: 20px;" alt="">
                                <a href="#">Multilingual SEO</a>
                            </li>
                            <li>
                                <img src="{{ asset ('public/images/5l.png') }}" style="width: 30px;margin-left: 20px;" alt="">
                                <a href="#">Multilingual Transcription</a>
                            </li>
                            <li>
                                <img src="{{ asset ('public/images/6l.png') }}" style="width: 30px;margin-left: 20px;" alt="">
                                <a href="#">Audio Transcription</a>
                            </li>
                            <li>
                                <img src="{{ asset ('public/images/7l.png') }}" style="width: 30px;margin-left: 20px;" alt="">
                                <a href="#">Video Transcription</a>
                            </li>
                            <li>
                                <img src="{{ asset ('public/images/8l.png') }}" style="width: 30px;margin-left: 20px;" alt="">
                                <a href="#">Interpreting</a>
                            </li>
                            <li>
                                <img src="{{ asset ('public/images/9l.png') }}" style="width: 30px;margin-left: 20px;" alt="">
                                <a href="#">Certified Translation</a>
                            </li>

                        </ul>
                    </li>
                    <li class="dropdownn">
                        <a href="#">Language Professionals</a>
                    </li>
                    <li class="dropdownn">
                        <a href="#">Instant Quote</a>
                    </li>
                    <li class="dropdownn">
                        <a href="#">Contact us</a>
                    </li>
                    <li id="userInfo" class="header__userInfo header__userInfo--hidden dropdownn" aria-label="user menu">
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
                        <a href="#" class="button button--compact button--secondary"> Log in</a>
                    </li>
                    <li class="nav__button dropdownn">
                        <a href="#" class="button button--compact"> Sign up</a>
                    </li>
                </ol>
            </nav>
        </div>
    </header>

    <main>
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
                                <label for="word_count">Word Count</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Word count" value="1000"
                                    name="word_count" id="word_count" aria-describedby="button-addon2">
                                    <div class="input-group-append" id="button-addon2">
                                        <div class="word-count-or-upload__upload" bis_skin_checked="1">
                                            <span class="word-count-or-upload__or">or</span>
                                            <div class="word-count-or-upload__button-wrapper" bis_skin_checked="1">
                                                <button type="button" class="btn btn-secondary btn-sm" id="file-upload-btn">Upload files</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="file" name="files-hidden" id="orderFiles" multiple hidden>
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
                        <div class="uploaded_file_list">
                        </div>
                        <div class="layout__row" bis_skin_checked="1">
                            <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group" bis_skin_checked="1">
                                <label for="delivery_date">Delivery Date</label>
                                <input type="date" id="delivery_date" name="delivery_date" class="form-control"
                                    placeholder="Your Email Address..">
                            </div>
                            <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group" bis_skin_checked="1"
                                style="display: grid; align-items: end;">
                                <button class="btn btn-secondary check price" type="button">Update prices</button>
                            </div>
                        </div>
                    </div>
                    <div class="layout__col-5 layout__col-md-6 layout__col-sm-12 layout__col-xs-12 "
                        style="background-color: #eee;" bis_skin_checked="1">
                        <h5>Quote Summary</h5>
                        <div class="layout__row" bis_skin_checked="1">
                            <div class="layout__col-5 " bis_skin_checked="1">
                                <p id="">From</p>
                            </div>
                            <div class="layout__col-7 " bis_skin_checked="1">
                                <p id="from_lang">Arabic</p>
                            </div>
                            <div class="layout__col-5 " bis_skin_checked="1">
                                <p id="">To</p>
                            </div>
                            <div class="layout__col-7 " bis_skin_checked="1">
                                <p id="to_lang">English</p>
                            </div>
                            <div class="layout__col-5 " bis_skin_checked="1">
                                <p id="">Subject</p>
                            </div>
                            <div class="layout__col-7 " bis_skin_checked="1">
                                <p id="selected_subject">Accounting & Finance</p>
                            </div>
                        </div>

                        <h5>Pricing ($0.10 / word)</h5>
                        <div class="layout__row   " bis_skin_checked="1">
                            <div class="layout__col-5 " bis_skin_checked="1">
                                <p id="total_word">100 Words</p>
                            </div>
                            <div class="layout__col-7 " bis_skin_checked="1">
                                <p id="total_price">$9.50</p>
                            </div>
                        </div>

                        <h5>Estimated Delivery <small>(2000 words / day)</small></h5>
                        <div class="layout__row" bis_skin_checked="1">
                            <div class="layout__col-5 " bis_skin_checked="1">
                                <p id="">Translation</p>
                            </div>
                            <div class="layout__col-7 " bis_skin_checked="1">
                                <p id="estimate_date">Thursday, October 05</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- Button trigger modal -->

    <footer>
        <div class="layout layout--norow">
            <div class="footer__credits" style="margin-top: 50px;">
                <i class="icon ">
                    <img class="imagefooter" src="{{ asset ('public/images/logowhite.png') }}" alt>
                </i>
            </div>

            <div class="footer__menu" style="margin-top: 50px;">
                <ul>
                    <li style="font-weight: bold; color: #fff;">Useful &darr;</li>
                    <li><a href="#" style="color: #fff;"><br></a></li>
                    <li><a href="#" style="color: #fff;">Solutions</a></li>
                    <li><a href="#" style="color: #fff;">Language Professionals</a></li>
                    <li><a href="#" style="color: #fff;">Instant Quote</a></li>
                </ul>
            </div>

            <div class="footer__settings settings" style="margin-top: 50px;">
                <p class="reset-dir">
                    <i class="fa fa-envelope" style="font-size:24px; color: #fff;"></i>
                    <a class="link link--noline" href="mailto:support@translationsx.com"
                        style="color: #fff !important;">&nbsp;&nbsp;
                        support@translationsx.com
                    </a>
                </p>
                <p class="reset-dir footer__social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                </p>
            </div>
        </div>

        <div class="layout layout--norow">

            <div class="footer__menu" style="margin-top: 50px;">
                <ul>
                    <li style="font-weight: bold; color: #fff;">Translation Services</li>
                    <li><a href="#" style="color: #fff;"><br></a></li>
                    <li><a href="#" style="color: #fff;">Business Translation Services</a></li>
                    <li><a href="#" style="color: #fff;">Certified Document Translation Services</a></li>
                    <li><a href="#" style="color: #fff;">Financial Translation Services</a></li>
                    <li><a href="#" style="color: #fff;">Legal Translation Services</a></li>
                    <li><a href="#" style="color: #fff;">Medical Translation Services</a></li>
                    <li><a href="#" style="color: #fff;">Professional Document Translation</a></li>
                    <li><a href="#" style="color: #fff;">Technical Translation Services</a></li>
                </ul>
            </div>

            <div class="footer__menu" style="margin-top: 50px;">
                <ul>
                    <li style="font-weight: bold; color: #fff;">Language
                        Translation Services</li>
                    <li><a href="#" style="color: #fff;"><br></a></li>
                    <li><a href="#" style="color: #fff;">Arabic Translation Services</a></li>
                    <li><a href="#" style="color: #fff;">Chinese Translation Services</a></li>
                    <li><a href="#" style="color: #fff;">French Translation Services</a></li>
                    <li><a href="#" style="color: #fff;">German Translation Services</a></li>
                    <li><a href="#" style="color: #fff;">Italian Translation Services</a></li>
                    <li><a href="#" style="color: #fff;">Japanese Translation Services</a></li>
                    <li><a href="#" style="color: #fff;">Spanish Translation Services</a></li>
                </ul>
            </div>

            <div class="footer__menu" style="margin-top: 50px;">
                <ul>
                    <li style="font-weight: bold; color: #fff;">Transcription Services</li>
                    <li><a href="#" style="color: #fff;"><br></a></li>
                    <li><a href="#" style="color: #fff;">Financial Translation Services</a></li>
                    <li><a href="#" style="color: #fff;">Legal Translation Services</a></li>
                    <li><a href="#" style="color: #fff;">Medical Translation Services</a></li>
                    <li><a href="#" style="color: #fff;">Professional Document Translation</a></li>
                    <li><a href="#" style="color: #fff;">Technical Translation Services</a></li>
                </ul>
            </div>

            <div class="footer__menu" style="margin-top: 50px;">
                <ul>
                    <li style="font-weight: bold; color: #fff;">Additional Services</li>
                    <li><a href="#" style="color: #fff;"><br></a></li>
                    <li><a href="#" style="color: #fff;">Immigration Translation Services</a></li>
                    <li><a href="#" style="color: #fff;">Machine Translation Post-Editing</a></li>
                    <li><a href="#" style="color: #fff;">Marketing Translation Services</a></li>
                    <li><a href="#" style="color: #fff;">Phone Interpreting Service</a></li>
                    <li><a href="#" style="color: #fff;">Translation and Localization Services</a></li>
                    <li><a href="#" style="color: #fff;">Video Translation Services</a></li>
                    <li><a href="#" style="color: #fff;">Website Localization</a></li>
                </ul>
            </div>

        </div>

        <div class="contentCentered" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="legalLinks" bis_skin_checked="1">
                    <a href="#">Terms and Conditions</a>
                </div>

                <div class="legalLinks" bis_skin_checked="1">
                    <a href="#">Privacy Policy</a>
                </div>

                <div class="legalLinks" bis_skin_checked="1">
                    <a href="#">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.11/js/select2.full.min.js"
        integrity="sha512-mGIhaSqC7YiMi2it8OToTXgg0RRHCNFVtCQyW9fPYhPOlrcQgkaSBNw8HQ8FLQxjSuDFQBbeeToTj5iFVoLLYw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

    <script type="text/javascript">
        const currentDate = new Date();
        let from_lang = '';
        let to_lang = '';
        let selected_subject = '';
        let total_word = 0;
        const per_word = 0.10;
        let total_price = 0;
        let estimate_date = '';

        $(document).ready(function () {
            $('.select2').select2();
            updateQuotation();

            $("#from, #to, #subject, #delivery_date").on("change", function() {
                // Call the updateQuotation function when a change occurs
                updateQuotation();
            });

            $("#word_count").keyup(function() {
                // Call the updateQuotation function when a change occurs
                updateQuotation();
            });

            $("#file-upload-btn").click(function(){
                $("#orderFiles").val('');
                $("#orderFiles").click();
            })


            // Add a change event handler to the file input to handle file selection
            $("#orderFiles").change(function () {
                // Access the selected files using this.files
                const selectedFiles = this.files;
                const token = "{{ csrf_token() }}";
                const randomString = getRandomString(20);

                // Loop through the selected files
                for (let i = 0; i < selectedFiles.length; i++) {
                    const file = selectedFiles[i];
                    const file_name = file['name'];
                    let truncated_name;
                    // Check if the file name is longer than 30 characters
                    if (file_name.length > 30) {
                        // If it is, truncate it and add "..."
                        truncated_name = file_name.substring(0, 27) + '...';
                    } else {
                        // If not, use the original file name
                        truncated_name = file_name;
                    }

                    const new_file_row = '<div class="layout__row pb-2 align-items-center" bis_skin_checked="1">'+
                        '<div class="layout__col-11 py-0" bis_skin_checked="1">'+
                            '<span>'+truncated_name+'</span>'+
                            '<span class="float-right">'+
                                '<span class="small" style="">'+
                                    '<span id="file_word_'+randomString+'"></span> <span class="text-danger" id="file_msg_'+randomString+'"></span>'+
                                '</span>'+
                            '</span>'+
                        '</div>'+
                        '<div class="layout__col-1 py-0" bis_skin_checked="1">'+
                            '<small class="float-right" style="">'+
                                '<button class="close" onclick="deleteEfile(this)">'+
                                    '<i class="fa fa-trash" style="font-size: 15px; padding: 5px; color:red"></i>'+
                                    '<input type="hidden" name="file_words[]" id="file_words_input_'+randomString+'" value="">'+
                                '</button>'+
                            '</small>'+
                        '</div>'+
                        '<div class="layout__col-12 py-1" bis_skin_checked="1" id="pro_div_'+randomString+'">'+
                        '</div>'+
                    '</div>';

                    // Create a new FormData object to hold the file data
                    const formData = new FormData();
                    formData.append('file', file);
                    formData.append('_token', token);
                    const progressBar = $('<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuemax="100"></div>');
                    const progressContainer = $('<div class="progress" style="height: 12px;"></div>').append(progressBar);

                    // Append the progress container to the uploaded_file_list div
                    $(".uploaded_file_list").append(new_file_row);
                    $("#pro_div_"+randomString).append(progressContainer);

                    // Send an individual AJAX request for each file
                    $.ajax({
                        url: "{{ route ('getFile') }}",
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        xhr: function () {
                            const xhr = new window.XMLHttpRequest();
                            // Upload progress
                            xhr.upload.addEventListener("progress", function (evt) {
                                if (evt.lengthComputable) {
                                    const percentComplete = (evt.loaded / evt.total) * 100;
                                    progressBar.css("width", percentComplete + "%");
                                    progressBar.attr("aria-valuenow", percentComplete);
                                    progressBar.html("processing");
                                }
                            }, false);

                            return xhr;
                        },
                        success: function (response) {

                            if (response.success) {
                                $("#file_word_"+randomString).html(response.word_ount + ' words');
                                $("#file_msg_"+randomString).html(response.msg);
                                $("#file_words_input_"+randomString).val(response.word_ount);
                                updateQuotation();

                                // Complete the progress bar when the request is successful
                                progressBar.removeClass("progress-bar-animated bg-info");
                                progressBar.addClass("bg-success");
                                progressBar.html("Complete");
                            }else{
                                $("#file_msg_"+randomString).html(response.msg);

                                // Update the progress bar to indicate an error
                                progressBar.removeClass("progress-bar-animated bg-info");
                                progressBar.addClass("bg-danger");
                                progressBar.html("Error");
                            }
                        },
                        error: function (error) {
                            // Handle any errors during the upload
                            console.error('Error uploading file:', error);

                            // Update the progress bar to indicate an error
                            progressBar.removeClass("progress-bar-animated bg-info");
                            progressBar.addClass("bg-danger");
                            progressBar.html("Error");
                        },
                    });

                }
            });

            $('.delete-button').click(function() {
                $(this).closest('.layout__row').remove();
                updateQuotation();
            });


        })

        function deleteEfile(ab) {
            $(ab).closest('.layout__row').remove();
            updateQuotation();
        }

        function updateContextValue() {
            from_lang = $("#from").val();
            to_lang = $("#to").val();
            selected_subject = $("#subject").val();
            total_word = updateWordCountField();
            total_price = parseFloat(per_word * total_word).toFixed(2);

            estimate_date = updateEstimateDate();
        }

        function updateQuotation() {
            updateContextValue();
            $("#from_lang").text(from_lang);
            $("#to_lang").text(to_lang);
            $("#selected_subject").text(selected_subject);
            $("#total_word").text(total_word + ' words');
            $("#total_price").text('$' +total_price);
            $("#estimate_date").text(estimate_date);
        }

        function updateEstimateDate(){
            let user_deli_date = $("#delivery_date").val();
            let userChoice = false;
            if (user_deli_date) {
                userChoice = true;
                return formatDateWithWordCount(user_deli_date, total_word, userChoice);
            }else{
                return formatDateWithWordCount(currentDate, total_word, userChoice);
            }
        }

        function formatDateWithWordCount(inputDate, wordCount, userChoice) {
            // Create a Date object from the input date string
            const date = new Date(inputDate);

            // Define the number of words per day
            const wordsPerDay = 2000;

            // Calculate the number of days to add based on word count
            const daysToAdd = Math.ceil(wordCount / wordsPerDay);
            if (userChoice) {
                date.setDate(date.getDate());
            }else{
                date.setDate(date.getDate() + daysToAdd);
            }
            // Add the calculated days to the date

            // Define arrays for day names and month names
            const dayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

            // Get the day of the week, month, and day from the Date object
            const dayOfWeek = dayNames[date.getUTCDay()];
            const month = monthNames[date.getUTCMonth()];
            const day = date.getUTCDate();

            // Construct the formatted date string
            const formattedDate = `${dayOfWeek}, ${month} ${day.toString().padStart(2, '0')}`;

            return formattedDate;
        }

        function updateWordCountField() {
            let sum = 0;
            const fileWordsInputs = $('input[name="file_words[]"]');

            if (fileWordsInputs.length > 0) {
                fileWordsInputs.each(function() {
                    const value = parseInt($(this).val().replace("'", ""));
                    sum += value;
                });
            } else {
                // Use the value from the input field with the id "word_count"
                const wordCountInput = $("#word_count");
                if (wordCountInput.length > 0) {
                    const value = parseInt(wordCountInput.val());
                    if (!isNaN(value)) {
                        sum += value;
                    }
                }
            }

            $("#word_count").val(sum)

            return sum;
        }

        function getRandomString(length) {
            const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            let randomString = "";

            for (let i = 0; i < length; i++) {
                const randomIndex = Math.floor(Math.random() * charset.length);
                randomString += charset.charAt(randomIndex);
            }

            return randomString;
        }



    </script>
</body>

</html>
