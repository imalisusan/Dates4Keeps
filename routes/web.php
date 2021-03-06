<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BirthdayController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
Route::get('/submit', function() {
    return view('birthdays.submit');
})->name('add_birthday');

Route::post('/submit', [BirthdayController::class, 'add']);

Route::get('/index', [BirthdayController::class, 'birthdays'])->name('birthdays.index');