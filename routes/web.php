<?php

use App\Http\Controllers\EmailsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/private', [HomeController::class, 'private']);

// Mailing Routes
// Route::get('/email', function() {
//     Mail::to('imam.alfarizi.777@gmail.com')->send(new WelcomeMail);
//     return new WelcomeMail();
// });

Route::get('/email', [EmailsController::class, 'email']);