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

Route::get('/contact', function () {
    return ('welcome to contact');
});
Route::get('view/', function (){
//    return view();
    return "view WOKRS";
});

//Route::get('/profile', function () {
//    return ('welcome to profile');
//});

//Route::get('/profile/{id?}', function ($id =0) {
//    return ('welcome to profile'.$id);
//});
//Route::match(['get','post'],'/profile/{id?}', function ($id =0) {
//    return ('welcome to profile'.$id);
//});
//
//Route::get('profile/{id}', function ($id) {
//    return ('welcome to profile'.$id);
//})->where('id', '[0-9]+')->name('profile');

Route::prefix('profile')->group(function () {

//    Route::get('test1', function () {
//        return ('welcome to profile');
//    });

//    Route::get('test1','ProfileController@showPrifile' );
    
    Route::get('','ProfileController@profile' );
    Route::get('test1/{id}','ProfileController@showPrifile' );


});
