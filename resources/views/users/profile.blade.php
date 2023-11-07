@extends('layouts.user.app')
@section('title', auth('user')->user()->fname)

@section('content')
<div class="content-wrapper">
    <div class="content-body">
        <!-- users edit start -->
        <section class="users-edit">
            @include('partials.session_message')
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <ul class="nav nav-tabs mb-2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account"
                                aria-controls="account" role="tab" aria-selected="true">
                                    <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Account</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="education-tab" data-toggle="tab" href="#education"
                                aria-controls="education" role="tab" aria-selected="false">
                                    <i class="feather icon-info mr-25"></i><span class="d-none d-sm-block">Education</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="linguisticServices-tab" data-toggle="tab" href="#linguisticServices"
                                aria-controls="linguisticServices" role="tab" aria-selected="false">
                                    <i class="feather icon-info mr-25"></i><span class="d-none d-sm-block">Linguistic Services</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="language-combination-tab" data-toggle="tab" href="#language-combination"
                                aria-controls="language-combination" role="tab" aria-selected="false">
                                    <i class="feather icon-info mr-25"></i><span class="d-none d-sm-block">Language Combination</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="experience-tab" data-toggle="tab" href="#experience"
                                aria-controls="experience" role="tab" aria-selected="false">
                                    <i class="feather icon-info mr-25"></i><span class="d-none d-sm-block">Experiences</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="tools-software-tab" data-toggle="tab" href="#tools-software"
                                aria-controls="tools-software" role="tab" aria-selected="false">
                                    <i class="feather icon-info mr-25"></i><span class="d-none d-sm-block">CAT Tools & Softwares</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="cvpart-tab" data-toggle="tab" href="#cvpart"
                                aria-controls="cvpart" role="tab" aria-selected="false">
                                    <i class="feather icon-info mr-25"></i><span class="d-none d-sm-block">CV</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="linguistic-references-tab" data-toggle="tab" href="#linguistic-references"
                                aria-controls="linguistic-references" role="tab" aria-selected="false">
                                    <i class="feather icon-info mr-25"></i><span class="d-none d-sm-block">Linguistic References</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                <!-- users edit media object ends -->
                                <!-- users edit account form start -->
                                <form class="form" method="post" action="{{ route ('user.profile.basicInfo') }}" enctype="multipart/form-data">@csrf
                                    <!-- users edit media object start -->
                                    <div class="media">
                                        <a href="javascript: void(0);">
                                            <img src="{{ $data->image
                                                ? asset('public/storage/' . $data->image)
                                                : asset('public/backend/app-assets/images/portrait/small/avatar-s-1.png') }}"
                                                class="rounded mr-75" alt="profile image" height="64" width="64">
                                        </a>
                                        <div class="media-body mt-75">
                                            <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
                                                    for="account-upload">Upload new photo</label>
                                                <input type="file" id="account-upload" hidden name="image">
                                                <button class="btn btn-sm btn-secondary ml-50">Reset</button>
                                            </div>
                                            <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or PNG. Max size of 800kB</small></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label>First Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="fname" placeholder="First Name" value="{{ $data->fname }}" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Last Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="lname" placeholder="Last Name" value="{{ $data->lname }}" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Phone Number <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control phone" name="phone" placeholder="Last Name" value="{{ $data->phone }}" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>E-mail <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $data->email }}" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Date of Birth <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" name="dob" placeholder="dob" value="{{ $data->dob }}" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>City of Residence <span class="text-danger">*</span></label>
                                            <select class="select2 form-control" name="city_id">
                                                <option value="">Select</option>
                                                @foreach ($cities as $type)
                                                    <option value="{{ $type->id }}" {{ ($type->id == $data->city_id) ? 'selected' : '' }}>{{ $type->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Native Language <span class="text-danger">*</span></label>
                                            <select class="select2 form-control" name="native_language_id">
                                                <option value="">Select</option>
                                                @foreach ($languages as $type)
                                                    <option value="{{ $type->id }}" {{ ($type->id == $data->native_language_id) ? 'selected' : '' }}>{{ $type->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Experience and Expertise <span class="text-danger">*</span></label>
                                            <select class="select form-control" name="experience_expertise_id">
                                                <option value="">Select</option>
                                                @foreach ($exp_n_experts as $type)
                                                    <option value="{{ $type->id }}" {{ ($type->id == $data->experience_expertise_id) ? 'selected' : '' }}>{{ $type->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        {{-- <div class="col-md-6 form-group">
                                            <label>Specialised Subject <span class="text-danger">*</span></label>
                                            <select class="select2 form-control" name="specialized_subject[]" multiple>
                                                @foreach ($sectors as $type)
                                                    <option value="{{ $type->id }}" {{ in_array($type->id, ($data->specialized_subject ? json_decode($data->specialized_subject) : [])) ? 'selected' : '' }}>{{ $type->title }}</option>
                                                @endforeach
                                            </select>
                                        </div> --}}
                                        <div class="col-md-6 form-group">
                                            <label>Years of Professional Experience<span class="text-danger">*</span></label>
                                            <select class="select form-control" name="professional_Experience">
                                                <option value="">Select</option>
                                                <option value="Fewer than 12 months."
                                                {{ $data->professional_Experience == 'Fewer than 12 months.' ? 'selected' : '' }}>Fewer than 12 months.</option>
                                                <option value="Between 1 and 5 years."
                                                {{ $data->professional_Experience == 'Between 1 and 5 years.' ? 'selected' : '' }}>Between 1 and 5 years.</option>
                                                <option value="Between 6 and 15 years."
                                                {{ $data->professional_Experience == 'Between 6 and 15 years.' ? 'selected' : '' }}>Between 6 and 15 years.</option>
                                            </select>
                                        </div>
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                            <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                                changes</button>
                                            <button type="reset" class="btn btn-light">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- users edit account form ends -->
                            </div>
                            <div class="tab-pane" id="education" aria-labelledby="education-tab" role="tabpanel">
                                <!-- users edit Info form start -->
                                <form class="form" method="post" action="{{ route ('user.profile.education') }}" enctype="multipart/form-data">@csrf
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <label for="education">ALl Education Information</label>
                                            <textarea name="education" id="education" cols="30" class="form-control" rows="10" placeholder="Your Education information">{!! $data->education !!}</textarea>
                                        </div>
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                            <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                                changes</button>
                                            <button type="reset" class="btn btn-light">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- users edit Info form ends -->
                            </div>
                            <div class="tab-pane" id="linguisticServices" aria-labelledby="linguisticServices-tab" role="tabpanel">
                                <!-- users edit Info form start -->
                                <form class="form" method="post" action="{{ route ('user.profile.linguisticsServices') }}" enctype="multipart/form-data">@csrf
                                    <div class="row">
                                        @if (sizeof ($lin_services) > 0)
                                            <div class="col-12 form-group">
                                                <label>Mark all that apply:</label>
                                                @foreach ($lin_services as $ls)

                                                <div class="checkboxsas">
                                                    <label>
                                                        <input type="checkbox" value="{{ $ls->id }}" name="linguistic_services[]"
                                                        {{ ($data->linguistic_services != null && in_array($ls->id, json_decode($data->linguistic_services))) ? 'checked' : '' }}>
                                                        {{ $ls->title }}
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                        @endif
                                        <div class="col-md-6 form-group">
                                            <label>Daily Translation Capacity<span class="text-danger">*</span></label>
                                            <select class="select form-control" name="daily_translation_capacity">
                                                <option value="">Select</option>
                                                <option value="500 - 1000"
                                                {{ $data->daily_translation_capacity == '500 - 1000' ? 'selected' : '' }}>500 - 1000</option>
                                                <option value="1500 - 3000"
                                                {{ $data->daily_translation_capacity == '1500 - 3000' ? 'selected' : '' }}>1500 - 3000</option>
                                                <option value="+4000"
                                                {{ $data->daily_translation_capacity == '+4000' ? 'selected' : '' }}>+4000</option>
                                            </select>
                                        </div>
                                        {{-- <div class="col-md-6 form-group">
                                            <label>Desired rates per word</label>
                                            <input type="number" class="form-control phone" name="rate_per_word" placeholder="0.8" value="{{ $data->rate_per_word }}">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Desired rates per audio minute</label>
                                            <input type="number" class="form-control phone" name="rate_per_minute" placeholder="0.8" value="{{ $data->rate_per_minute }}">
                                        </div> --}}
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                            <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                                changes</button>
                                            <button type="reset" class="btn btn-light">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- users edit Info form ends -->
                            </div>
                            <div class="tab-pane" id="language-combination" aria-labelledby="language-combination-tab" role="tabpanel">
                                <!-- users edit Info form start -->
                                <form class="form" method="post" action="{{ route ('user.profile.lang-combination') }}" enctype="multipart/form-data">@csrf
                                    <div class="row">
                                        <div class="col-12 table-responsive">
                                            <input type="hidden" id="lang_com_count" value="lc">
                                            <table class="table lang-combination-table">
                                                <thead>
                                                    <tr>
                                                        <th width="15%">From Language <span class="text-danger">*</span></th>
                                                        <th width="15%">To Language <span class="text-danger">*</span></th>
                                                        <th width="15%">Specialised Subject <span class="text-danger">*</span></th>
                                                        <th width="15%">Rates per word <span class="text-danger">*</span>
                                                            {{-- <button type="button" class="btn btn-warning template" data-toggle="tooltip"
                                                                data-original-title="suggested prices will increase your chance to get more job in our platform." data-trigger="click">
                                                                <i class="feather icon-info"></i>
                                                            </button> --}}
                                                        </th>
                                                        <th width="15%">Rates per audio minute <span class="text-danger">*</span></th>
                                                        <th width="10%"></th>
                                                    </tr>
                                                </thead>
                                                <tbody id="lang_combination">
                                                    @if (sizeof ($lang_combinations) > 0)
                                                        @foreach ($lang_combinations as $lc)
                                                        <tr>
                                                            <td>
                                                                <select name="from_lang[]" id="from_lang_{{ $lc->id }}" class="form-control select from_lang"
                                                                    style="width:100%" data-count="{{ $lc->id }}" required>
                                                                    <option value="">Select</option>
                                                                    @foreach ($languages as $type)
                                                                    <option value="{{ $type->id }}" {{ ($type->id == $lc->from) ? 'selected' : '' }}>{{ $type->title }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <select name="to_lang[]" id="to_lang_{{ $lc->id }}" class="form-control select to_langt"
                                                                    style="width:100%" data-count="{{ $lc->id }}" required>

                                                                    <option value="">Select</option>
                                                                    @foreach ($languages as $type)
                                                                    <option value="{{ $type->id }}" {{ ($type->id == $lc->to) ? 'selected' : '' }}>{{ $type->title }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <select name="sector[]" id="sector_{{ $lc->id }}" class="form-control select sector"
                                                                    style="width:100%" data-count="{{ $lc->id }}" required>

                                                                    <option value="">Select</option>
                                                                    @foreach ($sectors as $type)
                                                                    <option value="{{ $type->id }}" {{ ($type->id == $lc->sector_id) ? 'selected' : '' }}>{{ $type->title }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input type="number" class="form-control phone rate_per_word" name="rate_per_word[]"
                                                                id="rate_per_word_{{ $lc->id }}" data-count="{{ $lc->id }}"
                                                                placeholder="0.8" value="{{ $lc->rate_per_word }}" required step="any">
                                                            </td>
                                                            <td>
                                                                <input type="number" class="form-control phone rate_per_minute" name="rate_per_minute[]"
                                                                id="rate_per_minute_{{ $lc->id }}" data-count="{{ $lc->id }}"
                                                                placeholder="0.8" value="{{ $lc->rate_per_minute }}" required step="any">
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger"
                                                                onclick="deleteData('{{ route('user.lang-combination.delete', [$lc->id]) }}')">Remove</button>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                            <button type="button" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1"
                                            onclick="addLangCombination(this)">Add more combination</button>
                                        </div>
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                            <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                                changes</button>
                                            <button type="reset" class="btn btn-light">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- users edit Info form ends -->
                            </div>
                            <div class="tab-pane" id="experience" aria-labelledby="experience-tab" role="tabpanel">
                                <!-- users edit Info form start -->
                                <form class="form" method="post" action="{{ route ('user.profile.experiences') }}" enctype="multipart/form-data">@csrf
                                    <input type="hidden" id="expCount" value="1">
                                    @if (sizeof($experiences) > 0)
                                        @foreach ($experiences as $exp)
                                        <input type="hidden" name="exp_id[]" value="{{ $exp->id }}">
                                        <div class="row" id="exp_1">
                                            <div class="col-md-6 form-group">
                                                <label for="">Designation</label>
                                                <input type="text" id="designation_{{ $exp->id }}" name="designation[]" class="form-control"
                                                placeholder="Ex: Software Engineer" value="{{ $exp->designation }}">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="">Company name</label>
                                                <input type="text" id="company_{{ $exp->id }}" name="company[]" class="form-control"
                                                placeholder="Ex: Meta" value="{{ $exp->company }}">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Employment Period</label>
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <input type="date" id="from_date_{{ $exp->id }}" name="from_date[]" class="form-control mb-1" value="{{ $exp->from_date }}">
                                                        <label >
                                                            <input type="checkbox" value="1" name="currently[]" {{ $exp->currently == 1 ? 'checked' : '' }}>
                                                            Currently Working
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <input type="date" id="to_date_{{ $exp->id }}" name="to_date[]" class="form-control" value="{{ $exp->to_date }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label for="">Responsibilities</label>
                                                <textarea name="responsibilities[]" id="responsibilities_{{ $exp->id }}" class="form-control" cols="30" rows="5">{{ $exp->responsibilities }}</textarea>
                                            </div>
                                            <div class="col-md-12 text-right form-group">
                                                <button type="button" class="btn btn-danger" onclick="deleteData('{{ route('user.experience.delete', [$data->id]) }}')" data-exp="'+expCount+'">Remove</button>
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif
                                    <button type="button" class="btn btn-primary mb-1"
                                        onclick="addMoreExp(this)">Add more Experience</button>
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                        <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                            changes</button>
                                        <button type="reset" class="btn btn-light">Cancel</button>
                                    </div>
                                </form>
                                <!-- users edit Info form ends -->
                            </div>
                            <div class="tab-pane" id="linguistic-references" aria-labelledby="linguistic-references-tab" role="tabpanel">
                                <!-- users edit Info form start -->
                                <form class="form" method="post" action="{{ route ('user.profile.references') }}" enctype="multipart/form-data">@csrf
                                    <input type="hidden" id="refCount" value="1">
                                    @if (sizeof($references) > 0)
                                        @foreach ($references as $ref)
                                        <input type="hidden" name="ref_id[]" value="{{ $ref->id }}">
                                        <div class="row" id="ref_1">
                                            <div class="col-md-6 form-group">
                                                <label for="">Full Name</label>
                                                <input type="text" id="ref_name_1" name="ref_name[]" class="form-control"
                                                placeholder="Ex: John Doe" value="{{ $ref->ref_name }}" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="">Email</label>
                                                <input type="email" id="ref_email_1" name="ref_email[]" class="form-control"
                                                placeholder="Ex: JohnDoe@example.com" value="{{ $ref->ref_email }}" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="">Phone Number</label>
                                                <input type="number" id="ref_phone_1" name="ref_phone[]" class="form-control phone"
                                                placeholder="Ex: +125868459" value="{{ $ref->ref_phone }}">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="">Capacity</label>
                                                <input type="text" id="ref_capacity_1" name="ref_capacity[]" class="form-control"
                                                placeholder="Ex: Software Engineer" value="{{ $ref->ref_capacity }}">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="">Company</label>
                                                <input type="text" id="ref_company_1" name="ref_company[]" class="form-control"
                                                placeholder="Ex: Meta" value="{{ $ref->ref_company }}">
                                            </div>
                                            <div class="col-md-12 text-right form-group">
                                                <button type="button" class="btn btn-danger" onclick="deleteData('{{ route('user.references.delete', [$ref->id]) }}')" data-exp="'+expCount+'">Remove</button>
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif
                                    <button type="button" class="btn btn-primary mb-1"
                                        onclick="addMoreRef(this)">Add More Linguistic References</button>
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                        <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                            changes</button>
                                        <button type="reset" class="btn btn-light">Cancel</button>
                                    </div>
                                </form>
                                <!-- users edit Info form ends -->
                            </div>
                            <div class="tab-pane" id="tools-software" aria-labelledby="tools-software-tab" role="tabpanel">
                                <!-- users edit Info form start -->
                                <form class="form" method="post" action="{{ route ('user.profile.catTools') }}" enctype="multipart/form-data">@csrf
                                    <div class="row">
                                        @if (sizeof ($catTools) > 0)
                                        <div class="col-md-6 form-group">
                                            <label for="">Mark all CAT tools used</label>
                                                @foreach ($catTools as $ls)

                                                <div class="checkboxsas">
                                                    <label>
                                                        <input type="checkbox" value="{{ $ls->id }}" name="cat_tools[]"
                                                        {{ ($data->cat_tools != null && in_array($ls->id, json_decode($data->cat_tools))) ? 'checked' : '' }}>
                                                        {{ $ls->title }}
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                        @endif
                                        <div class="col-md-6 form-group">
                                            <label for="">Mark all desktop publishing software used </label>
                                            <div class="checkboxsas">
                                                <label>
                                                    <input type="checkbox" value="Adobe InDesign" name="desktop_publishing_sofware[]"
                                                    {{ ($data->desktop_publishing_sofware != null && in_array('Adobe InDesign', json_decode($data->desktop_publishing_sofware))) ? 'checked' : '' }}>
                                                    Adobe InDesign
                                                </label>
                                            </div>
                                            <div class="checkboxsas">
                                                <label>
                                                    <input type="checkbox" value="Adobe Illustrator" name="desktop_publishing_sofware[]"
                                                    {{ ($data->desktop_publishing_sofware != null && in_array('Adobe Illustrator', json_decode($data->desktop_publishing_sofware))) ? 'checked' : '' }}>
                                                    Adobe Illustrator
                                                </label>
                                            </div>
                                            <div class="checkboxsas">
                                                <label>
                                                    <input type="checkbox" value="Adobe Photoshop" name="desktop_publishing_sofware[]"
                                                    {{ ($data->desktop_publishing_sofware != null && in_array('Adobe Photoshop', json_decode($data->desktop_publishing_sofware))) ? 'checked' : '' }}>
                                                    Adobe Photoshop
                                                </label>
                                            </div>
                                            <div class="checkboxsas">
                                                <label>
                                                    <input type="checkbox" value="AutoCAD" name="desktop_publishing_sofware[]"
                                                    {{ ($data->desktop_publishing_sofware != null && in_array('AutoCAD', json_decode($data->desktop_publishing_sofware))) ? 'checked' : '' }}>
                                                    AutoCAD
                                                </label>
                                            </div>
                                            <div class="checkboxsas">
                                                <label>
                                                    <input type="checkbox" value="Frame Maker" name="desktop_publishing_sofware[]"
                                                    {{ ($data->desktop_publishing_sofware != null && in_array('Frame Maker', json_decode($data->desktop_publishing_sofware))) ? 'checked' : '' }}>
                                                    Frame Maker
                                                </label>
                                            </div>
                                            <div class="checkboxsas">
                                                <label>
                                                    <input type="checkbox" value="Other" name="desktop_publishing_sofware[]"
                                                    {{ ($data->desktop_publishing_sofware != null && in_array('Other', json_decode($data->desktop_publishing_sofware))) ? 'checked' : '' }}>
                                                    Other
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                            <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                                changes</button>
                                            <button type="reset" class="btn btn-light">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- users edit Info form ends -->
                            </div>
                            <div class="tab-pane" id="cvpart" aria-labelledby="cvpart-tab" role="tabpanel">
                                <!-- users edit Info form start -->
                                <form class="form" method="post" action="{{ route ('user.profile.cvUpload') }}" enctype="multipart/form-data">@csrf
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="cv">Upload a PDF or docx file</label>
                                            <input type="file" id="cv" name="cv" class="form-control" accept=".pdf,.docx">
                                            <br>

                                        @if ($data->cv)
                                                <a href="{{ asset('public/storage/'. $data->cv) }}" class="btn btn-primary">Download CV</a>
                                        @endif
                                        </div>
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                            <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                                changes</button>
                                            <button type="reset" class="btn btn-light">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- users edit Info form ends -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- users edit ends -->
    </div>
</div>
@endsection

@section('script')

    <script type="text/javascript">
        $(document).on('change', '.from_lang', function() {
            var target = $(this).attr('data-count');
            var from_lang = $("#from_lang_"+target).val();
            var to_lang = $("#to_lang_"+target).val();

            const availLanUrl = "{{ route ('getAvailableLanCom') }}";

            if (from_lang != '') {
                getAvailableLanCom(availLanUrl, from_lang, "#to_lang_"+target);
            }


        });

        $(document).on('change', '.from_lang, .to_lang, .sector', function() {
            console.log('ok');
            var target = $(this).attr('data-count');
            var from_lang = $("#from_lang_"+target).val();
            var to_lang = $("#to_lang_"+target).val();
            var sector = $("#sector_"+target).val();

            const getrate = "{{ route ('getLangComPrice') }}";

            if (from_lang != '' && to_lang != '' && sector != '') {
                getLangComPrice(getrate, from_lang, to_lang, sector, "#rate_per_word_"+target, "#rate_per_minute_"+target);
            }

        });

        function addLangCombination(lc) {
            var lang_com_count = $("#lang_com_count").val();
            lang_com_count = lang_com_count  + 1;
            $("#lang_com_count").val(lang_com_count);
            var new_combination = '<tr>'+
                '<td>'+
                    '<select name="from_lang[]" id="from_lang_'+lang_com_count+'" data-count="'+lang_com_count+'" class="form-control select from_lang" style="width:100%" required>'+

                        '<option value="">Select</option>'+
                        '@foreach ($languages as $type)'+
                            '<option value="{{ $type->id }}">{{ $type->title }}</option>'+
                        '@endforeach'+
                    '</select>'+
                '</td>'+
                '<td>'+
                    '<select name="to_lang[]" id="to_lang_'+lang_com_count+'" data-count="'+lang_com_count+'" class="form-control select to_lang" style="width:100%" required>'+

                        // '<option value="">Select</option>'+
                        // '@foreach ($languages as $type)'+
                        //     '<option value="{{ $type->id }}">{{ $type->title }}</option>'+
                        // '@endforeach'+
                    '</select>'+
                '</td>'+

                '<td>'+
                    '<select name="sector[]" id="sector_'+lang_com_count+'" data-count="'+lang_com_count+'" class="form-control select sector" style="width:100%" required>'+

                        '<option value="">Select</option>'+
                        '@foreach ($sectors as $type)'+
                        '<option value="{{ $type->id }}">{{ $type->title }}</option>'+
                        '@endforeach'+
                    '</select>'+
                '</td>'+
                '<td>'+
                    '<input type="number" class="form-control phone rate_per_word" name="rate_per_word[]" '+
                    'placeholder="0.8" value="" id="rate_per_word_'+lang_com_count+'" data-count="'+lang_com_count+'" required  step="any">'+
                '</td>'+
                '<td>'+
                    '<input type="number" class="form-control phone rate_per_minute" name="rate_per_minute[]" '+
                    'placeholder="0.8" value="" id="rate_per_minute_'+lang_com_count+'" data-count="'+lang_com_count+'" required  step="any">'+
                '</td>'+
                '<td><button type="button" class="btn btn-danger" onclick="removeLangCombination(this)">Remove</button></td>'+
            '</tr>';

            $('#lang_combination').append(new_combination);
        }

        function removeLangCombination(rlc){
            $(rlc).closest("tr").remove();
        }


        function addMoreExp(me) {
            var expCount = $("#expCount").val() + 1;
            $("#expCount").val(expCount);

            var new_exp = '<div class="row" id="exp_'+expCount+'">'+
                '<input type="hidden" name="exp_id[]">'+
                '<div class="col-md-6 form-group">'+
                    '<label for="">Designation</label>'+
                    '<input type="text" id="designation_'+expCount+'" name="designation[]" class="form-control"'+
                    'placeholder="Ex: Software Engineer">'+
                '</div>'+
                '<div class="col-md-6 form-group">'+
                    '<label for="">Company name</label>'+
                    '<input type="text" id="company_'+expCount+'" name="company[]" class="form-control"'+
                    'placeholder="Ex: Meta">'+
                '</div>'+
                '<div class="col-md-12">'+
                    '<label for="">Employment Period</label>'+
                    '<div class="row">'+
                        '<div class="col-md-6 form-group">'+
                            '<input type="date" id="from_date_'+expCount+'" name="from_date[]" class="form-control mb-'+expCount+'">'+
                            '<label >'+
                                '<input type="checkbox" value="'+expCount+'" name="currently[]" name="currently_'+expCount+'">'+
                                'Currently Working'+
                            '</label>'+
                        '</div>'+
                        '<div class="col-md-6 form-group">'+
                            '<input type="date" id="to_date_'+expCount+'" name="to_date[]" class="form-control">'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<div class="col-md-12 form-group">'+
                    '<label for="">Responsibilities</label>'+
                    '<textarea name="responsibilities[]" id="responsibilities_'+expCount+'" class="form-control" cols="30" rows="5"></textarea>'+
                '</div>'+
                '<div class="col-md-12 text-right form-group">'+
                    '<button type="button" class="btn btn-danger" onclick="remove_exp(this)" data-exp="'+expCount+'">Remove</button>'+
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

            var new_exp = '<div class="row" id="ref_'+refCount+'">'+
                '<input type="hidden" name="ref_id[]">'+
                '<div class="col-md-6 form-group">'+
                    '<label for="">Full Name</label>'+
                    '<input type="text" id="ref_name_'+refCount+'" name="ref_name[]" class="form-control"'+
                    'placeholder="Ex: John Doe" required>'+
                '</div>'+
                '<div class="col-md-6 form-group">'+
                    '<label for="">Email</label>'+
                    '<input type="email" id="ref_email_'+refCount+'" name="ref_email[]" class="form-control"'+
                    'placeholder="Ex: JohnDoe@example.com" required>'+
                '</div>'+
                '<div class="col-md-6 form-group">'+
                    '<label for="">Phone Number</label>'+
                    '<input type="number" id="ref_phone_'+refCount+'" name="ref_phone[]" class="form-control phone"'+
                    'placeholder="Ex: +125868459">'+
                '</div>'+
                '<div class="col-md-6 form-group">'+
                    '<label for="">Capacity</label>'+
                    '<input type="text" id="ref_capacity_'+refCount+'" name="ref_capacity[]" class="form-control"'+
                    'placeholder="Ex: Software Engineer">'+
                '</div>'+
                '<div class="col-md-6 form-group">'+
                    '<label for="">Company</label>'+
                    '<input type="text" id="ref_company_'+refCount+'" name="ref_company[]" class="form-control"'+
                    'placeholder="Ex: Meta">'+
                '</div>'+
                '<div class="col-md-12 text-right form-group">'+
                    '<button type="button" class="btn btn-danger" onclick="remove_ref(this)" data-ref="'+refCount+'">Remove</button>'+
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
