@extends('Manage.layouts.app')

@section('content')
    <div class="main-content" id="panel">
        @include('Manage.includes.header')
        <!-- Header -->
        <div class="header pb-6" style="background-color: #0d314e">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">Attendance</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark radius">
                                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item active">{{ $pageTitle }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Card stats -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card card-stats radius shadow-2xl">
                                <!-- Card body -->
                                <div class="card-body radius shadow-2xl">
                                    <div class="row">
                                        <div class="col">
                                            <a href="">
                                                <h2 class="card-title text-uppercase text-muted mb-0">Students Total Number</h2>
                                                <span class="h4 font-weight-bold mb-0">{{ $students_count }}</span>
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                            <div
                                                class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                                                <i class="fas fa-users-class"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card card-stats radius shadow-2xl">
                                <!-- Card body -->
                                <div class="card-body radius shadow-2xl">
                                    <div class="row">
                                        <div class="col">
                                            <a href="">
                                                <h2 class="card-title text-uppercase text-muted mb-0">Club Total Number</h2>
                                                <span class="h4 font-weight-bold mb-0">{{ count($courses) }}</span>
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                                                <i class="fa fa-book-open" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Header -->
        <div class="container-fluid mt--6 ">
            <div class="row">
                <div class="col col-lg-12">
                    <div class="card radius shadow-2xl">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Take Attendance</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="fas fa-calendar-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body radius shadow-2xl">
                            <form method="post" action="{{ route('attendance.store') }}">
                                @csrf
                                <h6 class="heading-small text-muted mb-4">Attendance information</h6>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="subject">Select Club*</label>
                                            <select id="course" name="course_id"  class="form-control radius">
                                                <option value="">Select Club</option>
                                                @foreach($courses as $course)
                                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('$course_id')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-date">Choose Date*</label>
                                            <input class="form-control datepicker  @error('date') is-invalid @enderror " name="date" id="input-date" placeholder="Select date" type="text" >
                                            @error('date')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <button type="submit" class="btn btn-lg btn-block radius" style="background-color: #252e40; color: white;">Start Attendance</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Page Content -->
 <!--   <iframe src="{{ asset('pdfs/HCDC-Computer-Engineering-Act-of-2019-CpE-Act-1001UPDATED-A.Y.-2022-2023-1.pdf') }}" width="85%" height="600px" style="margin-left: 15%"></iframe>
    -->

@endsection

