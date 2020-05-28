<?php

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



Auth::routes();

Route::resource('user-groups','UserGroupController');
Route::resource('employee','EmployeeController');
Route::resource('supervisor','SupervisorController');
Route::resource('department','DepartmentController');
Route::resource('designation','DesignationController');
Route::resource('project','ProjectController');
//leave
Route::resource('leave','LeaveController');
Route::get('leave_history','LeaveController@leave_history')->name('leave_history');
Route::get('approve_leave/{id}', 'LeaveController@approve')->name('leave.approve');
Route::get('decline_leave/{id}', 'LeaveController@decline')->name('decline_leave');

Route::resource('accounts','AccountController');
Route::get('/home', 'HomeController@index')->name('home');


// Job

// job category
Route::get('jobcategories','JobController@jobCategories')->name('jobCategories');
Route::get('creatrejobcategories','JobController@createJobCategories')->name('createJobCategories');
Route::post('storejobcategories','JobController@storeJobCategories')->name('storeJobCategories');
Route::delete('jobcategories/{id}','JobController@deleteJobCategories')->name('deleteJobCategories');

// skill

Route::get('skills','JobController@skills')->name('skills.index');
Route::get('createskills','JobController@createSkills')->name('skills.create');
Route::post('storeskills','JobController@storeSkills')->name('skills.store');
Route::delete('skills/{id}','JobController@deleteSkills')->name('skills.delete');

//company
Route::resource('companies','CompanyController');


// job location
Route::get('joblocation','JobController@jobLocation')->name('joblocation.index');
Route::get('creatrejoblocation','JobController@createJobLocation')->name('joblocation.create');
Route::post('storejoblocation','JobController@storeJobLocation')->name('joblocation.store');
Route::delete('joblocation/{id}','JobController@deleteJobLocation')->name('joblocation.delete');

// jobs
Route::get('jobs','JobController@jobs')->name('jobs.index');
Route::get('creatrejobs','JobController@createJobs')->name('jobs.create');
Route::post('storejobs','JobController@storeJobs')->name('jobs.store');
Route::delete('jobs/{id}','JobController@deleteJobs')->name('jobs.delete');
Route::get('jobs/{id}','JobController@jobShow')->name('jobs.show');


// Job Application jobapplication.show
Route::get('jobapplication','JobApplicationController@index')->name('jobapplication.index');
Route::get('jobapplication/{id}','JobApplicationController@show')->name('jobapplication.show');
Route::delete('jobapplication/{id}','JobApplicationController@destroy')->name('jobapplication.delete');
Route::get('jobapplication_board','JobApplicationController@board')->name('jobapplication.board');
//notice
Route::resource('notice','NoticeController');

//conveyance
Route::resource('conveyance','ConveyanceController');
Route::get('conveyance_history','ConveyanceController@conveyance_history')->name('conveyance_history');
Route::get('approve_conveyance/{id}', 'ConveyanceController@approve')->name('conveyance.approve');
Route::get('decline_conveyance/{id}', 'ConveyanceController@decline')->name('decline_conveyance');

//career
Route::get('career','CareerController@index')->name('career.index');
Route::get('career/{id}','CareerController@show')->name('career.show');
Route::get('career_apply','CareerController@apply')->name('career.apply');
Route::post('career','CareerController@store')->name('career.store');


//calendar
Route::get('calendar','CalendarController@index')->name('calendar.index');
Route::get('calendar_business','CalendarController@business')->name('calendar.business');
Route::get('calendar_meeting','CalendarController@meeting')->name('calendar.meeting');
Route::get('calendar_birthday','CalendarController@birthday')->name('calendar.birthday');
Route::get('calendar_project','CalendarController@project')->name('calendar.project');
// web api

Route::get('get-department',function(){
    return App\Department::all();
});
Route::get('get-designation',function(){
    return App\Designation::all();
});

Route::get('get-employee',function(){
    return App\Employee::all();
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
     Artisan::call('route:clear');
    return "Cache is cleared";
});