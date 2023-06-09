@extends('Manage.layouts.app')

@section('content')
    <div class="main-content" id="panel">
    @include('Manage.includes.header')
    <!-- Header -->
        <div class="header " style="background-color: #0d314e">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0"> <a href="{{ route('dashboard') }}">Attendance</a></h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark radius">
                                    <li class="breadcrumb-item"><i class="fas fa-calendar"></i></li>
                                    <li class="breadcrumb-item active">{{ $pageTitle }}</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <button class="btn btn-sm btn-neutral"  data-toggle="modal" data-target="#createAttendance"><i class="fas fa-plus mr-1"> </i> New</button>
                            <a href="{{ route('dashboard') }}" class="btn btn-sm btn-neutral"><i class="fa fa-home" aria-hidden="true"></i> </a>
                            <!-- Create Class Modal -->
                            @include('Manage.pages.Attendance.modals.CreateAttendanceModal')
                            <!--/ Create Class Modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="card radius">
                        <!-- Card header -->
                        <div class="card-header">
                            <h3 class="mb-0">Filter</h3>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <form action="" id="form">
                            <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="Course">Select Club</label>
                                            <select id="course" name="course_filter"  class="form-control radius search">
                                                <option value="">Select Club</option>
                                                @foreach($courses as $course)
                                                    <option value="{{$course->id}}" {{ request()->get('course_filter') == $course->id ? 'selected' : '' }} >{{$course->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-date">Choose Date</label>
                                            <input class="form-control search datepicker" name="date_filter" value="{{ request()->get('date_filter') }}" id="input-date" placeholder="Select date" type="text">
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <!-- Table -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <h3 class="mb-0">{{ $subTitle }}</h3>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table class="table table-hover align-items-center table-flush datatable-buttons">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="number">#</th>
                                    <th scope="col" class="sort" data-sort="course">Club</th>
                                    <th scope="col" class="sort" data-sort="teacher">Admin</th>
                                    <th scope="col" class="sort" data-sort="students">Number of Students</th>
                                    <th scope="col" class="sort" data-sort="date">Date</th>
                                    <th scope="col" class="sort" data-sort="action">Action</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach ($attendances as $attendance)
                                    <tr>
                                        <td class="text-capitalize">
                                            <span class="badge badge-primary text-lg rounded-circle">
                                                {{ $loop->iteration }}
                                            </span>
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $attendance->course->name }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $attendance->teacher->name }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $attendance->students_count }}
                                        </td>
                                        <td>
                                            {{ $attendance->date->format('m, d, Y D') }}
                                        </td>
                                        <td>
                                            <a href="{{ route('attendance.edit', $attendance) }}" class="btn btn-sm bg-yellow-500 text-white m-0 radius" title="edit">
                                                <i class="fas fa-edit" aria-hidden="true"></i>
                                            </a>
                                            <form action="{{ route('attendance.destroy', $attendance) }}" class="d-inline" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-sm bg-red-500 text-white radius" title="delete">
                                                    <i class="fas fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/ Table -->
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(".search").change(function () {
            $('#form').submit();
        });
    </script>
@endpush
