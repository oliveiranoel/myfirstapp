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

//Route::get('/', function () {
//
//    $passingData = [
//        'data1',
//        'data2',
//        'data3'
//    ];
//
//    return view('welcome', [
//        'passingData' => $passingData,
//        'requestParam' => request('title'),
//        'notEscapedData' => '<script>alert("Warning!")</script>'
//    ]);
//
//    //return view('welcome')->withPassingData($passingData)->withRequestParam(request('title'));
//
//    return view('welcome')->with([
//        'passingData' => $passingData,
//        'requestParam' => request('title')
//    ]);
//});

Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');

/*
    GET /project (index) - 1
    GET /projects/create (create) - 2
    GET /projects/1 (show) - 3
    POST /projects (store) - 4
    GET /projects/1/edit (edit) - 5
    PATCH/PUT /projects/1 (update) - 6
    DELETE /projects/1 (destroy) - 7
*/
//Route::get('/projects', 'ProjectsController@index'); // 1
//Route::get('/projects/create', 'ProjectsController@create'); // 2
//Route::get('/projects/{project}', 'ProjectsController@show'); // 3
//Route::post('/projects', 'ProjectsController@store'); // 4
//Route::get('/projects/{project}/edit', 'ProjectsController@edit'); // 5
//Route::patch('/projects/{project}', 'ProjectsController@update'); // 6
//Route::delete('/projects/{project}', 'ProjectsController@destroy'); // 7

Route::resource('projects', 'ProjectsController');





