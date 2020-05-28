<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace'=>'Api'], function () {
    Route::post('leave','LeaveController@store');
    Route::get('leave','LeaveController@index');
    Route::get('leave/{id}','LeaveController@show');
    Route::delete('leave/{id}','LeaveController@destroy');
    Route::get('leave/history','LeaveController@leave_history');
    Route::get('leave_approve/{id}','LeaveController@approve');
    Route::get('leave_decline/{id}','LeaveController@decline');

    Route::get('employe','EmployeeController@index');
    Route::post('employe','EmployeeController@store');
    Route::get('employe/{id}','EmployeeController@show');
    Route::put('employe/{id}','EmployeeController@update');
    Route::delete('employe/{id}','EmployeeController@destroy');

    // account
    Route::get('account','AccountController@index');
    Route::post('account','AccountController@store');
    Route::get('account/{id}','AccountController@show');
    Route::delete('account/{id}','AccountController@destroy');

    Route::post('conveyance_request','ConveyanceController@store');
    Route::get('convryance','ConveyanceController@index');
    Route::get('convryance_approve/{id}','ConveyanceController@approve');
    Route::get('convryance_decline/{id}','ConveyanceController@decline');
    Route::delete('convryance/{id}','ConveyanceController@destroy');
    Route::get('convryance_history','ConveyanceController@conveyance_history');

    Route::get('phonebook','PhoneBookController@index');
    Route::post('jobapplication','JobApplicationController@postApplication');
    Route::post('attendance','AttendanceController@inTimeAttendance');
    Route::put('attendance/{id}','AttendanceController@outTimeAttendance');

    //departent

    Route::get('department','DepartmentController@index');
    Route::post('department','DepartmentController@store');
    Route::get('department/{id}','DepartmentController@show');
    Route::put('department/{id}','DepartmentController@update');
    Route::delete('department/{id}','DepartmentController@destroy');

    //designation
    Route::get('designation','DesignationController@index');
    Route::post('designation','DesignationController@store');
    Route::get('designation/{id}','DesignationController@show');
    Route::put('designation/{id}','DesignationController@update');
    Route::delete('designation/{id}','DesignationController@destroy');

    //supervison

    Route::get('supervisor','SupervisorController@index');
    Route::post('supervisor','SupervisorController@store');
    Route::get('supervisor/{id}','SupervisorController@show');
    Route::put('supervisor/{id}','SupervisorController@update');
    Route::delete('supervisor/{id}','SupervisorController@destroy');

    //projectcontroller
    Route::get('project','ProjectController@index');
    Route::post('project','ProjectController@store');
    Route::get('project/{id}','ProjectController@show');
    Route::put('project/{id}','ProjectController@update');
    Route::delete('project/{id}','ProjectController@destroy');

    //Notice Controller

    Route::get('notice','NoticeController@index');
    Route::post('notice','NoticeController@store');
    Route::get('notice/{id}','NoticeController@show');
    Route::put('notice/{id}','NoticeController@update');
    Route::delete('notice/{id}','NoticeController@destroy');

    //job controller
    Route::get('jobcategory','JobController@jobCategories');
    Route::post('jobcategory','JobController@storeJobCategories');
    Route::delete('jobcategory/{id}','JobController@deleteJobCategories');

    Route::get('skils','JobController@skills');
    Route::post('skils','JobController@storeSkills');
    Route::delete('skils/{id}','JobController@deleteSkills');

    Route::get('joblocation','JobController@jobLocation');
    Route::post('joblocation','JobController@storeJobLocation');
    Route::delete('joblocation/{id}','JobController@deleteJobLocation');

    Route::get('jobs','JobController@jobs');
    Route::get('jobs/{id}','JobController@jobShow');
    Route::post('jobs','JobController@storeJobs');
    Route::delete('jobs/{id}','JobController@deleteJobs');

    // careerController
    Route::get('carer_apply','CareerController@apply');
    Route::get('career/{id}','CareerController@show');
    Route::post('career','CareerController@store');

    //company

    Route::get('company','CompanyController@index');
    Route::get('company/{id}','CompanyController@show');
    Route::post('company','CompanyController@store');
    Route::delete('company/{id}','CompanyController@destroy');


    //user Group


    Route::get('usergroup','UserGroupController@index');
    Route::get('usergroup/{id}','UserGroupController@show');
    Route::post('usergroup','UserGroupController@store');
    Route::delete('usergroup/{id}','UserGroupController@destroy');


    // auth api

        Route::group(['middleware' => ['guest:api'],'prefix' => 'auth'], function () {
            Route::post('login', 'AuthController@login');
            Route::post('signup', 'AuthController@signup');
        });
        Route::group(['middleware' => 'auth:api'], function() {
            Route::get('logout', 'AuthController@logout');
            Route::get('user', 'AuthController@getUser');

        });

});

