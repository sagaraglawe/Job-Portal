<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('/userskill','UserSkillController');

Route::resource('/usereducation','UserEducationController');

Route::resource('/userexperience','UserExperienceController');

Route::resource('/company','CompanyController');

Route::resource('/employer','EmployerController');

Route::resource('/job','JobController');



Route::get('/jobskill','JobController@skillss');

Route::get('/companydetail/{$id}','CompanyController@detail');

Route::get('/jobsearch','JobController@searching');



