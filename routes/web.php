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

/*
Route::get('/', function () {
    return view('welcome');
});
 */

/*
 * Ссылаемся на портфолио как на основную страницу нашего сайта
 */
Route::get('/administrator', 'PortfolioAdminController@index')->middleware('auth');
Route::post('/administrator', 'PortfolioAdminController@update')->middleware('auth');
Route::get('/administrator/messages', 'MessagesController@index')->middleware('auth');
Route::post('/', 'MessagesController@send_message');
Route::get('/', 'PortfolioController@index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/{language}', 'PortfolioController@index');
Route::get('/{language}/projects', 'ProjectsController@index');


