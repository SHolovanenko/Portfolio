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
Route::get('/', 'PortfolioController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
