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
});*/

/*
Route::get('/home', 'HomeController@inex')->name('home');

*/
Route::get('/','HomeController@index');
Route::get('/master/products', 'HomeController@products');
Route::post('/sendemail/send', 'MailController@send');
Route::get('/contact/us', 'HomeController@contect');
Route::get('/aboute/us', 'HomeController@aboute');
Route::get('/master/product/{id}', 'MpicController@productt_mpic');






Auth::routes();
Route::middleware(['auth'])->group(function () {

Route::get('/admin', 'AdminController@admin_banner');
Route::get('/admin/header', 'AdminController@admin_header');
Route::get('/add/banner', 'AdminController@admin_add_banner');
Route::post('/add_banner', 'AdminController@add_banner');
Route::get('/admin/update/banner/{id}', 'AdminController@admin_update_banner');
Route::post('/update/banner/{id}', 'AdminController@update_banner');
Route::get('/delete/banner/{id}', 'AdminController@delete_banner');





Route::get('/my', 'MasterController@admin_master');
Route::get('/add/master', 'MasterController@admin_add_master');
Route::post('/add_master', 'MasterController@add_master');
Route::get('/admin/update/master/{id}', 'MasterController@admin_update_master');
Route::post('/update/master/{id}', 'MasterController@update_master');
Route::get('/delete/master/{id}', 'MasterController@delete_master');





Route::get('/mpic', 'MpicController@admin_mpic');
Route::get('/admin/add/mpic/{id}', 'MpicController@admin_add_mpic');

Route::post('/add_mpic', 'MpicController@add_mpic');
Route::get('/admin/update/mpic/{id}', 'MpicController@admin_update_mpic');
Route::get('/admin/master/product/{id}', 'MpicController@product_mpic');
Route::post('/update/mpic/{id}', 'MpicController@update_mpic');
Route::get('/delete/mpic/{id}', 'MpicController@delete_mpic');


});




