<?php

use Illuminate\Support\Facades\Auth;
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

    Auth::routes();

    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //User Email Test

    Route::get('/email-send' , [App\Http\Controllers\TestEmailController::class, 'testemail'] )->name('test.email');

    //Admin Panel Show

    Route::get('/admin/register' , [App\Http\Controllers\AdminpanelController::class, 'register'])->name('registerpage.show');
    Route::get('/admin/login' , [App\Http\Controllers\AdminpanelController::class, 'login'])->name('loginpage.show');
    Route::get('/admin/panel' , [App\Http\Controllers\AdminpanelController::class, 'panel'])->name('panel.show');
