<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleLogin;
use App\Http\Controllers\Filecontroller;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('auth/google', [GoogleLogin::class, 'redirectToGoogle']);
Route::get('auth/google/call-back', [GoogleLogin::class, 'handleCallback']);
Route::post('/Import-File', [Filecontroller::class,'importfile'])->name('importfile');
Route::get('Show-File-Records', [Filecontroller::class, 'showimportedfilerecords']);
Route::get('Export-File', [Filecontroller::class, 'ExportFile']);

