@extends('layouts.frontend.app')
@section('title', 'Registration')

@section('css')

@endsection

@section('content')
    <section class="section--overflow" id="our-services">
        <div class="layout">
            <div class="layout__row   ">
                <div class="layout__col-12 layout__col-xs-12 ">
                    <div class="hero-text hero-text--center ">
                        <h3>Join the TranslationsX Family
                        </h3>
                        <p>At TranslationsX, every voice matters. Whether you’re a client seeking expert linguistic
                            services or a language professional ready to offer your skills, we've crafted a space for
                            collaboration, growth, and excellence. Become a member of our thriving community today.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <form id="wizard-form" class="reg-form form layout" style="margin-bottom: 2rem;">
        <fieldset class="from-step section--overflow" data-step="1">
            <!-- Step 1: Other Info -->
            <h3>Register as a Language Professionals</h3>
        </fieldset>
        <fieldset class="from-step section--overflow" data-step="2">
            <!-- Step 2: Personal Details -->
            <h3>Provide Personal Details and Skills</h3>
            <div class="layout__row">
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="first_name">First Name <span class="text-danger">*</span></label>
                    <input type="text" id="first_name" name="first_name" class="form-control"
                        placeholder="Your First Name" required>
                </div>
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="last_name">Last Name <span class="text-danger">*</span></label>
                    <input type="text" id="last_name" name="last_name" class="form-control"
                        placeholder="Your Last Name" required>
                </div>
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="email">Email Address <span class="text-danger">*</span></label>
                    <input type="email" id="email" name="email" class="form-control"
                        placeholder="Your Email Address.." required>
                </div>
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="password">Choose a Password <span class="text-danger">*</span></label>
                    <input type="password" id="password" name="password" class="form-control"
                        placeholder="Password" required>
                </div>
            </div>
            <div class="layout__row">
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label>
                        <input type="checkbox" value="1" id="accept_terms" name="accept_terms" required>
                        Agree to the Privacy Policy and Conditions <span class="text-danger">*</span>
                    </label>
                </div>
            </div>
        </fieldset>
        <fieldset class="from-step section--overflow" data-step="3">
            <!-- Step 3: Professional Details -->
            <h3>Experience and Expertise</h3>
            <div class="layout__row">
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="experience_expertise">Choose from options:</label>
                    <select name="experience_expertise" id="experience_expertise" class="form-control ">
                        <option value="">Select</option>
                        <option value="Without prior experience." selected>Without prior experience.</option>
                        <option value="Has academic language studies but lacks professional exposure">Has academic language studies but lacks professional exposure</option>
                        <option value="Possesses professional background in a different field">Possesses professional background in a different field</option>
                        <option value="A seasoned language professional in translation & interpreting.">A seasoned language professional in translation & interpreting.</option>
                    </select>
                </div>
            </div>
        </fieldset>
        <fieldset class="from-step section--overflow" data-step="4">
            <!-- Step 4: Professional Details -->
            <h3>Years of Professional Experience</h3>
            <div class="layout__row">
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="professional_Experience">Choose from options:</label>
                    <select name="professional_Experience" id="professional_Experience" class="form-control ">
                        <option value="">Select</option>
                        <option value="Fewer than 12 months." selected>Fewer than 12 months.</option>
                        <option value="Between 1 and 5 years.">Between 1 and 5 years.</option>
                        <option value="Between 6 and 15 years.">Between 6 and 15 years.</option>
                    </select>
                </div>
            </div>
        </fieldset>

        <fieldset class="from-step section--overflow" data-step="5">
            <!-- Step 5: Professional Details -->
            <h3>Linguistic Services</h3>
            <div class="layout__row">
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label>Mark all that apply:</label>
                    <div class="checkboxsas">
                        <label>
                            <input type="checkbox" value="Translation" name="linguistic_service[]">
                            Translation
                        </label>
                    </div>
                    <div class="checkboxsas">
                        <label>
                            <input type="checkbox" value="Interpreting" name="linguistic_service[]">
                            Interpreting
                        </label>
                    </div>
                    <div class="checkboxsas">
                        <label>
                            <input type="checkbox" value="Transcription" name="linguistic_service[]">
                            Transcription
                        </label>
                    </div>
                    <div class="checkboxsas">
                        <label>
                            <input type="checkbox" value="Sworn or legally certified translations" name="linguistic_service[]">
                            Sworn or legally certified translations
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="from-step section--overflow" data-step="6">
            <!-- Step 6: Other Info -->
            <h3>Upload CV</h3>
            <div class="layout__row">
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="cv">Upload a PDF or docx file</label>
                    <input type="file" id="cv" name="cv" class="form-control" accept=".pdf,.docx">
                </div>
            </div>
        </fieldset>

        <fieldset class="from-step section--overflow" data-step="7">
            <!-- Step 7: Other Info -->
            <h3>Native Language</h3>
            <div class="layout__row">
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="native_language">Select the strongest language for translating into</label>
                    <select name="native_language" id="native_language" class="form-control ">
                        <option value="">Select</option>
                        <option value="English">English</option>
                        <option value="Bengali">Bengali</option>
                        <option value="Spanish">Spanish</option>
                        <option value="French">French</option>
                    </select>
                </div>
            </div>
        </fieldset>

        <fieldset class="from-step section--overflow" data-step="8">
            <!-- Step 8: Other Info -->
            <h3>Add Language Combinations</h3>

            <div class="layout__row">
                <div class="layout__col-12 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="">Select language combinations to match with suitable projects</label>
                    <div class="language_combination">
                        <select name="from_language[]" id="from_language" class="form-control lang-combine-1">
                            <option value="">From Language</option>
                            <option value="English">English</option>
                            <option value="Bengali">Bengali</option>
                            <option value="Spanish">Spanish</option>
                            <option value="French">French</option>
                        </select>
                        <select name="to_language[]" id="to_language" class="form-control lang-combine-2">
                            <option value="">To Language</option>
                            <option value="English">English</option>
                            <option value="Bengali">Bengali</option>
                            <option value="Spanish">Spanish</option>
                            <option value="French">French</option>
                        </select>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="from-step section--overflow" data-step="9">
            <!-- Step 9: Other Info -->
            <h3>Choose Rates</h3>
            <div class="layout__row">
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="rate_per_word">Set desired rates per word </label>
                    <input type="number" id="rate_per_word" name="rate_per_word" class="form-control"
                        placeholder="Set desired rates per word ">
                </div>
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="rate_per_minute">Set desired rates per audio minute </label>
                    <input type="number" id="rate_per_minute" name="rate_per_minute" class="form-control"
                        placeholder="Set desired rates per audio minute ">
                </div>
            </div>
        </fieldset>

        <fieldset class="from-step section--overflow" data-step="10">
            <!-- Step 10: Other Info -->
            <h3>Daily Translation Capacity</h3>
            <div class="layout__row">
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="daily_translation_capacity">Select the number of words comfortable to translate per day</label>
                    <select name="daily_translation_capacity" id="daily_translation_capacity" class="form-control ">
                        <option value="">Select</option>
                        <option value="500 - 1000" selected>500 - 1000</option>
                        <option value="1500 - 3000">1500 - 3000</option>
                        <option value="+4000">+4000</option>
                    </select>
                </div>
            </div>
        </fieldset>

        <fieldset class="from-step section--overflow" data-step="11">
            <!-- Step 11: Other Info -->
            <h3>Specialised Subject Fields</h3>
            <div class="layout__row">
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="specialized_subject">Select 3 subject fields of expertise</label>
                    <select name="specialized_subject" id="specialized_subject" class="form-control ">
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
        </fieldset>

        <fieldset class="from-step section--overflow" data-step="12">
            <!-- Step 12: Other Info -->
            <h3>Add More Language Combinations</h3>
            <div class="layout__row">
                <div class="layout__col-12 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="">Add more additional language combinations if needed</label>
                    <div class="language_combination">
                        <select name="from_language[]" id="from_language" class="form-control lang-combine-1">
                            <option value="">From Language</option>
                            <option value="English">English</option>
                            <option value="Bengali">Bengali</option>
                            <option value="Spanish">Spanish</option>
                            <option value="French">French</option>
                        </select>
                        <select name="to_language[]" id="to_language" class="form-control lang-combine-2">
                            <option value="">To Language</option>
                            <option value="English">English</option>
                            <option value="Bengali">Bengali</option>
                            <option value="Spanish">Spanish</option>
                            <option value="French">French</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="button" class="button button--compact px-25 py-7 add_more_lang_combination" onclick="addLangCombination(this)">Add More Combination</button>

        </fieldset>

        <fieldset class="from-step section--overflow" data-step="13">
            <!-- Step 13: Other Info -->
            {{-- <input type="hidden" id="eduCount" value="1"> --}}
            <h3>Education</h3>
            <div class="layout__row">
                <div class="layout__col-12 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="specialized_subject">ALl Education Information</label>
                    <textarea name="education" id="education" cols="30" rows="10" placeholder="Your Education information"></textarea>
                </div>
            </div>
            {{-- <div class="layout__row edu_div" id="edu_1">
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="education_level_1">Education Level</label>
                    <select name="education_level[]" id="education_level_1" class="form-control">
                        <option value="">Select</option>
                        <option value="1">Secondary</option>
                        <option value="2">Higher Secondary</option>
                        <option value="3">Diploma</option>
                        <option value="4">Bachelor/Honors</option>
                        <option value="5">Masters</option>
                        <option value="6">PhD (Doctor of Philosophy)</option>
                    </select>
                </div>
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="degree_title_1">Exam/Degree Title</label>
                    <select name="degree_title[]" id="degree_title_1" class="form-control">
                        <option value="">Select</option>
                        <option value="Bachelor of Science (BSc)">Bachelor of Science (BSc)</option>
                        <option value="Bachelor of Arts (BA)">Bachelor of Arts (BA)</option>
                        <option value="Bachelor of Commerce (BCom)">Bachelor of Commerce (BCom)</option>
                        <option value="Bachelor of Commerce (Pass)">Bachelor of Commerce (Pass)</option>
                        <option value="Bachelor of Business Administration (BBA)">Bachelor of Business Administration (BBA)</option>
                        <option value="Bachelor of Medicine and Bachelor of Surgery(MBBS)">Bachelor of Medicine and Bachelor of Surgery(MBBS)</option>
                        <option value="Bachelor of Dental Surgery (BDS)">Bachelor of Dental Surgery (BDS)</option>
                        <option value="Bachelor of Law (LLB)">Bachelor of Law (LLB)</option>
                    </select>
                </div>
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="major_1">Concentration/ Major/Group</label>
                    <input type="text" id="major_1" name="major[]" class="form-control"
                    placeholder="Ex: Computer Science & Engineering">
                </div>
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="institute_1">Institution Name</label>
                    <input type="text" id="institute_1" name="institute[]" class="form-control"
                    placeholder="Ex: MIT">
                </div>
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="result_1">Result</label>
                    <input type="text" id="result_1" name="result[]" class="form-control"
                    placeholder="Ex: 3.75">
                </div>
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="passing_year_1">Passing Year</label>
                    <select name="passing_year[]" id="passing_year_1" class="form-control">
                        <option value="">Select</option>
                        <option value="2028">2028</option>
                        <option value="2027">2027</option>
                        <option value="2026">2026</option>
                        <option value="2025">2025</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020" selected="">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                    </select>
                </div>


            </div>
            <button type="button" class="button button--compact px-25 py-7 add_more_education">Add More Education</button> --}}
        </fieldset>

        <fieldset class="from-step section--overflow" data-step="14">
            <!-- Step 14: Other Info -->
            <h3>Professional Experience</h3>
            <input type="hidden" id="expCount" value="1">
            <div class="layout__row" id="exp_1">
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="">Designation</label>
                    <input type="text" id="designation_1" name="designation[]" class="form-control"
                    placeholder="Ex: Software Engineer">
                </div>
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="">Company name</label>
                    <input type="text" id="company_1" name="company[]" class="form-control"
                    placeholder="Ex: Meta">
                </div>
                <div class="layout__col-12 layout__col-sm-12 layout__col-xs-12">
                    <label for="">Employment Period</label>
                    <div class="layout__row">
                        <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                            <input type="date" id="from_date_1" name="from_date[]" class="form-control mb-1">
                            <label >
                                <input type="checkbox" value="1" name="currently[]" name="currently_1">
                                Currently Working
                            </label>
                        </div>
                        <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                            <input type="date" id="to_date_1" name="to_date[]" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="layout__col-12 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="">Responsibilities</label>
                    <textarea name="responsibilities[]" id="responsibilities_1" cols="30" rows="3"></textarea>
                </div>
            </div>
            <button type="button" class="button button--compact px-25 py-7" onclick="addMoreExp(this)">Add More Experience</button>
        </fieldset>

        <fieldset class="from-step section--overflow" data-step="15">
            <!-- Step 15: Other Info -->
            <h3>Linguistic References</h3>
            <input type="hidden" id="refCount" value="1">
            <div class="layout__row" id="ref_1">
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="">Full Name</label>
                    <input type="text" id="ref_name_1" name="ref_name[]" class="form-control"
                    placeholder="Ex: John Doe">
                </div>
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="">Email</label>
                    <input type="email" id="ref_email_1" name="ref_email[]" class="form-control"
                    placeholder="Ex: JohnDoe@example.com">
                </div>
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="">Phone Number</label>
                    <input type="number" id="ref_phone_1" name="ref_phone[]" class="form-control phone"
                    placeholder="Ex: +125868459">
                </div>
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="">Capacity</label>
                    <input type="text" id="ref_capacity_1" name="ref_capacity[]" class="form-control"
                    placeholder="Ex: Software Engineer">
                </div>
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="">Company</label>
                    <input type="text" id="ref_company_1" name="ref_company[]" class="form-control"
                    placeholder="Ex: Meta">
                </div>
            </div>
            <button type="button" class="button button--compact px-25 py-7" onclick="addMoreRef(this)">Add More Linguistic References</button>
        </fieldset>

        <fieldset class="from-step section--overflow" data-step="16">
            <!-- Step 16: Other Info -->
            <h3>CAT Tools</h3>
            <div class="layout__row">
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="">Mark all CAT tools used</label>
                    <div class="checkboxsas">
                        <label>
                            <input type="checkbox" value="SDL" name="cat_tools[]">
                            SDL
                        </label>
                    </div>
                    <div class="checkboxsas">
                        <label>
                            <input type="checkbox" value="MemeQ" name="cat_tools[]">
                            MemeQ
                        </label>
                    </div>
                    <div class="checkboxsas">
                        <label>
                            <input type="checkbox" value="Memsource" name="cat_tools[]">
                            Memsource
                        </label>
                    </div>
                    <div class="checkboxsas">
                        <label>
                            <input type="checkbox" value="Metacat" name="cat_tools[]">
                            Metacat
                        </label>
                    </div>
                    <div class="checkboxsas">
                        <label>
                            <input type="checkbox" value="Other" name="cat_tools[]">
                            Other
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="from-step section--overflow" data-step="17">
            <!-- Step 17: Other Info -->
            <h3>Desktop Publishing Software</h3>
            <div class="layout__row">
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="">Mark all desktop publishing software used </label>
                    <div class="checkboxsas">
                        <label>
                            <input type="checkbox" value="Adobe InDesign" name="desktop_publishing_sofware[]">
                            Adobe InDesign
                        </label>
                    </div>
                    <div class="checkboxsas">
                        <label>
                            <input type="checkbox" value="Adobe Illustrator" name="desktop_publishing_sofware[]">
                            Adobe Illustrator
                        </label>
                    </div>
                    <div class="checkboxsas">
                        <label>
                            <input type="checkbox" value="Adobe Photoshop" name="desktop_publishing_sofware[]">
                            Adobe Photoshop
                        </label>
                    </div>
                    <div class="checkboxsas">
                        <label>
                            <input type="checkbox" value="AutoCAD" name="desktop_publishing_sofware[]">
                            AutoCAD
                        </label>
                    </div>
                    <div class="checkboxsas">
                        <label>
                            <input type="checkbox" value="Frame Maker" name="desktop_publishing_sofware[]">
                            Frame Maker
                        </label>
                    </div>
                    <div class="checkboxsas">
                        <label>
                            <input type="checkbox" value="Other" name="desktop_publishing_sofware[]">
                            Other
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="from-step section--overflow" data-step="18">
            <!-- Step 18: Other Info -->
            <h3>Contact Details</h3>
            <div class="layout__row">
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="dob">Birthdate</label>
                    <input type="date" id="dob" name="dob" class="form-control">
                </div>
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="city">City of Residence</label>
                    <select name="city" id="city" class="form-control ">
                        <option value="">Select</option>
                        <option value="Sydney">Sydney</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Mumbai">Mumbai</option>
                        <option value="Tokyo">Tokyo</option>
                    </select>
                </div>
                <div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">
                    <label for="phone_number">Phone number (used for direct contact, remains private)</label>
                    <input type="number" id="phone_number" name="phone_number" class="form-control phone"
                    placeholder="Ex: +123456789" required>
                </div>
            </div>
        </fieldset>

        <div class="layout__row">
            <div class="layout__col-12 layout__col-sm-12 layout__col-xs-12 wizard-buttons text-right">
                <button type="button" class="button button--compact button--secondary prev-button px-25 py-7">Previous</button>
                <button type="button" class="button button--compact next-button px-25 py-7">Next</button>
                <button type="button" class="button button--compact submit-button px-25 py-7">Submit</button>
            </div>
        </div>
    </form>

