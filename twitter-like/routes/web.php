<?php

use Illuminate\Support\Facades\Route;

use App\Models\Tweet;

use App\Http\Controllers\TweetController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    //go get information from a database

    $tweets = Tweet::all();

    //go get information from a 3rd party API

    return view('welcome', ['tweets' => $tweets]);
});

Route::resource('tweets', TweetController::class);