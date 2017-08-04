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

Route::get('/register', function () {
    return view('create');
});

Route::get('/login', function () {
    return view('login');
});

  Route::post('/user/posts', 'Register\RegistrationController@store');
	
  Route::get('/users/{user}', 'Register\RegistrationController@show');

  Route::post('/user/login', 'Register\EmployeeLoginController@doLogin');


Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace' => 'Admin'
], function() {
    // your CRUD resources and other admin routes here
    CRUD::resource('tag', 'TagCrudController');
    CRUD::resource('interviewer', 'InterviewerCrudController');
    CRUD::resource('employee', 'EmployeeCrudController');

});