@endsection

@section('script')
    <script type="text/javascript">
        $(function () {
            $(".select2").select2();
        });

        $(document).ready(function() {
            // Initialize variables
            var currentStep = 1;
            var totalSteps = $("fieldset").length;
            $(".reg-form").on("submit", function(event) {
                event.preventDefault();
            });

            // Hide all sections except the first one
            $("fieldset").not('[data-step="1"]').hide();

            // Handle Next button click
            $(".next-button").click(function() {
                if (currentStep < totalSteps) {
                    currentStep++;
                    $("fieldset").hide();
                    $("fieldset[data-step='" + currentStep + "']").show();
                }

                // Show or hide the buttons based on the step
                updateButtons();
            });
            // $(".next-button").click(function() {
            //     var nextStep = currentStep + 1;
            //     if (validateStep(currentStep)) {
            //         currentStep = nextStep;
            //         $("fieldset").hide();
            //         $("fieldset[data-step='" + currentStep + "']").show();
            //         updateButtons();
            //     }
            // });
            $(".reg-form").on("input", "input, select, textarea", function() {
                var $field = $(this);
                if ($field.val() !== "") {
                    $field.removeClass("required-error");
                }
            });

            function validateStep(step) {
                console.log(step);
                var $currentSection = $("fieldset[data-step='" + step + "']");
                var requiredFields = $currentSection.find("[required]");
                var valid = true;

                requiredFields.each(function() {
                    var $field = $(this);
                    if ($field.val() === "") {
                        $field.addClass("required-error");
                        valid = false;
                    } else {
                        $field.removeClass("required-error");
                    }
                });

                return valid;
            }

            // Handle Previous button click
            $(".prev-button").click(function() {
                if (currentStep > 1) {
                    currentStep--;
                    $("fieldset").hide();
                    $("fieldset[data-step='" + currentStep + "']").show();
                }

                // Show or hide the buttons based on the step
                updateButtons();
            });

            // Function to show or hide buttons
            function updateButtons() {
                if (currentStep === 1) {
                    $(".prev-button").prop("disabled", true);
                } else {
                    $(".prev-button").prop("disabled", false);
                }

                if (currentStep === totalSteps) {
                    $(".next-button").hide();
                    $(".submit-button").show();
                    $(".submit-button").prop("disabled", false);
                } else {
                    $(".next-button").show();
                    $(".submit-button").hide();
                    $(".submit-button").prop("disabled", true);
                }
            }

            // Initialize button state
            updateButtons();

            $(".add_more_education").click(function(){
                var eduCount = $("#eduCount").val() + 1;
                $("#eduCount").val(eduCount);

                var new_edu = '<div class="layout__row edu_div" id="edu_'+eduCount+'">'+
                    '<div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">'+
                        '<label for="education_level_'+eduCount+'">Education Level</label>'+
                        '<select name="education_level[]" id="education_level_'+eduCount+'" class="form-control">'+
                            '<option value="">Select</option>'+
                            '<option value="1">Secondary</option>'+
                            '<option value="2">Higher Secondary</option>'+
                            '<option value="3">Diploma</option>'+
                            '<option value="4">Bachelor/Honors</option>'+
                            '<option value="5">Masters</option>'+
                            '<option value="6">PhD (Doctor of Philosophy)</option>'+
                        '</select>'+
                    '</div>'+
                    '<div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">'+
                        '<label for="degree_title_'+eduCount+'">Exam/Degree Title</label>'+
                        '<select name="degree_title[]" id="degree_title_'+eduCount+'" class="form-control">'+
                            '<option value="">Select</option>'+
                            '<option value="Bachelor of Science (BSc)">Bachelor of Science (BSc)</option>'+
                            '<option value="Bachelor of Arts (BA)">Bachelor of Arts (BA)</option>'+
                            '<option value="Bachelor of Commerce (BCom)">Bachelor of Commerce (BCom)</option>'+
                            '<option value="Bachelor of Commerce (Pass)">Bachelor of Commerce (Pass)</option>'+
                            '<option value="Bachelor of Business Administration (BBA)">Bachelor of Business Administration (BBA)</option>'+
                            '<option value="Bachelor of Medicine and Bachelor of Surgery(MBBS)">Bachelor of Medicine and Bachelor of Surgery(MBBS)</option>'+
                            '<option value="Bachelor of Dental Surgery (BDS)">Bachelor of Dental Surgery (BDS)</option>'+
                            '<option value="Bachelor of Law (LLB)">Bachelor of Law (LLB)</option>'+
                        '</select>'+
                    '</div>'+
                    '<div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">'+
                        '<label for="major_'+eduCount+'">Concentration/ Major/Group</label>'+
                        '<input type="text" id="major_'+eduCount+'" name="major[]" class="form-control"'+
                        'placeholder="Ex: Computer Science & Engineering">'+
                    '</div>'+
                    '<div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">'+
                        '<label for="institute_'+eduCount+'">Institution Name</label>'+
                        '<input type="text" id="institute_'+eduCount+'" name="institute[]" class="form-control"'+
                        'placeholder="Ex: MIT">'+
                    '</div>'+
                    '<div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">'+
                        '<label for="result_'+eduCount+'">Result</label>'+
                        '<input type="text" id="result_'+eduCount+'" name="result[]" class="form-control"'+
                        'placeholder="Ex: 3.75">'+
                    '</div>'+
                    '<div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">'+
                        '<label for="passing_year_'+eduCount+'">Passing Year</label>'+
                        '<select name="passing_year[]" id="passing_year_'+eduCount+'" class="form-control">'+
                            '<option value="">Select</option>'+
                            '<option value="2028">2028</option>'+
                            '<option value="2027">2027</option>'+
                            '<option value="2026">2026</option>'+
                            '<option value="2025">2025</option>'+
                            '<option value="2024">2024</option>'+
                            '<option value="2023">2023</option>'+
                            '<option value="2022">2022</option>'+
                            '<option value="2021">2021</option>'+
                            '<option value="2020" selected="">2020</option>'+
                            '<option value="2019">2019</option>'+
                            '<option value="2018">2018</option>'+
                            '<option value="2017">2017</option>'+
                            '<option value="2016">2016</option>'+
                            '<option value="2015">2015</option>'+
                        '</select>'+
                    '</div>'+
                    '<div class="layout__col-12 layout__col-sm-12 layout__col-xs-12 text-right form-group">'+
                    '<button type="button" class="button button--compact button--secondary px-25 py-7" onclick="remove_edu(this)" data-edu="'+eduCount+'">Remove</button>'+
                    '</div>'+
                '</div>';

                $(".add_more_education").before(new_edu);
            });
        });

        function remove_edu(ed) {
            var target = $(ed).data('edu');
            $("#edu_"+target).remove();
        }

        function addLangCombination(lc) {
            var new_combination = '<div class="layout__row">'+
                '<div class="layout__col-12 layout__col-sm-12 layout__col-xs-12 form-group">'+
                    '<div class="language_combination">'+
                        '<select name="from_language[]" id="from_language" class="form-control lang-combine-1">'+
                            '<option value="">From Language</option>'+
                            '<option value="English">English</option>'+
                            '<option value="Bengali">Bengali</option>'+
                            '<option value="Spanish">Spanish</option>'+
                            '<option value="French">French</option>'+
                        '</select>'+
                        '<select name="to_language[]" id="to_language" class="form-control lang-combine-2">'+
                            '<option value="">To Language</option>'+
                            '<option value="English">English</option>'+
                            '<option value="Bengali">Bengali</option>'+
                            '<option value="Spanish">Spanish</option>'+
                            '<option value="French">French</option>'+
                        '</select>'+
                    '</div>'+
                '</div>'+
                '<div class="layout__col-12 layout__col-sm-12 layout__col-xs-12 text-right form-group">'+
                    '<button type="button" class="button button--compact button--secondary px-25 py-7" onclick="removeLangCombination(this)">Remove</button>'+
                '</div>'+
            '</div>';

            $(lc).before(new_combination);
        }

        function removeLangCombination(rlc){
            $(rlc).closest(".layout__row").remove();
        }

        function addMoreExp(me) {
            var expCount = $("#expCount").val() + 1;
            $("#expCount").val(expCount);

            var new_exp = '<div class="layout__row" id="exp_'+expCount+'">'+
                '<div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">'+
                    '<label for="">Designation</label>'+
                    '<input type="text" id="designation_'+expCount+'" name="designation[]" class="form-control"'+
                    'placeholder="Ex: Software Engineer">'+
                '</div>'+
                '<div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">'+
                    '<label for="">Company name</label>'+
                    '<input type="text" id="company_'+expCount+'" name="company[]" class="form-control"'+
                    'placeholder="Ex: Meta">'+
                '</div>'+
                '<div class="layout__col-12 layout__col-sm-12 layout__col-xs-12">'+
                    '<label for="">Employment Period</label>'+
                    '<div class="layout__row">'+
                        '<div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">'+
                            '<input type="date" id="from_date_'+expCount+'" name="from_date[]" class="form-control mb-'+expCount+'">'+
                            '<label >'+
                                '<input type="checkbox" value="'+expCount+'" name="currently[]" name="currently_'+expCount+'">'+
                                'Currently Working'+
                            '</label>'+
                        '</div>'+
                        '<div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">'+
                            '<input type="date" id="to_date_'+expCount+'" name="to_date[]" class="form-control">'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<div class="layout__col-12 layout__col-sm-12 layout__col-xs-12 form-group">'+
                    '<label for="">Responsibilities</label>'+
                    '<textarea name="responsibilities[]" id="responsibilities_'+expCount+'" cols="30" rows="3"></textarea>'+
                '</div>'+
                '<div class="layout__col-12 layout__col-sm-12 layout__col-xs-12 text-right form-group">'+
                    '<button type="button" class="button button--compact button--secondary px-25 py-7" onclick="remove_exp(this)" data-exp="'+expCount+'">Remove</button>'+
                '</div>'+
            '</div>';

            $(me).before(new_exp);
        }

        function remove_exp(exp) {
            var target = $(exp).data('exp');
            $("#exp_"+target).remove();
        }

        function addMoreRef(mr) {
            var refCount = $("#refCount").val() + 1;
            $("#refCount").val(refCount);

            var new_exp = '<div class="layout__row" id="ref_'+refCount+'">'+
                '<div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">'+
                    '<label for="">Full Name</label>'+
                    '<input type="text" id="ref_name_'+refCount+'" name="ref_name[]" class="form-control"'+
                    'placeholder="Ex: John Doe">'+
                '</div>'+
                '<div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">'+
                    '<label for="">Email</label>'+
                    '<input type="email" id="ref_email_'+refCount+'" name="ref_email[]" class="form-control"'+
                    'placeholder="Ex: JohnDoe@example.com">'+
                '</div>'+
                '<div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">'+
                    '<label for="">Phone Number</label>'+
                    '<input type="number" id="ref_phone_'+refCount+'" name="ref_phone[]" class="form-control phone"'+
                    'placeholder="Ex: +125868459">'+
                '</div>'+
                '<div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">'+
                    '<label for="">Capacity</label>'+
                    '<input type="text" id="ref_capacity_'+refCount+'" name="ref_capacity[]" class="form-control"'+
                    'placeholder="Ex: Software Engineer">'+
                '</div>'+
                '<div class="layout__col-6 layout__col-sm-12 layout__col-xs-12 form-group">'+
                    '<label for="">Company</label>'+
                    '<input type="text" id="ref_company_'+refCount+'" name="ref_company[]" class="form-control"'+
                    'placeholder="Ex: Meta">'+
                '</div>'+
                '<div class="layout__col-12 layout__col-sm-12 layout__col-xs-12 text-right form-group">'+
                    '<button type="button" class="button button--compact button--secondary px-25 py-7" onclick="remove_ref(this)" data-ref="'+refCount+'">Remove</button>'+
                '</div>'+
            '</div>';

            $(mr).before(new_exp);
        }

        function remove_ref(ref) {
            var target = $(ref).data('ref');
            $("#ref_"+target).remove();
        }


    </script>
@endsection
