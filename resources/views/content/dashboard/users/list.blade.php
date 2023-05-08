@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Page 2')

@section('content')
    @if (session()->has('destroy-success'))
        <div class="alert alert-success">

            {{ session()->get('destroy-success') }}

        </div>
    @endif

    <h4>Student Records</h4>

    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <table class="datatables-basic table">
                <thead>
                    <tr>

                        <th>Profile_Image</th>
                        <th>Name</th>
                        <th>Student_ID</th>
                        <th>Roll</th>
                        <th>Semester</th>
                        <th>Department</th>
                        <th>emial</th>
                        <th>Download</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list as $single)
                        <tr>

                            <td>
                                <div class="avatar-wrapper">

                                    {{-- <span class="avatar-initial bg-label-secondary">GG</span> --}}
                                    <img class="avatar me-2 rounded-circle" src="{{ '/student-images/' . $single->file }}"
                                        alt="ima">

                                </div>
                            </td>
                            <td>
                                <a href="{{ route('single', $single->id) }}">{{ $single->full_name }}</a>


                            </td>
                            <td>{{ $single->student_id }}</td>
                            <td>{{ $single->roll }}</td>
                            <td>{{ $single->semester }}</td>
                            <td>{{ $single->departmant }}</td>
                            <td>{{ $single->email }}</td>

                            <td> <a class="btn btn-secondary" href="{{ url('print_pdf', $single->id) }}">Print PDF</a></td>
                            <td>

                                <form action="{{ route('destroy', $single->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input class="btn btn-denger" type="submit" value="Delete">
                                </form>

                            </td>



                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    <!--/ DataTable with Buttons -->
@endsection
