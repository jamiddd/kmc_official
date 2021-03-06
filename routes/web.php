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

use App\ApplicationRequest as AR;
use App\News;

Route::get('/', function () {
    $news = News::all();
    return view('pages.index')->with('news', $news);
});

Route::get('/about', function() {
    return view('pages.about');
});

Route::get('/courses', function() {
    return view('pages.courses');
});

Route::get('/rules', function() {
    return view('pages.rules');
});

Route::get('/gallery', function(){
    return view('pages.gallery');
});

// Route::get('/admission', function(){
//     return view('pages.admission');
// });

Route::get('/something', function(){
    return view('pages.something');
});

Route::get('/fees', function(){
    return view('pages.fees');
});

Route::get('/submitted', function(){
    return view('pages.submitted');
});

Route::get('/auth', function(){
    return view('pages.auth');
});

Auth::routes();

Route::resource('application_requests', 'ApplicationRequestController');
Route::resource('news_posts', 'NewsController');
// Route::get('/apply', ['uses' =>'ApplicationRequestController@create']);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/facilities', function(){
    return view('pages.facilities');
});

Route::get('/getdata/{q}', ['uses' =>'HomeController@mew']);