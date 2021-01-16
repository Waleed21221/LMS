<?php

use Illuminate\Support\Facades\Route;

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
    return view('admin');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/user', 'HomeController@index')->name('home');
Route::get('/faculty', 'FacultyController@index')->name('faculty');
Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('pagination',[DegreeController::class, 'index']);
Route::get('get_ajax_data',[DegreeController::class, 'get_ajax_data']);

//Resource Routes
Route::resource('crud','CrudController');
Route::resource('degrees', 'DegreeController');
Route::resource('campuses', 'CampusController');
Route::resource('courses', 'CourseController');
Route::resource('teachers', 'TeacherController');
Route::resource('students', 'StudentController')->middleware('role:superadministrator');

//Campus Routes
Route::get('/campus', 'CampusController@index')->name('campus');
Route::post('/campus/create', 'CampusController@store')->name('campus');
Route::delete('/campus/{$id}','CampusController@destroy');

//Course Routes
Route::get('/course', 'CourseController@index')->name('course');
Route::post('/course/create', 'CourseController@store')->name('course');
Route::delete('/course/{$id}','CourseController@destroy');

//Degree Routes
Route::get('/degree', 'DegreeController@index')->name('degree');
Route::post('/degree/create', 'DegreeController@store')->name('degree');
Route::delete('/degree/{$id}','DegreeController@destroy');

//Faculty Routes
Route::get('/teacher', 'TeacherController@index')->name('teacher');
Route::post('/teacher/create', 'TeacherController@store');
Route::delete('/teacher/{$id}','TeacherController@destroy');

//Student Routes
Route::get('/student', 'StudentController@index')->name('student')->middleware('role:superadministrator');
Route::post('/student/create', 'StudentController@store')->name('student')->middleware('role:superadministrator');
Route::delete('/student/{$id}','StudentController@destroy')->middleware('role:superadministrator');


Route::get('/Newdashoard', function() {
    return view('Newdashoard');
});


Route::get('/create', function() {
    return view('teacher.create');
});

Route::get('/createsemester', function() {
    return view('createsemester');
});
Route::get('/semester', function() {
    return view('semester');
});

Route::patch('degrees/{degree}/update',  ['as' => 'degree', 'uses' => 'DegreeController@update']);

Route::get('/table', function() {
    return view('table');
});

Route::get('/create', function() {
    return view('create');
});

Route::get('/csv_campus', function () {
    return view('csv_campus');
});
Route::get('/csv_course', function () {
    return view('csv_course');
});
Route::get('/csv_degree', function () {
    return view('csv_degree');
});
Route::get('/csv_faculty', function () {
    return view('csv_faculty');
});
Route::get('/user_csv', function () {
    return view('user_csv');
});

//Import Routes
Route::post('degree', [App\Http\Controllers\ImportController::class, 'degree'])->name('degree');
Route::post('campus', [App\Http\Controllers\ImportController::class, 'campus'])->name('campus');
Route::post('course', [App\Http\Controllers\ImportController::class, 'course'])->name('course');
Route::post('teacher', [App\Http\Controllers\ImportController::class, 'faculty'])->name('faculty');
Route::post('student', [App\Http\Controllers\ImportController::class, 'student'])->name('student')->middleware('role:superadministrator');
// Route::post('user_csv', [App\Http\Controllers\ImportController::class, 'csv'])->name('user_csv');





