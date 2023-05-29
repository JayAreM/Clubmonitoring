@extends('Manage.layouts.app')

@section('content')
    <div class="main-content" id="panel">
        @include('Manage.includes.header')
        <!-- Header -->
        <div class="header" style="background-color: #0d314e">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0"><a
                                    href="{{ route('dashboard') }}">Attendance</a></h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark radius">
                                    <li class="breadcrumb-item"><i class="fas fa-book-open"></i></li>
                                    <li class="breadcrumb-item active">{{ 'Clubs' }}</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <button class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#createCourse"><i
                                    class="fas fa-plus mr-1"> </i> New
                            </button>
                            <a href="{{ route('dashboard') }}" class="btn btn-sm btn-neutral"><i class="fa fa-home"
                                                                                                 aria-hidden="true"></i>
                            </a>
                            <!-- Create Class Modal -->
                            @include('Manage.pages.Course.modals.CreateCourseModal')
                            <!--/ Create Class Modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-12">
                    <!-- Table -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <h3 class="mb-0">{{ 'All Clubs' }}</h3>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table class="table table-hover align-items-center table-flush datatable-buttons" id="sortTable">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Name</th>
                                    <th scope="col" class="sort" data-sort="teacher">Club Details</th>
                                    <th scope="col" class="sort" data-sort="students">Number of Students</th>
                                    <th scope="col" class="sort" data-sort="action">Action</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach ($courses as $course)
                                    <tr>
                                        <td class="text-capitalize">
                                            {{ $course->name }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ Str::limit($course->description, 30, "...") }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $course->students_count }}
                                        </td>
                                        <td>
                                            <button data-toggle="modal" data-target="#updateCourse-{{ $course->id }}"
                                                    class="btn btn-sm bg-green-500 text-white m-0 radius" title="edit">
                                                <i class="fas fa-edit" aria-hidden="true"></i>
                                            </button>
                                            <!-- Update Class Modal -->
                                            @include('Manage.pages.Course.modals.UpdateCourseModal', ['course' => $course])
                                            <!--/ Update Class Modal -->
                                            <a href="{{ route('course.show', $course) }}"
                                               class="btn btn-sm bg-blue-500 text-white m-0 radius" title="edit">
                                                <i class="fas fa-eye" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ route('course.assign-student', $course) }}"
                                               class="btn btn-sm bg-yellow-500 text-white m-0 radius"
                                               title="Assign Students">
                                                <i class="fas fa-users-class" aria-hidden="true"></i>
                                            </a>
                                            <form action="{{ route('course.destroy', $course) }}" class="d-inline"
                                                  method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    onclick="return confirm('Are you sure? this action will remove all assigned students too')"
                                                    type="submit" class="btn btn-sm bg-red-500 text-white radius"
                                                    title="delete">
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


@endpush
