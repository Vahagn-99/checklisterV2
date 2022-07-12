<?php

use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\ChecklistsGroupController;
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

Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.',
        'middleware' => 'auth',
        'midlleware' => 'is_admin',
    ],
    function () {
        Route::resource('checklists_group',ChecklistsGroupController::class);
        Route::resource('checklists_group.checklists',ChecklistController::class);
    }
);
