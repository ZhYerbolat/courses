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
    return view('home');
});

Route::get('/add-teacher', function () {
    return view('admin.add-teacher');
});

Route::get('/add-courses', function () {
    return view('admin.add-courses');
});

Route::get('/index', function () {
    return view('admin.index');
});

Route::get('/query', function () {
    return view('admin.query');
});


Route::get('/calendar', function () {
    return view('admin.calendar');
});


Route::get('/rating', function () {
    return view('admin.rating');
});

Route::get('/teacher-page', function () {
    return view('admin.teacher-page');
});

Route::get('/teachers', function () {
    return view('admin.teachers');
});

Route::get('/test', function () {
    return view('admin.test');
});

Route::get('/student-contact', function () {
    return view('contact');
});


Route::get('/online-test', function () {
    return view('online-test');
});

Route::get('/online-test2', function () {
    return view('online-test2');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profile2', function () {
    return view('profile2');
});


Route::get('/student-quiz', function () {
    return view('quiz');
});


Route::get('/student-quiz2', function () {
    return view('quiz2');
});


Route::get('/student-courses', function () {
    return view('student-courses');
});


Auth::routes();

Route::group(['middleware' => ['role:admin'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.index');
});


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
