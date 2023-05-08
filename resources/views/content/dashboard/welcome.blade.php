{{-- @extends('layouts/detachedLayoutMaster')

@section('title', 'Prodigy Dashboard')

@section('vendor-style')
   <!-- vendor css files -->

@endsection

@section('page-style')

@endsection

@section('content')

   <section id="dashboard-analytics">
      <div class="row">
         <!-- Greetings Card starts -->
         <div class="col-12">
            <div class="card card-congratulations">
               <div class="card-body text-center">
                  <img src="{{ asset('images/elements/decore-left.png') }}" class="congratulations-img-left" alt="card-img-left" />
                  <img src="{{ asset('images/elements/decore-right.png') }}" class="congratulations-img-right" alt="card-img-right" />
                  <div class="avatar avatar-xl bg-primary shadow">
                     <div class="avatar-content">
                        <img class="round" style="object-fit: cover;"
                           src="{{ Auth::user()->profile_photo_url ? Auth::user()->profile_photo_url : asset('images/portrait/small/avatar-s-11.jpg') }}"
                           height="30" width="30" alt="avatar">
                     </div>
                  </div>
                  <div class="text-center">
                     <h1 class="mb-1 text-white">Welcome Back, {{ ucfirst(Auth::user()->name) }}</h1>
                     <p class="card-text w-75 m-auto">
                        I hope you're doing well today. I'm sure you've been busy. Let's get started with some quick stats.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <!-- Greetings Card ends -->
      </div>
   </section>

@endsection

@section('vendor-script')
   <!-- vendor files -->
@endsection

@section('page-script')
   <!-- Page js files -->
@endsection --}}


<html lang="bn">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">


    <style>
        @page {
            margin: 2rem;
        }

        .bold {
            font-weight: bold;
        }

        table {
            border: 1px solid black;
            border-collapse: collapse;
            font-size: 18px;
            width: 70%;
        }

        .text-center {
            text-align: center;
        }

        th {
            border: 1px solid black;
            text-align: left;
            padding: .3rem;
            width: 40%;
            font-weight: normal;
            text-transform: uppercase;
        }



        tr {}

        td {
            border: 1px solid black;
            padding: 0.3rem;
            text-transform: uppercase;
            width: 60%;
        }


        .bn {
            font-family: solaimanlipi;
            font-weight: normal;
        }

        .my-2 {
            margin: 2rem 0;
        }

        .table-borderless {
            border: none;
        }

        .table-borderless td,
        .table-borderless th,
        .table-borderless tr {
            border: none;
        }

        .page-break {
            page-break-after: always;
        }

        #header {
            margin: .2rem;
        }
    </style>


</head>

