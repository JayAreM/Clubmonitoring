@extends('Manage.layouts.app')

@section('content')


    <div class="main-content" id="panel">
  
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">


    @include('Manage.includes.header')
    <head>
    @livewireStyles
    </head>

    <div class="header " style="background-color: #0d314e">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0"><a
                                    href="{{ route('dashboard') }}">Attendance</a></h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark radius">
                                    <li class="breadcrumb-item"><i class="fas fa-calendar-edit"></i></li>
                                    <li class="breadcrumb-item active">{{ 'Calendar' }}</li>
                                </ol>
                            </nav>
                        </div>
                        <a href="{{ route('dashboard') }}" class="btn btn-sm btn-neutral" style="margin-left:45%"><i class="fa fa-home" aria-hidden="true" ></i>
                            </a>
                    
                    </div>
                </div>
            </div>
    </div>

    <body>
    <livewire:calendar />
    @livewireScripts
    @stack('scripts')



    </body>
    


<style>


</style>


@endsection
@push('scripts')

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js'></script>
    
   
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css' rel='stylesheet' />
@endpush
