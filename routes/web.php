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

/*
 * The defined route below is for CRUD pages. This refers to the view page. The part in brackets {} needs to be
 * the singular of my object. The route needs to know that we need to pass in a id via the url hence the {}.
 */
Route::get('members/{member}', 'MemberController@show');