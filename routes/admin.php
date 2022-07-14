<?php

use App\Http\Controllers\Admin\ChecklistsController;
use App\Http\Controllers\Admin\ChecklistsGroupsController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
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

Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.',
        'middleware' => 'auth',
        'midlleware' => 'is_admin',
    ],
    function () {
        Route::get('home', [HomeController::class, 'home'])->name('home');
        Route::resource(
            'checklists_groups',
            ChecklistsGroupsController::class
        )->except('show');
        Route::resource('checklists', ChecklistsController::class);
        Route::resource('users', UserController::class);
        Route::resource('profile', ProfileController::class);
    }
);
