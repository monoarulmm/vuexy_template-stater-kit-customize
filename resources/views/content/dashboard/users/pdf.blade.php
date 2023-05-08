<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Document</title>



    <style>
        .container {
            margin: auto;
            padding: 0 50px;
        }



        .bold {
            font-weight: bold;
        }

        table {
            border: 1px solid black;
            border-collapse: collapse;
            font-size: 18px;
            width: 100%;
        }

        .text-center {
            text-align: center;
        }

        th {
            border: 1px solid black;
            text-align: left;
            padding: .3rem;
            font-weight: normal;
            text-transform: uppercase;
            font-weight: bold;

        }



        tr {}

        td {
            border: 1px solid black;
            padding: 0.3rem;


        }


        .bn {
            font-family: solaimanlipi;
            font-weight: normal;
        }
    </style>


</head>

<body>



    <div class="container">
        <h1 style="text-align: center;">Student Database Career Sorce BD Dinajpur</h1>
        <h1 style="text-align: center;"> ক্যারিয়ার সোর্স বিডি দিনাজপুর</h1>

        <table class="container">


            <tbody class="table-bordered table">
                <tr>
                    <th colspan="4" class="bold text-center">Personal Information</th>
                </tr>



                <tr>
                    <th>Student's Name</th>
                    <td colspan="2" class="bn">{{ $single->full_name }}
                    </td>
                    <td rowspan="5">
                        <img style="height: 250px; width:300px; padding:10px;"
                            src="{{ '/student-images/' . $single->file }}" alt="image">


                    </td>
                </tr>



                <tr>
                    <th>Father's Name</th>
                    <td colspan="2">
                        {{ $single->father_name }}
                    </td>



                </tr>
                <tr>
                    <th>Mother's Name</th>
                    <td colspan="2">
                        {{ $single->mother_name }}
                    </td>

                </tr>
                <tr>
                    <th>Date Of Birth</th>
                    <td colspan="2"> {{ $single->dob }}</td>

                </tr>
                <tr>
                    <th>Blood Group:</th>
                    <td colspan="2">
                        {{ $single->blood }}
                    </td>

                </tr>

                <tr>
                    <th>Roll:</th>
                    <td>{{ $single->roll }}</td>
                    <th>Student ID</th>
                    <td>{{ $single->student_id }}</td>
                </tr>

                <tr>
                    <th colspan="4" class="bold text-center"></th>
                </tr>


                <tr>
                    <th class=" bold text-center">Hobby</th>
                    <th colspan="2" class="bold text-center"> Gender</th>
                    <th class="bold text-center">Language</th>
                </tr>


                <tr>
                    <td>
                        <input name="gender" class="form-check-input" type="radio" value="male" id="male"
                            {{ $single->gender == 'male' ? 'checked' : '' }} />
                        <label class="form-check-label" for="male">Male</label>


                        <input name="gender" class="form-check-input" type="radio" value="female" id="female"
                            {{ $single->gender == 'female' ? 'checked' : '' }} />
                        <label class="form-check-label" for="female">Female</label>

                    </td>


                    <td colspan="2">


                        <input class="form-check-input" type="checkbox" value="Gardening" id="defaultCheck1"
                            name="hobby[]" {{ in_array('Gardening', $hobbies) ? 'checked' : '' }}>
                        <label class="form-check-label" for="defaultCheck1">
                            Gardening
                        </label>



                        <input class="form-check-input" type="checkbox" value="Singing" id="defaultCheck2"
                            name="hobby[]" {{ in_array('Singing', $hobbies) ? 'checked' : '' }}>
                        <label class="form-check-label" for="defaultCheck2">
                            Singing
                        </label>



                        <input class="form-check-input" type="checkbox" value="Dancing" id="defaultCheck3"
                            name="hobby[]" {{ in_array('Dancing', $hobbies) ? 'checked' : '' }}>
                        <label class="form-check-label" for="defaultCheck3">
                            Dancing
                        </label>



                        <input class="form-check-input" type="checkbox" value="Travelling" id="disabledCheck1"
                            name="hobby[]" {{ in_array('Travelling', $hobbies) ? 'checked' : '' }}>
                        <label class="form-check-label" for="disabledCheck1">
                            Travelling
                        </label>
                    </td>



                    <td>

                        <select id="multicol-language" class="select2 form-select" multiple name="language[]">
                            <option value="en" {{ in_array('en', $languages) ? 'selected' : '' }}>
                                English
                            </option>
                            <option value="fr" {{ in_array('fr', $languages) ? 'selected' : '' }}>
                                French
                            </option>
                            <option value="de" {{ in_array('de', $languages) ? 'selected' : '' }}>
                                German
                            </option>
                            <option value="pt" {{ in_array('pt', $languages) ? 'selected' : '' }}>
                                Portuguese
                            </option>
                        </select>

                    </td>

                </tr>








                <tr>
                    <th colspan="2" class="bold text-center">Present Address</th>
                    <th colspan="2" class="bold text-center">Permanent Address</th>

                </tr>





                <tr>
                    <th>Division:</th>
                    <td>ddddddddddddddddddddddddddddd </td>
                    <th>Division:</th>
                    <td> </td>
                </tr>
                <tr>
                    <th>District:</th>
                    <td> </td>
                    <th>District:</th>
                    <td> </td>
                </tr>
                <tr>
                    <th>Upozilla:</th>
                    <td> </td>
                    <th>Upozilla:</th>
                    <td> </td>
                </tr>
                <tr>
                    <th>City</th>
                    <td>{{ $single->city }} </td>
                    <th>City</th>
                    <td> {{ $single->city }}</td>
                </tr>
                <tr>
                    <th>Post Code:</th>
                    <td></td>
                    <th>Post Code:</th>
                    <td> </td>
                </tr>
                <tr>
                    <th>Address/Village:</th>
                    <td>{{ $single->address }} </td>
                    <th>Address/Village:</th>
                    <td>{{ $single->address }} </td>
                </tr>

    </div>

</body>

</html>
