<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Manage\CalendarController;
use App\Http\Livewire\Calendar;
use App\Http\Controllers\Manage\BylawsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();





Route::group(['middleware' => 'role:Admin','namespace' => 'Manage', 'prefix' => 'manage'], function () {

    Route::get('/dashboard', 'MainController@index')->name('dashboard');

    // Student Resources
    Route::resource('/student', 'StudentController')->except('create', 'edit');

    // Go to assign students page for the class
    Route::get('/course/{course}/assign', 'CourseController@assignStudents')->name('course.assign-student');
    // Store the assigned student to the database
    Route::post('/course/{course}/attach', 'CourseController@attachAssignedStudents')->name('course.attach-student');
    // Store the assigned student to the database
    Route::delete('/course/{course}/detach/{student}', 'CourseController@detachAssignedStudent')->name('course.remove.student');
    // Subject Resources
    Route::resource('/course', 'CourseController')->except('create', 'edit');
    // Attach students Attendance records
    Route::post('attendance/attach/{attendance}', 'AttendanceController@attachStudents')->name('attendance.attach');
    // Edit students Attendance records
    Route::put('attendance/attach/{attendance}/update', 'AttendanceController@updateAttendanceData')->name('attendance.student.update');
    // Attendance Resources
    Route::resource('attendance', 'AttendanceController');

    //Calendar

    Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');
    Route::post('/store-event', [CalendarController::class, 'store'])->name('store_event');

    Livewire::component('calendar', Calendar::class);



    //Bylaws
    Route::get('/bylaws', [BylawsController::class, 'index'])->name('bylaws.index');
   
    Route::get('filemanager', [FileManagerController::class, 'index']);


    Route::group(['prefix' => 'laravel-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });



 



    




});
