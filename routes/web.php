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
        Route::get('/userProfiles', 'admin\AdminController@userProfiles');
        Route::put('/profileApprove/{id}','admin\AdminController@profileApprove');
        
        Route::get('/updateAdminProfile', 'admin\AdminController@updateAdminProfile');
        Route::put('/updating/{id}','admin\AdminController@updating');
    });
    Route::group(['middleware' => ['auth','teacher']], function () {
        
        Route::get('/teacherPortel', 'teacher\TeacherController@view');
        Route::get('/teacherPortel/newUpload','teacher\TeacherController@NewUpload');
        Route::get('/teacherPortel/ShowDetails','teacher\TeacherController@ShowDetails');
        Route::post('/saveFileDetails', 'teacher\TeacherController@saveFileDetails');
        
        Route::get('/teacherPortel/SubmitedDetails','teacher\TeacherController@SubmitedDetails');

    });
        
    // });
    Route::group(['middleware' => ['auth','student']], function () {
        
        route::get('/studentPortel','student\StudentController@view');
        route::get('/studentPortel/assigmentsList', 'student\StudentController@assigmentsList');
        route::get('/studentPortel/uploadAnswer/{id}', 'student\StudentController@uploadAnswer');
        route::post('/SubmitAnswer', 'student\StudentController@SubmitAnswer');
        
    });
    
