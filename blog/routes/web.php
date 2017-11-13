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

Route::get('/hello',function(){
    return 'New Rout!';
});



Route::get('hello', 'Hello@index');

Route::get('/hello/{name}', 'Hello@show');

Route::get('/Aya', function () {
    return view('Aya');
});

Route::get('/Aya', function () {
    return view('Aya');
});
// Route::post('create', function(){
// 	return "hiiii"
// });

Route::get('/ajax',function(){
   return view('message');
});
Route::post('/getmsg','AjaxController@index');
?>