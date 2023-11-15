<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

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
    return view('landing-page.index');
});

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

// Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');

// Route::get('/login', function () {
//     return view('login.index');
// });

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::resource('dashboard/posts', DashboardPostController::class);

// Route::get('/', function () {
//     return view('home');
// });
