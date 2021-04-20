<?php

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MessagesController;
use App\Models\ClientsModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\App;

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


Route::get('/main/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('main');
})->name('main');

Route::get('/about/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('about');
})->name('about');

// Route::get('/contacts', function () {
//     return view('contacts');
// })->name('contacts');

// Route::get('/auth', function () {
//     return view('auth');
// })->name('auth');

Route::get('/auth', [AccountsController::class, 'index'])->name('auth');
Route::post('/auth', [AccountsController::class, 'store'])->name('auth');


Route::get('/contacts', [MessagesController::class, 'index'])->name('contacts');
Route::post('/contacts', [MessagesController::class, 'store'])->name('contacts');

// Route::get('send/{id}', 'App\Http\Controllers\MailController@sendEmail')->name('send');

Route::get('/client', [ClientController::class, 'index'])->name('client');
Route::post('/client', [ClientController::class, 'store'])->name('client');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


