<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/home', 'HomeController@index')->name('home.index');
    Route::get('/topic/{topic}', 'HomeController@filterByTopic')->name('home.filter');

    /**
     * Register Routes
     */
    Route::get('/', 'RegisterController@show')->name('register.show');
    Route::post('/register', 'RegisterController@register')->name('register.perform');

    /**
     * Login Routes
     */
    Route::get('/login', 'LoginController@show')->name('login.show');
    Route::post('/login', 'LoginController@login')->name('login.perform');

    /**
     * Mailbox
     */
    Route::get('/mail', 'KotakSuratController@fetch')->name('mail.show');
    Route::get('/addmail', 'KotakSuratController@addMailForm')->name('mail.add');
    Route::post('/mail', 'KotakSuratController@postMail')->name('mail.perform');

    // comment functionality
    Route::get('/mail/{user}/{post}', 'HomeController@showDetails');
    Route::post('/comment', 'CommentController@postComment')->name('comment.perform');

    /**
     * Logout Routes
     */
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

    // Kuis
    Route::get('/kuis', function () {
        return view('kuis');
    });

    Route::get('/landing', 'LandingController@index')->name('landing.show');

    Route::get('/aboutUs', function () {
        $user = auth()->user();
        return view('aboutUs', [
            'user' => $user
        ]);
    });

    Route::get('/policyBrief', 'PolicyController@index')->name('policy.show');

    Route::get('/tataCara/{picture}', 'TataCaraController@index')->name('tatacara.show');
});
