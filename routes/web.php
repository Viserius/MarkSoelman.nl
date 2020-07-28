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

Route::get('/', 'Home\HomeController@index')->name('home.index');
Route::get('/resume', 'Resume\ResumeController@index')->name('resume.index');
Route::get('/letter', 'Resume\ResumeController@indexLetter')->name('resume.indexletter');
Route::get('/resume/nl', 'Resume\ResumeController@indexnl')->name('resume.indexnl');