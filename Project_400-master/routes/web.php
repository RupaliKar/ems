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
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/forget', function () {
    return view('forget');
});
Route::get('/check', function () {
    return view('check');
});

/*Admin Section Route*/
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin-profile', function () {
    return view('admin.profile.profile');
});

Route::get('/system-department', function () {
    return view('admin.system.department.index');
});
Route::get('/system-country', function () {
    return view('admin.system.country.index');
});


/*-----Salary Controller Route-----*/
Route::get('/admin-salary','SalaryController@index')->name('salaries');
Route::POST('/admin-salary-insert','SalaryController@store');
Route::POST('/admin-salary-update','SalaryController@update');
Route::POST('/admin-salary-delete','SalaryController@destroy');



Route::get('/admin-add-user', function () {
    return view('admin.user.add_user');
});
Route::get('/admin-user-view', function () {
    return view('admin.user.view_user');
});
Route::get('/admin-edit-user', function () {
    return view('admin.user.edit_user');
});
Route::get('/admin-user-view-user_profile', function () {
    return view('admin.user.view_user_profile');
});
Route::get('/admin-award-index', function () {
    return view('admin.award.index');
});
Route::get('/admin-award-add-awards', function () {
    return view('admin.award.add_awards');
});
Route::get('/admin-leave-types', function () {
    return view('admin.leave.leave_types');
});
Route::get('/admin-leave-view', function () {
    return view('admin.leave.view_leave_applications');
});
Route::get('/admin-task-index', function () {
    return view('admin.task.index');
});
Route::get('/admin-task-add-task', function () {
    return view('admin.task.add_task');
});
Route::get('/admin-notice-index', function () {
    return view('admin.notice.index');
});
Route::get('/admin-notice-add-notice', function () {
    return view('admin.notice.add_notice');
});

Route::get('/manager', function () {
    return view('manager.index');
});



/*Employees Section Route*/
Route::get('/employee', function () {
    return view('employee.index');
});
Route::get('/employee-award-index', function () {
    return view('employee.award.index');
});


/*PDF Generate Section Route*/
Route::get('/certificate', function () {
    return view('certificate_pdf');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
