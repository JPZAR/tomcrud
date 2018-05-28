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

Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@contact');

Route::post('members/store', 'MemberController@store');
Route::get('members/create', 'MemberController@create');
/*
 * JP Notes: The defined route below is for CRUD pages. This refers to the view page. The part in brackets {} needs to be
 * the singular of my object. The route needs to know that we need to pass in a id via the url hence the {}.
 */
Route::get('members/{member}', 'MemberController@show');
Route::get('members', 'MemberController@index'); //I want to view a list of members at the '/members' url. Because I have @index I'll need to create
//a index page. The @index function is available in the MemberController.php file. I don't need {member} as there isn't any dynamic info