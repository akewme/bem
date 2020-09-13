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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/instagram/{username}', function ($username) {

    $instagram = new \InstagramScraper\Instagram();
    $nonPrivateAccountMedias = $instagram->getMedias($username);
    // echo $nonPrivateAccountMedias[0]->getLink();

    dd($nonPrivateAccountMedias);

    return $username;
});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
