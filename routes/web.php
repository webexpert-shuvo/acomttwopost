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

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //User Email Test

    Route::get('/email-send' , [App\Http\Controllers\TestEmailController::class, 'testemail'] )->name('test.email');

    //Admin Panel Show

    Route::get('/admin/register' , [App\Http\Controllers\AdminpanelController::class, 'register'])->name('registerpage.show');
    Route::get('/admin/login' , [App\Http\Controllers\AdminpanelController::class, 'login'])->name('loginpage.show');
    Route::get('/admin/panel' , [App\Http\Controllers\AdminpanelController::class, 'panel'])->name('panel.show');


    //Admin Post Route
    //Add Category Route
    Route::get('/categorys', [App\Http\Controllers\CategoryController::class, 'index'])->name('categorypage.show');
    Route::post('/category-add' ,[App\Http\Controllers\CategoryController::class, 'store'] )->name('category.store');
    Route::get('/category-inactive/{id}' ,[App\Http\Controllers\CategoryController::class, 'inactive'] )->name('category.inactive');
    Route::get('/category-active/{id}' ,[App\Http\Controllers\CategoryController::class, 'active'] )->name('category.active');
    Route::get('/category-delete/{id}' ,[App\Http\Controllers\CategoryController::class, 'delete'] )->name('category.delete');

