@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/blankLayout')

@section('title', 'Student_DB')


@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/form-layouts.js') }}"></script>
@endsection




@section('content')

    <div class="container">

        <div class="card mt-3">
            <div class="card-body">
                <h1 class=" text-center  "> Student Database
                </h1>

            </div>
        </div>



        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Forms/</span>Personal Information
        </h4>



        <form action="{{ route('form_store') }}" method="POST" enctype="multipart/form-data"> @csrf

            @if (session()->has('success'))
                {{ session()->get('success') }}
            @endif




            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif



            <div class="row">
                <div class="col-md mb-4 mb-md-0">
                    <div class="card">

                        <div class="card-body">

                            {{-- Name Input  --}}
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-name">Full Name</label>
                                <input type="text" class="form-control" id="basic-default-name"
                                    placeholder="Abdur Rahman" required name="full_name" />

                                @error('first_name')
                                    <div class="text-denger">{{ $message }}</div>
                                @enderror
                            </div>




                            <div class="mb-3">
                                <label class="form-label" for="multicol-roll">Roll</label>
                                <input type="number" id="multicol-roll" class="form-control" placeholder="55"
                                    name="roll">


                                @error('roll')
                                    <div class="text-denger">{{ $message }}</div>
                                @enderror
                            </div>






                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-email">Email</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="ti ti-mail"></i></span>
                                    <input type="text" id="basic-icon-default-email" class="form-control"
                                        placeholder="email@gmail.com" aria-label="john.doe"
                                        aria-describedby="basic-icon-default-email2" name="email" />

                                    <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>

                                    @error('email')
                                        <div class="text-denger">{{ $message }}</div>
                                    @enderror


                                </div>

                            </div>


                            <div class="mb-3">
                                <label class="form-label" for="multicol-roll">Student ID</label>
                                <input type="number" id="multicol-roll" class="form-control" placeholder="55"
                                    name="student_id">


                                @error('roll')
                                    <div class="text-denger">{{ $message }}</div>
                                @enderror
                            </div>



                            <div class="mb-3">
                                <label class="form-label" for="basic-default-country">Departmant</label>
                                <select class="form-select" id="basic-default-country" name="departmant">
                                    <option value="Department">Select Departmant</option>
                                    <option value="Computer Technology">Computer Technology</option>
                                    <option value="Computer Technology">Computer Technology</option>
                                    <option value="Computer Technology">Computer Technology</option>
                                    <option value="Computer Technology">Computer Technology</option>
                                    <option value="Computer Technology">Computer Technology</option>
                                    <option value="Computer Technology">Computer Technology</option>


                                </select>

                                @error('departmant')
                                    <div class="text-denger">{{ $message }}</div>
                                @enderror

                            </div>


                            <div class="mb-3">
                                <label class="form-label" for="basic-default-country">Semester</label>
                                <select class="form-select" id="basic-default-country" required name="semester">
                                    <option value="">Select Semester</option>
                                    <option value="1st">1st</option>
                                    <option value="1st">1st</option>
                                    <option value="1st">1st</option>
                                    <option value="1st">1st</option>
                                    <option value="1st">1st</option>
                                    <option value="1st">1st</option>
                                </select>

                                @error('semester')
                                    <div class="text-denger">{{ $message }}</div>
                                @enderror

                            </div>



                            {{-- Gender radio --}}
                            <div class="mb-3">
                                <label class="d-block form-label">Gender</label>
                                <div class="form-check form-check-inline">
                                    <input name="gender" class="form-check-input" type="radio" value="male"
                                        id="male" checked="" />
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="gender" class="form-check-input" type="radio" value="female"
                                        id="female" />
                                    <label class="form-check-label" for="female">Female</label>
                                </div>


                                @error('gender')
                                    <div class="text-denger">{{ $message }}</div>
                                @enderror

                            </div>




                            <div class="mb-3">
                                <label class="form-label" for="collapsible-file">File</label>
                                <input type="file" id="collapsible-file" class="form-control" name="file" />


                                @error('file')
                                    <div class="text-red">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="mt-4 mb-5">
                                <label class="form-label" for="multicol-birthdate">Birth Date</label>
                                <input type="text" id="multicol-birthdate" class="form-control dob-picker"
                                    placeholder="YYYY-MM-DD" name="dob" />



                                @error('dob')
                                    <div class="text-red">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary ">Submit</button>
                            </div>





                        </div>
                    </div>
                </div>
                <div class="col-xl">
                    <div class="card mb-4">

                        <div class="card-body">

                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Your Father Name</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="ti ti-user"></i></span>
                                    <input type="text" class="form-control" id="basic-icon-default-fullname"
                                        placeholder="Father Name English" aria-label="John Doe"
                                        aria-describedby="basic-icon-default-fullname2" name="father_name" />

                                    @error('father_name')
                                        <div class="text-red">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Your Mother Name</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                            class="ti ti-user"></i></span>
                                    <input type="text" class="form-control" id="basic-icon-default-fullname"
                                        placeholder="Mother Name English" aria-label="John Doe"
                                        aria-describedby="basic-icon-default-fullname2" name="mother_name" />


                                    @error('mother_name')
                                        <div class="text-red">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-country">Country</label>
                                <select class="form-select" id="basic-default-country" required name="country">

                                    <option value="">Select</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Canada">Canada</option>
                                    <option value="China">China</option>
                                    <option value="France">France</option>
                                    <option value="Germany">Germany</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Korea">Korea, Republic of</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Russia">Russian Federation</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>



                                </select>

                                @error('country_name')
                                    <div class="text-red">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-phone">Phone No</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-phone2" class="input-group-text"><i
                                            class="ti ti-phone"></i></span>
                                    <input type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                                        placeholder="658 799 8941" aria-label="658 799 8941"
                                        aria-describedby="basic-icon-default-phone2" name="phone" />



                                    @error('phone')
                                        <div class="text-red">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-country">Blood Group</label>
                                <select class="form-select" id="basic-default-country" required name="blood">
                                    <option value="">Select Your Blood</option>
                                    <option value="A+">A+</option>
                                    <option value="A+">A+</option>
                                    <option value="A+">A+</option>
                                    <option value="A+">A+</option>
                                    <option value="A+">A+</option>


                                </select>


                                @error('blood')
                                    <div class="text-red">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="collapsible-city">City</label>
                                <input type="text" id="collapsible-city" class="form-control" placeholder="Jackson"
                                    name="city" />


                                @error('city')
                                    <div class="text-red">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="mt-3">
                                <h3>Your Hobby</h3>
                                <div class="form-check mt-3 form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="Gardening" id="defaultCheck1"
                                        name="hobby[]">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Gardening
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="Singing" id="defaultCheck2"
                                        name="hobby[]">
                                    <label class="form-check-label" for="defaultCheck2">
                                        Singing
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="Dancing" id="defaultCheck3"
                                        name="hobby[]">
                                    <label class="form-check-label" for="defaultCheck3">
                                        Dancing
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="Travelling"
                                        id="disabledCheck1" name="hobby[]">
                                    <label class="form-check-label" for="disabledCheck1">
                                        Travelling
                                    </label>
                                </div>


                            </div>



                            <div class="mb-3">
                                <label class="col-sm-3 col-form-label" for="collapsible-address">Address</label>
                                <div class="col-sm-9">
                                    <textarea name="address" class="form-control" id="collapsible-address" rows="4"
                                        placeholder="1456, Mall Road"></textarea>


                                    @error('address')
                                        <div class="text-red">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>


                            <div class=" mt-3 select2-primary">
                                <label class="form-label" for="multicol-language">Language</label>
                                <select id="multicol-language" class="select2 form-select" multiple name="language[]">
                                    <option value="en" selected>English</option>
                                    <option value="fr" selected>French</option>
                                    <option value="de">German</option>
                                    <option value="pt">Portuguese</option>
                                </select>



                                @error('language')
                                    <div class="text-red">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>


        </form>



    </div>
@endsection