<body>


    <div class="container-lg">
        <div class="row" id="table-responsive" style="margin: 0 auto">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-uppercase mb-0 text-center">Student Database - Textile Institute
                            Dinajpur</h2>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table-bordered table">
                        <tr>
                            <th colspan="4" class="bold text-center">Personal Information</th>
                        </tr>
                        <tr>
                            <th class="w-25 bn">Student's Name (Bengali)</th>
                            <td colspan="2" class="bn">
                            </td>
                            <td rowspan="5">
                                <img src="{{ public_path('/student-images' . $applicant->formal_image_path) }}"
                                    alt="" class="w-100" width="200" height="200" style="margin: 0 3rem">
                            </td>
                        </tr>
                        <tr>
                            <th class="w-25">Student's Name (English):</th>
                            <td colspan="2"></td>

                        </tr>
                        <tr>
                            <th class="w-25">Birth Certificate Number:</th>
                            <td colspan="2">
                            </td>

                        </tr>
                        <tr>
                            <th class="w-25">Birth Date:</th>
                            <td colspan="2"></td>

                        </tr>
                        <tr>
                            <th class="w-25">Blood Group:</th>
                            <td colspan="2"></td>

                        </tr>
                        <tr>
                            <th class="w-25">Mobile Number:</th>
                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <th class="w-25">Gender:</th>
                            <td></td>
                            <th class="w-25">Marital Status:</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="w-25">Father's Name (Bengali):</th>
                            <td class="bn"></td>
                            <th class="w-25">Mother's Name (Bengali):</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="w-25">Father's Name (English):</th>
                            <td></td>
                            <th class="w-25">Mother's Name (English):</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="w-25">Father's NID:</th>
                            <td></td>
                            <th class="w-25">Mother's NID:</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="w-25">Father's Birth Date:</th>
                            <td></td>
                            <th class="w-25">Mother's Birth Date:</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="w-25">Father's Mobile Number:</th>
                            <td></td>
                            <th class="w-25">Mother's Mobile Number:</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th colspan="2" class="bold text-center">Permanent Address</th>
                            <th colspan="2" class="bold text-center">Present Address</th>
                        </tr>
                        <tr>
                            <th class="w-25">Division:</th>
                            <td> </td>
                            <th class="w-25">Division:</th>
                            <td> </td>
                        </tr>
                        <tr>
                            <th class="w-25">District:</th>
                            <td> </td>
                            <th class="w-25">District:</th>
                            <td> </td>
                        </tr>
                        <tr>
                            <th class="w-25">Sub District/Upozilla:</th>
                            <td> </td>
                            <th class="w-25">Sub District/Upozilla:</th>
                            <td> </td>
                        </tr>
                        <tr>
                            <th class="w-25">Municipality/Union/City Corp.:</th>
                            <td> </td>
                            <th class="w-25">Municipality/Union/City Corp.:</th>
                            <td> </td>
                        </tr>
                        <tr>
                            <th class="w-25">Post Code:</th>
                            <td></td>
                            <th class="w-25">Post Code:</th>
                            <td> </td>
                        </tr>
                        <tr>
                            <th class="w-25">Address/Village:</th>
                            <td> </td>
                            <th class="w-25">Address/Village:</th>
                            <td> </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="bold text-center">Previous Educational Information</th>
                            <th colspan="2" class="bold text-center">Present Educational Information</th>
                        </tr>
                        <tr>
                            <th class="w-25">Division:</th>
                            <td> </td>
                            <th class="w-25">Division:</th>
                            <td> </td>
                        </tr>
                        <tr>
                            <th class="w-25">District:</th>
                            <td></td>
                            <th class="w-25">District:</th>
                            <td> </td>
                        </tr>
                        <tr>
                            <th class="w-25">Sub District/Upozilla:</th>
                            <td> </td>
                            <th class="w-25">Sub District/Upozilla:</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="w-25">Institute Name:</th>
                            <td> </td>
                            <th class="w-25">Institute Name:</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="w-25">Passing Year:</th>
                            <td></td>
                            <th class="w-25">Semester:</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="w-25">Board:</th>
                            <td> </td>
                            <th class="w-25">Technology/Trade:</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="w-25">Technology/Trade:</th>
                            <td> </td>
                            <th class="w-25">Shift:</th>
                            <td> </td>
                        </tr>
                        <tr>
                            <th class="w-25">Previous Exam Name:</th>
                            <td></td>
                            <th class="w-25">Roll:</th>
                            <td> </td>
                        </tr>
                        <tr>
                            <th class="w-25">Roll:</th>
                            <td></td>
                            <th class="w-25">Reg:</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="w-25">Result (GPA):</th>
                            <td> </td>
                            <th class="w-25">Group:</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="w-25">Attendance Rate:</th>
                            <td>
                            </td>
                            <th class="w-25"></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th colspan="2" class="bold text-center">Guardian's Information</th>
                            <th colspan="2" class="bold text-center">Eligibility Conditions and Attachment</th>
                        </tr>
                        <tr>
                            <th class="w-25">Relation:</th>
                            <td>
                            </td>
                            <th class="w-25">Cost Borne By:</th>
                            <td> </td>
                        </tr>
                        <tr>
                            <th class="w-25">Guardian Name (Bengali):</th>
                            <td>
                            </td>
                            <th class="w-25">Belongs to minority/ethnic groups:</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="w-25">Guardian Name (English):</th>
                            <td>
                            </td>
                            <th class="w-25">Freefom Fighter Quota:</th>
                            <td> </td>
                        </tr>
                        <tr>
                            <th class="w-25">Guardian's NID:</th>
                            <td> </td>
                            <th class="w-25">Any Other Scholarships:</th>
                            <td> </td>
                        </tr>
                        <tr>
                            <th class="w-25">Guardian's Birth Date:</th>
                            <td>
                            </td>
                            <th class="w-25">Any Disabilities:</th>
                            <td> </td>
                        </tr>
                        <tr>
                            <th class="w-25">Guardian's Mobile:</th>
                            <td>
                            </td>
                            <th class="w-25"></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th colspan="4" class="bold text-center">Payment Information</th>
                        </tr>
                        <tr>
                            <th class="w-25">Payment Method:</th>
                            <td colspan="3">

                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="w-50 bold text-center">Banking</th>
                            <th colspan="2" class="w-50 bold text-center">Mobile Banking</th>
                        </tr>

                        <tr>
                            <th class="w-25">Bank Name:</th>
                            <td></td>
                            <th class="w-25">Mobile Banking Service Provider:</th>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-25">Branch Name:</th>
                            <td></td>
                            <th class="w-25">Mobile Banking Account Number:</th>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <th class="w-25">Bank Routing Number:</th>
                            <td>
                            </td>
                            <th class="w-25"></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="w-25">Account Type:</th>
                            <td>
                            </td>
                            <th class="w-25"></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="w-25">Account Holder Name:</th>
                            <td>
                            </td>
                            <th class="w-25"></th>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="w-25">Account Number:</th>
                            <td>
                            </td>
                            <th class="w-25"></th>
                            <td></td>
                        </tr>
                    </table>
                </div>

                <table class="table-borderless my-2 table">
                    <tr class="mx-auto">
                        <td class="text-center">
                            <img src="{{ public_path('/student-images/signature-images/' . $applicant->signature_image_path) }}"
                                alt="" class="w-100" width="200" height="200" style="margin: 0 3rem">
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="mx-auto">
                        <td class="font-small-2 text-center">Applicant's Signature</td>
                        <td class="font-small-2 text-center">Signature of acceptor</td>
                        <td class="font-small-2 text-center">Signature and seal of the head of the institution</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
