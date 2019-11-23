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

Route::get('/index', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



    Route::group(['middleware' => ['auth','approved']], function () {

        Route::get('/adminDashboard', 'admin\AdminController@view');
        Route::put('/profileApprove/{id}','admin\AdminController@profileApprove');

    });
    Route::group(['middleware' => ['auth','teacher']], function () {
    
        route::get('/teacherPortel', function(){
            return view('teacher.teacher');
        });
        
    });
        
    // });
    Route::group(['middleware' => ['auth','student']], function () {
    
    
        route::get('/studentPortel',function(){
            return view('student.student');
        });
        
    });
    
