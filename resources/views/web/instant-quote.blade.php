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
                            <input type="date" id="delivery_date" name="delivery_date" class="form-control"
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
                            <div class="word-count-or-upload" bis_skin_checked="1">
                                <input type="text" name="word_count" id="word_count" placeholder="Word count" value="1000" style="height: 40px">
                                <div class="word-count-or-upload__upload" bis_skin_checked="1">
                                    <span class="word-count-or-upload__or">or</span>
                                    <div class="word-count-or-upload__button-wrapper" bis_skin_checked="1">
                                        <button type="button" class="button--compact button--secondary" id="file-upload-btn">Upload files</button>
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
    <script src="{{ asset ('public/frontend/js/instant_quote.js?v1') }}"></script>

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

            $("#from, #to, #subject, #delivery_date, #word_count").on("change", function() {
                // Call the updateQuotation function when a change occurs
                updateQuotation();
            });

            // $("#word_count").keyup(function() {
            //     // Call the updateQuotation function when a change occurs
            //     updateQuotation();
            // });

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
    </script>
@endsection
