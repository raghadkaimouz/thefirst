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



/*Route::group(['namespace'=>'Admin'],function ()
{   Route::get('second','second@showsecond');
    Route::get('first','second@showsecond1');
    Route::get('ss','second@showsecond2');
    Route::get('third','second@showsecond3');}
);
Route::get('login',function (){
    return "login ";

})-> name('login');*/

//Route::resource('news','NN');
Route::get('landing',function (){

    return view('landing');
});

Route::get('about',function (){

    return view('about');
});





Auth::routes(['verify'=> true]);

Route::get('/home', 'HomeController@index')->name('home') -> middleware('verified');




