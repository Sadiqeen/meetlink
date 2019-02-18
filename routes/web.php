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

Route::get('/57qUlE', function () {
    return view('error');
})->name('error');

Route::post('/w3bdC7', 'RoomsController@create_room')->name('create_room');

Route::post('/Ed6fAN', 'RoomsController@enter')->name('enter_room');

Route::post('/pvNo9l', 'RoomsController@receive_message')->name('send_message');

Route::post('/YwR7YE', 'RoomsController@receive_message_mobile')->name('send_message_mobile');

Route::post('/Z8RVjj', 'RoomsController@count_message')->name('count_message');

Route::post('/9pCHAN', 'RoomsController@sent_massage_back')->name('get_massage');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/{room_name}/{user?}','RoomsController@entered')->name('entered');
