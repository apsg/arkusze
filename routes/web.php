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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('tests', 'TestsController@index')->name('tests');
Route::get('tests/data', 'TestsController@getData');
Route::get('tests/create', 'TestsController@create')->name('tests.create');
Route::post('tests', 'TestsController@store')->name('tests.store');
Route::get('tests/{test}', 'TestsController@show')->name('tests.show');
Route::get('tests/{test}/finish', 'TestsController@finish')->name('tests.finish');
Route::get('tests/{test}/result', 'TestsController@result')->name('tests.result');
Route::get('tests/{test}/print', 'TestsController@getPdf')->name('tests.print');
Route::delete('tests/{test}', 'TestsController@delete');

Route::patch('answers/{answer}', 'AnswersController@patch');